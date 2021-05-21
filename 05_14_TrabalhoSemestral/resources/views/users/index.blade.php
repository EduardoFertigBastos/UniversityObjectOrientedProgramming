@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-3">

    <h1> Usuários </h1>

</header>

<main class="row justify-content-center mt-3">

    <div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-4">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <td scope="col"> Código </td>
                    <td scope="col"> Nome </td>
                    <td scope="col"> Aniversário </td>
                    <td scope="col"> CEP </td>
                    <td scope="col"> Gênero </td>
                    <td scope="col"> CPF </td>
                    <td scope="col"> Email </td>
                    <td scope="col"> Opções </td>
                </tr>
            </thead>
            <tbody>
                @if (isset($users_list))
                    @foreach ($users_list as $user)
                    <tr>
                        <th scope="row"> #{{ $user->id }} </td>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->birth }} </td>
                        <td> {{ $user->address->cep }} </td>
                        <td>
                            <?php
                            $genders = ['Masculino', 'Feminino', 'Outros'];
                            echo $genders[$user->gender];
                            ?>
                        </td>
                        <td> {{ $user->cpf }} </td>
                        <td> {{ $user->email }} </td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="#modalDelete" onclick="addRemoveButton('users.delete', {{ $user->id }})"
                                                    class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                <i class="fas fa-trash-alt"></i>
                            </a>

                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div class="form-row justify-content-center">
            <a href="{{route('users.create')}}" class="col-6 btn btn-primary"> Cadastrar </a>
        </div>
    </div>

    @include('templates.modalDelete', [
                'title'  => 'REMOVER REGISTRO',
                'text'   => 'Desejas realmente remover o registro #'
            ])

</main>


@endsection()

