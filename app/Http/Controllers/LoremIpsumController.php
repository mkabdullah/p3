<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;

class LoremIpsumController extends Controller
{
    /**
     * Display the index view
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      #call the 'index' view
      return view('lorem-ipsum.index');
    }

    /**
     * Generate the result view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generate(Request $request)
    {
      #input validation -- input should be b/w 1 and 99
      $this->validate($request, ['no_of_paragraphs' => 'required|integer|between:1,99',]);

      #extract the input value
      $no_of_paragraphs = $request->input('no_of_paragraphs');

      #instantiate the random text generator
      $generator = new \Badcow\LoremIpsum\Generator();

      #generate the required number of paragraphs
      $paragraphs = $generator->getParagraphs($no_of_paragraphs);

      #call the 'generate' view with the generated paragraphs
      return view('lorem-ipsum.generate')->with('paragraphs', $paragraphs);
    }


}
