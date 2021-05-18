<div class="page_header">
  Вход
</div>
<? if (!empty($message_event)) { ?>
  <div style="text-align: center; padding: 5px;"><? echo $message_event; ?></div>
<? } ?>
<div>
  <form class="form" action="" method="post" style="margin: 0 auto;">
    <div>
      <label>Логин:</label>
      <input type="text"  name="login" required>
    </div>
    <div>
      <label>Пароль:</label>
      <input type="password" name="password" required>
    </div>
    <div>
      <input type="submit" name="isAuth" value="Войти">
    </div>
    <p class="center">
      Нет учетной записи? <a href="/reg/">Зарегистрируйтесь</a>!
    </p>
  </form>
</div>
<script>
  $('.phone_input').mask("+7 (999) 999-99-99");
</script>