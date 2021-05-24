@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h2>
            Visualizando o Registro #{{ $coin->id }}
        </h2>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <section class="col-10 col-sm-12 col-md-8 col-lg-8">

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="id"> Código: </label>
                    <input type="text" class="form-control" id="id" name="id"
                        placeholder="Código" value="{{ $coin->id }}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="name"> Nome: </label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Nome" value="{{ $coin->name }}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1">
                    Voltar
                </a>

            </div>

        </section>

    </main>

</div>

@endsection()

