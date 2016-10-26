@extends('layouts.master')

@section('title')
  Developer's Best Friend -- Lorem Ipsum Generator
@stop

@section('content')
  <br><br>
  <div class="container">

  <form method="POST" action="/lorem-ipsum/generate">
    {{ csrf_field() }}

    <label for='no_of_paragraphs'>No. of Paragraphs</label>
    <select name='no_of_paragraphs' id='no_of_paragraphs'>
      <?php
      for ($i=1; $i<=99; $i++)
      {
      ?>
          <option value="<?php echo $i;?>"><?php echo $i;?></option>
      <?php
      }
      ?>
    </select> (Max. 99)
    <br><br>
    <input type="submit" value="Generate Text">

    <br><br>
  </form>

  @yield('generated-text')

  </div>
@stop
