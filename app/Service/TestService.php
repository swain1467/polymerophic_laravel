<?php
namespace App\Service;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;

class TestService{
    public function Data(){
        return Post::find(1)->comments;
    }
}