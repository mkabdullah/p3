<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>

    <meta charset='utf-8'>
    <link href="/css/main.css" type='text/css' rel='stylesheet'>

</head>
<body>
    <header align='center' class='header'>
        <a href="<?php echo route('prototype-helpers.index') ?>">
        <h2>Prototype Helpers</h2>
        <p>A web site for developers to generate userful stuff for prototyping<p>
        </a>
    </header>

    <section>
        @yield('content')
    </section>

</body>
</html>
