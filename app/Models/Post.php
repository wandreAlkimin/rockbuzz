<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

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



//    protected $guarded = [];
//
//    public function has_tag($tag_id)
//    {
//        $rows = \DB::table('tag_post')->where('tag_id', '=', $tag_id)->where('post_id', '=', $this->id)->get();
//
//        if (count($rows) > 0) {
//            return true;
//        } else {
//            return false;
//        }
//    }
}
