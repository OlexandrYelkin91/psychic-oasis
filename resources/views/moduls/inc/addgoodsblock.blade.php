<?
    use App\Models\Brend;
    use App\Models\Merchandise;
    $brend = new Brend ();
?>
<div id="add_goods">
         <h3>Додати Товар</h3>
        <form action="{{ route('add_goods') }}" method="POST" enctype="multipart/form-data" id="add_goods_form">
        @csrf
            <br><label for="way_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Категорія</label>
			<br><select required name="category"  id="goods_select">
                    <option value="">Оберіть категорію товару</option>
                       <?
                          foreach ($pages::all() as $page) {
                            if (in_array($page->link, $expage)) {
                               }
                                else {
                            ?> <option value="{{$page->link}}">{{$page->tittle}}</option> <?
                                }
                          }
                      ?> 
                </select>
			<br><label for="images_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Зображення товару </label>
			<br><input type="file" name="images_input" id="images_input" accept="image/*" placeholder="Зображення товару">

			<br><label for="name_input">Назва</label>
			<br><input type="text" name="name_input" id="name_input" placeholder="Назва" >

			<br><label for="prise_input">Ціна</label>
			<br><input type="text" name="prise_input" id="prise_input" placeholder="Ціна" >

            <br><label for="code_input">Код товару</label>
			<br><input type="text" name="code_input" id="code_input" placeholder="Код товару"  value="<?GenerateCode ();?>">

            <br><label for="characteristic_input">Характеристика</label>
			<br><textarea name="characteristic_input" id="characteristic_input" placeholder="Характеристика"></textarea>

			<br><label for="description_input">Опис</label>
			<br><textarea name="description_input" id="description_input" placeholder="Опис товару" ></textarea>

            <br><label for="size_input" >Розміри</label>
			<br><input type="text" name="size_input" id="size_input" placeholder="Розміри (Елементи списку перераховувати через кому взявши в двойні лапки)" >

            <br><label for="coating_input">Покриття</label>
			<br><input type="text" name="coating_input" id="coating_input" placeholder="Покриття (Елементи списку перераховувати через кому взявши в двойні лапки)" >

			<br><label for="open_input">Відкривання</label>
			<br><input type="text" name="open_input" id="open_input" placeholder="Відкривання (Елементи списку перераховувати через кому взявши в двойні лапки)" >

            <br><label for="lock_input" id="lock_label">Замок</label>
			<br><input type="text" name="lock_input" id="lock_input" placeholder="Замок (Елементи списку перераховувати через кому взявши в двойні лапки)" >

            <br><label for="brend_input">Бренд</label>
			<br><select required name ="brend_input"  id ="brend_select">
                    <option value="не вказано">Оберіть бренд товару</option>
                    @foreach (brend::all() as $brend)
                     <option style="background: url({{$brend->image}}) no-repeat;  background-size: 18px; padding-left: 20px; background-position: 0 1px;" value ="{{$brend->name}}">{{$brend->name }}</option>
                    @endforeach
                </select>

            <br><label for="modification_input">Модифікація</label>
			<br><input type="text" name="modification_input" id="modification_input" placeholder="Модифікація (Елементи списку перераховувати через кому взявши в двойні лапки)" >

            <br><button type="submit">Додати товар</button>
		</form>
    </div>
