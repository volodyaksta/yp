<div class="page_header">
Личный кабинет
</div>

<?
if (isset($_POST['isChange'])) {
$result = mysqli_query($link, "UPDATE `orders` SET `status`='".$_POST['status']."' WHERE `id`=".$_POST['id']);
if ($result) {
$message_event = "Статус успешно обновлен!";
}
else {
$message_event = "Не удалось обновить статус: ".$link->error;
}
}
if (isset($_POST['isDelete'])) {
$result = mysqli_query($link, "DELETE FROM `orders` WHERE `id`=".$_POST['id']);
if ($result) {
$message_event = "Заявка успешно удалена!";
}
else {
$message_event = "Не удалось удалить запись: ".$link->error;
}
}

?>

<? if (!empty($message_event)) { ?>
<div style="text-align: center; padding: 5px;"><? echo $message_event; ?></div>
<? } ?>

<? if ($_SESSION['role'] == 1) { ?>
<div style="overflow-x: auto">

<table class="table" border="1" width="100%" align="center">

<tr>
<th>ФИО</th>
<th>Адрес</th>
<th>Номер телефона</th>
<th>Город</th>
<th>Площадь</th>
<th>Мебель</th>
<th>Цена</th>
<th>Статус</th>
<th>Удалить</th>



</tr>
<?
$result = mysqli_query($link, "SELECT * FROM `orders` WHERE 1");
if ($result) {
while ($row = mysqli_fetch_assoc($result)) {

?>
<tr>
<div>
<td>
<? echo $row['fio']; ?><br>

</td>
<td>
<? echo $row['adress']; ?><br>
</td>
<td>
<? echo $row['phone']; ?><br>
</td>
<td>
<? echo $row['service']; ?><br>
</td>
<td>
<? echo $row['kol']; ?><br>
</td>
<td>
<? echo $row['delivery']; ?><br>
</td>
<td>
<? echo $row['summa']; ?><br>
</td>


<td>
<form action="" method="post">
<input type="hidden" name="id" value="<? echo $row['id']; ?>">
<select name="status">
<option <? if ($row['status'] == 'Создана') { echo "selected"; } ?> >Создана</option>
<option <? if ($row['status'] == 'Принята') { echo "selected"; } ?> >Принята</option>
<option <? if ($row['status'] == 'Отказано') { echo "selected"; } ?> >Отказано</option>

</select>
<input type="submit" name="isChange" value="Обновить">
</form>
</td>
<td>
<form action="" method="post" onsubmit="return confirm('Вы действительно хотите удалить данную заявку?'); return false">
<input type="hidden" name="id" value="<? echo $row['id']; ?>">
<input type="submit" name="isDelete" value="Удалить">

</form>
</td>

</div>
</tr>

<? }} ?>
</table>



<br>



<? } else { ?>
<div class="col_header">
<h2>Заявки</h2>
</div>
<div style="overflow-x: auto">
<table class="table" border="1" width="800px" align="center">
<tr>
<th>Город</th>
<th>Номер</th>
<th>Мебель</th>
<th>Площадь</th>
<th>Статус</th>
</tr>
<?
$result2 = mysqli_query($link, "SELECT * FROM `orders` WHERE `fio`='".$_SESSION['fio']."'");
if ($result2) {
while ($row = mysqli_fetch_assoc($result2)) {
?>
<tr>
<td >

<?echo $srv.$row['service']; ?><br>
</td>
<td>
<? echo $row['kol']; ?><br>
</td>
<td><? echo $row['delivery']; ?></td>
<td><? echo $row['summa']; ?></td>

<td>
<? echo $row['status']; ?>

</td>


</tr>

<? }} ?>
</table>

</div>



<? } ?>
  