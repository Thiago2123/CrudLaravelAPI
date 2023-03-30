<x-layout titulo="Visualizar Animal"> 

    
    <h1 class="p-4">Visualisar Animal</h1>

    

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $animal->nome }}</h5>
          <p class="card-text">{{ $animal->nome }} é um {{ $animal->animal }} da Raça {{ $animal->raca }} </p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Idade:</b> {{ $animal->idade }}</li>
          <li class="list-group-item"><b>Animal:</b> {{ $animal->animal }}</li>
          <li class="list-group-item"><b>Nome:</b> {{ $animal->nome }}</li>
          <li class="list-group-item"><b>Raça:</b> {{ $animal->raca }}</li>
        </ul>
        <div class="d-flex flex-row-reverse bd-highlight p-4">
            <a class="btn btn-danger p-2 bd-highlight" href="{{ route('animais.index') }}">Voltar</a>
        </div >
    </div>

</x-layout>