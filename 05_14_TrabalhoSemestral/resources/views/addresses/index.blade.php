@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-3">

    <h1> Endereços </h1>

</header>

<main class="row justify-content-center mt-3">

    <div class="col-10 col-sm-12 col-md-10 col-lg-10 mt-4">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <td scope="col"> Código </td>
                    <td scope="col"> CEP </td>
                    <td scope="col"> Descrição </td>
                    <td scope="col"> Número </td>
                    <td scope="col"> Bairro </td>
                    <td scope="col"> Complemento </td>
                    <td scope="col"> Cidade </td>
                    <td scope="col"> Menu </td>
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
                        <td>
                            <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="#modalDelete" onclick="addRemoveButton('addresses.delete', {{ $address->id }})"
                                                        class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                <i class="fas fa-trash-alt"></i>
                            </a>

                            <a href="{{ route('addresses.show', $address->id) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div class="form-row justify-content-center">
            <a href="{{route('addresses.create')}}" class="col-6 btn btn-primary"> Cadastrar </a>
        </div>
    </div>

    @include('templates.modalDelete', [
                'title'  => 'REMOVER REGISTRO',
                'text'   => 'Desejas realmente remover o registro #'
            ])


</main>

@endsection()

