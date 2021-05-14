<div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <td scope="col"> Código </td>
                <td scope="col"> Nome </td>
                <td scope="col"> Sigla </td>
                <td scope="col"> Menu </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($states_list as $state)
            <tr>
                <th scope="row"> #{{ $state->id }} </td>
                <td> {{ $state->name }} </td>
                <td> {{ $state->initials }} </td>
                <td>
                    <a href="{{ route('states.edit', $state->id) }}"> 
                        <i class="fas fa-edit"> 
                            Editar 
                        </i> 
                    </a>
                    
                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="#modalDelete" onclick="addRemoveButton('states.delete', {{ $state->id }})" 
                                                        data-toggle="modal" data-target="#modalDelete"> 
                        <i class="fas fa-trash-alt"> 
                            Remover 
                        </i>  
                    </a>
                    
                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="{{ route('states.show', $state->id) }}"> 
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