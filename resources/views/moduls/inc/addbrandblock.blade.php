<?
    use App\Models\Brend;
    $brend = new Brend ();
?>
<div id="add_brend">
		<h3 >Додати Бренд</h3>
		<form action="{{ route('add_brend') }}" method="POST" enctype="multipart/form-data" id="add_brend_form">
        @csrf
			<label for="images_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Зображення бренду</label>
			<br><input type="file" name="images_input" id="images_input" accept="image/*" placeholder="Зображення бренду">

            <br><label for="name_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Назва бренду</label>
			<br><input type="text" name="name_input" id="name_input" placeholder="Назва бренду" >

            <br><label for="contry_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Країна бренду</label>
            <br><input type="text" name="contry_input" id="contry_input" placeholder="Країна бренду" >
             <br><label for="contry_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Категорыя бренду</label>
            <br><select required name="category"  id="brend_cat_select">
                    <option value="">Оберіть категорію бренду</option>
                       <?
                          foreach ($pages::all() as $page) {
                            if (in_array($page->link, $expage1)) {
                               }
                                else {
                            ?> <option value="{{$page->link}}">{{$page->tittle}}</option> <?
                                }
                          }
                      ?> 
                </select>
             <br><button type="submit">Додати Бренд</button>
		</form>
	</div>
