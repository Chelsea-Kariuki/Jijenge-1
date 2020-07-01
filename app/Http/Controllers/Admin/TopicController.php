<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    // getting all
    public function index(){
        return view('admin.topic.index', ['topics' => Topic::paginate(5)]);
    }
    // getting specific with $id
    public function show($id){
        $topic = Topic::findorfail( $id );
        $documents = $topic->documents;
        return view('admin.topic.topic', ['topic' => ($topic),'documents' => ($documents) ]);
    }

    public function store(Request $request){
        $request->validate([
            'topic_title' => 'required',
        ]);
        $topic = new Topic();
        $topic->title = $request->get('topic_title');
        $topic->save();
        return redirect()->back()->with('message', 'Topic Created');
    }

}
