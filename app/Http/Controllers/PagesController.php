<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Models\Pages;
use App\Http\Requests\MerchandiseRequest;
use App\Models\Merchandise;
use App\Models\Brend;


class PagesController extends Controller {

    public function submit(PagesRequest  $req) {
        $pages = new Pages ();
        $pages->tittle =  $req -> input('text_input');
        $pages->link  =  $req -> input('way_input');
        $pages->parent =  $req -> input('parent_input');
        $imag = $req->file('images_input')->store('/public/images', 'local');
        $imag2 = $req->file('images_contact_input')->store('/public/images', 'local');
        $pages->img =  str_ireplace('public/', '/storage/',  $imag);
        $pages->contact_image =  str_ireplace('public/', '/storage/',  $imag2);
        $pages->save();

        return redirect()->route('crm')->with('success', 'Сторінку успішно дадано!');
    }
    public function hiddendoor () {
        return view('hiddendoor', ['pages' => Pages::where('parent', '=' , 'hidendoors')->get()]);
    }
    public function doorfittings () {
        return view('doorfittings', ['pages' => Pages::where('parent', '=' , 'doorfittings')->get()]);
    }
    public function linkTwo ($parent, $link) {
        $linktitle = Pages::where('link', '=', $link)->get();

        if ($link == 'magnitelocks' || $link == 'hidenloops' || $link == 'cylinder' ||
        $link == 'slidingsystem' || $link == 'smartthreshold' || $link == 'magneticgugelimiters' ||
        $link == 'hiddentighteners') {
            return view('doorfittingspage', ['link' => $linktitle, 'pagesall'=>Pages::all(),
            'merchandise' =>  Merchandise::all(), 'brends' => false]);
        }
        else {
            return view('threelevelpage',
            ['pages' => Pages::where('parent', '=' , $link
            )->get(), 'link' => $linktitle, 'pagesall'=> Pages::all()]);
        }
    }
    public function hiddendoor_page ($parent, $link) {
        $linktitle = Pages::where('link', '=', $link)->get();
        return view ('hiddendoorspage',
            ['pages' => Pages::where('parent', '=' , $link)->get(),
            'link' => $linktitle,'pagesall'=>Pages::all(), 'merchandise'=>Merchandise::all()]);
    }
     public function doorfittings_pages ($parent, $link) {
         $linktitle = Pages::where('link', '=', $link)->get();
         return view('doorfittingspage', ['link' => $linktitle, 'merchandise' =>  Merchandise::all(), 'brends'=> false]);
    }
    
    public function doorfittings_brend_pages ($parent, $link, $brend) {
        if (isset(Merchandise::where('code', '=' , $brend)->get()[0]-> id)) {
            $linktitle = Pages::where('link', '=', $parent)->get();
            return view ('doorfittingsproduct',
            ['pages' => Pages::where('parent', '=' , $parent)->get(),
            'link' => $linktitle,'pagesall'=>Pages::all(), 'merchandise'=>  Merchandise::where('code', '=' , $brend)->get()]);
        }
        else {
        $linktitle = Pages::where('link', '=', $link)->get();
            return view('doorfittingspage', ['link' => $linktitle, 'merchandise' =>  Merchandise::where('brand', '=' , $brend)->get(),
            'brends'=> true ]) ;
        
        }
    }
    public function product_Handle_pages ($link, $brend, $id) {
        $linktitle = Pages::where('link', '=', $link)->get();
        return view ('doorfittingsproduct',
            ['pages' => Pages::where('parent', '=' , $link)->get(),
            'link' => $linktitle,'pagesall'=>Pages::all(), 'merchandise'=>  Merchandise::where('code', '=' , $id)->get()]);
    }
}
