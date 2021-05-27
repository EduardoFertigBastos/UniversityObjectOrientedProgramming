<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Address;
use App\Models\City;
use App\Models\State;
use App\Models\User;

use Exception;
/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsersController extends Controller
{
    /**
     * UsersController constructor.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        try {
            $users_list = User::orderBy('id')->get();

            return view('users.index', compact('users_list'));
        } catch (Exception $e) {
            return $e;
        }

    }

    public function create()
    {
        $states_list = State::orderBy('id')->get();

        return view('users.create', compact('states_list'));
    }

    public function store(Request $request)
    {
        try
        {
            $passwordsValidated = $this->validatePasswords($request->password, $request->confirmPassword);


            if ($passwordsValidated['success']) {

                $password = Hash::make($request->password);

                $city = City::where([
                    'name'     => ucwords($request->city),
                    'state_id' => $request->state_id
                ])->first();

                if ($city == null) {

                    $dataCity = [
                        'name'     => ucwords($request->city),
                        'state_id' => $request->state_id
                    ];
                    if (($dataCity['name'] <> '') and ($dataCity['state_id'] <> null)){
                        $city = app(CitiesController::class)->store(New Request($dataCity), 1);
                    }

                }

                $dataAddress = [
                    'city_id'      => $city->id,
                    'cep'          => $request->cep,
                    'description'  => $request->description,
                    'neighborhood' => $request->neighborhood,
                    'numberHouse'  => $request->numberHouse,
                    'complement'   => $request->complement
                ];

                $addressCreated = app(AddressesController::class)->store(new Request($dataAddress), 1);

                $dataUser = [
                    'address_id'      => $addressCreated->id,
                    'name'            => $request->name,
                    'gender'          => $request->gender,
                    'cpf'             => $request->cpf,
                    'birth'           => $request->birth,
                    'email'           => $request->email,
                    'password'        => $password
                ];

                $userCreated = User::create($dataUser);

                return redirect()->route('users.index', [
                    'success'   => true,
                    'messages'  => 'Usuário cadastrado.',
                    'data'      => $userCreated
                ]);

            } else {
                throw new Exception($passwordsValidated['messages']);
            }

        }
        catch (Exception $erro)
        {
            return [
                'success'   => false,
                'messages'  => $erro->getMessage(),
            ];
        }
    }

    public function show(int $id)
    {
        try {
            $user = User::find($id);
            $states_list = State::orderBy('name')->get();

            return view('users.show', compact('user', 'states_list'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $user = User::find($id);
            $states_list = State::orderBy('name')->get();

            return view('users.edit', compact('user', 'states_list'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try
        {
            $user = User::find($id);

            if (Hash::check($request->oldPassword, $user->password)) {

                $validatorPassword = $this->validatePasswords($request->password, $request->confirmPassword);
                if ($validatorPassword['success']) {

                    $request->password = Hash::make($request->password);

                    $dataUser = [
                        'name'            => $request->name,
                        'gender'          => $request->gender,
                        'cpf'             => $request->cpf,
                        'birth'           => $request->birth,
                        'email'           => $request->email,
                        'password'        => $request->password
                    ];

                    $userUpdated = User::where('id', $id)->update($dataUser);

                    $city = City::where([
                        'name'     => ucwords($request->city),
                        'state_id' => $request->state_id
                    ])->first();

                    if ($city == null) {

                        $dataCity = [
                            'name'     => ucwords($request->city),
                            'state_id' => $request->state_id
                        ];

                        if (($dataCity['name'] <> '') and ($dataCity['state_id'] <> null)){
                            $city = app(CitiesController::class)->store($dataCity, 1);
                        }

                    }

                    $dataAddress = [
                        'city_id'      => $city->id,
                        'cep'          => $request->cep,
                        'description'  => $request->description,
                        'neighborhood' => $request->neighborhood,
                        'numberHouse'  => $request->numberHouse,
                        'complement'   => $request->complement
                    ];

                    app(AddressesController::class)->update(new Request($dataAddress), $user->address_id, 1);

                    return redirect()->route('users.index', [
                        'success'   => true,
                        'messages'  => 'Usuário atualizado.',
                        'data'      => $userUpdated
                    ]);

                } else {
                    return redirect()->route('users.index', [
                        'success'   => false,
                        'messages'  => $validatorPassword['messages']
                    ]);
                }
            } else {

                return redirect()->route('users.index', [
                    'success'   => false,
                    'messages'  => 'Antiga senha e nova senha não coincidem.'
                ]);
            }

        }
        catch (Exception $erro)
        {

            return redirect()->route('users.index', [
                'success'   => true,
                'messages'  => 'Erro de Execução: ' . $erro->getMessage(),
                'data'      => null
            ]);
        }
    }

    public function delete(int $id)
    {
        try
        {
            $user = User::find($id);

            Address::where('id', $user->address_id)->delete();
            User::where('id', $user->id)->delete();

            return redirect()->route('users.index');
        }
        catch (Exception $erro)
        {
            return redirect()->route('users.index', [
                'success'   => false,
                'messages'  => 'Erro de Execução: ' . $erro->getMessage(),
            ]);
        }
    }

    /**
     * Check if all validations are correct.
     */
    public function validateData($aData) {

        try
        {

            $error = $this->validateCPF($aData['cpf']);

            if (!$error['success']) {
                throw new Exception($error['messages']);
            }

            $error = $this->validateEmail($aData['email']);

            if (!$error['success']) {
                throw new Exception($error['messages']);
            }

            $error = $this->validateGender($aData['gender']);

            if (!$error['success']) {
                throw new Exception($error['messages']);
            }

            $error = $this->validateBirth($aData['gender']);

            if (!$error['success']) {
                throw new Exception($error['messages']);
            }

            return [
                'success' => true,
                'message' => 'Dados validados com sucesso.'
            ];

        }
        catch (Exception $erro)
        {
            return [
                'success'   => false,
                'messages'  => $erro->getMessage(),
            ];
        }
    }

    /**
     * Match the 2 passwords and verify if they are not null and pattern E@a123
     */
    public function validatePasswords($pass1, $pass2)
    {

        try
        {
            if ($pass1 <> null) {

                if ($pass1 == $pass2) {

                    if (strlen($pass1) < 6) {
                        throw new Exception('Senha muito curta! A senha deve conter ao menos 6 caracteres ' .
                        'contendo uma letra maiúscula, uma letra minúscula, um número e um caracter especial.');
                    }

                    if (!preg_match("#[0-9]+#", $pass1)) {
                        throw new Exception('A senha deve conter pelo menos um número! A senha deve conter ' .
                        'ao menos 6 caracteres contendo uma letra maiúscula, uma letra minúscula, um número ' .
                        'e um caracter especial.');
                    }

                    if (!preg_match("#[a-z]+#", $pass1)) {
                        throw new Exception('A senha deve conter pelo menos uma letra minúscula! A senha deve conter '.
                        'ao menos 6 caracteres contendo uma letra maiúscula, uma letra minúscula, um número '.
                        'e um caracter especial.');
                    }

                    if (!preg_match("#[A-Z]+#", $pass1)) {
                        throw new Exception('A senha deve conter pelo menos uma letra maiúscula! A senha deve conter '.
                        'ao menos 6 caracteres contendo uma letra maiúscula, uma letra minúscula, um número ' .
                        'e um caracter especial.');
                    }

                    if (!preg_match("#\W+#", $pass1)) {
                        throw new Exception('A senha deve conter pelo menos um caracter especial! A senha deve conter '.
                        'ao menos 6 caracteres contendo uma letra maiúscula, uma letra minúscula, um número '.
                        'e um caracter especial.');
                    }

                    return [
                        'success' => true,
                        'messages' => 'Senha cadastrada com sucesso'
                    ];

                } else {
                    throw new Exception('As senhas não são iguais.');
                }

            } else {
                throw new Exception('A senha é nula.');
            }
        }
        catch (Exception $erro)
        {
            return [
                'success'   => false,
                'messages'  => 'Sua senha não foi registrada. ' . $erro->getMessage(),
            ];
        }
    }

    /**
     * Validate E-mail
     */
    public function validateEmail($email)
    {
        try
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                return [
                    'success'  => true,
                    'messages'  => 'E-mail válido.',
                ];

            } else{
                throw new Exception('E-mail inválido ou inexistente');
            }

        }
        catch (Exception $erro)
        {
            return [
                'success'   => false,
                'messages'  => $erro->getMessage(),
            ];
        }
    }

    /**
     * Validate if gender is disponible on database
     */
    public function validateGender($gender)
    {
        try
        {
            if (($gender >= 0) and ($gender <= 2)) {

                return [
                    'success'  => true,
                    'messages'  => 'Gênero válido.',
                ];

            } else{
                throw new Exception('Gênero não cadastrado');
            }

        }
        catch (Exception $erro)
        {
            return [
                'success'   => false,
                'messages'  => $erro->getMessage(),
            ];
        }

    }

    /**
     * Validate if the user has more than 18 years.
     */
    public function validateBirth($birth)
    {
        try
        {
            $actualDateMinus18Years = date('Y') - 18 . '-'. date('m-d');

            if ($actualDateMinus18Years >= $birth) {

                return [
                    'success'  => true,
                    'messages'  => 'Data de nascimento válida.',
                ];

            } else{
                throw new Exception('A idade miníma para a realização do cadastro é de 18 anos.');
            }

        }
        catch (Exception $erro)
        {
            return [
                'success'   => false,
                'messages'  => $erro->getMessage(),
            ];
        }
    }

    /**
     * Validate if CPF is valid or if its fraud
     */
    public function validateCPF($cpf) {

        try
        {
            $isTrue = true;
            // Extract only numbers
            $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

            // Verify if all digits were informed correctly
            if (strlen($cpf) != 11) {
                $isTrue = false;
            }else {
                // Verify if all digits are the same Ex: 111.111.111-11
                if (preg_match('/(\d)\1{10}/', $cpf)) {
                    $isTrue = false;
                }

                // CPF Validator
                for ($t = 9; $t < 11; $t++) {
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf[$c] * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf[$c] != $d) {
                        $isTrue = false;
                    }
                }
            }

            if ($isTrue == true) {
                return [
                    'success'   => true,
                    'messages'  => 'CPF válido!',
                ];
            } else {
                throw new Exception("CPF inválido, meu camarada");
            }

        }
        catch (Exception $erro)
        {
            return [
                'success'   => false,
                'messages'  => $erro->getMessage(),
            ];
        }

        return true;
    }

}
