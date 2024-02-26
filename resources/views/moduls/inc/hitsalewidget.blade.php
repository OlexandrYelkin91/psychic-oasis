<?
use App\Models\Merchandise;
use App\Models\Basket;
$besket = Basket::all();
$counte = null;
?>
<div class="stock-hom hitsale-widget">
 @csrf
               <?
               if (count($besket)>5)
               {
                $counte = 5;
                ?>
                <h4><a href="/hitsale">ХІТ ПРОДАЖ</a></h4>
				<div class="stock-grid">
                <?
               }
               elseif (count($besket) > 0 && count($besket) < 5)
               {
                $counte = count($besket);
                 ?>
                <h4><a href="/hitsale">ХІТ ПРОДАЖ</a></h4>
				<div class="stock-grid">
                <?
               }
               for ($i = 0; $i < $counte; $i++)
                 {
                    ?>
                        <div>
						<a href="#">
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
