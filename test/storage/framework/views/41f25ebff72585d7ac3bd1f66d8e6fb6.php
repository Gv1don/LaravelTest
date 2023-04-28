<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Home page</h1>
        <form action="login" method="GET">
            <?php echo csrf_field(); ?>
            <button type="submit" value="1"> Войти </button>
        </form>
    </body>
</html><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>