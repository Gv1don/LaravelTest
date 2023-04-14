<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    </head>
        <meta name="viewport" content="width=device=width, initital=scale=1">
        <!--CSRF Token-->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>test-task</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="/login" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                    
                <div>
                    <label for="email">Ваш email</label>
                    <input id="email" name="email" type="text" value="" placeholder="Email">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="password">Ваш пароль</label>
                    <input id="password" name="password" type="password" value="" placeholder="Пароль">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <button type="submit" name="sendMe" value="1">Войти</button>
                </div>    

            </div>    
        </form>
    </body>
</html><?php /**PATH /var/www/html/resources/views/login.blade.php ENDPATH**/ ?>