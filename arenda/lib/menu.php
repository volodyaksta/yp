<ul>
  <li>
    <a href="/">Главная</a>
  </li>
  <li>
    <a href="/uslugi/">Услуги</a>
  </li>
  <li>
    <a href="/contacts/">Контакты</a>
  </li>
 
</ul>
<ul>
  <? if ($_SESSION['login']) { ?>
  <li>
    <a href="/create/">Подать заявку</a>
  </li>
  <? } ?>
  <? if (!isset($_SESSION['login'])) { ?>
  <li>
    <a href="/auth/">Войти</a>
  </li>
  <? } else { ?>
  <li>
    <a href="/account/">Кабинет</a>
  </li>
  <li>
    <a href="/?exit=1">Выйти</a>
  </li>
  <? } ?>
</ul>