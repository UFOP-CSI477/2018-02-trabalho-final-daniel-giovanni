<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ano;
use App\Http\Requests\StoreAnoRequest;

class AnoController extends Controller
{
  public function __construct(){
    //bloqueia tudo
  //  $this->middleware('auth');
   $this->middleware('auth')->except('index');
  }

  public function index()
     {

       $ano=Ano::orderBy('ano')->get();
         return view('indexAno',compact("ano"));
     }

     public function pesquisaAnoNome($anoex)
     {
       $anoPesquisa = Ano::where('anoex', '=', $anoex)->get();
       return view('#',compact("$anoPesquisa"));
     }
     public function createAno(){

           $ano = Ano::all();
           return view('storeAno',compact('ano'));
     }

     public function store(StoreAnoRequest $request)
     {

         $ano = new Ano;
         $ano->ano  = $request->input('ano');
         $ano->anoex = $request->input('anoex');
         $ano->ciclo = $request->input('ciclo');
         $ano->save();
         return redirect('indexAnoGet');
     }

     public function show($anofk)
    {
      $ano = Ano::find($anofk);

      //  echo "$ano";
        return view('showAno',compact('ano'));
    }

    public function edit($anofk)
   {
     $ano = Ano::find($anofk);

     //  echo "$ano";
       return view('editAno',compact('ano'));
   }



     public function destroy($anofk)
     {
       $ano = Ano::find($anofk);
       $ano->delete();
       return redirect()->route('anos.index');
     }

     public function update($anofk,StoreAnoRequest $request)
     {
       $ano = Ano::find($anofk);
       $ano->ano  = $request->input('ano');
       $ano->anoex = $request->input('anoex');
       $ano->ciclo = $request->input('ciclo');
       $ano->save();
       return redirect('anos');
     }


}
