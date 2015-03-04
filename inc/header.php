

<section class="top">
	<div class="container">
		<div class="row">
			<div class="span2">
				<a href="#" title="KoderLine" class="logo icon-logo"></a>
			</div>
			<div class="span10">
				<div class="pull-right">
					<a href="#" id="order-call" title="Оставьте заявку и мы перезвоним Вам в течении 30 минут" class="order-call">заказать звонок</a>					
				</div>

				<div class="pull-right">
				<?php
				$homepage = "/main.php";
				$currentpage = $_SERVER['REQUEST_URI'];
				if($homepage==$currentpage) {
				echo '<a href="#" class="top1" title="Подробно о проектах">
						<i class="icon-top1"></i>
						<div class="project-count" title="anim">
							<ul>
								<li>0</li>
								<li>11</li>
								<li>23</li>
								<li>25</li>
								<li>26</li>
								<li>29</li>
								<li>37</li>
								<li>38</li>
							</ul>
						</div>
						<div class="top-desc">Реализованных проектов</div>
					</a>
					<a href="#" class="top2" title="Наши клиенты">
						<i class="icon-top2"></i>
						<div class="project-count" title="anim">
							<ul>
								<li>0</li>
								<li>14</li>
								<li>23</li>
								<li>43</li>
								<li>52</li>
								<li>65</li>
								<li>93</li>
								<li>102</li>
							</ul>
						</div>
						<div class="top-desc">Активных клиентов</div>						
					</a>';
				}
				else {
				echo '<a href="#" class="top1" title="Подробно о проектах">
						<i class="icon-top1"></i>
						<div class="project-count">
							<ul>
								<li>38</li>
							</ul>
						</div>
						<div class="top-desc">Реализованных проектов</div>
					</a>
					<a href="#" class="top2" title="Наши клиенты">
						<i class="icon-top2"></i>
						<div class="project-count">
							<ul>
								<li>102</li>
							</ul>
						</div>
						<div class="top-desc">Активных клиентов</div>						
					</a>';
				}
				?>				

					<div class="top3">
						<i class="icon-top3"></i>
						<span>+7 (495) 374 55 29</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="menu">
	<div class="container">
		<div class="row">
			<div class="span11">
				<nav>
					<ul>                              
						<li class="has-lvl2"><a href="#">Компания</a>
							<ul>
								<li><a href="#">О нас</a></li>
								<li><a href="#">Проекты </a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Продукты</a>
							<ul>
								<li><a href="#">Универсальные решения 1С</a></li>
								<li><a href="#"> Отраслевые решения 1С</a></li>
								<li><a href="#">Лицензии на 1С: Предприятие 8</a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Услуги</a>
							<ul>
								<li><a href="#"> Проекты и консалтинг</a></li>
								<li><a href="#">Внедрение и доработка</a></li>
								<li><a href="#">Сопровождение</a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Компетенции</a>
							<ul>
								<li><a href="#">МСФО</a></li>
								<li><a href="#">Строительство</a></li>
								<li><a href="#">Торговля</a></li>
							</ul>
						</li>
						<li class="has-lvl2"><a href="#">Контакты</a>
							<ul>
								<li><a href="#"> Контактная информация</a></li>
							</ul>
						</li>
					</ul>
				</nav>				
			</div>

			<!--div class="span4">
				<a href="#" class="call-skype">
					<i class="icon-skype"></i><span class="call-text">позвонить по скайпу</span>
					<span class="call-info">Вы можете позвонить нам  по скайпу</span>
				</a>
			</div-->

			<div class="span1">
				<a href="#" title="1С" class="logo2 icon-logo2"></a>
			</div>
		</div>
	</div>	
</section>