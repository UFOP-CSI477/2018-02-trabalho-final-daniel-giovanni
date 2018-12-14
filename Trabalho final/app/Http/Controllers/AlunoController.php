<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Turma;
use App\Ano;
use App\Http\Requests\StoreAlunoRequest;


class AlunoController extends Controller
{
  public function __construct(){
    //bloqueia tudo
    $this->middleware('auth');
  //  $this->middleware('auth')->except('index');
  }



  public function index()
  {
    $aluno = Aluno::orderBy('nome')->get();
    $turma=Turma::orderBy('nome_turma')->get();
    $ano=Ano::orderBy('ano')->get();
    return view('indexAluno',compact("aluno","turma",'ano'));
  }



public function pesquisa(){
  $aluno = Aluno::orderBy('nome')->get();
  $turma=Turma::orderBy('nome_turma')->get();
  $ano=Ano::orderBy('ano')->get();


return view('pesquisaAluno',compact('aluno','turma','ano'));
}

  public function pesquisaAluno(Request $request)
  {
    $aluno = Aluno::orderBy('nome')->get();
    $turma=Turma::orderBy('nome_turma')->get();
    $ano=Ano::orderBy('ano')->get();
    $nome=$request->nome;
    $alunoPesquisa = Aluno::where('nome', 'LIKE', "$nome%")->get();
    return view('resultPesquisa',compact('aluno','alunoPesquisa','turma','ano'));
  }

  public function pesquisaTurma(Request $request)
  {

    $aluno = Aluno::orderBy('nome')->get();
    $turma=Turma::orderBy('nome_turma')->get();
    $ano=Ano::orderBy('ano')->get();
    $cod_turma=$request->cod_turma;

    $alunoPesquisa = Aluno::where('cod_turma', 'LIKE', "$cod_turma")->get();
    return view('resultPesquisa',compact('aluno','alunoPesquisa','turma','ano'));
  }




  public function createAluno(){
    $aluno=Aluno::all();
    $turma =Turma::all();
    $ano =Ano::all();
    return view('storeAluno', compact('aluno','turma','ano'));

  }


  public function store(StoreAlunoRequest $request)
  {
    $aluno = new Aluno;
    $aluno->nome  = $request->input('nome');
    $aluno->cod_turma  = $request->input('cod_turma');
    $aluno->pai = $request->input('pai');
    $aluno->mae = $request->input('mae');
    $aluno->sexo = $request->input('sexo');
    $aluno->data_nasc = $request->input('data_nasc');
    $aluno->telefone = $request->input('telefone');
    $aluno->naturalidade = $request->input('naturalidade');
    $aluno->bairro = $request->input('bairro');
    $aluno->rua = $request->input('rua');
    $aluno->numero = $request->input('numero');
    $aluno->estado = $request->input('estado');
    $aluno->save();
    return redirect('indexAlunoGet');
  }

  public function destroy($cod_aluno)
  {
    echo "$cod_aluno";
    $aluno = Aluno::find($cod_aluno);
    $aluno->delete();
    session()->flash('mensagem', 'Aluno excluído com sucesso!');
    return redirect()->route('aluno.index');
  }



  public function show($alunofk)
 {
   $aluno = Aluno::find($alunofk);
   $turma = Turma::find($aluno->cod_turma);
   $ano=Ano::find($turma->ano);
     return view('showAluno',compact('aluno','turma','ano'));
 }

 public function edit($alunofk)
{
  $aluno = Aluno::find($alunofk);
  $turma = Turma::find($aluno->cod_turma);
  $turmac=Turma::all();
  $ano=Ano::find($turma->ano);
  //  echo "$ano";
    return view('editAluno',compact('aluno','turma','ano','turmac'));
}
public function decfreq($alunofk)
{
 $aluno = Aluno::find($alunofk);
 $turma = Turma::find($aluno->cod_turma);
 $ano=Ano::find($turma->ano);
 //  echo "$ano";
 return \PDF::loadView('decFrequencia', compact('aluno','turma','ano'))->stream('nome.pdf');
  // return view('decFrequencia',compact('aluno','turma','ano'));
}
public function dectrans($alunofk)
{
 $aluno = Aluno::find($alunofk);
 $turma = Turma::find($aluno->cod_turma);
 $ano=Ano::find($turma->ano);
 //  echo "$ano";
 return \PDF::loadView('decTransferencia', compact('aluno','turma','ano'))->stream('nome-arquivo-pdf-gerado.pdf');
  // return view('decFrequencia',compact('aluno','turma','ano'));
}
public function decconc($alunofk)
{
 $aluno = Aluno::find($alunofk);
 $turma = Turma::find($aluno->cod_turma);
 $ano=Ano::find($turma->ano);
 //  echo "$ano";
 return \PDF::loadView('decConclusao', compact('aluno','turma','ano'))->stream('nome-arquivo-pdf-gerado.pdf');
  // return view('decFrequencia',compact('aluno','turma','ano'));
}

  public function update(StoreAlunoRequest $request, $cod_aluno)
  {
    echo "$request->nome";
    $aluno = Aluno::find($cod_aluno);
    $aluno->nome  = $request->input('nome');
    $aluno->cod_turma  = $request->input('cod_turma');
    $aluno->pai = $request->input('pai');
    $aluno->mae = $request->input('mae');
    $aluno->sexo = $request->input('sexo');
    $aluno->data_nasc = $request->input('data_nasc');
    $aluno->telefone = $request->input('telefone');
    $aluno->naturalidade = $request->input('naturalidade');
    $aluno->bairro = $request->input('bairro');
    $aluno->rua = $request->input('rua');
    $aluno->numero = $request->input('numero');
    $aluno->estado = $request->input('estado');
    $aluno->save();
    return redirect('aluno');
  }

}
