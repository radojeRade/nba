<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(Team $team){
        $news = [];
        if ($team->id) {
            $news = $team->news()->orderBy('created_at', 'desc')->paginate(5); //$sorted = Model::orderBy('name')->paginate(10);
        } else {
            $news = News::orderBy('created_at', 'desc')->paginate(5);
        }
         return view('news.index', compact('news'));
    }
    public function show($id){
        $news = News::with('user', 'teams')->find($id);

        return view('news.show', compact('news'));
    }

    public function create(){
        $teams = Team::all();    
             
        return view('news.create', compact('teams'));
    }
    public function store(Request $request){
        $news = News::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'user_id' => auth()->id()
        ]);

        $news->teams()->attach($request['teams']);
        session()->flash('message', 'Thank you for publishing article on www.nba.com');//flash poruka

        return redirect('/news');
    }
    
    
    
}
