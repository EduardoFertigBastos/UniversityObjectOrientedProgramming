@extends('templates.master')

@section('content')

    <header class="card-header text-center">
        <h1>Compras</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Moeda </td>
                        <td scope="col"> Quantidade </td>
                        <td scope="col"> Preço </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($purchases_list))
                        @foreach ($purchases_list as $purchase)
                        <tr>
                            <th scope="row"> #{{ $purchase->id }} </td>
                            <td> {{ $purchase->coin->name }} </td>
                            <td> {{ $purchase->amount }} </td>
                            <td> {{ $purchase->price }} </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </main>

@endsection
