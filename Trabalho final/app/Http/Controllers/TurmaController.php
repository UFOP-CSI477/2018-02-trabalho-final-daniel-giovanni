<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Ano;
use App\Http\Requests\StoreTurmaRequest;

class TurmaController extends Controller
{
  public function __construct(){
    //bloqueia tudo
  //  $this->middleware('auth');
    $this->middleware('auth')->except('index');
  }


    public function index()
       {

         $turma=Turma::orderBy('nome_turma')->get();
         $ano=Ano::orderBy('ano')->get();
           return view('indexTurma',compact("turma",'ano'));
       }

       public function pesquisaTurmaNome($nomeTurma)
       {
         $turmaPesquisa = Turma::where('nome_turma', '=', $nomeTurma)->get();
         return view('indexTurma',compact("turmaPesquisa"));
       }

        public function createTurma(){
              $turma = Turma::all();
              $ano = Ano::all();
              return view('storeTurma',compact("turma",'ano'));
        }
       public function store(StoreTurmaRequest $request)
       {
           $turma = new Turma;
           $turma->ano  = $request->input('ano');
           $turma->nome_turma = $request->input('nome_turma');
           $turma->professora = $request->input('professora');
           $turma->save();
           return redirect('indexTurmaGet');
       }

       public function destroy($cod_aluno)
       {
         $aluno = Aluno::find($cod_aluno);
         $aluno->delete();
         return redirect()->route('turma.index');
       }

       public function show($turmafk)
      {
        $turma = Turma::find($turmafk);
        $ano=Ano::find($turma->ano);


          return view('showTurma',compact('turma','ano'));
      }

      public function edit($turmafk)
     {

       $turma = Turma::find($turmafk);
       $anoc=Ano::all();
       $ano=Ano::find($turma->ano);
       //  echo "$ano";
         return view('editTurma',compact('turma','ano','anoc'));
     }



       public function update($turm,StoreTurmaRequest $request)
       {

         $turma = Turma::find($turm);
         $turma->ano  = $request->input('ano');
         $turma->nome_turma = $request->input('nome_turma');
         $turma->professora = $request->input('professora');
         $turma->save();
         return redirect('turma');
       }


}
