<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styleHome.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-light;" style="background: #343A40; padding-left: 16px">
        <a class="navbar-brand" href="#" style="color: white">НЛК</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="col-xs" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Портфолио</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Рейтинг</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Помощь</a>
            </li>
          </ul>
          </form>
        </div>
        <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Портфолио</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Рейтинг</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Помощь</a>
                </li>
              </ul>
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
        </div>
      </nav>
        <div class="firstContainer">
            <p id="Портфолио">Портфолио</p>
            <p>
                Это место, где собраны ваши научные 
                публикации. Здесь вы можете добавлять<br> 
                свои научные работы, получать информацию 
                об их уникальности и смотреть<br> отзывы 
                ваших научных руководителей.
            </p>
            <button type="button" class="btn btn-primary" style="margin-top: 16px;">Добавить работу</button>
            <form action="<?php echo e(route('registration')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary" value="1" style="margin-top: 10px;">Войти</button>
            </form>
        </div>

          <div class="secondContainer" style="padding-left: 55px">
            <div class="row"></div>
              <div class="col-lg-5 col-md-7 col-xs-6">
                <div class="card" style="margin-left: 24px; position: inherit;">
                  <p class="cardName" style="font-weight: 400;">Ваш профиль</p>
                  <div class="card-body">
                    <h5 class="card-title">Сергей Павлович Фролов</h5>
                    <p class="card-text">
                      <strong>Научная степень:</strong> Магистр. <br>
                      <strong>Специализация:</strong> Инвестиционные проблемы <br> экономически развивающихся рынков.
                    </p>
                    <a href="#" class="btn btn-primary" style="margin-top: 16px;">Редактировать</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-5 col-xs-6">
                <div class="card" style="position: inherit;">
                  <p class="cardName">Статистика</p>
                  <div class="card-body">
                    <p class="card-text">
                      <strong>На платформе:</strong> 2 года. <br>
                      <strong>Добавлено работ:</strong> 10. <br>
                      <strong>Средняя уникальность:</strong> 75%. <br>
                      <strong>Языки работ:</strong> русский, английский.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 col-xs-6" style="overflow:auto">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Название работы</th>
                      <th scope="col">Дата загрузки</th>
                      <th scope="col">Научный руководитель</th>
                      <th scope="col">Уникальность</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row"> <a href="#">Привлечение инвестиций как фактор развития экономики</a></td>
                      <td>21.05.2019</td>
                      <td> <a href="#">Асаншоева А.М.</a></td>
                      <td> <a href="#">89%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"> <a href="#">The role of accounting in sustainable development</a></td>
                      <td>11.02.2019</td>
                      <td><a href="#">Шаляпина В.С.</a></td>
                      <td><a href="#">78%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"> <a href="#">Сценарный анализ как инструмент учета рисков инвестиционного
                        проекта</a></td>
                      <td>05.09.2018</td>
                      <td><a href="#">Васильев М.Г.</a></td>
                      <td><a href="#">67%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"><a href="#">Глобальные и региональные инвестиционные тенденции</a></td>
                      <td>09.07.2018</td>
                      <td><a href="#">Асаншоева А.М.</a></td>
                      <td><a href="#">73%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"><a href="#">Systemic risks in financial markets</a></td>
                      <td>18.05.2018</td>
                      <td><a href="#">Леонидов В.Б.</a></td>
                      <td><a href="#">77%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"><a href="#">The influence of tax regulation liberalisation on the domestic debt market</a></td>
                      <td>09.03.2018</td>
                      <td><a href="#">Шаляпина В.С.</a></td>
                      <td><a href="#">82%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"><a href="#">Биткоин как новый вид инвестиций</a></td>
                      <td>29.01.2018</td>
                      <td><a href="#">Асаншоева А.М.</a></td>
                      <td><a href="#">71%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"><a href="#">Проблема воспроизводства жилищного фонда в России</a></td>
                      <td>08.11.2017</td>
                      <td><a href="#">Васильев М.Г.</a></td>
                      <td><a href="#">65%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"><a href="#">Влияние безработицы на экономику СНГ</a></td>
                      <td>17.09.2017</td>
                      <td><a href="#">Васильев М.Г.</a></td>
                      <td><a href="#">68%</a></td>
                    </tr>
                    <tr>
                      <td scope="row"><a href="#">Мировой валютный рынок Форекс</a></td>
                      <td>02.07.2017</td>
                      <td><a href="#">Васильев М.Г.</a></td>
                      <td><a href="#">67%</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          <div class="contacts">
            <p>© Научный личный кабинет. Все права защищены</p>
          </div>
    </body>
</html><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>