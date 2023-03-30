<?php

    namespace App\Http\Controllers;

    use App\Models\Dog;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class AnimalController
    {
        public function index()
        {
           
         
            $animals = Dog::all();

            // dd é um vardump diferente
            //dd($animals);
            return view('animals.index')->with('animais', $animals);
            
        }

        public function show($id)
        {
            $animal = Dog::find($id);
            //echo "<h1>Visualisar asnimal $id </h1>";
            //return $animal;
            
            //dd($animais);
            return view("animals.show",compact('animal'));
           
        }

        public function create()
        {
            return view('animals.create');
           
        }

        public function store(Request $request)
        {
            //dd($request->all());
            Dog::create($request->all());
            return redirect('animais')->with('sucesso', "Animal cadastrado com sucesso");
           
        }

        public function edit($id)
        {
            $animal = Dog::find($id);
            
            return view('animals.edit', compact('animal'));

        }

        public function update(Request $request, $id)
        {
            $animal = Dog::find($id);
            //dd($request);
            $animal->fill($request->all())->save();
            
            return redirect()->route('animais.index')->with('sucesso', "Animal Editado com sucesso");

        }

        public function destroy($id)
        {
           $animal = Dog::find($id);
           $animal->delete();
           return redirect()->route('animais.index')->with('sucesso', "Animal Deletado com sucesso");

        }


    }
        
?>