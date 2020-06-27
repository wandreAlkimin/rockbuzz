<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Post::where('active','=','1')->orderBy('updated_at', 'desc')->get();

        foreach($data as $post) {
            $post->body = substr($post->body, 0, 250);
        }

        return view('home', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::find($id);

        $data->tags;
        $data->user;

        // Se não existir dados ou se não estiver ativa retorna para a home
        if(empty($data) || $data['active'] == 0){
            Session::flash('msgErro', 'Esse post não existe ou está inativo');
            return redirect()->route("/");
        }

        return view('site.posts.show', compact('data'));
    }

    public function search(Request $request){

        $q = $request->search;
        $data = Post::where( 'title', 'LIKE', '%' . $q . '%' )
            ->where('active','=','1')
            ->orWhere( 'body', 'LIKE', '%' . $q . '%' )
            ->get();

        return view('home', compact('data'));
    }
}