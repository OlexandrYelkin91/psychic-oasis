<div id="add_pages">
		<h3>Додати сторінку</h3>
		<form action="{{ route('add_pages') }}" method="POST" enctype="multipart/form-data" id="add_pages_form">
        @csrf
			<label for="images_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Зображення посилання</label>
			<br><input type="file" name="images_input" id="images_input" accept="image/*" placeholder="Зображення посилання">

            <br><label for="text_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Текст посилання</label>
			<br><input type="text" name="text_input" id="text_input" placeholder="Текст посилання" >

            <br><label for="parent_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Відображення батьківсього розділу (в адресній строці браузера)</label>
            <br><input type="text" name="parent_input" id="parent_input" placeholder="Відображення батьківсього розділу (в адресній строці браузера)" >

            <br><label for="way_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Назва поточного розділу в браузері (в адресній строці браузера)</label>
			<br><input type="text" name="way_input" id="way_input" placeholder="Назва поточного розділу в браузері (в адресній строці браузера)" >

            <br><label for="images_input"><i class="fa-thin fa-asterisk" title='Обовязково заповнити'></i> Зображення в блоці "Контакти"</label>
			<br><input type="file" name="images_contact_input" id="images_contact_input" accept="image/*" placeholder='Зображення в блоці "Контакти"'>

            <br><button type="submit">Додати сторінку</button>
		</form>
	</div>
