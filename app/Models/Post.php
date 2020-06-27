<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'cover_image',
        'active',
        'user_id'
    ];


    /**
     * <b>rules</b> Atributo responsável em definir regras de validação dos dados submetidos pelo formulário
     */
    public $rules = [
        'title'   => 'required',
        'body'    => 'required',
    ];

    /**
     * <b>messages</b>  Atributo responsável em especificar uma mensagem de erro personalizada apenas para um campo específico
     */
    public $messages = [
        'title.required' => 'É necessario um titulo',
        'body.required' => 'É necessario um texto',
    ];


    /**
     * <b>User</b> Método responsável em definir o relacionamento entre suas tabelas
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * <b>tags</b> Método responsável em definir o relacionamento entre suas tabelas
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posts_tags');
    }

}
