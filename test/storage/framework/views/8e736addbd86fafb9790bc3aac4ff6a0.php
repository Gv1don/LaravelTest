<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <h1 style="display:flex; justify-content: center;">Data page</h1>
        <h2>Filtres<h2>
        <form action="<?php echo e('/data/filter'); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <select name="visit_time_sort_order">
                <option value="asc"<?php echo e($visit_time_sort_order == 'asc' ? ' selected' : ''); ?>>По возрастанию</option>
                <option value="desc"<?php echo e($visit_time_sort_order == 'desc' ? ' selected' : ''); ?>>По убыванию</option>
            </select>
            <select name="sort">
                <option value="sortByToday"<?php echo e($sort == 'sortByToday' ? ' selected' : ''); ?>>Сегодня</option>
                <option value="sortByYesterday"<?php echo e($sort == 'sortByYesterday' ? ' selected' : ''); ?>>Вчера</option>
                <option value="sortByWeek"<?php echo e($sort == 'sortByWeek' ? ' selected' : ''); ?>>7 дней</option>
                <option value="sortByMonth"<?php echo e($sort == 'sortByMonth' ? ' selected' : ''); ?>>30 дней</option>
            </select>
            <button type="submit" value="1">Filter</button>
        </form>
        <h2>Visits table</h2>
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