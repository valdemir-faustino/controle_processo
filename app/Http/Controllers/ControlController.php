<?php

namespace App\Http\Controllers;
use App\Models\Processo;


use Illuminate\Http\Request;

class ControlController extends Controller
{
    public function index()
    {

        $search = request('search');

        if($search){

            $processos = Processo::where([
                ['tipo', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $processos = Processo::all();
        }   

        return view('welcome', ['processos' =>$processos, 'search' =>$search]);
    
    }

    public function create()
    {
        return view('processos.create');
    }

    public function store(Request $request)
    {
       $processo = new Processo;
       $processo->tipo = $request->tipo;
       $processo->status = $request->status;
       $processo->descricao = $request->descricao;
       $processo->data= $request->data;

       $processo->save();

       return redirect('/')->with('msg', 'Processo criado com sucesso!');
    }

    public function show($id)
    {
        $processo = Processo::findOrFail($id);

        return view('processos.show', ['processo' =>$processo]);
    }
  

}
