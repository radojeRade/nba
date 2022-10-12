<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Team $team){
        //$news = $team->news()->paginate(5);
        $news = [];
        if ($team->id) {
            $news = $team->news()->paginate(5);
        } else {
            $news = News::paginate(5);
        }
         return view('news.index', compact('news'));
    }
    public function show($id){
        $news = News::with('user')->find($id);

        return view('news.show', compact('news'));
    }
    public function news($team){
        $news = $team->news()->paginate(5);
        return view('news.index', compact('news'));
    }
    
}
