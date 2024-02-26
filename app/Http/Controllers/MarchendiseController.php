<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MerchandiseRequest;
use App\Models\Merchandise;
use App\Models\Brend;


class MarchendiseController extends Controller
{
    public function AddGoods(MerchandiseRequest  $req) {
        $Merchandise = new Merchandise ();
        $imag = $req->file('images_input')->store('/public/images', 'local');
        $Merchandise->type            =  $req -> input('category');
        $Merchandise->image           =  str_ireplace('public/', '/storage/',  $imag);
        $Merchandise->name            =  $req -> input('name_input')."";
        $Merchandise->price           =  $req -> input('prise_input')."";
        $Merchandise->code            =  $req -> input('code_input')."";
        $Merchandise->characteristic  =  $req -> input('characteristic_input')."";
        $Merchandise->description     =  $req -> input('description_input')."";
        $Merchandise->size            =  $req -> input('size_input')."";
        $Merchandise->coating         =  $req -> input('coating_input')."";
        $Merchandise->opening         =  $req -> input('open_input')."";
        $Merchandise->lock            =  $req -> input('lock_input')."";
        $Merchandise->bay             =  "";
        $Merchandise->producer        =  "";
        $Merchandise->quantity        =  "";
        $Merchandise->brand           =  $req -> input('brend_input')."";
        $Merchandise->modification    =  $req -> input('modification_input')."";
        $Merchandise->additionally    =  "";
        $Merchandise->save();
        return redirect()->route('crm')->with('success', 'Товар успішно дадано!');
    }
    public function AddBrends (MerchandiseRequest  $req) {
        $brend = new Brend ();
        $imag = $req->file('images_input')->store('/public/images', 'local');
        $brend->image          =  str_ireplace('public/', '/storage/',  $imag);
        $brend->name           =  $req -> input('name_input')."";
        $brend->contry         =  $req -> input('contry_input')."";
        $brend->other          =  $req -> input('category')."";
        $brend->save();
        return redirect()->route('crm')->with('success', 'Бренд успішно дадано!');
    }
    public function DeleteMarchendase ($id) {
         Merchandise::find($id)->delete();
    }
    public function EditMarchendase ($id, MerchandiseRequest  $req) {
        $Merchandise = Merchandise::where ('id', $id)->first();
        if ($req->file('images_input') != null) {
            $imag = $req->file('images_input')->store('/public/images', 'local');
            $Merchandise->image           =  str_ireplace('public/', '/storage/',  $imag);
            
        }
            $Merchandise->type            =  $req -> input('category');
            $Merchandise->name            =  $req -> input('name_input')."";
            $Merchandise->price           =  $req -> input('prise_input')."";
            $Merchandise->code            =  $req -> input('code_input')."";
            $Merchandise->characteristic  =  $req -> input('characteristic_input')."";
            $Merchandise->description     =  $req -> input('description_input')."";
            $Merchandise->size            =  $req -> input('size_input')."";
            $Merchandise->coating         =  $req -> input('coating_input')."";
            $Merchandise->opening         =  $req -> input('open_input')."";
            $Merchandise->lock            =  $req -> input('lock_input')."";
            $Merchandise->brand           =  $req -> input('brend_input')."";
            $Merchandise->modification    =  $req -> input('modification_input')."";
            $Merchandise->save();
            return redirect()->route('crm')->with('success', 'Товар успішно змінено!');
    }
}
