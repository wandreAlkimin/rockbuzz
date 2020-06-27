<?php

namespace App\Http\Controllers\Api\Adm;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Param;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->with('posts')->first();
        $data = $user->posts;


        return view('site.posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('site.posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Post();

        // Faz a validação obtendo os dados do modelo representante
        Validator::make($request->all(),$data->rules,$data->messages)->validate();

        $rq = $request->all();

        $active = 0;
        if(isset($rq['active']) && $rq['active'] == "on"){
            $active = 1;
        }

        if(empty($rq['tags'])){
            Session::flash('msgErro', 'Selecione pelo menos uma tag');
            return redirect('/adm/posts/');
        }

        $nameFile = $this->uploadImage($request);

        if (isset($nameFile)){
            $data->cover_image = $nameFile;
        }

        $user = Auth::user();

        //Salva os dados
        $data->title  = $rq['title'];
        $data->body   = $rq['body'];
        $data->active = $active;
        $data->user_id = $user['id'];
        $data->save();

        // Atualiza as tags
        $data->tags()->sync($rq['tags']);
        $data->save();

        Session::flash('msg', 'Criado com sucesso');
        return redirect('/adm/posts/');
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

        $data = Post::find($id);
        $tags = Tag::all();

        $data->tags;
        $data->user;

        return view('site.posts.edit', compact('data','tags'));
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
        $data = Post::find($id);

        // Faz a validação obtendo os dados do modelo representante
        Validator::make($request->all(),$data->rules,$data->messages)->validate();

        $rq = $request->all();

        $active = 0;
        if(isset($rq['active']) && $rq['active'] == "on"){
            $active = 1;
        }

        if(empty($rq['tags'])){
            Session::flash('msgErro', 'Selecione pelo menos uma tag');
            return redirect("/adm/posts/$id/edit");
        }

        $nameFile = $this->uploadImage($request);

        if (isset($nameFile)){
            $data->cover_image = $nameFile;
        }

        // Atualiza as tags
        $data->tags()->sync($rq['tags']);

        //Salva os dados
        $data->title  = $rq['title'];
        $data->body   = $rq['body'];
        $data->active = $active;
        $data->save();


        Session::flash('msg', 'Atualizado com sucesso');
        return redirect('/adm/posts/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $post = Post::find($id);

        if($post['user_id'] ==  $user['id']){
            $post->delete();

            Session::flash('msg', 'Excluido com sucesso');
            return redirect('/adm/posts/');
        }

        Session::flash('msgErro', 'Falha ao excluir');
        return redirect('/adm/posts/');
    }

    /**
     * Recebe uma imagem do request.
     *
     * @param  request  $request
     * @return string
     */
    public function uploadImage($request){

        $nameFile = null;
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {

            // Gera um numero alatorio para o nome
            $name = rand().rand();

            // Recupera a extensão do arquivo
            $extension = $request->cover_image->extension();

            // Define o nome do arquivo
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->cover_image->storeAs('images/imagem_capa', $nameFile,'public');

            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('msgErro', 'Falha ao fazer upload')
                    ->withInput();
            }
        }

        return $nameFile;
    }

    public function search(Request $request){

        $q = $request->search;
        $data = Post::where( 'title', 'LIKE', '%' . $q . '%' )
                    ->orWhere( 'body', 'LIKE', '%' . $q . '%' )
                    ->get();

        return view('site.posts.index', compact('data'));
    }
}
