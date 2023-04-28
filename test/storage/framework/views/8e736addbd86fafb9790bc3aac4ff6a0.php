<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <h1>Data page</h1>
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" value="1"> Выйти </button>
        </form>
        <form action="<?php echo e(route('sortIP')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="sort_order" value="<?php echo e($sort_order); ?>">
            <button type="submit" value="1"> Сортировать по IP </button>
        </form>
        <form action="<?php echo e(route('sortVisit')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="sort_order" value="<?php echo e($sort_order); ?>">
            <button type="submit" value="1"> Сортировать по времени </button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ip</th>
                    <th>Visit time</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->ip); ?></td>
                    <td><?php echo e($user->visit_time); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </body>
</html><?php /**PATH /var/www/html/resources/views/data.blade.php ENDPATH**/ ?>