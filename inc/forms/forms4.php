<div id="forms4" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Заказать обратный звонок  </h2>
		<h3>Наш менеджер перезвоним Вам с 9.00 до 18.00 по МСК времени. </h3>
		<form action="">
			<input type="text" placeholder="Имя, фамилия*">
			<input type="text" class="error" placeholder="Телефон*">

			<a href="#" class="blue-btn">Заказать</a>
		</form>
	</div>
</div>

<div id="forms4-thanks" class="modal">
	<div class="modal-dialog form-thanks">
		<a href="#" class="icon-close-popup"></a>
		<h2>Спасибо!</h2>
		<h3>Ваша заявка принята!</h3>
		<p>Ожидайте звонка от компании KODERLINE (с 9.00 до 18.00 по московскому времени).</p>
		<i class="icon-orange-clock"></i>
	</div>
</div>

<script>
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#forms4").addClass("modal-open");
	});

	$("#forms4 .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#forms4-thanks").addClass("modal-open");
		}
	});	
</script>