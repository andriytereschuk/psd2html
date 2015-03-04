

<section class="filter">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="top-section">
					<div class="up-section">
						<i class="icon-speach"></i>
					</div>
					<h1>Проекты и отзывы</h1>
					<h2>Смотрите информацию о всех наших проектах и также отзывы</h2>					
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="span3">
				<a href="#" class="filter-btn filter1 chosen">
					<i class="icon-proj2"></i>
					<span>Все проекты</span>
				</a>
			</div>

			<div class="span3">
				<a href="#" class="filter-btn filter2">
					<i class="icon-check"></i>
					<span>Завершенные проекты</span>
				</a>
			</div>

			<div class="span3">
				<a href="#" class="filter-btn filter3">
					<i class="icon-reload"></i>
					<span>Текущие проекты</span>
				</a>
			</div>

			<div class="span3">
				<a href="#" class="filter-btn filter4">
					<i class="icon-future"></i>
					<span>Будущие проекты</span>
				</a>
			</div>									
		</div>

		<hr class="blue-bottom-border">

		<script>
		$(function() {
			$(".filter-btn").click(function() {
				event.preventDefault();
				if ($(this).hasClass("chosen"))
				{
					$(this).removeClass("chosen");
				}

				else {
					$(".filter-btn").removeClass("chosen");
					$(this).addClass("chosen");
				}
			});
		});
		</script>
	</div>

	<div class="container container-white">
		<div class="row">
			<div class="span4">
				<div class="filter-h">Вид деятельности компании:</div>
				<select class="filter-select">
					<option>Строительство и лизинг</option>
					<option>Вид №2</option>
					<option>Вид №3</option>
				</select>
			</div>
			<div class="span4">
				<div class="filter-h">Компетенция:</div>
				<select class="filter-select">
					<option>Документооборот</option>
					<option>Вид №2</option>
					<option>Вид №3</option>
				</select>				
			</div>
			<div class="span4">
				<div class="filter-h">Продукт:</div>
				<select class="filter-select">
					<option>Бухгалтерия 8.2</option>
					<option>Вид №2</option>
					<option>Вид №3</option>
				</select>				
			</div>				
		</div>
	</div>	
</section>