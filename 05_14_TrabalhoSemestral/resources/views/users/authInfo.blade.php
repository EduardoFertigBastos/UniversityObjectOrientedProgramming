@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-4 mx-auto">
    <h2>
        Seus Dados
    </h2>
</header>

<main class="row justify-content-center mt-2">    

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        {!! Form::model($user, ['route' => ['users.update', $user->id], 
            'method' => 'post', 'class' => '']) !!}
            
            <div class="form-row justify-content-center">
    
                <div class="form-group col-sm-6 col-md-8 col-lg-6">
            
                    <label for="name"> Nome: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{$user->name}}">
            
                </div>
                
                <div class="form-group col-sm-2 col-md-2 col-lg-2">
            
                    <label for="gender"> Gênero: </label>
                    <select name="gender" id="gender" class="form-control" aria-label="Select de Gênero">
                        <option selected>Qual o seu Gênero?</option>
                        <?php 
                        $genders = ['Masculino', 'Feminino', 'Outros'];
                        for ($x = 0; $x < 3; $x++) {                     
                            ?>'<option value="{{$x}}"
                                    {{$user->gender == $x ? 'selected' : '' }}>
                                    {{$genders[$x] }}
                                </option>';            
                            <?php                          
                        }
                        ?>
                    </select>
                    
                </div>
                
            </div>

            <div class="form-row justify-content-center">
                
                <div class="form-group col-sm-2 col-md-2 col-lg-2">
            
                    <label for="codeArea"> DDD: </label>
                    <input type="number" class="form-control" id="codeArea" name="codeArea" placeholder="DDD" value="{{ $user->telephoneCodeArea }}">
                    
                </div>

                <div class="form-group col-sm-6 col-md-8 col-lg-6">
            
                    <label for="number"> Telefone: </label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="Telefone" value="{{ $user->telephoneNumber }}">
            
                </div>
                
            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-5 col-md-7 col-lg-5">
            
                    <label for="cpf"> CPF: </label>
                    <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Cpf"  value="{{ $user->cpf }}">
            
                </div>

                <div class="form-group col-sm-3 col-md-3 col-lg-3">
            
                    <label for="birth"> Nascimento: </label>
                    <input type="date" class="form-control" id="birth" name="birth" placeholder="Nascimento" value="{{ $user->birth }}">
            
                </div>
                
            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-5 col-md-7 col-lg-5">
            
                    <label for="city"> Cidade: </label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="{{ $user->cityName }}">
            
                </div>
                
                <div class="form-group col-sm-3 col-md-3 col-lg-3">
            
                    <label for="state"> Estado: </label>

                    <select name="state_id" id="state" class="form-control">                        
                        <option selected disabled> Escolha um estado... </option>
                        @foreach ($states_list as $state)

                            <option value="{{ $state->id }}"> {{ $state->name }} </option>

                            <option value="{{ $state->id }}"
                                {{ $user->cityState == $state->id ? 'selected' : '' }} >
                                {{ $state->name }} 
                            </option>
                        @endforeach
                    </select>
                        
                </div>
            
            </div>
            
            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-3 col-lg-3">
            
                    <label for="cep"> Cep: </label>
                    <input type="number" class="form-control" id="cep" name="cep" placeholder="Cep" value="{{ $user->addressCep }}">
            
                </div>

                <div class="form-group col-sm-8 col-md-7 col-lg-5">
            
                    <label for="description"> Descrição: </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Descrição" value="{{ $user->addressDescription }}">
            
                </div>
                
            </div>    
        
            <div class="form-row justify-content-center">
                
                <div class="form-group col-sm-8 col-md-8 col-lg-6">
            
                    <label for="neighborhood"> Bairro: </label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" placeholder="Bairro" value="{{ $user->addressNeighborhood }}">
            
                </div>
                
                <div class="form-group col-sm-8 col-md-2 col-lg-2">
            
                    <label for="numberHouse"> Número da Casa: </label>
                    <input type="text" class="form-control" id="numberHouse" name="numberHouse" placeholder="Número da casa" value="{{ $user->addressNumberHouse }}">
            
                </div>

            </div>
        
            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">
            
                    <label for="complement"> Complemento: </label>
                    <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento" value="{{ $user->addressComplement }}">
            
                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">
            
                    <label for="email"> E-mail: </label>
                    <input type="mail" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $user->email }}">

                </div>
                
            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">
            
                    <label for="password"> Senha: </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha...">

                </div>
                
            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">
            
                    <label for="confirmPassword"> Digite a senha novamente: </label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Digite novamente a sua senha...">

                </div>
                
            </div>
            
            <hr>
            
            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">
            
                    <label for="oldPassword"> Antiga Senha: </label>
                    <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Antiga Senha...">

                </div>
                
            </div>
            
            <div class="form-row justify-content-center">
            
                <a href="#modalUpdate" class="btn btn-primary col-sm-8 col-md-10 col-lg-8 py-2 mt-1" 
                                                    data-toggle="modal" data-target="#modalUpdate"> 
                    Atualizar 
                </a>

            </div>

            @include('templates.modalUpdate', [
                        'title'  => 'ALTERAR REGISTRO',
                        'text'   => 'Desejas realmente alterar o registro #' . $user->id . '?'
                    ])
        
        {!! Form::close() !!}

        <div class="form-row justify-content-center">
            
            <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1"> 
                Voltar 
            </a>
            
        </div>

    </section>

</main>

@endsection()

