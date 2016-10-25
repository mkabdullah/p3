<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;

class RandomUserController extends Controller
{
    /**
     * Display the index view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      #call the 'index' view
      return view('random-user.index');
    }

    /**
     * Generate the result view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generate(Request $request)
    {
      #input validation -- the input should be b/w 1 and 99
      $this->validate($request, ['no_of_users' => 'required|integer|between:1,99',]);

      #extract the input value
      $no_of_users = $request->input('no_of_users');

      #instantiate faker user name generator from the external package
      $faker = \Faker\Factory::create();

      #call the 'generate' view with the random users data
      return view('random-user.generate', compact('no_of_users', 'faker'));

    }

}
