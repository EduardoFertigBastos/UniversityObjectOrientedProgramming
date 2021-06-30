@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h1>Moedas</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Nome </td>
                        <td scope="col"> Menu </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($coins_list))
                        @foreach ($coins_list as $coin)
                        <tr>
                            <th scope="row"> #{{ $coin->id }} </td>
                            <td> {{ $coin->name }} </td>
                            <td>
                                <a href="{{ route('coins.edit', $coin->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#modalDelete" onclick="addRemoveButton('coins.delete', {{ $coin->id }})"
                                                            class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>

                                <a href="{{ route('coins.show', $coin->id) }}" class="btn btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="form-row justify-content-center">
                <a href="{{route('coins.create')}}" class="col-6 btn btn-primary"> Cadastrar </a>
            </div>
            <div class="form-row justify-content-center">
                <a href="{{route('coins.pdf')}}" class="col-6 btn btn-light">
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

