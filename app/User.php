<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
     * <b>Posts</b> Método responsável em definir o relacionamento entre suas tabelas
     */
    public function posts()
    {
        return $this->hasMany(Post::class)->with('tags')->orderBy('updated_at', 'desc');
    }
}