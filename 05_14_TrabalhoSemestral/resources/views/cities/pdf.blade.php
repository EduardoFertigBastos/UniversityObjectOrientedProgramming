@extends('templates.master')

@section('content')

    <header class="card-header text-center">
        <h1>Cidades</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Nome </td>
                        <td scope="col"> Estado </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($cities_list))
                        @foreach ($cities_list as $city)
                        <tr>
                            <th scope="row"> #{{ $city->id }} </td>
                            <td> {{ $city->name }} </td>
                            <td> {{ $city->state ? $city->state->name : 'Não existe' }} </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </main>

@endsection
