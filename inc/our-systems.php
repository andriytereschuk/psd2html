

<section class="our-systems">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="section-icon"><i class="icon-monitor"></i></div>
				<h2>Информационные системы</h2>
				<h3>которые мы внедряем:</h3>							
			</div>


			<div class="swiper-container systems-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide offer1">
						<a href="#">
							<img src="images/offer1.jpg" alt="">
							<span class="bg-overlay">
								<h2>Внедрение 1С</h2>
								<h3>Внедрение и настройка</h3>
							</span>
						</a>							
					</div>

					<div class="swiper-slide offer2">
						<a href="#">
							<img src="images/offer2.jpg" alt="">
							<span class="bg-overlay">
								<h2>Сопровождение 1С</h2>
								<h3>Удаленное он-лайн сопровождение 1С</h3>
							</span>
						</a>							
					</div>
					<div class="swiper-slide offer3">
						<a href="#">
							<img src="images/offer3.jpg" alt="">
							<span class="bg-overlay">
								<h2> Проекты и консалтинг</h2>
								<h3>Удаленное он-лайн сопровождение 1С</h3>
							</span>
						</a>							
					</div>
				</div>
			</div>

			<div class="span12 align-center">
				<a href="#" class="slider-arrows slider-left2"><i class="icon-left"></i></a>
				<a href="#" class="slider-arrows slider-right2"><i class="icon-right"></i></a>				
			</div>			
		</div>		
	</div>

	<!-- Plugin for slider -->
	<script src="js/idangerous.swiper.min.js"></script>
	<!-- Init slider -->
	<script>
	$(function(){
		var mySwiper2 = $('.systems-slider').swiper({
			mode:'horizontal',
			speed: 800,
			slidesPerView: 3,
			roundLengths: true,
			loop: true,
			simulateTouch: false
		});

		$(".slider-left2").click(function(event) {
			event.preventDefault();
			mySwiper2.swipePrev();
		});

		$(".slider-right2").click(function(event) {
			event.preventDefault();
			mySwiper2.swipeNext();
		});	
	});	
	</script>		
</section>