@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h2>Criar Cidades</h2>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <section class="col-10 col-sm-12 col-md-8 col-lg-8">

            <form action="{{route('cities.store')}}" method="POST">

                {{ csrf_field() }}

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-8 col-md-10 col-lg-8">

                        <label for="name"> Nome: </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome">

                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-8 col-md-10 col-lg-8">

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

                    <input type="submit" value="Adicionar" class="btn btn-primary col-sm-8 col-md-10 col-lg-8 py-2">

                </div>

                <div class="form-row justify-content-center">

                    <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1">
                        Voltar
                    </a>

                </div>

            </form>

        </section>

    </main>

</div>

@endsection()

