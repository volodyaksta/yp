<div>
  <div id="logo_box">
   <img width="50%" src="/img/rent.png">  
  </div> 
    </div>
  </div>
</div>
<div>
  <div>
    <i class="fa fa-calendar" aria-hidden="true"></i>
    Сегодня <? echo date("d.m.Y"); ?>
  </div>
  <div>
    <i class="fa fa-user" aria-hidden="true"></i>
    Здравствуйте, 
    <? if (!empty($_SESSION['fio'])) { echo $_SESSION['fio']; } else { echo "Гость"; } ?>!
  </div>
</div>