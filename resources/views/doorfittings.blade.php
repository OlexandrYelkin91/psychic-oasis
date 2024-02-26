@extends ('moduls.app')

@section ('title-block') Дверна фурнітура @endsection

@section ('style-way') ../@endsection

@section ('content')
            <p class="way-page">
               <a href="/">Головна</a> / <a href="/production">Продукція</a> / <a href="/production/doorfittings">Дверна фурнітура</a>
            </p>
            <div class="handles">
				<h4><a href="#">ДВЕРНА ФУРНІТУРА</a></h4>
				<div class="product-content-flex">
					@include ('moduls.inc.sidebar')
					<div class="hidendoors-grid handles-block">
                    @foreach ($pages as $page)
                       <a href=" {{ route('link-two_pages', [$page->parent, $page->link])}}">
							<img src="{{ str_ireplace('public/', '/storage/',  $page->img); }}" alt="{{$page->link}}">
							<span>{{ $page->tittle }}</span>
						</a>
                       @endforeach
					</div>
				</div>
				<!--<div class="article-about-accessries">
						<h4><a href="#">
							СТАТТЯ ПРО ФУРНІТУРУ
						</a></h4>
						
					</div>-->
			</div>
@endsection
