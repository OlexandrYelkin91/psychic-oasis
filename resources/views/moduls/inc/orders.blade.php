<?php
use App\Models\Merchandise;
use App\Models\Basket;
use App\Models\Order;
use App\Models\User;
use App\Models\Pages;

function GetOrders ($status) {
    $ordered = Order::where ('status', $status)->get();
    $month = ["", "січня", "лютого", "березня", "квітня", "травня", "червня", "липня", "серпня", "вересня", "жовтня", "листопада", "грудня"];
    $id = "";
    switch ($status) {
                case 'formalized':
                $mass = "нових замовлень";
                $title = "Нові замовлення";
                break;
                case 'works':
                $mass = "замовлень в роботі";
                $title = "Замовлення в роботі";
                break;
                case 'finished':
                $mass = "завершених замовлень";
                $title = "Завершені замовлення";
                break;
            }
       if (!isset($ordered[0])) {
            echo "<span><center>Немає ".$mass."</center></span>";
        }
       if (isset($ordered[0])) {
           ?>
           <h3>
           <?echo $title;
           ?>
           <a href="#" id= "<? echo $status."_link_open";?>" onclick="OpenHideOrdered('<? echo $status;?>')" class="awesomeIcon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg></a></h3>
           <div class="<? echo $status;?> ">
           
           <?
           foreach ($ordered as $order) {
                $userInfo = User::where ('id', $order->user)->get();
                $menegerInfo =  User::where ('id', $order->meneger)->get();
                $id = $order->id;
                ?>
                <div class="orders_block_info">
                    <div class="order_namber_date">Замовлення № {{$order->id}} від
                        <?
                            $time = explode(" ", $order->updated_at);
                            $timetoword = explode("-", $time[0]); 
                            echo $timetoword[2]." ". $month[+$timetoword[1]]." ".$timetoword[0]."р.";
                           
                        ?>
                        <a href="#" class="caret-down" onclick="Deploy(this)"></a>
                    </div>
                    <form action="{{ route ('works')}}" method="post">
                    <div class= "order_info_grid">
                        <?
                        if ($status == 'works' || $status == 'finished') {
                                if ($order->meneger != null) {
                                echo "<span>Менеджер:</span><span>".$menegerInfo[0]->surname." ".$menegerInfo[0]->name." ".$menegerInfo[0]->fathername." (ID: ".$menegerInfo[0]->id.", Email: ".$menegerInfo[0]->email.")</span>";
                                }
                            }
                        ?>
                        <span>Отримувач:</span><span>{{$userInfo[0]->name}} {{$userInfo[0]->surname}} {{$userInfo[0]->fathername}}</span>
                        <span>Email:</span><span>{{$userInfo[0]->email}}</span>
                        <span>Доставка в:</span><span>{{$order->destination_place}}</span>
                        <span>За адресою:</span><span>
                            <?
                                if ($order->destination_adress == "" || $order->destination_adress == null) {
                                    echo "Не вказано";
                                }
                                else {
                                    echo $order->destination_adress;
                                }
                            ?>
                        </span>
                        <span>Телефон:</span><span>{{$order->phone}}</span>
                        <span>Оплата:</span><span>{{$order->pay}}</span>
                        <span>Коментар:</span><span><textarea name="coment">{{$order->coment}}</textarea></span>
                     </div>
                    <div class="basket">
                        <table>
                        
                            <tr>
                                <td>Код товару</td>
                                <td>Найменування</td>
                                <td>Інша інформація</td>
                                <td>Ціна за одиницю</td>
                                <td>Кількість</td>
                                <td>Вартість</td>
                            </tr>
                                <?
                                $pieces = explode(",", $order->besketid);
                                for ($i=0; $i <  count($pieces)-1; $i++)
                                {
                                $besket =  Basket::where ('id', $pieces[$i])->first();
                                $merchandise = Merchandise::where ('id', $besket->productid)->first();
                                $new_str = explode(",",str_replace(" ", '', $merchandise->price));
                                $parent =  Pages::where('link', $merchandise->value('type'))->value('parent');
                                 ?>
                            <tr>
                                <td>
                                    <?
                                        if ($merchandise->bay == "hiddendoors") {
                                    ?>
                                     <a href="{{route ('hiddendoor_pages', [$parent,  $merchandise->type])}}"></a>
                                     <? }
                                     else { ?>
                                        <a href="{{route ('product_Handle_pages', [$merchandise->type, $merchandise->brand, $merchandise->code])}}">
                                            <span>{{$merchandise->code}}</span>
                                        </a>
                                    <?}?>
                                </td>
                                <td class="info_prod"><img src="{{$merchandise->image}}" alt="{{$merchandise->name}}">
                                <span>{{$merchandise->name }}</span>
                                </td>
                                <td><span><? echo $besket->size." ". $besket->coating." ". $besket->opening." ". $besket->lock." ". $besket->modification." ";?></td>
                                <td><span>{{$new_str[0]}}</span></td>
                                <td><span>{{$besket->quiality}}</span></td>
                                <td><?echo (int)$new_str[0]*$besket->quiality?></span>
                            </tr>
                            <?
                            }
                            ?>
                        </table>
                    </div>
                     ТТН: <input type="number" name="ttn" placeholder="Введіть ТТН" value="{{$order->ttn}}">
                     <?
                        switch ($status) {
                            case 'formalized':
                            echo "<input type='submit' name='".$status."'  value='Взяти замовлення в роботу'>";
                            break;
                            case 'works':
                            echo  " <input type='submit' name='".$status."' value='Завершити замовлення'>";
                            break;
                            case 'finished':
                            echo  " <input type='submit' name='".$status."' value='Повернути в роботу'>";
                            break;
                        }
                       
                     ?>
                      @csrf
                      <input type="hidden" value="<? echo $order->id;?>" name="order_id">
                       <input type="hidden" value="<? echo $status;?>" name="status_id">
                        </form>
                       </div>
                        <? } ?> 
                    </div>
           <?
       }
}
?>
<div id="all-orders">
    <?
        GetOrders ("formalized");
        GetOrders ("works");
        GetOrders ("finished");
    ?>
</div>
