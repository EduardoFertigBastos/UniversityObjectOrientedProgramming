@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-4 mx-auto">
    <h2>
        Atualizando #{{ $coin->id }}
    </h2>
</header>

<main class="row justify-content-center mt-2">

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        <form action="{{route('coins.update', $coin->id)}}" method="POST">

            {{ csrf_field() }}

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="name"> Nome: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                     value="{{ $coin->name }}">

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
                        'text'   => 'Desejas realmente alterar o registro #' . $coin->id .'?'
                    ])

        </form>

        <div class="form-row justify-content-center">

            <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1">
                Voltar
            </a>

        </div>

    </section>

</main>

@endsection()

