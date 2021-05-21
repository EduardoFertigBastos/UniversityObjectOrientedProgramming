@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-3">

    <h1> Criar Usuários </h1>

</header>

<main class="row justify-content-center mt-3">

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        <form action="{{route('users.store')}}" method="POST">

            {{ csrf_field() }}

            @include('templates.showError')

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-6 col-md-8 col-lg-6">

                    <label for="name"> Nome: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">

                </div>

                <div class="form-group col-sm-2 col-md-2 col-lg-2">

                    <label for="gender"> Gênero: </label>
                    <select name="gender" id="gender" class="form-control" aria-label="Select de Gênero">
                        <option selected>Qual o seu Gênero?</option>
                        <?php
                        $genders = ['Masculino', 'Feminino', 'Outros'];
                        for ($x = 0; $x < 3; $x++) {
                            echo '<option value="'.$x.'">'.$genders[$x].'</option>';
                        }
                        ?>
                    </select>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-5 col-md-7 col-lg-5">

                    <label for="cpf"> CPF: </label>
                    <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Cpf">

                </div>

                <div class="form-group col-sm-3 col-md-3 col-lg-3">

                    <label for="birth"> Nascimento: </label>
                    <input type="date" class="form-control" id="birth" name="birth" placeholder="Nascimento">

                </div>

            </div>
            <div class="form-row justify-content-center">

                <div class="form-group col-sm-5 col-md-7 col-lg-5">

                    <label for="city"> Cidade: </label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Cidade">

                </div>

                <div class="form-group col-sm-3 col-md-3 col-lg-3">

                    <label for="state"> Estado: </label>

                    <select name="state_id" id="state" class="form-control">
                        <option selected disabled> Escolha um estado... </option>
                        @foreach ($states_list as $state)

                            <option value="{{ $state->id }}"> {{ $state->name }} </option>

                        @endforeach
                    </select>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-3 col-lg-3">

                    <label for="cep"> Cep: </label>
                    <input type="number" class="form-control" id="cep" name="cep" placeholder="Cep">

                </div>

                <div class="form-group col-sm-8 col-md-7 col-lg-5">

                    <label for="description"> Descrição: </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Descrição">

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-8 col-lg-6">

                    <label for="neighborhood"> Bairro: </label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" placeholder="Bairro">

                </div>

                <div class="form-group col-sm-8 col-md-2 col-lg-2">

                    <label for="numberHouse"> Número da Casa: </label>
                    <input type="text" class="form-control" id="numberHouse" name="numberHouse" placeholder="Número da casa">

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="complement"> Complemento: </label>
                    <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento">

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="email"> E-mail: </label>
                    <input type="mail" class="form-control" id="email" name="email" placeholder="E-mail">

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

            <div class="form-row justify-content-center">

                <input type="submit" value="Adicionar" class="btn btn-primary col-sm-8 col-md-10 col-lg-8 py-2">

            </div>

        </form>

    </section>

</main>

@endsection()

