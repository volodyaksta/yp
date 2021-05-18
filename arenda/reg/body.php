<div class="page_header">
  Регистрация
</div>
<? if (!empty($message_event)) { ?>
  <div style="text-align: center; padding: 5px;"><? echo $message_event; ?></div>
<? } ?>
<div>
  <form class="form" action="" method="post" style="margin: 0 auto;">
    <div>
      <label>ФИО:</label>
      <input type="text" placeholder="Иванов Иван Иванович" name="fio" required>
    </div>

	<div>
      <label>Номер телефона:</label>
      <input type="tel" class="phone_input" placeholder="+7 (999) 111-22-33" name="phone" required>
    </div>
    <div>
      <label>Логин:</label>
      <input type="text" name="login" required>
    </div>
	<div>
      <label>Пароль:</label>
      <input type="password" name="password" required>
    </div>
    <div>
      <input type="submit" name="isReg" value="Зарегистрироваться">
    </div>
    <p class="center">
      Есть учетная запись? <a href="/auth/">Войдите</a>!
    </p>
  </form>
</div>
<script>
  $('.phone_input').mask("+7 (999) 999-99-99");
</script>