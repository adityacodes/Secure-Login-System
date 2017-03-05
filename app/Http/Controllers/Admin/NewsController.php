<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News, Session;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all the newss in it
        $news = News::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('admin.news.index')->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. validate the date
        $this->validate($request, array(
                'subject' => 'required|unique:news',
                'message' => 'required',
            ));
        //2. Store in the DB
        $news = new News;

        $news->subject = $request->subject;
        $news->message = $request->message;

        $news->save();

        //3. Redirect to another page
        Session::flash('success', 'The news was successfully saved.');

        return redirect()->route('admin.news.show', $news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('admin.news.show')->withNews($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the db ans save as a var
        $news = News::find($id);
        //return the view and pass in the var we previously created
        return view('admin.news.edit')->withNews($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $news = News::find($id);

        
        $this->validate($request, array(
            'subject' => 'required',
            'message' => 'required',
        ));
        

        //save the data
        $news->subject = $request->subject;
        $news->message = $request->message;

        $news->save();
        // set flash meessage to be shown

        Session::flash('success', 'The news was successfully updated');
        //redirect the users
        return redirect()->route('admin.news.show', $news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        Session::flash('Success', 'News Deleted Successfully');

        return redirect()->route('admin.news.index');
    }
}
