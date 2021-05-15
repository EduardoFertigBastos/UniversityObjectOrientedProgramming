@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-4 mx-auto">
    <h2>
        Visualizando o Registro #{{ $state->id }}
    </h2>
</header>

<main class="row justify-content-center mt-2">

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-8 col-md-10 col-lg-8">

                <label for="id"> Código: </label>
                <input type="text" class="form-control" id="id" name="id"
                    placeholder="Código" value="{{ $state->id }}" disabled>

            </div>

        </div>

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-8 col-md-10 col-lg-8">

                <label for="name"> Nome: </label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Nome" value="{{ $state->name }}" disabled>

            </div>

        </div>

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-8 col-md-10 col-lg-8">

                <label for="initials"> Sigla: </label>
                <input type="text" class="form-control" id="initials" name="initials" maxlength="2"
                    placeholder="Sigla" value="{{ $state->initials }}" disabled>

            </div>

        </div>

        <div class="form-row justify-content-center">

            <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1">
                Voltar
            </a>

        </div>

    </section>

</main>

@endsection()

