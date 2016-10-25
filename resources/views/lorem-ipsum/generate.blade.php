@extends('lorem-ipsum.index')

@section('generated-text')

  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif

  <?php
  #display the generated paragphs
  foreach ($paragraphs as $paragraph)
  {
      echo '<p>'.$paragraph.'</p>';
  }
  ?>
@stop
