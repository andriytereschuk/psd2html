

<section class="filter">
	<div class="container">
		<hr class="hr-top">

		<div class="row">
			<div class="span12">
				<h2><i class="icon-pie-grey"></i>Ключевые сферы применения</h2>
			</div>
		</div>

		<div class="row">
			<div class="span2">
				<a href="#" class="filter-btn filter5 chosen" data-tab="1">
					<i class="icon-plant"></i>
					<span>Производство</span>
				</a>
			</div>

			<div class="span2">
				<a href="#" class="filter-btn filter6" data-tab="2">
					<i class="icon-molot"></i>
					<span>Строительство</span>
				</a>
			</div>

			<div class="span2">
				<a href="#" class="filter-btn filter7" data-tab="3">
					<i class="icon-busket-dark"></i>
					<span>Торговля</span>
				</a>
			</div>									
		</div>

		<hr class="blue-bottom-border">

		<div class="row">
			<div class="span12">
					<div class="erp-tab erp1">
						<h3>Специализированные решения на базе 1С для строительных компаний и организаций</h3>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием, строительством, управлением персонала и многое другое.</p>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием, строительством, управлением персонала и многое другое.</p>
						<div class="erp-img">
							<img src="images/erp1.jpg" alt="">
						</div>
					</div>

					<div class="erp-tab erp2">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием, строительством, управлением персонала и многое другое.</p>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием, строительством, управлением персонала и многое другое.</p>
						<div class="erp-img">
							<img src="images/erp2.jpg" alt="">
						</div>
					</div>

					<div class="erp-tab erp3">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием, строительством, управлением персонала и многое другое.</p>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием, строительством, управлением персонала и многое другое.</p>
						<div class="erp-img">
							<img src="images/erp3.jpg" alt="">
						</div>
					</div>
			</div>
		</div>

		<script>
		$(function() {
			$(".filter-btn").click(function() {
				event.preventDefault();
				if ($(this).hasClass("chosen"))
				{
					return false;
				}

				else {
					$(".filter-btn").removeClass("chosen");
					$(this).addClass("chosen");
					$(".erp-tab").hide();
					$(".erp"+$(this).attr('data-tab')+"").show();
				}
			});
		});
		</script>
	</div>
</section>