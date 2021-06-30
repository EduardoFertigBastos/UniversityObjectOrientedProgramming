@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h1>Compras</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <div class="col-10 col-sm-12 col-md-8 col-lg-8 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Moeda </td>
                        <td scope="col"> Quantidade </td>
                        <td scope="col"> Preço </td>
                        <td scope="col"> Menu </td>
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
                            <td>
                                <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#modalDelete" onclick="addRemoveButton('purchases.delete', {{ $purchase->id }})"
                                        class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>

                                <a href="{{ route('purchases.show', $purchase->id) }}" class="btn btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <div class="form-row justify-content-center">
                <a href="{{route('purchases.create')}}" class="col-6 btn btn-primary"> Cadastrar </a>
            </div>
            <div class="form-row justify-content-center">
                <a href="{{route('purchases.pdf')}}" class="col-6 btn btn-warning"> PDF </a>
            </div>
        </div>

        @include('templates.modalDelete', [
                    'title'  => 'REMOVER REGISTRO',
                    'text'   => 'Desejas realmente remover o registro #'
                ])

    </main>

</div>

@endsection()

