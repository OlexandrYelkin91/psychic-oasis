@extends ('moduls.app')

@section ('title-block') Приховані двері @endsection

@section ('style-way') ../@endsection

@section ('content')
            <p class="way-page">
                <a href="/">Головна</a> / <a href="/production">Продукція</a> / <a href="/production/hiddendoor">Приховані двері</a>
            </p>
            <div class="hiddendoor">
				<h4><a href="/production/hiddendoor">Приховані двері</a></h4>
				<div class="product-content-flex">
					@include ('moduls.inc.sidebar')
					<div class="hidendoors-grid">
                       @foreach ($pages as $page)
                       <a href=" {{ route('link-two_pages', [$page->parent, $page->link])}}">
							<img src="{{ str_ireplace('public/', '/storage/',  $page->img); }}" alt="{{$page->link}}">
							<span>{{ $page->tittle }}</span>
						</a>
                       @endforeach
					</div>
				</div>
				<div class="what-need-hiden-doors">
						<h4><a href="#">
							ЩО ПОТРІБНО ЗНАТИ ПРИ ЗАМОВЛЕННІ<br>ПРИХОВАНИХ ДВЕРЕЙ
						</a></h4>
						<p>
							<ol>
								<li>
									<strong>Завчасне планування.</strong> Коробка прихованих дверей монтується в дверний отвір на початковому етапі ремонту, а дверне полотно установлюється пізніше, після обробки стін.
								</li>
								<li>
								 	<strong>Розміри.</strong> Перед замовленням дверей потрібно чітко знати габарити дверних отворів.
								 	<ul>
								 		<li>
								 			Існують такі дверні стандарти:
								 			<br>
								 			<div class="width-height">
								 				<div>
								 					<strong>Ширина (мм.)</strong>
								 					<br>
								 					600, 700, 800
								 				</div>
								 				<div>
								 					<strong>Висота (мм.)</strong>
								 					<br>
								 					2000
								 				</div>
								 			</div>
								 			Наприклад:
								 			<br>
								 			Дверні прорізи в кухні роблять - 700*2000 см.
								 			<br>
								 			В кімнатах -  800*2000 см.
								 			<br>
								 			В санвузлах – 600*2000 см.
								 		</li>
								 		<li>
								 			В залежності від дизайнерської задумки або з певних об’єктивних причин – розміри дверей можуть бути 
								 			<span class="italic-style">нестандартними:</span>
								 			<div class="width-height">
								 				<div>
								 					<strong>Ширина (мм.)</strong>
								 					<br>
								 					До 1250
								 				</div>
								 				<div>
								 					<strong>Висота (мм.)</strong>
								 					<br>
								 					до 3100   
								 				</div>
								 			</div>                    	           			
                                 		</li>
                                 	</ul>
                                 </li>
                                 <li>
                                 	<strong>Матеріали.</strong> Потрібно зарання визначитися з матеріалами, які будуть використовуватися для обробки і покриття підлоги, стін, дверей, стелі (якщо двері будуть висотою до стелі). Їх товщина враховується при монтажі дверної коробки.
                                 	<img src="../images/463b78e677b5dd9ec65f5ec57e54fc61_700x330.75.png" alt="463b78e677b5dd9ec65f5ec57e54fc61" class="list_3_img">
                                 </li>
                                 <li>
                                 	<strong>Визначитися зі стороною і способом відкривання</strong> дверей. Дана інформація потрібна для виробництва. При установці дверей змінити вибрані параметри буде неможливо.
                                 </li>
                                 <li>
                                 	<strong>Зовнішня обробка.</strong> Ви можете замовити полотно з різним зовнішнім покриттям:
                                 	<ul>
                                 		<li>
                                 			<span class="italic-style">З фабричним покриттям</span> (шпон, дзеркало, скло, керамограніт, з HPL панелями)</li>
                                 		<li>
                                 			<span class="italic-style">Ґрунтоване полотно,</span> фінішна обробка якого виконується з фінішною обробкою стін під час ремонту.
                                 		</li>
                                 	</ul>
                                 </li>
                                 <li>
                                 	<strong>Додатково</strong> Ви можете замовити:
                                 	<ul>
                                 		<li>
                                 			Двері з висувним порогом, що виконує термо-шумоізолюючу функцію
                                 		</li>
                                 		<li>
                                 			Приховану ручку push, яка вмонтовується в дверне полотно, і виконується в такій же обробці, як у полотна
                                 		</li>
                                 		<li>
                                 			Магнітний замок, який забезпечує безшумне відкривання дверей
                                 		</li>
                                 		<li>
                                 			Приховані дотягувачі для легкого закривання дверей
                                 		</li>
                                 		<li>Прихований плінтус.</li>
                                 	</ul>
                                 </li>
							</ol>
						</p>
					</div>
			</div>
@endsection
