<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Models\Pages;
use App\Http\Requests\MerchandiseRequest;
use App\Models\Merchandise;
use App\Models\Brend;
use App\Http\Requests\BasketRequest;
use App\Models\Basket;
use App\Models\User;
use App\Models\Order;
session_start();
class BasketController extends Controller
{
    public function addBasketFitting (BasketRequest $req) {
      $besket = new Basket ();
       if ( $besket->where([
       ['productid', $_POST["id"]],
       ['user', $_POST["user"]],
       ['otherinfo', "besket"]
       ])->first() == true)
       {
          $besket->where('productid', $_POST["id"])
          ->update(['quiality' => $besket->where([['productid', $_POST["id"]], ['user', $_POST["user"]]])->value('quiality')+$_POST["quil"]]);
      }
      else {
      $besket->productid     = $_POST["id"]."";
      $besket->user          = $_POST["user"]."";
      $besket->size          = null;
      $besket->coating       = null;
      $besket->opening       = null;
      $besket->lock          = null;
      $besket->bay           = "doorfitting";
      $besket->quiality      = $_POST["quil"]."";
      $besket->price         = null;
      $besket->modification  = null;
      $besket->coment        = null;
      $besket->otherinfo     = "besket";
      $besket->save();
      }
      $_SESSION["user"] =  $_POST["user"];
    }
     public function getquility () {
     $sumquil = 0;
     if (isset ($_SESSION['user'])) {
      foreach (Basket::all() as $quil)
      {
     if  ($quil->user == $_SESSION['user']) {
            $sumquil = $sumquil + $quil->quiality;
        }
      }
      }
     return $sumquil;
    }
    public function chengBasketFitting ($todos, $id) {
        $besket = new Basket ();
        if ($todos == "plus") {
             $besket->where ("id", $id) -> update (['quiality'=>Basket::where ('id', $id)->value('quiality') + 1]);
        }
        if ($todos == "minus" && Basket::where ('id', $id)->value('quiality') > 1 ) {
        
            Basket::where ("id", $id) -> update (['quiality'=> Basket::where ('id', $id)->value('quiality') - 1]);
        }
        if ($todos == "del") {
           Basket::where ("id", $id) -> delete();
        }
       return redirect()->route('basket');
       
    }
    public function addBasketHidenDoors (BasketRequest $req) {
    $besket = new Basket ();
    if ( $besket->where([
       ['productid', $_POST["id"]],['user', $_POST["user"]], ['otherinfo', "besket"],
       ['size', $_POST["size"]], ['coating', $_POST["coating"]], ['opening', $_POST["opening"]],
       ['modification', $_POST["additionaloption"]], ['price', $_POST["price"]]
       ])->first() == true)
       {
          $besket->where('productid', $_POST["id"])
          ->update(['quiality' => $besket->where([['productid', $_POST["id"]], ['user', $_POST["user"]]])->value('quiality')+$_POST["quil"]]);
      }
      else {
      $besket->productid     = $_POST["id"];
      $besket->user          = $_POST["user"];
      $besket->size          = $_POST["size"];
      $besket->coating       = $_POST["coating"];
      $besket->opening       = $_POST["opening"];
      $besket->lock          = $_POST["lock"];
      $besket->bay           = "hiddendoors";
      $besket->quiality      = $_POST["quil"];
      $besket->modification  = $_POST["additionaloption"];
      $besket->price         = $_POST["price"];
      $besket->coment        = null;
      $besket->otherinfo     = "besket";
      $besket->save();
      }
      $_SESSION["user"] =  $_POST["user"];
    }
    public function formalized (BasketRequest $req) {
      $besket = new Basket ();
      $orders = new Order ();
      $besketId = $besket-> where('user', '=', $_SESSION['user'])->get();
      $user = User::where('id','=', $_SESSION['user'])->first();

      $user->surname = $_POST['lastname'];
      $user->name = $_POST['firstname'];
      //$user->fathername = '';
      $user->email = $_POST['email'];
      
      if ($user->phone != null)
      {
        $user->phone = $_POST['phone'];
      } 
      $user->save();
      $orders->phone = $_POST['phone'];
      $orders->user = $_SESSION['user'];
      foreach ($besketId as $order) {
        if ($order->otherinfo == "besket") {
           $orders->besketid .= $order->id.",";
        }
      }

      if ($_POST['delivery'] == 'Адресна доставка') {
        $orders->destination_adress  = $_POST['addresses_input'];	
      }
      elseif ($_POST['delivery'] == 'Віділення Нової Пошти') {
        $orders->destination_adress  = $_POST['newpost_input'];
      }
      else {
        $orders->destination_adress = "Не вказано";
      }
      $orders->destination_place = $_POST['city'];
      $orders->pay = $_POST['upon_receipt'];
      $orders->coment  = $_POST['textarea-ordering'];
      $orders->status  = 'formalized';
      $orders->save();
      foreach ($besketId as $order) {
        $order->otherinfo = 'formalized';
        $order->save();
      }
      return redirect('basket');

    }
     public function works (BasketRequest $req) {
         $orders = Order::where ('id', $_POST['order_id'])->first();
         $besket = new Basket ();
         if (isset($_POST['formalized']) || isset($_POST['finished'])) {
              $orders->status = "works";
              $to = "works";
         }
         elseif (isset($_POST['works'])) {
             $orders->status = "finished";
              $to = "finished";
         }
          $orders->ttn = $_POST['ttn'];
          $orders->coment  = $_POST['coment'];
          $pieces = explode(",", $orders->besketid);
          for ($i=0; $i <  count($pieces)-1; $i++) {
              $besket =  Basket::where ('id', $pieces[$i])->first();
              $besket->otherinfo = $to;
             $besket->save();
          }
          $orders->meneger = $_SESSION["user"];
          $orders->save();
           return redirect('crm');
     }
}
