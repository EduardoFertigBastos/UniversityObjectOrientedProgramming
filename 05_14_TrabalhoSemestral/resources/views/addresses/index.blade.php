@extends('templates.master')

@section('content')

<header class="row justify-content-center mt-3">
    
    <h1> Endereços </h1>

</header>

<main class="row justify-content-center mt-3">

    <section class="col-10 col-sm-12 col-md-8 col-lg-8">

        {!! Form::open(['route' => 'addresses.store', 'method' => 'post', 'class' => '']) !!}
        
            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-3 col-lg-3">
            
                    <label for="cep"> Cep: </label>
                    <input type="number" class="form-control" id="cep" name="cep" placeholder="Cep">
            
                </div>

                <div class="form-group col-sm-8 col-md-7 col-lg-5">
            
                    <label for="description"> Descrição: </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Descrição">
            
                </div>
                
            </div>    
        
            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-2 col-lg-2">
            
                    <label for="numberHouse"> Número da Casa: </label>
                    <input type="text" class="form-control" id="numberHouse" name="numberHouse" placeholder="Número da casa">
            
                </div>

                <div class="form-group col-sm-8 col-md-8 col-lg-6">
            
                    <label for="neighborhood"> Bairro: </label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" placeholder="Bairro">
            
                </div>
                
            </div>
        
            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">
            
                    <label for="complement"> Complemento: </label>
                    <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento">
            
                </div>

            </div>

            <div class="form-row justify-content-center">
            
                <div class="form-group col-sm-8 col-md-10 col-lg-8">
            
                    <label for="city"> Cidade: </label>
                    <select name="city_id" id="city" class="form-control">
                        <option selected disabled> Escolha uma cidade... </option>
                        @foreach ($cities_list as $city)

                            <option value="{{ $city->id }}"> {{ $city->name }} </option>

                        @endforeach
                    </select>
                        
                </div>
            </div>           
       
            <div class="form-row justify-content-center">
            
                <input type="submit" value="Adicionar" class="btn btn-primary col-sm-8 col-md-10 col-lg-8 py-2">

            </div>

        {!! Form::close() !!}        

    </section>
    
</main>

<section class="row justify-content-center">
    
    @include('addresses.list', ['addresses_list' => $addresses_list])            
    
</section>

@endsection()

