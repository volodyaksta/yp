<?
include_once($_SERVER['DOCUMENT_ROOT'].'/lib/db_connect.php');

if (isset($_POST['isAuth'])) {
  
  $login = $_POST['login'];
  $password = $_POST['password'];
  
  $result = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='".$login."' AND `password`='".$password."' LIMIT 1");
  if ($result && $result->num_rows > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['fio'] = $data['fio'];
    $_SESSION['adress'] = $data['adress'];
    $_SESSION['phone'] = $data['phone'];
    $_SESSION['login'] = $data['login'];
    $_SESSION['role'] = $data['role'];
    
    header('Location: /');
  }
  else {
    $message_event = "Не верный логин или пароль!";
  }
}
?>

<html>
  <head>
    <title>Вход - <? echo $site_name; ?></title>
    <?
    include_once($_SERVER['DOCUMENT_ROOT'].'/lib/head.php');
    ?>
  </head>
  <body>
    <header>
      <?
      include_once($_SERVER['DOCUMENT_ROOT'].'/lib/header.php');
      ?>
    </header>
    <menu>
      <?
      include_once($_SERVER['DOCUMENT_ROOT'].'/lib/menu.php');
      ?>
    </menu>
    <div id="content">
      <?
      include_once('body.php');
      ?>
    </div>
    <footer>
      <?
      include_once($_SERVER['DOCUMENT_ROOT'].'/lib/footer.php');
      ?>
    </footer>
  </body>
</html>