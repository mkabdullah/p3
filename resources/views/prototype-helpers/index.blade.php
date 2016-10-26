@extends('layouts.master')

@section('title')
  Developer's Best Friend
@stop

@section('content')
  <div class="container">

    <h2><a href="<?php echo route('lorem-ipsum.index') ?>">Lorem Ipsum Generator</a></h2>
    <p>What is Lorem Ipsum?</p>
    <p>
      In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation.By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
    </p>

    <br>

    <h2><a href="<?php echo route('random-user.index') ?>">Random User Generator</a></h2>
    <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>

  </div>
@stop
