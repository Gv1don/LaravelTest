<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    </head>
    <meta name="viewport" content="width=device=width, initital=scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registration</title>
  </head>
  <body>
    <h1>Registration</h1>
    <form action="/registration" method="POST">
      {{ csrf_field() }}
      <label for="email">Ваш email:</label>
      <input type="email" name="email" id="email" required>
      <br>
      <label for="password">Ваш пароль:</label>
      <input type="password" name="password" id="password" required>
      <br>
      <label for="confirm-password">Подтверждение пароля:</label>
      <input type="password" name="confirm-password" id="confirm-password" required>
      <br><br>
      <input type="submit" value="Зарегистрироваться">
    </form>
  </body>
</html>