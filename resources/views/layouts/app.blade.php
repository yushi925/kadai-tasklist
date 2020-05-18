<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Tasklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    <body>

        @include('commons.navbar')
        
        <div class="container">
            @include("commons.error_tasks")
            @yield('content')
        </div>
        
        <!-- JavaScriptの指定は省略 -->
        
    </body>
</html>