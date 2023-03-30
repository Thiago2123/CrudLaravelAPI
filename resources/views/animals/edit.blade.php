<x-layout titulo="Editar Animal"> 

    <h1 class="p-4">Editar Animal</h1>
    <div class="mt-5"></div>

    <form action="{{ route('animais.update', $animal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="raca" class="col-sm-2 col-form-label">Raça:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name='raca'id="raca" value="{{ $animal->raca }}" placeholder="Raça do animal">
            </div>
        </div> 
        <br>
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name='nome'id="nome" value="{{ $animal->nome }}" placeholder="Nome do animal">
            </div>
        </div> 
        <br>
        <div class="form-group row">
            <label for="idade" class="col-sm-2 col-form-label">Idade:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" name='idade'id="idade" value="{{ $animal->idade }}" placeholder="Idade do animal">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="animal" class="col-sm-2 col-form-label">Animal:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name='animal'id="animal" value="{{ $animal->animal }}" placeholder="Especie do animal">
            </div>
        </div>
        <br>
        <div class="d-flex flex-row-reverse bd-highlight p-4">
            <button class="btn btn-success p-2 bd-highlight" type="submit">Editar</button>
            <a class="btn btn-danger p-2 bd-highlight" href="{{ route('animais.index') }}">Voltar</a>
        </div >
    </form> 

</x-layout>