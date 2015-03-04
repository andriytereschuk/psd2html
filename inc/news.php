

<section class="news">
	<div class="container">
		<div class="row">
			<div class="span12 hidden">
				<div class="section-icon"><i class="icon-book"></i></div>
				<h2>Новости</h2>
				<h3>Ближайшие новости и мероприятия компании</h3>


				<div class="row">
					<!-- main news slider -->
					<div class="swiper-container mnew-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="rez">
									<a href="" class="rez-top">
										<img src="images/rez1.jpg" alt="">
										<div class="rez-info">
											<div class="rez-left">
												<i class="icon-fltr1-white"></i>
											</div>
											<div class="rez-data">21 июля 2014</div>
										</div>
										<i class="icon-right-white"></i>
									</a>

									<div class="rez-bot">
										<h2>Вебинар</h2>
										<p>“Диагностика типовых узких мест скорости работы 1С”.. <a href="">Читать</a></p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="rez">
									<a href="" class="rez-top">
										<img src="images/rez1.jpg" alt="">
										<div class="rez-info">
											<div class="rez-left">
												<i class="icon-fltr2-white"></i>
											</div>
											<div class="rez-data">21 июля 2014</div>
										</div>
										<i class="icon-right-white"></i>
									</a>

									<div class="rez-bot">
										<h2>Продукт-Koderline: CRM</h2>
										<p>“Диагностика типовых узких мест скорости работы 1С”.. <a href="">Регистрация</a></p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="rez">
									<a href="" class="rez-top">
										<img src="images/rez1.jpg" alt="">
										<div class="rez-info">
											<div class="rez-left">
												<i class="icon-fltr3-white"></i>
											</div>
											<div class="rez-data">21 июля 2014</div>
										</div>
										<i class="icon-right-white"></i>
									</a>

									<div class="rez-bot">
										<h2>Вебинар</h2>
										<p>“Диагностика типовых узких мест скорости работы 1С”.. <a href="">Читать</a></p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="rez">
									<a href="" class="rez-top">
										<img src="images/rez1.jpg" alt="">
										<div class="rez-info">
											<div class="rez-left">
												<i class="icon-fltr4-white"></i>
											</div>
											<div class="rez-data">21 июля 2014</div>
										</div>
										<i class="icon-right-white"></i>
									</a>

									<div class="rez-bot">
										<h2>Вебинар</h2>
										<p>“Диагностика типовых узких мест скорости работы 1С”.. <a href="">Читать</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	



			</div>

			<div class="span12 align-center">
				<a href="#" class="blue-btn">Все новости и мероприятия</a>
				<a href="#" class="slider-arrows slider-left2"><i class="icon-left"></i></a>
				<a href="#" class="slider-arrows slider-right2"><i class="icon-right"></i></a>				
			</div>

		</div>	
	</div>


<!-- Init slider -->
<script>
$(function(){
	var mSwiper = $('.mnew-slider').swiper({
		mode:'horizontal',
		speed: 800,
		slidesPerView: 4,
		roundLengths: true,
		loop: true,
		simulateTouch: false
	});

	$(".slider-left2").click(function(event) {
		event.preventDefault();
		mSwiper.swipePrev();
	});

	$(".slider-right2").click(function(event) {
		event.preventDefault();
		mSwiper.swipeNext();
	});	
});	
</script>	
</section>