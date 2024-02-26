@extends ('moduls.app')

@section ('title-block') Інтернет магазин Effect-DOORS @endsection

@section ('content')
			<div class="about-home">
				<div class="home-img-doors">
					<img src="images/dors-home.jpg" alt="dors-home">
				</div>
				<div class="about-home-text">
					<p>Інтернет магазин Effect-DOORS спеціалізується на дверній фурнітурі та прихованих дверях будь-якого формату та дизайну.</p>
					<p>Робота з великою кількісттю постачальників дає можливість розширити асортимент магазину і пропонувати приховані двері будь-якого формату. Це допомагає знаходити оптимальне рішення для будь-якого проекту по ціні, якості та дизайнерському рішенню.</p>
					<p>Двері даного інтеренет магазину виготовляються із якісного матеріалу, щоб забезпечити довготривалість служби.<br>На кожен виріб дається гарантія.</p>
				</div>
			</div>
			<div class="our-products">
				<h4><a href="{{route ('production')}}">НАША ПРОДУКЦІЯ</a></h4>
				<div class="our-products-link">
					<a href="{{route ('hiddendoor')}}">
						<img src="images/hidendoors.jpg" alt="hiddendoor">
						<span>ПРИХОВАНІ ДВЕРІ</span>
					</a>
					<a href="{{route ('doorfittings')}}">
						<img src="images/doorfittings.png" alt="delivery">
						<span>ДВЕРНА ФУРНІТУРА</span>
					</a>
				</div>
			</div>
			<div class="sevise-home">
				<h4><a href="/service">СЕРВІС</a></h4>
				<div class="servise-block">
					<div class="servise-block-measurement">
						<a href="#" class="measurement"><img src="images/measurement.jpg" alt="measurement"></a>
						<a href="#" class="delivery">ВИСОКОТОЧНИЙ<br>ЗАМІР</a>
					</div>
					<div class="servise-block-delivery">
						<a href="#" class="delivery"><img src="images/delivery.jpg" alt="delivery"></a>
						<a href="#" class="delivery">ДОСТАВКА</a>
					</div>
					<div class="servise-block-assembling">
						<a href="#" class="assembling"><img src="images/assembling.jpg" alt="assembling"></a>
						<a href="#" class="assembling">МОНТАЖ</a>
					</div>					
				</div>
			</div>
			<div class="aboutus-hom">
				<h4><a href="/aboutus">Про нас</a></h4>
				<div class="aboutus-hom-text">
						<p>Інтернет магазин Effect-DOORS спеціалізується на дверній фурнітурі та прихованих дверях будь-якого формату та дизайну.</p>
						<p>Мода на приховані двері набуває свого піку. Наш інтернет магазин пропонує велику кількість прихованих дверей. Всі вони різняться за внутрішньою будовою полотна, видами коробки, комплектацією прихованої фурнітури та зовнішнім покриттям полотна.</p>
						<p><img src="images/aboutus-1.gif" alt="aboutus-1" class="aboutus-1">За допомогою таких дверей можна втілити будь-який дизайнерський проект або задумку.</p>
						<p>Ми працюємо з великою кількісттю виробників, що дає можливість розширити асортимент магазину і пропонувати приховані двері різного формату.</p>
						<p>Тому наш клієнт може замовити виготовлення дверей будь-якого розміру та виду покриття.</p>
						<div class="aboutus-hom-text-down">
							<img src="images/aboutus-2.png" alt="aboutus-2" class="aboutus-2">
							<div>
								<p>Двері інтеренет магазину Effect-DOORS виготовляються із якісного матеріалу.</p>
								<p>Це забезпечує високу надійність, довготривалість 	експлуатації  та  екологічність.</p>
								<p>На кожен виріб дається гарантія.</p>	
							</div>		
						</div>
				</div>
			</div>
			@include ('moduls.inc.stockwidget')
            @include ('moduls.inc.contackwidget')
			
@endsection
