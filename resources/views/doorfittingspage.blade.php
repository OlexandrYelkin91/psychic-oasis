<?
use App\Models\Brend;
$produc = "";
$goods_brends = array();
foreach ($merchandise as $goods) {
    if ($brends) {
        $produc = $goods->brand;
    }
    if ($link[0]->link == $goods->type) {
        $goods_brends[] = $goods->brand;
    }
}
$result = array_unique($goods_brends);
?>
@extends ('moduls.app')

@section ('title-block'){{$link[0]->tittle}}@endsection

@section ('style-way')../../../../@endsection
@section ('content')
    @include ('moduls.inc.mapwidget')
    @csrf
    <div class="dsalt">
        <h4><a href="#">{{ $link[0]->tittle }} <? if ($brends && $produc != "") {
                ?> від <? echo $produc;
                } ?></a></h4>
        <div class="stock-content">
            @include ('moduls.inc.sidebar')
            <div>
                <div class="stock-grid brends">
                    <?
                    if (!$brends) {
                    foreach (Brend::all() as $brend) {
                    if ($link[0]->link == $brend->other) {
                    ?>
                    <div>
                        <a href="{{route ('doorfittings_brend_pages', [$link[0]->parent, $link[0]->link , $brend->name])}}"
                           class="active-non-border">
                            <img src="{{$brend->image}}" alt="{{$brend->name}}">
                            <span class="head-stock-grid-el">{{$brend->name}}</span>
                        </a>
                    </div>
                    <?
                    }
                    if ($link[0]->parent == "handles" && $brend->other == "handles" && in_array($brend->name, $result)) {
                    ?>
                    <div>
                        <a href="{{route ('doorfittings_brend_pages', [$link[0]->parent, $link[0]->link , $brend->name])}}"
                           class="active-non-border">
                            <img src="{{$brend->image}}" alt="{{$brend->name}}">
                            <span class="head-stock-grid-el">{{$brend->name}}</span>
                        </a>
                    </div>
                    <?
                    }

                    }
                    }
                    ?>
                </div>
                <div class="stock-grid">
                    <?
                    if ($link[0]->parent == "handles") {
                        $funct = 'product_Handle_pages';
                    } elseif ($link[0]->parent == "doorfittings") {
                        $funct = 'product_pages';
                    }
                    foreach ($merchandise as $goods) {
                    if ($link[0]->link == $goods->type) {
                    if ($funct == 'product_pages') {
                        $arr_rout = [$goods->type, $goods->brand, $goods->code];
                    } elseif ($funct == 'product_Handle_pages') {
                        $arr_rout = [$goods->type, $goods->brand, $goods->code];
                    }
                    ?>
                    <div>
                        <a href="{{route ($funct, $arr_rout)}}" class="active-non-border">
                            <img src="{{$goods->image}}" alt="{{$goods->name}}">
                            <span class="head-stock-grid-el">{{$goods->name}}</span>
                            <span class="price-stock-grid-el">{{$goods->price}} ГРН</span><br>
                        </a>
                        <a onclick="AddBasketfotting ({{$goods->id}}, 1)" class="bay-batton">КУПИТИ</a>
                    </div>
                    <?
                    }
                    }
                    $brends = false;
                    ?>
                </div>
            </div>
        </div>
    </div>
    @include ('moduls.inc.hitsalewidget')
    @include ('moduls.inc.contackwidget')
@endsection
