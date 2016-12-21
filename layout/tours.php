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
				<li><span>Все туры по России</span></li>
			</ul>
		</div>	

		<div class="tours container">
			<h1>Все туры по России</h1>

			<div class="tours-top">
				<div class="row">
					<div class="tours-top-left">
						<div class="slider-menu">
							<ul>
								<li class="selected">
									<div class="slider-menu-img">
										<img src="../images/slider-menu-item01.png" alt="slider-menu-item01">
									</div>
									<span class="slider-menu-text">
										shore tour packages
									</span>
									<span class="icon-arrow"></span>
								</li>
								<li>
									<div class="slider-menu-img">
										<img src="../images/slider-menu-item01.png" alt="slider-menu-item01">
									</div>
									<span class="slider-menu-text">
										hotel tour packages
									</span>
									<span class="icon-arrow"></span>
								</li>
								<li>
									<div class="slider-menu-img">
										<img src="../images/slider-menu-item01.png" alt="slider-menu-item01">
									</div>
									<span class="slider-menu-text">
										hot deal!
									</span>
									<span class="icon-arrow"></span>
								</li>
								<li class="create-tour">
									<div class="slider-menu-img">
										<img src="../images/slider-menu-item01.png" alt="slider-menu-item01">
									</div>
									<span class="slider-menu-text">
										create your own tour
									</span>
									<span class="icon-arrow"></span>
								</li>
							</ul>
						</div>
						<div class="tours-form">
							<form action="">
								<div class="tours-form-left">
									<div class="selectBox">
										<div class="selectBox-city-btn">
											<span class="icon-arrow-down"></span>
										</div>
										<article>Excursion packages</article>
										<ul>
											<li>Excursion package 1</li>
											<li>Excursion packages 2</li>
										</ul>

										<input type="hidden" id="tour-package" name="tour-package" value="">
									</div>
									<div class="selectBox-city">
										<div class="selectBox-city-btn">
											<span class="icon-arrow-down"></span>
										</div>
										<article>Moscow</article>
										<ul>
											<li>Moscow</li>
											<li>St.Petersburg</li>
											<li>Novgorod</li>
										</ul>
										<input type="hidden" id="tour-city" name="tour-city" value="">
									</div>
								</div>
								<div class="tours-form-right">
									<div class="checkBox checked">
										<span></span>
										<label for="tour-day1">1 day tour</label>
										<input type="hidden" id="tour-day1" name="tour-day1" value="1 day tour">
									</div>
									<div class="checkBox">
										<span></span>
										<label for="tour-day2">2 day tour</label>
										<input type="hidden" id="tour-day1" name="tour-day2">
									</div>
									<div class="checkBox">
										<span></span>
										<label  for="tour-day3">3 day tour</label>
										<input type="hidden" id="tour-day1" name="tour-day3">
									</div>
								</div>
								<button><span class="icon-tour-magn"></span><em>search</em></button>
							</form>
						</div>
					</div>

					<div class="tours-top-right">
						<p>BEST PRICE GUARATEE <em><i>easy</i> online reservation</em></p>
						<p><em>24/7</em> customer support</p>
						<p><em><i>small</i> groups only</em> no hidden costs</p>
					</div>
				</div>
			</div>

			<div class="tours-wrap">
				<div class="row">
					<?php 
						for($i = 0; $i < 6; $i++) {
							echo '<div class="tour-item">
						<div class="tour-item-img">
							<img src="../images/tour-item01.jpg" alt="boat">
							<div class="tour-item-text">
								<div class="d-table">
									<div class="d-cell">
										<p>New tour is on Aventure schedule</p>
									</div>
								</div>
							</div>
						</div>

						<ul>
							<li>
								<span class="tour-icon tour-length"></span><em><i>Length:</i> 12hours</em>
							</li>
							<li>
								<span class="tour-icon tour-activity"></span><em><i>Activity level:</i> 5 from 10</em>
							</li>
							<li>
								<span class="tour-icon tour-icon_top tour-details"></span><em><i>Details:</i> Photo stops included Lunch or snack included Admission to cultural sight(s) included Wheel-chair accessible Boat ride included Evening options available</em>
							</li>
							<li>
								<span class="tour-icon tour-price"></span><em><i>Price:</i> starting at $ 160 USD pp (flat-rate max. group size 16)</em>
							</li>
						</ul>
						<div class="button-more">more</div>
					</div>';
						}
					?>
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