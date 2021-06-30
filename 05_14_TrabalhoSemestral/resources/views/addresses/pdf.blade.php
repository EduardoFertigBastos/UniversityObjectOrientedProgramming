@extends('templates.master')

@section('content')

    <header class="card-header text-center">
        <h1>Endereços</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> CEP </td>
                        <td scope="col"> Descrição </td>
                        <td scope="col"> Número </td>
                        <td scope="col"> Bairro </td>
                        <td scope="col"> Complemento </td>
                        <td scope="col"> Cidade </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($addresses_list))
                        @foreach ($addresses_list as $address)
                        <tr>
                            <th scope="row"> #{{ $address->id }} </td>
                            <td> {{ $address->cep }} </td>
                            <td> {{ $address->description }} </td>
                            <td> {{ $address->numberHouse }} </td>
                            <td> {{ $address->neighborhood }} </td>
                            <td> {{ $address->complement }} </td>
                            <td> {{ $address->city->name }} </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </main>

@endsection
