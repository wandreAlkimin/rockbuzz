<?php

namespace App\Http\Controllers\Api\Adm;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tag::all();
        return view('site.tags.index', compact('data'));
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
        $data = new Tag();

        // Faz a validação obtendo os dados do modelo representante
        Validator::make($request->all(),$data->rules,$data->messages)->validate();

        $rq = $request->all();

        //Salva os dados
        $data->name  = $rq['name'];
        $data->active = 1;
        $data->save();

        Session::flash('msg', 'Criado com sucesso');
        return redirect('/adm/tags/');
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

        $data = Tag::find($id);

        // Faz a validação obtendo os dados do modelo representante
        Validator::make($request->all(),$data->rules,$data->messages)->validate();

        $rq = $request->all();

        $active = 0;
        if(isset($rq['active']) && $rq['active'] == "on"){
            $active = 1;
        }

        //Salva os dados
        $data->name  = $rq['name'];
        $data->active = $active;
        $data->save();


        Session::flash('msg', 'Atualizado com sucesso');
        return redirect('/adm/tags/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        Session::flash('msg', 'Excluido com sucesso');
        return redirect('/adm/tags/');
    }
}
