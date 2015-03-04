<section class="map">
	<div id="map"></div>

	<div class="feedback">
		<h2>Есть вопросы?</h2>
		<h3>Обращайтесь.</h3>
		<form action="">
			<input type="text" placeholder="Имя">
			<input type="text" placeholder="Телефон">
			<input type="text" placeholder="Email" class="error">
			<textarea placeholder="Сообщение"></textarea>
			<button class="blue-btn">отправить</button>
		</form>
	</div>

	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="js/map.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script>
		$(function(){
			$('input[placeholder],textarea').placeholder();
		});
	</script>
</section>