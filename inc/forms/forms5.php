<div id="forms5" class="modal">
	<div class="modal-dialog form-small">
		<a href="#" class="icon-close-popup"></a>
		<h2>Отправить контакты на почту</h2>
		<h3>Отправьте контактную информацию компании себе на почтовый ящик:</h3>
		<div class="orange-contacts">
			Телефон, Email, Адрес. Контакты 
			руководителей направлений
		</div>
		<form action="">
			<input type="text" class="error" placeholder="Email*">

			<a href="#" class="blue-btn">Заказать</a>
		</form>
	</div>
</div>

<div id="forms5-thanks" class="modal">
	<div class="modal-dialog form-thanks">
		<a href="#" class="icon-close-popup"></a>
		<h2>Отправлено! </h2>
		<h4>На Ваш почтовый ящик отправлено письмо</h4>
		<p>с контактной информацией компании Koderline.</p>
		<i class="icon-orange-mail"></i>
	</div>
</div>

<script>
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#forms5").addClass("modal-open");
	});

	$("#forms5 .blue-btn").click(function(e) {
		e.preventDefault();
		var validated;
		// перевірка валідації. все гуд вертаєм 1
		validated = 1;
		if (validated == 1) {
			// $( "form" ).submit();
			closePopup();
			$("body").addClass("hidden");
			$("#forms5-thanks").addClass("modal-open");
		}
	});	
</script>