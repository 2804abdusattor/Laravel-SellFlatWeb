<?php

namespace App\Http\Controllers;

use App\Models\content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
            {
                if($request->hasfile('image'))
                 {
                    foreach($request->file('image') as $image)
                    {
                        $name=$image->getClientOriginalName();
                        $image->move(public_path().'/image/content/', $name);
                        $datas[] = $name;
                    }
                 }
                foreach ($request->date as $key=> $date){
                    $data = new Content();
                    $data->date = $date;
                    $data->title = $request->title[$key];
                    $data->subtitle = $request->subtitle[$key];
                    $data->content = $request->content[$key];
                    $data->image = $request->image[$key];
                    $data->save();
                }
                return view('backend.content.index');
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(content $content)
    {
        //
    }
}
