<div id="forms7" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Заказать программу:  </h2>
		<div class="orange-contacts">"1С: Комплексная автоматизация 8" </div>
		<h3>Оставьте заявку и наш менеджер свяжеться с вами в течении 12 часов в рабочее время.</h3>
		<form action="">
			<input type="text" placeholder="Имя, фамилия*">
			<input type="text"  placeholder="Email*">
			<input type="text"  placeholder="Телефон*">

			<a href="#" class="blue-btn">оставить заявку</a>
		</form>
	</div>
</div>

<div id="forms7-thanks" class="modal">
	<div class="modal-dialog form-thanks">
		<a href="#" class="icon-close-popup"></a>
		<h2>Спасибо!</h2>
		<h3>Ваша заявка успешно отправлена! </h3>
		<p>Мы свяжемся с Вами в течении 12 часов, чтоб уточнить версию программы и оформить заказ.</p>
		<i class="icon-orange-clock"></i>
	</div>
</div>

<script>
	// поки навішав попап на кнопку "Заказать дзвонок". Для іншої кнопки даєш інше id.
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#forms7").addClass("modal-open");
	});

	$("#forms7 .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#forms7-thanks").addClass("modal-open");
		}
	});	
</script>