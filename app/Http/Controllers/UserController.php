<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   // CRIAR
        //$user = UserData::create([]);

        //ACHAR UM
        //$user = UserData::find(1);

        //ATUALIZAR
        //$user = UserData::find(1)->update([]);

        //DELETAR
        //$user = UserData::find(1)->delete();

        //PEGAR TODOS
        $user = UserData::all();


        return view('content', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $request->all();

        /*$request->validate([
            '*' => 'required',
        ])*/
        //$user = UserData::create($id);
        // //return "criou, welcome";(Queria que ele retornasse p
        // uma pagina falando ex: CADASTRO, BEM VINDO)
        $request->validate([
            '*' => 'required',
        ]);
        return view('content');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function show(UserData $userData, $id)
    {
//         1 – findOrFail
// Ele é um método bem útil para tratarmos os resultados de Rotas ou Controllers que necessitam do resultado desta busca para funcionar.
        $user = UserData::findOrFail($id);
        $user = UserData::firstOrCreate($id);
        return view('content', ['user' => $user]);
        //(WIP)

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function edit(UserData $userData, Request $request, $id)
    {
        $user= UserData::updateOrCreate($id);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserData $userData, $id)
    {
        $user= UserData::destroy(delete);
    }
}
