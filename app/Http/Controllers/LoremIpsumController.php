<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;

class LoremIpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $view  = '<form method="POST" action="/lorem-ipsum/generate">';
      // $view .= csrf_field(); # This will be explained more later
      // $view .= '<label>No of Paragraphs: <input type="text" name="no_of_paragraphs"></label>';
      // $view .= '<input type="submit">';
      // $view .= '</form>';
      // return $view;

      return view('lorem-ipsum.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generate(Request $request)
    {
      $no_of_paragraphs = $request->input('no_of_paragraphs');
      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($no_of_paragraphs);

      return view('lorem-ipsum.generate')->with('paragraphs', $paragraphs);

      // foreach ($paragraphs as $paragraph)
      // {
      //     echo $paragraph.'<br>';
      // }
      //echo implode('<p>', $paragraphs);
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
        //
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
    }
}
