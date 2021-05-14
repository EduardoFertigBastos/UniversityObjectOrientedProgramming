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
            @foreach ($addresses_list as $address)
            <tr>
                <th scope="row"> #{{ $address->id }} </td>
                <td> {{ $address->cep }} </td>
                <td> {{ $address->description }} </td>
                <td> {{ $address->numberHouse }} </td>
                <td> {{ $address->neighborhood }} </td>
                <td> {{ $address->complement }} </td>
                <td> {{ $address->cityName }} </td>
                <td>
                    <a href="{{ route('addresses.edit', $address->id) }}"> 
                        <i class="fas fa-edit"> 
                            Editar 
                        </i> 
                    </a>
                    
                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="#modalDelete" onclick="addRemoveButton('addresses.delete', {{ $address->id }})" 
                                                            data-toggle="modal" data-target="#modalDelete"> 
                        <i class="fas fa-trash-alt"> 
                            Remover 
                        </i>  
                    </a>

                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="{{ route('addresses.show', $address->id) }}"> 
                        <i class="fas fa-eye"> 
                            Visualizar 
                        </i> 
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('templates.modalDelete', [
            'title'  => 'REMOVER REGISTRO',
            'text'   => 'Desejas realmente remover o registro #'
        ])