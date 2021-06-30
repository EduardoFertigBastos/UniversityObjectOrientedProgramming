@extends('templates.master')

@section('content')

    <header class="card-header text-center">
        <h1>Moedas</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Nome </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($coins_list))
                        @foreach ($coins_list as $coin)
                        <tr>
                            <th scope="row"> #{{ $coin->id }} </td>
                            <td> {{ $coin->name }} </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </main>

@endsection
