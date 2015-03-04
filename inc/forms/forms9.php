<div id="forms9" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Заказать услуги специалиста  </h2>
		<h3>Мы свяжемся с вами в течении 12 часов. </h3>
		<form action="">
			<input type="text" placeholder="Имя, фамилия*">
			<input type="text"  placeholder="Email*">
			<input type="text"  placeholder="Телефон*">

			<a href="#" class="blue-btn">оставить заявку</a>
		</form>
	</div>
</div>

<div id="forms9-thanks" class="modal">
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
		$("#forms9").addClass("modal-open");
	});

	$("#forms9 .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#forms9-thanks").addClass("modal-open");
		}
	});	
</script>