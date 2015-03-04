

<section class="filter" id="tab2">
	<div class="container">
		<hr class="hr-top">

		<div class="row">
			<div class="span12">
				<h2><i class="icon-pie-grey"></i>Ключевые сферы применения</h2>
			</div>
		</div>

		<div class="row crm-filter">
			<div class="span2">
				<a href="#" class="filter-btn filter14 chosen" data-tab="1">
					<i class="icon-followplus-grey"></i>
					<span>Контактные лица</span>
				</a>
			</div>

			<div class="span2">
				<a href="#" class="filter-btn filter15" data-tab="2">
					<i class="icon-comm-grey"></i>
					<span>Поддежка взаимоотношений</span>
				</a>
			</div>

			<div class="span2">
				<a href="#" class="filter-btn filter16" data-tab="3">
					<i class="icon-phoneplus-grey"></i>
					<span>Добавление контактов</span>
				</a>
			</div>									
		</div>

		<hr class="blue-bottom-border">

		<div class="row">
			<div class="span12">
					<div class="erp-tab erp1">
						<h3>Контактные лица. Ключевые параметры и факторы</h3>

						<p>Решение «Koderline:Управление взаимоотношениями» является подсистемой конфигурации «Koderline:CRM». Главной целью подсистемы является поддержка взаимоотношений с большим кругом контактных лиц сотрудника.
						Методика решения построена на принципах сетевого взаимодействия между людьми. Система позволяет оцифровать тот круг контактов, который есть у человека, помогает эффективно им управлять и наращивать:
						</p>

						<!-- list -->
						<div class="results">
							<div class="row">
								<div class="span6">
									<div class="res">
										<i></i>
										Структурировать контакты (понять, чем человек может быть интересен) – кристаллизовать сеть	
									</div>
								</div>
								<div class="span6">
									<div class="res">
										<i></i>
										Отслеживать поддержание взаимоотношений гармоничным способом	
									</div>
								</div>
								<div class="span6">
									<div class="res">
										<i></i>
										Зафиксировать интересы контактного лица (чем мы потенциально можем быть полезными контактному лицу)	
									</div>
								</div>
								<div class="span6">
									<div class="res">
										<i></i>
										Наращивать базу контактных лиц, не прилагая при этом мега-усилий		
									</div>
								</div>
							</div>
						</div>
						<!-- end list -->
						<p>
							Особенностью данной подсистемы является то, что она проста в использовании. В нее включен только тот функционал, которым пользуются каждый день. Нет реализации теоретических изысканий на тематику «что такое CRM, Networking, продажи».
						</p>

						<p>
							<b>Наиболее интересные функции решения:</b>
						</p>
						<p>	
								- Контактные лица. Ключевые параметры и факторы<br>
								- Регулярность взаимодействия<br>
								- Добавление новых контактов и наполнение карточки<br>					
						</p>
						<div class="erp-img">
							<img src="images/crm1.jpg" alt="">
						</div>
					</div>

					<div class="erp-tab erp2">
						<h3>Повторные звонки, планирование работы</h3>
						<p>Система уведомляет менеджера о запланированном событии (звонок, письмо, рассылка…). Список задач и всплывающее окно напоминания о событиях не позволяют упустить запланированное действие по Клиенту. История общения с контактным лицом, заполненная менеджером, доступна руководителям подразделения, что позволяет быстро понять предмет общения в случае возможного отсутствия менеджера. </p>
						<p>По итогу обработки события менеджер планирует последующий контакт в своем календаре задач, или переводит обработку информации события другому сотруднику. Интегрированный почтовый клиент помогает удобно обмениваться информацией.
Заполнение информации во вкладке интересы контактного лица формирует список клиентов для рассылки писем с приглашениями на соответствующие семинары, вебинары, другие мероприятия.
Информация о запланированных событиях размещается на рабочем месте менеджера:</p>
						<div class="erp-img">
							<img src="images/crm2.jpg" alt="">
						</div>
					</div>

					<div class="erp-tab erp3">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием, строительством, управлением персонала и многое другое.</p>
						<p>Для подрядных, управляющих и инвестиционных компаний предоставляется возможность управления различными сферами строительного процесса: финансами, бюджетированием,

						<div class="erp-img">
							<img src="images/crm1.jpg" alt="">
						</div>
					</div>
			</div>
		</div>

		<script>
		$(function() {
			$(".filter-btn").click(function(event) {
				event.preventDefault();
				var parentDiv = $(this).closest('.filter');
				var parentId = parentDiv.attr('id');
				if ($(this).hasClass("chosen"))
				{
					return false;
				}

				else {
					$("#"+parentId+" .filter-btn").removeClass("chosen");
					$(this).addClass("chosen");
					$("#"+parentId+" .erp-tab").hide();
					$("#"+parentId+" .erp"+$(this).attr('data-tab')+"").show();
				}
			});
		});
		</script>
	</div>
</section>