<div id="form-order-wide" class="modal">
	<div class="modal-dialog form-wide">
		<a href="#" class="icon-close-popup"></a>
		<h2>Вы можете заказать программу 1С </h2>
		<h3>позвонив нам или оставив заявку</h3>
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
		$("#form-order-wide").addClass("modal-open");
	});
</script>