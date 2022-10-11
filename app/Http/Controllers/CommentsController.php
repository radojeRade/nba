<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentsReceived;
use Illuminate\Support\Facades\Mail;
use App\Models\Team;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//samo autentifikovani 
    }

    
    public function store( CreateCommentRequest $request, $id){

        $team = Team::find($id);
        $team->addComments($request->validated()['content'], auth()->id());
        
        Mail::to($team)->send(new CommentsReceived($team));
        
        
        return redirect()->back();
    }
}
