<?php 
	include 'header.php';
?>
	<div class="content">
		<div class="menu">
			<ul class="row">
				<li class="selected"><a href="index.html">home</a></li>
				<li><a href="about.html">about us</a></li>
				<li><a href="#">shore exursions</a></li>
				<li><a href="tours.html">tours</a></li>
				<li><a href="#">travel info</a></li>
				<li><a href="#">f.a.q</a></li>
				<li><a href="#">roll call</a></li>
				<li><a href="contacts.html">contact us</a></li>
			</ul>
		</div>
		<div class="navigation">
			<ul>
				<li><a href="index.html">Главная</a></li>
				<li>&nbsp; / &nbsp;</li>
				<li><span>Личный кабинет</span></li>
			</ul>
		</div>	

		<div class="container cabinet">
			<h1>Личный кабинет</h1>

			<div class="row">
				<div class="cabinet-item">
					<div class="cabinet-block-header">
						<span class="icon-register"></span><em>Логин:</em><i>Innervoice321</i>
					</div>
					<form action="">
						<div class="input">
							<input type="text" placeholder="Email">
						</div>
						<div class="input">
							<input type="text" placeholder="ФИО">
						</div>
						<div class="input">
							<input type="text" placeholder="Адрес">
						</div>
						<div class="input">
							<input type="text" placeholder="Контактные данные">
						</div>
						<button>отправить заявку</button>
					</form>
				</div>
				<div class="cabinet-item">
					<article>Мои заказы:</article>
					<ul>
						<li>‐ 2 day tour package (hotel not included) ‐ private service</li>
						<li>‐ 3 day tour package (hotel not included) ‐ private service</li>
						<li>‐ 4 day tour package (hotel not included) ‐ private service</li>
					</ul>
				</div>
				<div class="cabinet-item">
					<article>Счета:</article>
					<ul>
						<li><span></span><a href="">Оплатить тур</a></li>
						<li class="payed"><span></span><a href="">Оплачено</a></li>
						<li class="payed"><span></span><a href="">Оплачено</a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>

<?php 
	include 'popup.php';
?>

<?php 
	include 'footer.php';
?>