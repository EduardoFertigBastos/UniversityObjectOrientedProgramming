<?php

namespace App\Http\Controllers;

use App\Entities\Address;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Services\UserService;
use App\Services\CityService;
use App\Validators\UserValidator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Mail;
use App\Mail\ThanksForRegisterMail;

use Exception;
use Illuminate\Support\Facades\App;

/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;
       
    /**
     * @var UserService
     */
    protected $service;
    
    /**
     * @var CityService
     */
    protected $CityService;
    
    
    /**
     * UsersController constructor.
     *
     * @param UserRepository $repository
     * @param UserValidator $validator
     */
    public function __construct(UserRepository $repository, UserService $service, CityService $CityService)
    {
        $this->repository  = $repository;
        $this->service     = $service;
        $this->CityService = $CityService;
    }

    /**
     * Call Login's view
     */
    public function callLogin()
    {
        return view('login.login');
    }

    /**
     * Execute Logout
     */
    public function callLogout()
    {
        Auth::logout();
        Session::forget('user');

        return redirect()->route('auth.callLogin');
    }

    /**
     * Execute Login
     */
    public function auth(Request $oRequest, $register = false)
    {
        try {
            
            $oUser = $this->repository->findWhere(['email' => $oRequest->email])->first();
            
            $rememberme = false;
            /*
            
            // Remember me
            if ($oRequest->get('rememberme')) {
                $rememberme = true;
            } else {
                $rememberme = false;
            }
            */

            // E-mail validation
            if (!$oUser) {
                throw new Exception("E-mail inválido, meu camarada");
            }

            // Password validation.
            if ($register){
                if (!$this->repository->findWhere(['password' => $oRequest->password])->first()) {
                    throw new Exception("Houve erro no seu cadstro! Solicite o suporte.");
                }
            } else {
                if (!Hash::check($oRequest->password, $oUser->password)) {
                    throw new Exception("Senha inválida");
                }
            }
            
            // Autenticação
            Auth::login($oUser, $rememberme);
            Session::put('user', $oUser->id); 

            return redirect()->route('indexWithUser', [
                $oUser->id
            ]);
            
        } catch (Exception $error) {            

            return redirect()->back()->with('error', $error->getMessage());
        }
        
    }

    /**
     * Call Register View
     */
    public function callRegister()
    {

        $states_list = $this->CityService->getRepository()->statesPatternSelect();

        return view('login.register', [
            'states_list' => $states_list 
        ]);
    }

    public function register(Request $request)
    {
        try {
            
            $register = $this->service->store($request->all());

            Mail::to($request->email)->send(new ThanksForRegisterMail(['name' => $request->name]));

            if ($register['success']) {

                $request = new Request([
                    'email'    => $register['data']->email,
                    'password' => $register['data']->password
                ]);
    
                return $this->auth($request, true);                
            } else {
                throw new Exception($register['messages']);
            }

            
        } 
        catch (Exception $error)
        {
            
            return redirect()->back()->with('error', $error->getMessage());
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users       = $this->repository->listPatternTable();
        $states_list = $this->CityService->getRepository()->statesPatternSelect();
        
        return view('users.index', [
            'users_list'  => $users,
            'states_list' => $states_list
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(UserCreateRequest $request)
    {
        try {            
            $user = $this->service->store($request->all());
            
            $response = [
                'message' => 'Usuário registrado.',
                'data'    => $user,
            ];

            return redirect()->route('users.index')->with($response);
        } catch (ValidatorException $e) {

            return redirect()->route('users.index')->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user       = $this->repository->findData($id);
        $users_list = $this->repository->listPatternTable();
        $state      = DB::select('SELECT states.id,
                                         states.name 
                                    FROM states
                                   WHERE states.id = ?', [$user->cityState]);
        
        return view('users.show', [
            'user'       => $user,
            'users_list' => $users_list,
            'state'      => $state[0]
        ]);
    }

    /**
     * Show the data from User Authenticated
     */
    public function showAuthUser($id)
    {
        $user        = $this->repository->findData($id);
        $states_list = $this->CityService->getRepository()->statesPatternSelect();
        
        return view('users.authInfo', [
            'user'        => $user,
            'states_list' => $states_list
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user       = $this->repository->findData($id);
        $users_list = $this->repository->listPatternTable();
        $states_list = $this->CityService->getRepository()->statesPatternSelect();
         
        return view('users.edit', [
            'user'        => $user,
            'users_list'  => $users_list,
            'states_list' => $states_list
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            $request = $this->service->update($request->all(), $id);

            $response = [
                'message' => 'Usuário atualizado.',
                'data'    => $request,
            ];

            return redirect()->route('users.index')->with($response);
        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try 
        {

            $this->service->delete($id);
            
            $response = [
                'message' => 'Usuário deletado.',
                'id'      => $id,
            ];

            return redirect()->route('users.index')->with('messages', $response['message']);
        }
        catch(Exception $e)
        {

            return redirect()->route('users.index')->with('messages', $e->getMessage());
        }

    }
}
