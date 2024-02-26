<?
    use App\Models\Brend;
    use App\Models\Merchandise;
    use App\Models\Pages;
    $brend = new Brend ();
    $pages = new Pages ();
    $expage =  array("handles", "primerunderpointer", "underpriming", "veneered", "withamirror", "withglass",
                "withhplpanel", "wirhceramicgranitecoating", "undertheceling", "designerdoors", "aluminiumend",
                "/");
    $expage1 =  array("primerunderpointer", "underpriming", "veneered", "withamirror", "withglass",
                "withhplpanel", "wirhceramicgranitecoating", "undertheceling", "designerdoors", "aluminiumend",
                "/");
?>
@extends ('moduls.app')
@section ('style-way') /../../@endsection
@section ('title-block')Система управління сайтом@endsection

@section ('content')
 
 <div class="data-crm">
    <div id="edit-goods">
             <h3>Редагувати Товар</h3>
 <?
 $id = explode('/', Request::path())[3];
 $goods = Merchandise::where ('id', $id)->first();
 ?>
            <form action="{{ route('edit_marchendase', $id) }}" method="POST" enctype="multipart/form-data" id="add_goods_form">
            @csrf
                <br><label for="way_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Категорія</label>
			    <br><select required name="category"  id="goods_select">
                        <option value="">Оберіть категорію товару</option>
                           <?
                              foreach ($pages::all() as $page) {
                                if (in_array($page->link, $expage)) {
                                   }
                                    else {
                                ?> <option value="{{$page->link}}"
                                <?
                                if ($goods->type == $page->link){
                                    echo 'selected="selected"';
                                }
                                ?>
                                >{{$page->tittle}}</option> <?
                                    }
                              }
                          ?> 
                    </select>

                 <br><label>Зображення товару</label>
                 <br><img class="prev_img_goods" src="{{$goods->image}}" alt="{{$goods->name}}">
                  <br><label for="images_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Змінити зображення товару </label>
                 <br><input type="file" name="images_input" id="images_input" accept="image/*" placeholder="Зображення товару" value="">
               
			    <br><label for="name_input">Назва</label>
			    <br><input type="text" name="name_input" id="name_input" placeholder="Назва" value="{{$goods->name}}">

			    <br><label for="prise_input">Ціна</label>
			    <br><input type="text" name="prise_input" id="prise_input" placeholder="Ціна" value="{{$goods->price}}" >

                <br><label for="code_input">Код товару</label>
			    <br><input type="text" name="code_input" id="code_input" placeholder="Код товару"  value="{{$goods->code}}">

                <br><label for="characteristic_input">Характеристика</label>
			    <br><textarea name="characteristic_input" id="characteristic_input" placeholder="Характеристика" >{{$goods->characteristic}}</textarea>

			    <br><label for="description_input">Опис</label>
			    <br><textarea name="description_input" id="description_input" placeholder="Опис товару" >{{$goods->description}}</textarea>

                <br><label for="size_input" >Розміри</label>
			    <br><input type="text" name="size_input" id="size_input" placeholder="Розміри (Елементи списку перераховувати через кому взявши в двойні лапки)" value="{{$goods->size}}">

                <br><label for="coating_input">Покриття</label>
			    <br><input type="text" name="coating_input" id="coating_input" placeholder="Покриття (Елементи списку перераховувати через кому взявши в двойні лапки)" value="{{$goods->coating}}" >

			    <br><label for="open_input">Відкривання</label>
			    <br><input type="text" name="open_input" id="open_input" placeholder="Відкривання (Елементи списку перераховувати через кому взявши в двойні лапки)" value="{{$goods->opening}}">

                <br><label for="lock_input" id="lock_label">Замок</label>
			    <br><input type="text" name="lock_input" id="lock_input" placeholder="Замок (Елементи списку перераховувати через кому взявши в двойні лапки)" value="{{$goods->lock}}">

                <br><label for="brend_input">Бренд</label>
			    <br><select required name ="brend_input"  id ="brend_select">
                        <option value="не вказано">Оберіть бренд товару</option>
                        @foreach (brend::all() as $brend)
                         <option style="background: url({{$brend->image}}) no-repeat;  background-size: 18px; padding-left: 20px; background-position: 0 1px;" value ="{{$brend->name}}"
                          <?
                                if ($goods->brand == $brend->name){
                                    echo 'selected="selected"';
                                }
                                ?>
                         >{{$brend->name }}</option>
                        @endforeach
                    </select>

                <br><label for="modification_input">Модифікація</label>
			    <br><input type="text" name="modification_input" id="modification_input" placeholder="Модифікація (Елементи списку перераховувати через кому взявши в двойні лапки)" value="{{$goods->modification}}">

                <br><button type="submit">Редагувати товар</button>
                
		    </form>
        </div>
</div>
@endsection
