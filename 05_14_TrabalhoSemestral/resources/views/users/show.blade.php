@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-4 mx-auto">
    <h2>
        Visualizando o Registro #{{ $user->id }}
    </h2>
</header>

<main class="row justify-content-center mt-2">    

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        <div class="form-row justify-content-center">
    
            <div class="form-group col-sm-6 col-md-8 col-lg-6">
        
                <label for="name"> Nome: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{$user->name}}" disabled>
        
            </div>
            
            <div class="form-group col-sm-2 col-md-2 col-lg-2">
        
                <label for="gender"> Gênero: </label>
                <?php 
                    $genders = ['Masculino', 'Feminino', 'Outros']; 
                ?>
                <input type="text" class="form-control" id="gender" name="name" placeholder="Nome" 
                value="{{$genders[$user->gender]}}" disabled>
                
            </div>
            
        </div>

        <div class="form-row justify-content-center">
            
            <div class="form-group col-sm-2 col-md-2 col-lg-2">
        
                <label for="codeArea"> DDD: </label>
                <input type="number" class="form-control" id="codeArea" name="codeArea" placeholder="DDD" value="{{ $user->telephoneCodeArea }}" disabled>
                
            </div>

            <div class="form-group col-sm-6 col-md-8 col-lg-6">
        
                <label for="number"> Telefone: </label>
                <input type="number" class="form-control" id="number" name="number" placeholder="Telefone" value="{{ $user->telephoneNumber }}" disabled>
        
            </div>
            
        </div>

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-5 col-md-7 col-lg-5">
        
                <label for="cpf"> CPF: </label>
                <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Cpf"  value="{{ $user->cpf }}" disabled>
        
            </div>

            <div class="form-group col-sm-3 col-md-3 col-lg-3">
        
                <label for="birth"> Nascimento: </label>
                <input type="date" class="form-control" id="birth" name="birth" placeholder="Nascimento" value="{{ $user->birth }}" disabled>
        
            </div>
            
        </div>

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-5 col-md-7 col-lg-5">
        
                <label for="city"> Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="{{ $user->cityName }}" disabled>
        
            </div>
            
            <div class="form-group col-sm-3 col-md-3 col-lg-3">
        
                <label for="state"> Estado: </label>
                <input type="text" class="form-control" id="state" name="state" 
                    placeholder="Estado" value="{{ $state->name }}" disabled>
            
            </div>
        
        </div>
        
        <div class="form-row justify-content-center">

            <div class="form-group col-sm-8 col-md-3 col-lg-3">
        
                <label for="cep"> Cep: </label>
                <input type="number" class="form-control" id="cep" name="cep" placeholder="Cep" value="{{ $user->addressCep }}" disabled>
        
            </div>

            <div class="form-group col-sm-8 col-md-7 col-lg-5">
        
                <label for="description"> Descrição: </label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descrição" value="{{ $user->addressDescription }}" disabled>
        
            </div>
            
        </div>    
    
        <div class="form-row justify-content-center">
            
            <div class="form-group col-sm-8 col-md-8 col-lg-6">
        
                <label for="neighborhood"> Bairro: </label>
                <input type="text" class="form-control" id="neighborhood" name="neighborhood" placeholder="Bairro" value="{{ $user->addressNeighborhood }}" disabled>
        
            </div>
            
            <div class="form-group col-sm-8 col-md-2 col-lg-2">
        
                <label for="numberHouse"> Número da Casa: </label>
                <input type="text" class="form-control" id="numberHouse" name="numberHouse" placeholder="Número da casa" value="{{ $user->addressNumberHouse }}" disabled>
        
            </div>

        </div>
    
        <div class="form-row justify-content-center">

            <div class="form-group col-sm-8 col-md-10 col-lg-8">
        
                <label for="complement"> Complemento: </label>
                <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento" value="{{ $user->addressComplement }}" disabled>
        
            </div>

        </div>

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-8 col-md-10 col-lg-8">
        
                <label for="email"> E-mail: </label>
                <input type="mail" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $user->email }}" disabled>

            </div>
            
        </div>

        <div class="form-row justify-content-center">
            
            <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1"> 
                Voltar 
            </a>
            
        </div>
        
    </section>

</main>

<section class="row justify-content-center">

    @include('users.list', ['users_list' => $users_list])

</section>

@endsection()

