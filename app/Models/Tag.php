<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
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
     * <b>posts</b> Método responsável em definir o relacionamento entre suas tabelas
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_tags');
    }
}
