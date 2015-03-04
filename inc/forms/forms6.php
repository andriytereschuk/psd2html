<div id="forms6" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Написать письмо</h2>
		<h3>Оставьте нам сообщение и мы ответим Вам в течении 12 часов.   </h3>
		<form action="">
			<input type="text" placeholder="Имя, фамилия*">
			<input type="text"  placeholder="Email*">
			<textarea class="error" placeholder="Сообщение*"></textarea>

			<a href="#" class="blue-btn">отправить сообщение</a>
		</form>
	</div>
</div>

<div id="forms6-thanks" class="modal">
	<div class="modal-dialog form-thanks">
		<a href="#" class="icon-close-popup"></a>
		<h2>Спасибо!</h2>
		<h3>Ваше сообщение успешно отправлено!</h3>
		<p>Мы Вам ответим в течении 12 часов. </p>
		<i class="icon-orange-clock"></i>
	</div>
</div>

<script>
	// поки навішав попап на кнопку "Заказать дзвонок". Для іншої кнопки даєш інше id.
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#forms6").addClass("modal-open");
	});

	$("#forms6 .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#forms6-thanks").addClass("modal-open");
		}
	});	
</script>