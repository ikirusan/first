<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <title>@yield('title') </title>
    <script>
        function conf(lnk, text){
            if(confirm(text)){
                document.location.href = lnk;
            }

            return false;
        }
    </script>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="body">@yield('content')</div>
    </div>
</div>
</body>
</html>