<?php
echo '<div class="popup popup_callback">
	<div class="container">
		<div class="popup-callback-inner">
			<span class="icon-close"></span>
			<article>Заказать обратный звонок</article>
			<form action="">
				<div class="input">
					<input type="text" placeholder="Имя">
				</div>
				<div class="input">
					<input type="text" placeholder="Телефон">
				</div>
				<div class="input">
					<input type="text" placeholder="Email">
				</div>
				<button>отправить заявку</button>
			</form>
		</div>
	</div>
</div>

<div class="popup-callback-thx">
	<div class="container">
		<div class="popup-thx-inner">
			<span class="icon-close"></span>
			<article>Спасибо!</article>
			<p>Спасибо, что заказали обратный звонок. наш менджер свяжется с Вами в течении нескольких минут.</p>
			<div class="popup-thx-back">назад</div>
		</div>
	</div>
</div>


<div class="popup-tour">
	<div class="container">
		<div class="popup-tour-inner">
			<article>Заказать индивидуальный тур</article>
			<div class="podbor-selects">
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

			<div class="podbor-block">
				<p>Персональные данные:</p>
				<div class="podbor-inputs">
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
			</div>
			<div class="podbor-block">
				<p class="tour-p">Оплата:</p>
				<div class="podbor-checks">
					<div class="checkBox">
						<span ></span>
						<label for="tour-day1">100% оплата</label>
						<input type="hidden" id="podbor-oplata" name="podbor-oplata">
					</div>
					<div class="checkBox">
						<span class="checked"></span>
						<label for="tour-day1">наличными по прибытию при оплате депозита 20%</label>
						<input type="hidden" id="podbor-arrived" name="podbor-arrived">
					</div>
					<div class="checkBox">
						<span></span>
						<label for="tour-day1">после согласования с представителем компании</label>
						<input type="hidden" id="podbor-after" name="podbor-after">
					</div>
				</div>
			</div>
			<button>отправить заявку</button>
		</div>
	</div>
</div>';

?>