<div class="col-10 col-sm-12 col-md-8 col-lg-8 mt-4">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <td scope="col"> Código </td>
                <td scope="col"> Nome </td>
                <td scope="col"> Estado </td>
                <td scope="col"> Menu </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities_list as $city)
            <tr>
                <th scope="row"> #{{ $city->id }} </td>
                <td> {{ $city->name }} </td>
                <td> {{ $city->stateName }} </td>
                <td>
                    <a href="{{ route('cities.edit', $city->id) }}"> 
                        <i class="fas fa-edit"> 
                            Editar 
                        </i>
                    </a>
                    
                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="#modalDelete" onclick="addRemoveButton('cities.delete', {{ $city->id }})" 
                                                                data-toggle="modal" data-target="#modalDelete"> 
                        <i class="fas fa-trash-alt"> 
                            Remover 
                        </i>  
                    </a>

                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="{{ route('cities.show', $city->id) }}"> 
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