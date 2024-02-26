<?php
session_start();
use App\Models\Order;
use App\Models\Pages;
use App\Models\Merchandise;
use App\Models\Basket;

$pages = new Pages ();
$expage =  array("handles", "primerunderpointer", "underpriming", "veneered", "withamirror", "withglass",
                "withhplpanel", "wirhceramicgranitecoating", "undertheceling", "designerdoors", "aluminiumend",
                "/");
$expage1 =  array("primerunderpointer", "underpriming", "veneered", "withamirror", "withglass",
                "withhplpanel", "wirhceramicgranitecoating", "undertheceling", "designerdoors", "aluminiumend",
                "/");
 foreach ($pages::all() as $page) {
    foreach (Merchandise::all() as $goods) {
        if ($goods->type == $page->link &&  $page->parent == "hidendoors") {
            $expage[] = $page->link;
         }
    }
 }
 function GenerateCode () {
    $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
    $max=2;
    $size=StrLen($chars)-1;
    $password=null;

    while($max--)
    $password.=$chars[rand(0,$size)];
    $code = $password."-".count(Merchandise::all())+1;
    echo ($code);
 }
 $formalized = Order::where ('status', 'formalized');
 if ($formalized->count() == 0)
 {
    $neworder = "";
 }
 else {
    $neworder = "  ".$formalized->count();
 }
?>
@extends ('moduls.app')
@section ('style-way') ./@endsection
@section ('title-block')Система управління сайтом@endsection

@section ('content')
<div class="admin_panel">
 @include('moduls.inc.infocrm')
 <input type="button" class="burger_menu" id="burger_menu"  tittle="Достати меню">
<div class="sidebar-crm" id="sidebar-crm">
    <h3 id="orders_h3">Замовлення <span class="new-orders-counts"> {{$neworder}}</span></h3>
    <h3 id="add_pages_h3">Додати сторінку</h3>
    <h3 id="add_brend_h3">Додати Бренд</h3>
    <h3 id="add_goods_h3">Додати Товар</h3>
    <h3 id="all_goods_h3">Всі товари</h3>
   
</div>
<div class="data-crm">
    @include('moduls.inc.addpageblock')
    @include('moduls.inc.addbrandblock')
    @include('moduls.inc.addgoodsblock')
     @include('moduls.inc.orders')
     @include('moduls.inc.allgoodsblock')
</div>
</div>
 
@endsection
