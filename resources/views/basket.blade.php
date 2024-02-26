<?
use App\Models\Basket;
use App\Models\Merchandise;
use App\Models\Pages;
use App\Models\User;
?>
@extends ('moduls.app')

@section ('title-block') Корзина @endsection

@section ('content')
            <p class="way-page">
                <a href="/">Головна</a> / <a href="{{ route ('basket')}} ">Корзина</a>
            </p>
            <div class="backet">
				<h4><a href="{{ route ('basket')}}">Корзина</a></h4>
                <div class="basket">
                    <table>
                        <tr>
                            <td>№</td>
                            <td>Найменування</td>
                            <td>Ціна за одиницю</td>
                            <td>Кількість</td>
                            <td>Вартість</td>
                            <td></td>
                        </tr>
                        
                            <?
                            session_start();
                            $sum = 0;
                            $i=1;
                            $q=0;
                             if (isset($_SESSION["user"]))
                            {
                            if (count(Basket::where ([["otherinfo", "besket"], ["user", $_SESSION["user"]]])->get()) == 0)
                            {
                            ?>
                                <tr><td colspan=6>Корзина пуста, але це можна змінити ;)</tr>
                                 <script>
                                    localStorage.setItem("qulityAll", 0);
                                </script>
                                <?
                                
                            }
                            else {
                            ?>
                        @foreach (Basket::where ([["otherinfo", "besket"], ["user", $_SESSION["user"]]])->get() as $beskelem)
                        <?
                            $product = Merchandise::where ('id', $beskelem->productid);
                            $prices = (float) str_replace(" ", '', $product->value('price'));
                        ?>
                        <tr>
                            <td><?echo $i;?></td>
                            <td class="info_prod">
                            <?
                                    if ($beskelem->bay == "hiddendoors") {
                                       $parent =  Pages::where('link', $product->value('type'))->value('parent');
                                    ?> <a href="{{route ('hiddendoor_pages', [$parent,  $product->value('type')])}}"><?
                                    }
                                    else { ?>
                                        <a href="{{route ('product_Handle_pages', [$product->value('type'), $product->value('brand'), $product->value('code')])}}"><?}?>
                                <img src="{{$product->value('image')}}" alt="{{$product->value('name')}}">
                                <span>{{$product->value('name')}}</span>
                                </a>
                                <?
                                    if ($beskelem->bay == "hiddendoors") {
                                        ?>
                                         <p class="product-info"><span>Розмір:{{$beskelem->size}}; </span>
                                          <span>Покриття: {{$beskelem->coating}}; </span>
                                          <span>Відкривання: {{$beskelem->opening}}; </span><br>
                                          <span>Додаткова опція: {{$beskelem->modification}}; </span>
                                          <span>Замок: {{$beskelem->lock}};</span></p>
                                        <?
                                    }
                                ?>
                            </td>
                            <td class="price_one">{{$prices}} грн.</td>
                            <td class="quility_td">
                                <a href="{{route ('cheng_besket', ["minus", $beskelem->id])}}">-</a>
                                <input type="number" min="1" max="1000" value="{{$beskelem->quiality}}" readonly class="raz">
                                <a href="{{route ('cheng_besket', ["plus", $beskelem->id])}}">+</a>
                            </td>
                            <td class="sum_price">{{$prices*$beskelem->quiality}} грн.</td>
                            <td class="del_besk_prod"><a href="{{route ('cheng_besket', ["del", $beskelem->id])}}">&times;</a></td>
                        </tr>
                            <? $sum =  $sum + $prices * $beskelem->quiality;
                                $i++;
                                $q = $q+$beskelem->quiality;
                            ?>
                            <script>
                                localStorage.setItem("qulityAll", <?echo $q;?>);
                            </script>
                        @endforeach
                        <?
                        }
                        }
                        ?>
                    </table>
                    <div class="besket_info">
                    </br>
                    <b class="qulity_b" id="qulity_b">
                    Всього товарів: 
                        <span  id="qulity_span">
                        <?echo $q;?>
                        </span>
                        шт.
                     </b>
                     </br>
                     <b  class="sum_b">
                     На суму: 
                        <span  id="sum_span">
                        <?echo $sum;?>
                        </span>
                        грн.
                      </b>
                    </div>
                </div>
                <div class="beccket-button">
                    <div class="button_block_flax">
                    <a href="{{route ('production')}}" id="continue_shopping">Продовжити покупки</a>
                    <? if ($q != 0){ ?>
                     <a id="checkout" href="{{route ('ordering')}}" >Оформити замовлення</a>
                     <? } ?>
                    </div>
                    <a href="{{route('basket')}}" id="reload_besket">Оновити корзину</a>
                </div>
            </div>
@endsection
