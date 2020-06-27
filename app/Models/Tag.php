<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'active',
    ];

    /**
     * <b>rules</b> Atributo responsável em definir regras de validação dos dados submetidos pelo formulário
     */
    public $rules = [
        'name'   => 'required',
    ];

    /**
     * <b>messages</b>  Atributo responsável em especificar uma mensagem de erro personalizada apenas para um campo específico
     */
    public $messages = [
        'name.required' => 'É necessario um nome',
    ];

    /**
     * <b>posts</b> Método responsável em definir o relacionamento entre suas tabelas
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_tags');
    }
}
