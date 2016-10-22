@extends('lorem-ipsum.index')

@section('generated-text')
  <?php
  foreach ($paragraphs as $paragraph)
  {
      echo '<p>'.$paragraph.'</p>';
  }
  ?>
@stop
