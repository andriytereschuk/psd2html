<div id="form-order" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Заказать программу 1С </h2>
		<h3>Заполните заявку и в течении 12 часов наш менеджер свяжется с вами</h3>
		<form action="">
			<input type="text" placeholder="Имя, фамилия*">
			<input type="text" class="error" placeholder="Телефон*">
			<input type="text" placeholder="Email*">
			<select>
				<option>Выберете программу</option>
				<option>C1</option>
				<option>C2</option>
			</select>

			<a href="#" class="blue-btn">Заказать</a>
		</form>
	</div>
</div>

<div id="form-order-thanks" class="modal">
	<div class="modal-dialog form-thanks">
		<a href="#" class="icon-close-popup"></a>
		<h2>Спасибо!</h2>
		<h3>Ваша заявка принята!</h3>
		<p>Наш менеджер свяжеться с вами в течении 12 часов
		Поможет в выборе нужной вам версии программы
		и оформит заказ</p>
		<i class="icon-orange-clock"></i>
	</div>
</div>

<script>
	// поки навішав попап на кнопку "Заказать дзвонок". Для іншої кнопки даєш інше id.
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#form-order").addClass("modal-open");
	});

	$("#form-order .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#form-order-thanks").addClass("modal-open");
		}
	});
</script>