<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';

    // function findAll(){
    //     $posts = Post::all();
    // }

    protected $fillable = ['name', 'email', 'address', 'city'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComments($content, $id){
        $this->comments()->create([
            'content' => $content,
            'user_id' => $id,  
        ]);
    }
}
