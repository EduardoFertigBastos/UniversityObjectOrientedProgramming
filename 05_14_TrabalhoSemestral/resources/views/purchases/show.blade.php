@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-4 mx-auto">
    <h2>
        Visualizando o Registro #{{$purchase->id}}
    </h2>
</header>

<main class="row justify-content-center mt-2">

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-8 col-md-10 col-lg-8">

                <label for="coin"> Moeda: </label>
                <input type="text" class="form-control" id="coin"
                    value="{{$purchase->coin->name}}" name="coin" disabled>

            </div>

        </div>

        <div class="form-row justify-content-center">

            <div class="form-group col-sm-4 col-md-5 col-lg-4">

                <label for="amount"> Quantidade: </label>
                <input type="number" class="form-control" id="amount"
                    value="{{$purchase->amount}}" name="amount" disabled>

            </div>

            <div class="form-group col-sm-4 col-md-5 col-lg-4">

                <label for="price"> Preço: </label>
                <input type="number" class="form-control" id="price"
                        value="{{$purchase->price}}" name="price" disabled>

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

