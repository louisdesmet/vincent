<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vincent - {{ $page->name }}</title>

    </head>
    <body>
        <nav>
            {{ $page->name }}
            @foreach ($navigations as $navigation) 
                <a href="{{ route($navigation->name, ['navigation' => $navigation]) }}">{{ $navigation->name }}</a>
            @endforeach
        </nav>
    </body>
</html>
