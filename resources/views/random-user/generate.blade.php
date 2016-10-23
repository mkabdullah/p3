@extends('random-user.index')

@section('generated-text')

  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif

  <?php
  $faker = \Faker\Factory::create();
  for ($i=0; $i < $no_of_users; $i++)
  {
    echo '<p>';
    echo $faker->name.'<br>';
    echo $faker->address.'<br>';
    echo $faker->email.'<br>';
    echo '<p>';
  }

  ?>
@stop
