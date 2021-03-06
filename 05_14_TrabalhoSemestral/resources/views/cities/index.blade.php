@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h1>Cidades</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <div class="col-10 col-sm-12 col-md-8 col-lg-8 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Nome </td>
                        <td scope="col"> Estado </td>
                        <td scope="col"> Menu </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($cities_list))
                        @foreach ($cities_list as $city)
                        <tr>
                            <th scope="row"> #{{ $city->id }} </td>
                            <td> {{ $city->name }} </td>
                            <td> {{ $city->state ? $city->state->name : 'Não existe' }} </td>
                            <td>
                                <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#modalDelete" onclick="addRemoveButton('cities.delete', {{ $city->id }})"
                                        class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>

                                <a href="{{ route('cities.show', $city->id) }}" class="btn btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <div class="form-row justify-content-center">
                <a href="{{route('cities.create')}}" class="col-6 btn btn-primary"> Cadastrar </a>
            </div>
            <div class="form-row justify-content-center">
                <a href="{{route('cities.pdf')}}" class="col-6 btn btn-light">
                    <i class="fas fa-file-pdf text-danger"></i> Gerar PDF
                </a>
            </div>
        </div>

        @include('templates.modalDelete', [
                    'title'  => 'REMOVER REGISTRO',
                    'text'   => 'Desejas realmente remover o registro #'
                ])

    </main>

</div>

@endsection()

