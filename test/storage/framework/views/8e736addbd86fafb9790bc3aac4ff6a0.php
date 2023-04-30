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
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://gv1don.github.io/" style="margin-left: 10px">Creator</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap" style="display: flex; flex-direction: row">
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-sm btn-outline-primary" type="submit" value="1" style="margin-right: 10px">Logout</button>
                </form>
                <form action="<?php echo e(route('registration')); ?>" method="GET">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-sm btn-outline-primary" type="submit" value="1">Registration new user</button>
                </form>
            </li>
        </ul>
        </nav>

        <div class="container-fluid">
            <div class="row" style="display:flex; justify-content: center;">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                        </div>
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
                            <button class="btn btn-sm btn-outline-primary" type="submit" value="1">Filter</button>
                        </form>
                        </div>
                    </div>

                    <h2>Visit Table</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
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
                    </div>
                </main>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
        feather.replace()
        </script>

        <!-- Graphs -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
        <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
            },
            options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: false
                }
                }]
            },
            legend: {
                display: false,
            }
            }
        });
        </script>
    

    </body>
</html><?php /**PATH /var/www/html/resources/views/data.blade.php ENDPATH**/ ?>