<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlunosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('pages.alunos', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();

        // $aluno->matricula = $request->input('matricula');
        $aluno->name = $request->input('name');
        $aluno->email = $request->input('email');
        $aluno->uf_nacionalidade = $request->input('uf');
        $aluno->data_nascimento = $request->input('dataNascimento');
        $aluno->sexo = $request->input('sexo');
        $aluno->Raca = $request->input('raca');
        $aluno->forma_ingresso = $request->input('ingresso');
        $aluno->curso = $request->input('curso');
        $aluno->status = $request->input('status');

        $aluno->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
