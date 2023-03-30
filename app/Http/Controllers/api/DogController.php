<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Dog;

class DogController extends Controller
{
    
    public function index()
    {   
        $dogs = Dog::all();
       
        
        if($dogs->count() > 0 ){
            $dados = [
                'status' => 200,
                'Animais' => $dogs,
            ];
            
            return response()->json($dados, 200);

        }else{
            $dados = [
                'status' => 404,
                'Mensagem' => 'Sem dados',
            ];
            return response()->json($dados, 404);
        }

        
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'raca' => 'required|string|max:50',
            'nome' => 'required|string|max:50',
            'idade' => 'required',
            'animal' => 'required|string|max:50',
        ]);

        if($validator->fails()){
            $dados = [
                'Status' => 422,
                'Erros' => $validator->messages(),
            ];
            return response()->json($dados, 422);
        }else{
            $dog = Dog::create([
                'raca' => $request->raca,
                'nome' => $request->nome,
                'idade' => $request->idade,
                'animal' => $request->animal,
            ]);

            if($dog){
                $dados = [
                    'status' => 202,
                    'mensagem' => "Animal criado com sucesso"
                ];
                return response()->json($dados,200);
            }else{

                $dados = [
                    'status' => 500,
                    'mensagem' => "Algo deu errado"
                ];
            

                return response()->json($dados,200);
            }
        }
    }

   
    public function show($id)
    {
        $dog = Dog::find($id);
        if($dog){

            $dados = [
                'status' => 200,
                'Animal' => $dog
            ];
            return response()->json($dados,200);

        }else{
            $dados = [
                'status' => 404,
                'mensagem' => "Animal não encontrado com esse id"
            ];

            return response()->json($dados,404);

        }
    }

    
    public function edit($id)
    {
        $dog = Dog::find($id);
        if($dog){

            $dados = [
                'status' => 200,
                'Animal' => $dog
            ];
            return response()->json($dados,200);

        }else{
            $dados = [
                'status' => 404,
                'mensagem' => "Animal não encontrado com esse id"
            ];

            return response()->json($dados,404);

        }
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'raca' => 'required|string|max:50',
            'nome' => 'required|string|max:50',
            'idade' => 'required',
            'animal' => 'required|string|max:50',
        ]);

        if($validator->fails()){
            $dados = [
                'Status' => 422,
                'Erros' => $validator->messages(),
            ];
            return response()->json($dados, 422);
        }else{
            $dog = Dog::find($id);

            
            if($dog){
                $dog ->update([
                    'raca' => $request->raca,
                    'nome' => $request->nome,
                    'idade' => $request->idade,
                    'animal' => $request->animal,
                ]);
                $dados = [
                    'status' => 202,
                    'mensagem' => "Animal editado com sucesso"
                ];
                return response()->json($dados,200);
            }else{

                $dados = [
                    'status' => 404,
                    'mensagem' => "Aniaml não encontrado com esse id"
                ];
            

                return response()->json($dados,404);
            }
        }


    }

    
    public function destroy($id)
    {
        $dog = Dog::find($id);
        
        if($dog){

            $dog->delete();
            $dados = [
                'status' => 200,
                'mensagem' => "Animal deletado com sucesso"
            ];
        

            return response()->json($dados,404);

        }else{
            $dados = [
                'status' => 404,
                'mensagem' => "Aniaml não encontrado com esse id"
            ];
        

            return response()->json($dados,404);
        }
    }
}
