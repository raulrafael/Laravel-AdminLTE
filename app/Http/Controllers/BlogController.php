<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use app\Laravel;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        $blogs = Blog::all();
        return view('blog.index',['blogs' => $blogs]);
        //return "hola mundo";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new data
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar
         $this->validate($request,[
        'title'=> 'required', 
        'description'=> 'required',]);
         $blog = blog;
        $blog->title=$request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blog.index')->with('alert-success','guardado');  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Blog::findOrFail($id);
        return view('blog.edit',compact('blog'));
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
        //
        $this->validate($request,[
        'title'=> 'required', 
        'description'=> 'required',]);

        $blog = Blog::findOrFail($id);
        $blog->title=$request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blog.index')->with('alert-success','guardado');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('alert-success','guardado');  

    }
}
