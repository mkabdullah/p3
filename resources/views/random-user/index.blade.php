@extends('layouts.master')

@section('title')
  Developer's Best Friend -- Random User Generator
@stop

@section('content')
  <br><br>
  <div class="container">

  <form method="POST" action="/random-user/generate">
    {{ csrf_field() }}

    <label for='no_of_users'>No. of Users</label>
    <select name='no_of_users' id='no_of_users'>
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
    <input type="submit" value="Generate Users">

    <br><br>
  </form>

  @yield('generated-text')

  </div>
@stop
