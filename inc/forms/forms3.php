<div id="forms3" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Заказать коммерческое  предложение  </h2>
		<h3>Мы ответим Вам в течении 12 часов. </h3>
		<form action="">
			<input type="text" placeholder="Имя, фамилия*">
			<input type="text" class="error" placeholder="Телефон*">
			<input type="text" placeholder="Email*">
			<input type="text" placeholder="Что желаете внедрить?*">

			<a href="#" class="blue-btn">оставить заявку</a>
		</form>
	</div>
</div>

<div id="forms3-thanks" class="modal">
	<div class="modal-dialog form-thanks">
		<a href="#" class="icon-close-popup"></a>
		<h2>Спасибо!</h2>
		<h3>Ваша заявка принята!</h3>
		<p>Мы свяжемся с Вами в течении 12 часов, по телефону или по почте, чтоб обсудить все детали КП</p>
		<i class="icon-orange-clock"></i>
	</div>
</div>

<script>
	// поки навішав попап на кнопку "Заказать дзвонок". Для іншої кнопки даєш інше id.
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#forms3").addClass("modal-open");
	});

	$("#forms3 .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#forms3-thanks").addClass("modal-open");
		}
	});	
</script>