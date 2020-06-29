<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.document.index');
    }

    public function store(Request $request, $id){
        $request->validate([
            'document' => 'required',
        ]);

        $this->validate(request(), [
            'document.*' => 'required|file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:204800',
        ]);

        $topic = Topic::findorfail( $id );

        $document = $request->file('document');
        $path = $document->store('public/documents');
        $document = new Document();
        $document->title = $request->get('document_title');
        $document->description = $request->get('document_description');
        $document->url = $path;
        $document->topic_id = $topic->id;
        $document->save();

        return redirect()->back()->with('message', 'Document Created');
    }

}
