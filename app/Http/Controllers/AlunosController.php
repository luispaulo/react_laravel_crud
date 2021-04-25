<?php

namespace App\Http\Controllers;
use Redirect;
use App\Models\Alunos;  // ALTERNATIVA PARA ( use App\Aluno)
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;


class AlunosController extends Controller
{
    public function index(){
        $alunos = Alunos::get();
        return view('alunos.list', ['alunos' => $alunos]);
    }

    public function novo(){
        return view('alunos.form');
    }

    public function agenda(){
        return view('alunos.agenda');
    }

    public function adicionar( AlunoRequest $request){

        $aluno = new Alunos;
        $aluno = $aluno->create( $request->all() );
        return redirect('/alunos');

    }

    public function editar( $id){
        $alunos = Alunos::findOrFail($id);
        return view('alunos.form', ['alunos' => $alunos]);

    }

    public function update( $id, AlunoRequest $request ){

        $aluno = Alunos::findOrFail($id);
        $aluno->update( $request->all() );
        return redirect('/alunos');
    }

    public function delete( $id ){

        $aluno = Alunos::findOrFail($id);
        $aluno->delete();
        return redirect('/alunos');
    }

}
