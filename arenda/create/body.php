<div class="page_header">
Заявка
</div>

<?
if (isset($_POST['AddSend'])) {
$fio = $_SESSION['fio'];
$adress = $_SESSION['adress'];
$phone = $_SESSION['phone'] ;
$service = $_POST['service'];
$kol = $_POST['kol'];
$delivery = $_POST['delivery'];
$summa = $_POST['summa'];


$result = mysqli_query($link, "INSERT INTO `orders`(`fio`, `adress`, `phone`, `service`, `kol`,`delivery`, `summa`, `status`) VALUES ('$fio', '$adress', '$phone', '$service', '$kol','$delivery', '$summa', 'Создана')");

if ($result) {
$message_event = "Заявка на покупку успешно создана!";
}
else {
$message_event = "Не удалось создать заявку: ".$link->error;
}
}
?>

<? if (!empty($message_event)) { ?>
<div style="text-align: center; padding: 5px;"><? echo $message_event; ?></div>
<? } ?>
<div>
<form class="form" action="" method="post" style="margin: 0 auto;">

<div>
<label>Город</label>
<select name="service" onchange="Summa()">';
<?
$sql = "SELECT * FROM `Service`";
$result = $link->query($sql);
$price_arr = array();
while ($row = mysqli_fetch_array($result))
{
$price_arr[$row['sname']]=$row['price'];
// Оператором echo выводим на экран поля таблицы name_blog и text_blog
echo '<option value="'.$row['sname'].'">'.$row['sname'].'</option>';
}?></select>
</div>
<div>
<label>Площадь</label>
<input type="text" name="kol" step="1" onchange="Summa()" required>
</div>
<div>
<label>Мебель</label>
<select name="delivery" onchange="Summa()">
<option>Нет</option>
<option>Да</option>
</select>
</div>
<div>
<label>Цена:</label>
<input type="text" name="summa" readonly>
</div>

<div>
<input type="submit" name="AddSend" value="Отправить">
</div>
</form>
</div>
<script>
var price_arr = <? echo json_encode($price_arr); ?>;
function Summa(){
var kol = new $('input[name="kol"]').val();
var price = 0;
if ($('select[name="delivery"]').val() == 'Да') {
price = 350;
}
else if ($('select[name="delivery"]').val() == 'Нет') {
price = 0;
}
var sum = kol* price_arr[$('select[name="service"]').val()];
var summa = sum+price;

summa = Math.round(summa);

$('input[name="summa"]').val(summa);
}
</script>