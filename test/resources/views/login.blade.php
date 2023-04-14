<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    </head>
        <meta name="viewport" content="width=device=width, initital=scale=1">
        <!--CSRF Token-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>test-task</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                    
                <div>
                    <label for="email">Ваш email</label>
                    <input id="email" name="email" type="text" value="" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password">Ваш пароль</label>
                    <input id="password" name="password" type="password" value="" placeholder="Пароль">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" name="sendMe" value="1">Войти</button>
                </div>    

            </div>    
        </form>
    </body>
</html>