<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Home page</h1>
        <form action="login" method="GET">
            @csrf
            <button type="submit" value="1"> Войти </button>
        </form>
    </body>
</html>