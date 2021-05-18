<?
include_once($_SERVER['DOCUMENT_ROOT'].'/lib/db_connect.php');

if (isset($_POST['isReg'])) {
  
  $fio = $_POST['fio'];
  $adress = $_POST['adress'];
  $phone = $_POST['phone'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  
  $result = mysqli_query($link, "INSERT INTO `users`(`fio`, `adress`, `phone`,`login`, `password`, `role`) VALUES ('$fio','$adress', '$phone','$login', '$password', 0)");
  if ($result) {
    $_SESSION['id'] = $link->insert_id;
    $_SESSION['fio'] = $fio;
    $_SESSION['adress'] = $adress;
    $_SESSION['phone'] = $phone;
    $_SESSION['login'] = $login;
    $_SESSION['role'] = 0;
    
    header('Location: /');
  }
  else {
    $message_event = "Не удалось создать учетную запись: ".$link->error;
  }
}
?>

<html>
  <head>
    <title>Регистрация - <? echo $site_name; ?></title>
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