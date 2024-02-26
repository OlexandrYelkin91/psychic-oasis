<?
use App\Models\Pages;
?>
<p class="way-page">
                <a href='{{route ('home')}}'>Головна</a>
            
             @foreach (explode('/', Request::path()) as $way)
                @if ($way == 'production') 
                     / <a href="{{ route ('production')}}">Продукція</a>
                @endif
                @if ($way == 'doorfittings' || $way == 'doorfitting') 
                     / <a href="{{ route ('doorfittings')}}">Дверна фурнітура</a>
                @endif
                @if ($way == 'hidendoors' || $way == 'hiddendoor')
                    / <a href="{{ route ('hiddendoor')}}">Приховані двері</a>
                @endif                
                    @foreach (Pages::all() as $page )
                    @if ($page->link == $way)
                     / <a href="{{ route ('link-two_pages', [$page->parent, $page->link])}}">{{$page->tittle}}</a>
                    @endif
                @endforeach
              @endforeach
            </p>
