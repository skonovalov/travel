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
				<li><span>Контакты</span></li>
			</ul>
		</div>	

		<div class="container">
			<h1>Индивидуальный подбор экскурсий</h1>

			<div class="selection">
				<form action="">
					<div class="row">
						<div class="selection-item">
							<div class="selection-selects">
								<select name="podbor-transport" id="podbor-transport">
									<option>Транспорт</option>
									<option value="Bus">Bus</option>
									<option value="Boat">Boat</option>
								</select>

								<select name="podbor-boat" id="podbor-boat">
									<option>Круизный корабль</option>
									<option value="Bus">Bus</option>
									<option value="Boat">Boat</option>
								</select>

								<select name="podbor-timed" id="podbor-timed">
									<option>Время отбытия</option>
									<option value="Bus">Bus</option>
									<option value="Boat">Boat</option>
								</select>

								<select name="podbor-timea" id="podbor-timea">
									<option>Время прибытия</option>
									<option value="Bus">Bus</option>
									<option value="Boat">Boat</option>
								</select>
							</div>

							
								<p>Данные о плательщике:</p>

								<div class="input">
									<input type="text" placeholder="ФИО" id="podbor-fio" name="podbor-fio">
								</div>

								<p class="podbor-p">Адрес:</p>

							<div class="selection-inputs">
								<div class="input">
									<input type="text" placeholder="Страна" id="podbor-country" name="podbor-country">
								</div>
								<div class="input">
									<input type="text" placeholder="Штат" id="podbor-state" name="podbor-state">
								</div>
								<div class="input">
									<input type="text" placeholder="Город" id="podbor-city" name="podbor-city">
								</div>
								<div class="input">
									<input type="text" placeholder="Индекс" id="podbor-zip" name="podbor-zip">
								</div>
								<div class="input">
									<input type="text" placeholder="Улица, дом, корпус, квартира" id="podbor-adr" name="podbor-adr">
								</div>
							</div>
						</div>

						<div class="selection-item">
							<p>Персональные данные:</p>
							<div class="selection-inputs">

								<div class="input">
									<input type="text" placeholder="Имя" id="podbor-name" name="podbor-name">
								</div>

								<div class="input">
									<input type="text" placeholder="Фамилия" id="podbor-fam" name="podbor-fam">
								</div>
								<div class="input">
									<input type="text" placeholder="Номер паспорта" id="podbor-passport" name="podbor-passport">
								</div>
								<div class="input">
									<input type="text" placeholder="Гражданство по паспорту" id="podbor-graz" name="podbor-graz">
								</div>
								<div class="input">
									<input type="text" placeholder="Дата истечения срока паспорта" id="podbor-date" name="podbor-date">
								</div>
								<div class="input">
									<input type="text" placeholder="Название круизного лайнера" id="podbor-boat_name" name="podbor-boat_name">
								</div>
							</div>

							<p class="podbor-p">Данные карты:</p>
							<p class="podbor-cards"><em></em><i></i></p>

							<div class="selection-inputs">

								<div class="input">
									<input type="text" placeholder="Имя" id="podbor-name" name="podbor-name">
								</div>

								<div class="input">
									<input type="text" placeholder="Фамилия" id="podbor-fam" name="podbor-fam">
								</div>
								<div class="input">
									<input type="text" placeholder="Номер паспорта" id="podbor-passport" name="podbor-passport">
								</div>
								<div class="input">
									<input type="text" placeholder="Гражданство по паспорту" id="podbor-graz" name="podbor-graz">
								</div>
							</div>

							<button>отправить заявку</button>
						</div>

						<div class="selection-item">
							<p>Оплата:</p>
							<div class="selection-checks">
								<div class="checkBox">
									<input type="radio" id="podbor-oplata" name="podbor-oplata" checked="checked">
									<label for="podbor-oplata">100% оплата</label>
								</div>
								<div class="checkBox">
									<input type="radio" id="podbor-arrived" name="podbor-oplata">
									<label for="podbor-arrived">наличными по прибытию при оплате депозита 20%</label>
								</div>
								<div class="checkBox">
									<input type="radio" id="podbor-after" name="podbor-oplata">
									<label for="podbor-after">после согласования с представителем компании</label>
								</div>
							</div>
						</div>
					</div>
				</form>	
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