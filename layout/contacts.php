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
			<h1>Контакты</h1>

			<div class="contacts">
				<div class="row">
					<p>If you did not receive our response within 24 hours with our offers for your tour or suggestions to plan your vacation, we highly recommend you:
					<em>Check your SPAM BOX. </em>
					</p>

					<h2>Call us for 24 hours 7 days a week:</h2>

				
					<div class="contacts-left">
						<ul>
							<li><span class="icon-rus"></span>Russian number: <em>+ 7 (911) 931 88 17</em></li>
							<li><span class="icon-us"></span>US number:<em> + 1 (559) 921 87 17</em></li>
							<li><span class="icon-uk"></span>UK number: <em>+ 44 (7937) 26 79 81</em></li>
							<li><span class="icon-ita"></span>Italian number: <em>+ 39 (349) 103 62 55</em></li>
						</ul>
					</div>
					<div class="contacts-right">
						<div class="row">
							<div class="contacts-right-logo">
								<span class="icon-contacts-criteria"></span>
							</div>
							<div class="contacts-right-text">
								Our criteria is to answer you in 24 hours.
							</div>
						</div>
					</div>
				</div>	
			</div>


			<div class="contacts-form">
				<div class="row">
					<article>Напишете нам:</article>
					<form action="">
						<div class="row">
							<div class="contacts-form-left">
								<div class="input">
									<input type="text" placeholder="Phone" id="contacts-phone" name="contacts-phone">
								</div>
								<div class="input">
									<input type="text" placeholder="Last name" id="contacts-lastname" name="contacts-lastname">
								</div>
							</div>
							<div class="contacts-form-right">
								<div class="input">
									<input type="text" placeholder="First name" id="contacts-firstname" name="contacts-firstname">
								</div>
								<div class="input">
									<input type="text" placeholder="Email" id="contacts-email" name="contacts-email">
								</div>
							</div>
						</div>
						<textarea name="contacts-text" id="contacts-text" ></textarea>
						<button>отправить заявку</button>
					</form>
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