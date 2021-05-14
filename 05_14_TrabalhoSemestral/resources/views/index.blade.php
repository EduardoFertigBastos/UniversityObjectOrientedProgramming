@extends('templates.master')

    @section('content')


        @include('templates.index.carousel')


        @include('templates.index.scroolspy')



        <div class="container">
            <div class="row justify-content-sm-center">

                @if (isset($cards))            
                    @foreach ($cards as $card)
                        
                        @include('products.card', [
                            'card'  => $card
                        ])
                        
                    @endforeach
                @endif

            </div>        
        </div>
            

        @include('templates.index.jumbotron')


        @include('templates.index.contato')

    @endsection

    @section('javaScript')
    <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="./node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
@endsection