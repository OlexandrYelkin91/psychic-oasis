@extends ('moduls.app')

@section ('title-block') Хіт продаж @endsection

@section ('content')
<?
use App\Models\Merchandise;
use App\Models\Basket;
$besket = Basket::all();
?>
            <p class="way-page">
                <a href="/">Головна</a> / <a href="/hitsale">Хіт продаж</a>
            </p>
            <div class="hitsale">
				<h4><a href="/hitsale">Хіт продаж</a></h4>
				<div class="hitsale-content">
                    @csrf
					@include ('moduls.inc.sidebar')
					<div class="stock-grid">
					<? for ($i = 0; $i < count($besket); $i++)
                         {
                            ?>
                        <div>
						<a href="#" disabled>
							<img src="{{Merchandise::where("id", Basket::all()[$i]->productid)->value("image")}}" alt="{{Merchandise::where("id", Basket::all()[$i]->productid)->value("name")}}">
							<span class="head-stock-grid-el">{{Merchandise::where("id", Basket::all()[$i]->productid)->value("name")}}</span><br>
							<span class="price-stock-grid-el">{{Merchandise::where("id", Basket::all()[$i]->productid)->value("price")}} ГРН</span><br>
						</a>
						<a href="#" class="bay-batton"  onClick=" AddBasketfotting({{Merchandise::where("id", Basket::all()[$i]->productid)->value("id")}}, 1)">КУПИТИ</a>
					    </div>
                    <?
                 }
			    ?>
					</div>
				</div>
			</div>
@endsection
