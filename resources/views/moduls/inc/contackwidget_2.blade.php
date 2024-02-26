<div class="contackt-hom">
<?
 if (Request::path() != '/' || Request::path() != '')
 {
?>
   @if ($link[0]->contact_image != null)
    <div class="contackt-flax-box">
					<h4><a href="/contacts">Контакти</a></h4>
					<div class="phone-contackt-block">
						<span>ТЕЛЕФОН</span>
						<p>+38 (068) 086 79 02</p>
						<p>+38 (097) 056 70 86</p>
					</div>
					<div class="email-contackt-block">
						<span>E-MAIL</span>
						<p>effdoors@gmail.com</p>
					</div>
					<div class="work-time-contackt-block">
						<span>РЕЖИМ РОБОТИ</span>
						<p>ПН - СБ: с 10-00 до 19-00</p>
						<p>НД - вихідний</p>
					</div>
				</div>
				<div class="wrapper-image-contackt-block">
					<img src="{{$link[0]->contact_image}}" alt="contact-block-image">
				</div>
   @endif
   <?
   }
   ?>
</div>
