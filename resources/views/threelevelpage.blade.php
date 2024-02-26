@extends ('moduls.app')

@section ('title-block'){{$link[0]->tittle}}@endsection

@section ('style-way')../../../@endsection
@section ('content')
            @include ('moduls.inc.mapwidget')
			<div class="handles">
				<h4><a href="#">{{ $link[0]->tittle }}</a></h4>
				<div class="product-content-flex">
					@include ('moduls.inc.sidebar')
					<div class="hiden-doors-shpon">
                        @foreach ($pages as $page)
                           <?
                               foreach ($pagesall as $parent) {
                                    if ($parent->link == $page->parent) {
                                        switch ($parent->parent) {
                                            case 'hidendoors':
                                            $pages = 'hiddendoor_pages';
                                            break;
                                            case 'doorfittings':
                                            $pages = 'doorfittings_pages';
                                            break;
                                            default:
                                            $pages = 'link-two_pages';
                                        }
                                    }
                               }
                            ?>
                            <div class="flex-hiden-doors-elem">
                            
                               <a href=" {{ route($pages, [$page->parent, $page->link])}}">
                                   <div class="wrapper-img-page">
							        <img src="{{ str_ireplace('public/', '/storage/',  $page->img); }}" alt="{{$page->link}}">
                                    </div>
							        <span>{{ $page->tittle }}</span>
						        </a>
                            </div>
                       @endforeach
					</div>
				</div>
			@include ('moduls.inc.hitsalewidget')	
			@include ('moduls.inc.contackwidget')
@endsection
