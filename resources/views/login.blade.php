<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>
    <div class="login-page">
        <div class="form">
            <form class="login-form">
                <input type="text" name="username" placeholder="username"/>
                <input type="password" name="password" placeholder="password"/>
                <input type="submit" name="login" value="Login"/>
            </form>
        </div>
    </div>
    </body>
    <footer>
        <script src="{{ asset('js/script.js') }}" ></script>
    </footer>
</html>
