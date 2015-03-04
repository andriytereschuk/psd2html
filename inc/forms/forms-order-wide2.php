<div id="form-order-wide2" class="modal">
	<div class="modal-dialog form-wide">
		<a href="#" class="icon-close-popup"></a>
		<h2>Консультация по выбору программы </h2>
		<h3>свяжитесь с нашим специалистом прямо сейчас</h3>
		<div class="form-wide-left">
			<h4>Позвоните нам и оформите заказ</h4>
			<a href="#" class="red-btn"><i class="icon-phone-white"></i>(495) 374 55 39 - Заказать дзвонок</a>
		</div>
		<div class="form-wide-right">
			<h4>Оставьте заявку и мы свяжемся с Вами</h4>
			<a href="#" class="blue-btn"><i class="icon-pencil"></i>Оставить заявку</a>			
		</div>
		<div class="clr"></div>
	</div>
</div>

<script>
	// поки навішав попап на кнопку "Заказать дзвонок". Для іншої кнопки даєш інше id.
	$("#order-call").click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("body").addClass("hidden");
		$("#form-order-wide2").addClass("modal-open");
	});
</script>