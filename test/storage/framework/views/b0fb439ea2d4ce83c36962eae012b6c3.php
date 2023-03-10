<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    </head>
        <meta name="viewport" content="width=device=width, initital=scale=1">
    </head>
    <body>
        <h1>Login</h1>
        <form>
            <div>
                <label for="email">Ваш email</label>
                <input id="email" name="email" type="text" value="" placeholder="Email">
            </div>
            <div>
                <label for="password">Ваш пароль</label>
                <input id="password" name="password" type="password" value="" placeholder="Пароль">
            </div>
            <div>
                <button type="submit" name="sendMe" value="1">Войти</button>
            </div>    
        </form>
    </body>
</html><?php /**PATH /var/www/html/resources/views/login.blade.php ENDPATH**/ ?>