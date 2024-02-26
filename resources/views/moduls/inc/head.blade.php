<?
$message = "";
use App\Models\Basket;
?>
<header>
		<div class="container">
			<div class="head-top">
				<a href="{{route ('home')}}" class="logo-block" id="logo-block"></a>
				<div class="heder-center" id="heder-center">
						<span class="head-span-top"><img src="@yield  ('style-way')images/2021-11-15_18-01-32-675.png"></span>
						<span class="head-span-bot">Найбільший вибір прихованих дверей та дверної фурнітури</span>
				</div>
			</div>
			<nav class="hed-menu">
				 <ul>
				 	<li
                     @if (Request::is('/'))
                        class="active"
                     @endif >
                    <a href="{{route ('home')}}">Головна</a></li>
				 	<li
                      @if (Request::is('production') or Request::is('production/hiddendoor') or Request::is('production/doorfittings'))
                        class="active"
                     @endif >
                     <a href="{{route ('production')}}">Продукція <i class="fa fa-angle-down" aria-hidden="true"></i></a>
				      <ul class="submenu">
				        <li
                        @if (Request::is('production/hiddendoor'))
                        class="active"
                        @endif
                        ><a href="{{route ('hiddendoor')}}">ПРИХОВАНІ ДВЕРІ  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				          <ul class="submenu">
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'primerunderpointer'])}}">ПІД ФАРБУВАННЯ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'underpriming'])}}">ПІД ШТУКАТУРКУ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'veneered'])}}">ШПОНОВАНІ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'withamirror'])}}">ІЗ ДЗЕРКАЛОМ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'withglass'])}}">ЗІ СКЛОМ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'withhplpanel'])}}">З HPL ПАНЕЛЯМИ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'wirhceramicgranitecoating'])}}">ІЗ КЕРАМОГРАНІТУ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'undertheceling'])}}">ПІД СТЕЛЮ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'aluminiumend'])}}">З AL-ТОРЦЕМ</a></li>
					        <li><a href="{{route ('link-two_pages',['hidendoors', 'designerdoors'])}}">ДИЗАЙНЕРСЬКІ ДВЕРІ</a></li>
				      	</ul>
				        </li>
				        <li
                        @if (Request::is('production/doorfittings'))
                        class="active"
                        @endif
                        ><a href="{{route ('doorfittings')}}">ДВЕРНА ФУРНІТУРА  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				          <ul class="submenu">
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'handles'])}}">РУЧКИ</a></li>
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'magnitelocks'])}}">МАГНІТНІ ЗАМКИ</a></li>
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'hidenloops'])}}">ПРИХОВАНІ ПЕТЛІ</a></li>
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'cylinder'])}}">ЦИЛІНДРИ</a></li>
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'slidingsystem'])}}">РОЗСУВНІ СИСТЕМИ</a></li>
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'smartthreshold'])}}">СМАРТ ПОРОГИ</a></li>
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'magneticgugelimiters'])}}">МАГНІТНІ ОБМЕЖУВАЧІ ХОДУ</a></li>
					        <li><a href="{{route ('link-two_pages',['doorfittings', 'hiddentighteners'])}}">ПРИХОВАНІ ДОТЯГУВАЧІ</a></li>
				      	</ul>
				        </li>
				      </ul>
				    </li>
				    <li
                     @if (Request::is('service'))
                    class="active"
                     @endif >
                    <a href="{{route('service')}}">Сервіс</a></li>
				    <li
                     @if (Request::is('aboutus'))
                    class="active"
                     @endif >
                    <a href="{{route('aboutus')}}">Про нас</a></li>
				    <li
                    @if (Request::is('contacts'))
                    class="active"
                     @endif >
                    <a href="{{route('contacts')}}">Контакти</a></li>
				    <li
                    @if (Request::is('stock'))
                    class="active"
                     @endif >
                    <a href="{{route('stock')}}">Акції</a></li>
				    <li
                    @if (Request::is('articles'))
                    class="active"
                     @endif >
                    <a href="{{route('articles')}}">Статті</a></li>
				    <li
                    @if (Request::is('hitsale'))
                    class="active"
                     @endif >
                    <a href="{{route('hitsale')}}">Хід продаж</a></li>
                    <li><div class="head-right">
					<a href="{{route('contacts')}}" class="contact-ico"></a>
					<a href="{{route('basket')}}" class="shopping-cart">
                    <?
                        $sumquil = 0;
                        if (isset ($_SESSION['user'])) {
                       
                          foreach (Basket::all() as $quil)
                          {
                           
                            if  ($quil->user == $_SESSION['user'] && $quil->otherinfo == "besket") {
                                $sumquil = $sumquil + $quil->quiality;
                                echo "";
                            }
                          }
                        }
                       echo "<script>localStorage.setItem('qulityAll',".$sumquil.");</script>";
                    ?>
						<span class="number-basket" id="number-basket" v-text="beskquil"><?echo $sumquil;?></span>
					</a></div></li>
				  </ul>
				</nav>   
		</div>
	</header>
