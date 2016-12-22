<?php
echo '<div class="modal">
		<div class="popup_callback popup_same">
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

	<div class="popup_thx popup_same">
		<span class="icon-close"></span>
		<article>Спасибо!</article>
		<p>Спасибо, что заказали обратный звонок. наш менджер свяжется с Вами в течении нескольких минут.</p>
		<button class="back">назад</button>
	</div>


	<div class="popup_tour">
		<article>Заказать индивидуальный тур</article>
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

		<div class="selection-item">
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
		<div class="selection-item">
			<p class="tour-p">Оплата:</p>
			<div class="podbor-checks">
				<div class="checkBox">
					<input type="radio" id="podbor-100" name="podbor-oplata" checked="checked">
					<label for="podbor-100">100% оплата</label>
				</div>
				<div class="checkBox">
					<input type="radio" id="podbor-arrived" name="podbor-oplata"">
					<label for="podbor-arrived">наличными по прибытию при оплате депозита 20%</label>
				</div>
				<div class="checkBox">
					<input type="radio" id="podbor-after" name="podbor-oplata"">
					<label for="podbor-after">после согласования с представителем компании</label>
				</div>
			</div>
		</div>
		<button>отправить заявку</button>
	</div>
</div>';

?>