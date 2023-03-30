<x-layout titulo="Listar Animais"> 
    
    
    <h1 class="p-4">Listar Animais</h1> 
    <div class="d-flex flex-row-reverse bd-highlight p-4">
        <a class="btn btn-success p-2 bd-highlight" href="{{ route('animais.create') }}">Cadastrar</a>
    </div >

    @include('components/mensagem')
    <table class="table table-hover">
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Raça</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Animal</th>
                <th>Criado Em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animais as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->raca }}</td>
                    <td>{{ $animal->nome }}</td>
                    <td>{{ $animal->idade }}</td>
                    <td>{{ $animal->animal }}</td>
                    <td>{{ $animal->created_at }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('animais.show', $animal->id)}}">Visualizar</a>
                        <a class="btn btn-warning" href="{{ route('animais.edit', $animal->id)}}">Editar</a>
                        <form style="display:contents" action="{{ route('animais.destroy', $animal->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>
                    </td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>