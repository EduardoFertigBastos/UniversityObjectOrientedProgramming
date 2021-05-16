@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-4 mx-auto">
    <h2>
        Atualizando #{{$address->id}}
    </h2>
</header>

<main class="row justify-content-center mt-2">

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        <form action="{{route('addresses.update', $address->id)}}" method="POST">

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-3 col-lg-3">

                    <label for="cep"> Cep: </label>
                    <input type="text" class="form-control" id="cep" name="cep"
                        placeholder="Cep" value="{{ $address->cep }}">

                </div>

                <div class="form-group col-sm-8 col-md-7 col-lg-5">

                    <label for="description"> Descrição: </label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Descrição" value="{{ $address->cep }}">

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-2 col-lg-2">

                    <label for="numberHouse"> Número da Casa: </label>
                    <input type="text" class="form-control" id="numberHouse" name="numberHouse"
                        placeholder="Número da casa" value="{{ $address->numberHouse }}">

                </div>

                <div class="form-group col-sm-8 col-md-8 col-lg-6">

                    <label for="neighborhood"> Bairro: </label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood"
                        placeholder="Bairro" value="{{ $address->neighborhood }}">

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="complement"> Complemento: </label>
                    <input type="text" class="form-control" id="complement" name="complement"
                        placeholder="Complemento" value="{{ $address->complement }}">

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="city_id"> Cidade: </label>
                    <select name="city_id" id="city" class="form-control">
                        <option selected disabled> Escolha uma cidade... </option>
                        @foreach ($cities_list as $city)

                            <option value="{{ $city->id }}"
                                {{ $address->city_id == $city->id ? 'selected' : '' }} >
                                {{ $city->name }}
                            </option>

                        @endforeach
                    </select>

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
                        'text'   => 'Desejas realmente alterar o registro #' . $address->id . '?'
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

