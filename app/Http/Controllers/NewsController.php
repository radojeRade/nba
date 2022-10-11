<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(5);
         return view('news.index', compact('news'));
    }
    public function show($id){
        $news = News::with('user')->find($id);

        return view('news.show', compact('news'));
    }
}
