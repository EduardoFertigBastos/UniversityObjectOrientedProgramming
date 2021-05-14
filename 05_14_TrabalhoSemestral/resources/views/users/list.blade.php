<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-4">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <td scope="col"> Código </td>
                <td scope="col"> Nome </td>
                <td scope="col"> Aniversário </td>
                <td scope="col"> CEP </td>
                <td scope="col"> Gênero </td>
                <td scope="col"> CPF </td>
                <td scope="col"> Email </td>
                <td scope="col"> Opções </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users_list as $user)
            <tr>
                <th scope="row"> #{{ $user->id }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->birth }} </td>
                <td> {{ $user->addressCep }} </td>
                <td> 
                    <?php 
                    $genders = ['Masculino', 'Feminino', 'Outros'];
                    echo $genders[$user->gender];
                    ?> 
                </td>
                <td> {{ $user->cpf }} </td>
                <td> {{ $user->email }} </td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}"> 
                        <i class="fas fa-edit">
                        </i> 
                    </a>
                    
                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="#modalDelete" onclick="addRemoveButton('users.delete', {{ $user->id }})" 
                                                        data-toggle="modal" data-target="#modalDelete"> 
                        <i class="fas fa-trash-alt">
                        </i>  
                    </a>
                    
                    <i class="fas fa-grip-lines-vertical"></i>
                    
                    <a href="{{ route('users.show', $user->id) }}"> 
                        <i class="fas fa-eye"> 
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