@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-3">

    <h1> Compras </h1>

</header>

<main class="row justify-content-center mt-3">

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        <form action="{{route('purchases.store')}}" method="POST">

            {{ csrf_field() }}

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="coin"> Coin: </label>

                    <select name="coin_id" id="coin" class="form-control">
                        <option selected disabled> Escolha uma moeda... </option>

                        @if(isset($coins_list))
                            @foreach ($coins_list as $coin)

                                <option value="{{ $coin->id }}"> {{ $coin->name }} </option>

                            @endforeach
                        @endif

                    </select>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-4 col-md-5 col-lg-4">

                    <label for="amount"> Quantidade: </label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Quantidade...">

                </div>

                <div class="form-group col-sm-4 col-md-5 col-lg-4">

                    <label for="price"> Preço: </label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Preço...">

                </div>

            </div>


            <div class="form-row justify-content-center">

                <input type="submit" value="Adicionar" class="btn btn-primary col-sm-8 col-md-10 col-lg-8 py-2">

            </div>

        </form>

    </section>

</main>

@endsection()

