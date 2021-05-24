@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h2>
            Visualizando o Registro #{{$address->id}}
        </h2>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <section class="col-10 col-sm-12 col-md-8 col-lg-8">

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="id"> Código: </label>
                    <input type="text" class="form-control" id="id" name="id"
                        placeholder="Id" value="{{ $address->id }}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-3 col-lg-3">

                    <label for="cep"> Cep: </label>
                    <input type="text" class="form-control" id="cep" name="cep"
                        placeholder="Cep" value="{{ $address->cep }}" disabled>

                </div>

                <div class="form-group col-sm-8 col-md-7 col-lg-5">

                    <label for="description"> Descrição: </label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Descrição" value="{{ $address->cep }}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-2 col-lg-2">

                    <label for="numberHouse"> Número da Casa: </label>
                    <input type="text" class="form-control" id="numberHouse" name="numberHouse"
                        placeholder="Número da casa" value="{{ $address->numberHouse }}" disabled>

                </div>

                <div class="form-group col-sm-8 col-md-8 col-lg-6">

                    <label for="neighborhood"> Bairro: </label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood"
                        placeholder="Bairro" value="{{ $address->neighborhood }}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="complement"> Complemento: </label>
                    <input type="text" class="form-control" id="complement" name="complement"
                        placeholder="Complemento" value="{{ $address->complement }}" disabled>

                </div>

            </div>


            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="city"> Cidade: </label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Cidade"
                        value="{{ $address->city ? $address->city->name : 'Não há Registro' }}" disabled>

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

