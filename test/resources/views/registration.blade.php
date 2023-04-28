<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <h1>Registration</h1>
    <form action="{{ route('registration')}}" method="POST">
      @csrf
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