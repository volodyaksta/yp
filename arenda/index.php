<?
include_once($_SERVER['DOCUMENT_ROOT'].'/lib/db_connect.php');
if(isset($_GET['exit'])) {
  session_destroy();
  $_SESSION = array();
}
?>
<html>
  <head>
    <title>Главная - <? echo $site_name; ?></title>
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