<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Link da Pasta Java-->
        <script src="/js/scripts.js"></script>
        
        <!--CSS da aplicação-->  
        <link rel="stylesheet" href="/css/style.css">

        <!--Fonte do Google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


        <title>@yield('title')</title>
    </head>
    <body>        

        @yield('content')
    
        <footer>
            <p>HDC Events &copy; 2022</p>
        </footer>

    </body>

</html>
