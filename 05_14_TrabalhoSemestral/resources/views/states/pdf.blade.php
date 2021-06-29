@extends('templates.master')

@section('content')

    <header class="card-header text-center">
        <h1>Estados</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Nome </td>
                        <td scope="col"> Sigla </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($states_list))
                        @foreach ($states_list as $state)
                        <tr>
                            <th scope="row"> #{{ $state->id }} </td>
                            <td> {{ $state->name }} </td>
                            <td> {{ $state->initials }} </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </main>

@endsection
