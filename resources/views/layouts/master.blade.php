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
    <header align='center'>
        <h1 class="header_footer"><a href="<?php echo route('prototype-helpers.index') ?>">Prototype Helpers</a></h1>
    </header>

    <section>
        @yield('content')
    </section>

</body>
</html>
