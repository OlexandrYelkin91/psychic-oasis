<?
    use App\Models\Brend;
    use App\Models\Merchandise;
    $brend = new Brend ();
?>
<div id="all_goods">
        <table>
          <tr>
            <th>id</th>
            <th>Фото</th>
            <th>Назва</th>
            <th>Ціна</th>
            <th>Код товару</th>
            <th>Характеристики</th>
            <th>Опис</th>
            <th>Дата остального оновлення</th>
            <th></th>
          </tr>
           @foreach (Merchandise::all() as $good)
              <tr id="elem_{{$good->id}}">
                <th>{{$good->id}}</th>
                <th><img src="{{$good->image}}" alt="{{$good->type}}"></th>
                 <th><?
                                    if ($good->type == "hiddendoors") {
                                       $parent =  Pages::where('link', $good->type->value('parent'));
                                    ?> <a href="{{route ('hiddendoor_pages', [$parent,  $good->type])}}"><?
                                    }
                                    else { ?>
                                        <a href="{{route ('product_Handle_pages', [$good->type, $good->brand, $good->code])}}"><?}?>
                {{$good->name}}</a></th>
                <th>{{$good->price}} грн.</th>
                <th>{{$good->code}}</th>
                <th><pre>{{$good->characteristic}}</pre></th>
                <th><pre>{{$good->description}}</pre></th>
                <th>{{$good->updated_at}}</th>
                <th><a href="{{route ('edit_goods', [$good->id])}}" class="edit_button"></a>
               </br><a href="#" class="delete_button" onClick="delElem({{$good->id}}, '{{$good->code}}')"></a>
               </th>
              </tr>

           @endforeach
        </table>
     </div>
