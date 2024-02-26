<?
if(!isset($_SESSION))  { 
  session_start(); 
} 

use App\Models\Basket;
use App\Models\Merchandise;
$sum = 0;
function int($s){return($a=preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s))?$a:'0';}
foreach (Basket::where('user', $_SESSION["user"])->get() as $besket) {
  if ($besket->otherinfo == "besket") {
      if ($besket->price == null)
      {
        $prodictid = Merchandise::where ("id", $besket->productid)->get()[0];
        $sum =  $sum + intval(str_replace( " ", "", $prodictid->price)) * $besket->quiality;
      }
      else {
        $sum = $sum + intval(explode("грн", $besket->price)[0])* $besket->quiality;
      }
  }
};
?>
@extends ('moduls.app')

@section ('title-block') Оформлення замовлення @endsection
@section ('style-way') ../@endsection

@section ('content')
<p class="way-page">
                <a href="/">Головна</a>  / <a href="{{ route ('basket')}} ">Корзина</a> / <a href="{{ route ('ordering')}}">Оформлення замовлення</a>
</p>
<div class="ordering">
    <h4><a href="{{ route ('ordering')}}"> Оформлення замовлення</a></h4>
    <div class="step-heder">
            <div class="number-step" id="number-step">
              1
            </div>
            <div class="text-step" id="text-step">
              Контактні дані
            </div>
            <div class="sum-ordering">
              <span class="to-pay">До сплати:</span>
              <div class="sum-to-pay">{{$sum}} грн.</div>
            </div>
          </div>
      <form action="{{ route ('formalized')}}" method="post">
      @csrf
        <div class="step">          
            <div class="step-1">
              <div class="fex-elem-input">
                <label for="lname"> Прізвище<sup>&#10034;</sup></label>
                <input type="text" id="lname" name="lastname" placeholder="Прізвище">
                <p class="error-input" id="lname-error"><span class="cube-arow"></span>Введіть прізвище!</p>
              </div>
              <div class="fex-elem-input">
                <label for="fname"> Імя<sup>&#10034;</sup></label>
                <input type="text" id="fname" name="firstname" placeholder="Імя">
                <p class="error-input" id="fname-error"><span class="cube-arow"></span>Ввеідеть імя!</p>
              </div>
              <div class="fex-elem-input">
                <label for="email"> Email<sup>&#10034;</sup></label>
                <input type="email" id="email" name="email" placeholder="email@example.com">
                <p class="error-input" id="email-error"><span class="cube-arow"></span>Електронна адреса не вірна!</p>
              </div>
              <div class="fex-elem-input">
                <label for="phone">Контактний телефон<sup>&#10034;</sup></label>
                <input type="text" id="phone" name="phone" placeholder="380111111111" >
                <p class="error-input" id="phone-error"><span class="cube-arow"></span>Не вірний формат телефонного номера!</p>
              </div>
              <div class="fex-elem-input">
                <label for="city"> Місто<sup>&#10034;</sup></label>
                <input type="text" id="city" name="city" placeholder="Київ">
                <p class="error-input" id="city-error"><span class="cube-arow"></span>Введіть місто одержувача!</p>
                <p class="search-result" id="search-city"></p>
              </div>
              <input type="button" value="Далі" class="btn" id="next-step-1">
            </div>
            <div class="step-2">
              <h5>Оберіть спосіб доставки</h5>
              <div class="fex-elem-input">
                <input type="radio" id="addresses"  name="delivery" value="Адресна доставка" onclick="disableSelect(this)" checked>
                <label for="addresses">Адресна доставка</label>
              </div>
              <input type="text" placeholder="Введіть адресу одержувача" id="addresses_input" name="addresses_input" disabled>
              <div class="fex-elem-input">
                <input type="radio" id="newpost"  name="delivery" value="Віділення Нової Пошти" onclick="disableSelect(this)">
                <label for="newpost">Віділення Нової Пошти</label><br>
              </div>
              <input type="text" placeholder="Введіть для пошуку віділення" id="newpost_input" name="newpost_input">
              <h5>Оберіть спосіб оплати</h5>
              <div class="fex-elem-input">
                <input type="radio" id="whenreceived"  name="upon_receipt" value="Оплата при отримані" checked>
                <label for="whenreceived" >Оплата при отримані</label>
              </div>
              <div class="fex-elem-input">
                <input type="radio" id="onlinepay"  name="contact" value="Онлайн" title="Покищо не доступно! Вибачте за незручності!!!" disabled>
                <label for="whenreceived" title="Покищо не доступно, вибачте за несручності">Оплатити Online</label>
              </div>
              <div class="fex-elem-input">
                <input type="button" value="Далі" class="btn" id="next-step-2">
                <a href="#" id="link-step-1">Змінити контактні дані</a>
              </div>
            </div>
            <div class="step-3">
              <div class="fex-elem-input">
                <label>До сплати: </label>
                <input type="text" disabled value="{{$sum}} грн." class="info-ordered" id="topaytotal" name="topaytotal">
              </div>
              <div class="fex-elem-input">
                <label>Отримувач: </label>
                <span class="info-ordered" id="recipienttotal"></span>
              </div>
              <div class="fex-elem-input">
                <label>Доставка: </label>
                <span class="info-ordered" id="deliverytotal"></span>
              </div>
              <div class="fex-elem-input">
                <label>Спосіб оплати: </label>
                <span class="info-ordered" id="paymentmethodtotal"></span>
              </div>
              <div >
              <h5>Якщо потрібено знати додаткову інформацію про замовлення, напешіть нище</h5>
                <textarea id="textarea-ordering"  name="textarea-ordering"></textarea>
              </div>
              <div class="basket">
      <table>
                        <tr>
                            <td>№</td>
                            <td>Найменування</td>
                            <td>Ціна за одиницю</td>
                            <td>Кількість</td>
                            <td>Вартість</td>
                        </tr>
                            <?
                            $sum = 0;
                            $i=1;
                            $q=0;
                             if (isset($_SESSION["user"]))
                            {?>
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
                                          <a href="{{route ('product_Handle_pages', [$product->value('type'), $product->value('brand'), $product->value('id')])}}"><?}?>
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
                                  <a href="#" disabled>-</a>
                                  <input type="number" min="1" max="1000" value="{{$beskelem->quiality}}" readonly class="raz">
                                  <a href="#" disabled>+</a>
                              </td>
                              <td class="sum_price">{{$prices*$beskelem->quiality}} грн.</td>
                          </tr>
                          @endforeach
                          <?
                        }
                        ?>
                    </table>
      </div>
              <div class="fex-elem-input">
              <input type="submit" value="Підтвердити замовлення" class="btn">
              <!-- <a type="submit" class="btn linkbtn" href="#">Підтвердити замовлення</a> -->
                <a href="#" id="link-step-2">Змінити спосіб доставки і оплати</a>
              </div>
              </div>
          </div>
      </form>
      <script src="{{ asset('../scripts/ordered.js') }}"></script>
</div>
@endsection
