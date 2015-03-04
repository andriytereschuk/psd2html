<div id="forms11" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Заказать услуги  1С специалиста </h2>
		<h3>Оставьте заявку и мы свяжемся с Вами в течении 12 часов.</h3>
		<form action="">
			<input type="text" placeholder="Имя, фамилия*">
			<input type="text"  placeholder="Организация*">
			<input type="text"  placeholder="Телефон*">
			<input type="text"  placeholder="Email*">

			<label for="radio-online">
				<input checked type="radio" name="status" id="radio-online">
				<span>Удаленно (онлайн) </span>
			</label>

			<label for="radio-offline">
				<input type="radio" name="status" id="radio-offline">
				<span>У вас на офисе (оффлайн)</span>
			</label>		

			<a href="#" class="blue-btn">Заказать</a>
		</form>
	</div>
</div>

<div id="forms11-thanks" class="modal">
	<div class="modal-dialog form-thanks">
		<a href="#" class="icon-close-popup"></a>
		<h2>Спасибо!</h2>
		<h3>Ваша заявка принята!  </h3>
		<p>Мы свяжемся с Вами в течении 12 часов, проконсультируем и оформим заказ.</p>
		<i class="icon-orange-clock"></i>
	</div>
</div>

<script>
	// поки навішав попап на кнопку "Заказать дзвонок". Для іншої кнопки даєш інше id.
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#forms11").addClass("modal-open");
	});

	$("#forms11 .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#forms11-thanks").addClass("modal-open");
		}
	});	
</script>