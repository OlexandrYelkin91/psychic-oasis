<?
use App\Models\Brend;
$goods = $merchandise[0];
foreach (Brend::all() as $brend) {
    if ($goods->brand == $brend->name ) {
        $contry_brand =  $brend->contry;
    }
}
$contry_c_word = str_replace("я", "ї", $contry_brand );
?>
@extends ('moduls.app')

@section ('title-block'){{$link[0]->tittle}} {{$goods->brand}}@endsection

@section ('style-way')../../../../../@endsection
@section ('content')
            @include ('moduls.inc.mapwidget')
            @csrf

            <div class="dsalt product_page">
                <h4><a href="#">{{ $link[0]->tittle }} {{$goods->brand}}</a></h4>
                <h5>{{$link[0]->tittle}} {{$goods->brand}} з {{$contry_c_word }}</h5>
                <div class="product_flex">
                 @include ('moduls.inc.sidebar')
                <div class="characteristics product_blick">
                @if ($link[0]->link == $goods->type)
                    <div class="ware-flex">
						<img src="{{$goods->image}}" alt="{{$link[0]->link}}">
						<div class="parameters">
							<label >{{$goods->name}}</label>
                            <label >Виробник:</label>
							<select disabled name="brand" id="brand" class="code-bay">
								<option value="">{{$goods->brand}} ({{$contry_brand}})</option>
							</select>
                            <label >Код-товара:</label>
							<select disabled name="code" id="code" class="code-bay">
								<option value="{{$goods->code}}">{{$goods->code}}</option>
							</select>
                            <label >Наявність:</label>
							<select disabled name="quality" id="quality" class="code-bay">
								<option value="">Під замовлення</option>
							</select>
                            <label >Ціна:</label>
							<select disabled name="price" id="price" class="code-bay">
								<option value="{{$goods->price}}">{{$goods->price}} грн.</option>
							</select>
                            <label >Колір покриття {{$goods->brand}}:</label>
							<select disabled name="color" id="color" class="code-bay">
								<option value="{{$goods->coating}}">{{$goods->coating}}</option>
							</select>
                            <div class="qulity_flex">
                            <label for="qulity">Кількість:</label>
                            <input type="number" name="qulity"   id="qulity" value="1" min="1" max="10000" >
                            </div>
                            </br>
							<a href="#" class="bay-batton" onClick=" AddBasketfottingPage({{$goods->id}})">КУПИТИ</a>
						</div>
					</div>
					<div class="ware-characteristics-description">
						<div class="swicher">
							<button  id="characteristics_button">ХАРАКТЕРИСТИКИ</button>
							<button id="description_button">ОПИС</button>
						</div>
                        <pre id="characteristics_text">
                            <br>{{$goods->characteristic}}
                        </pre>
					    <pre id="description_text">
                            <br>{{$goods->description  }}
                         </pre>
					</div>
                @endif
                </div>
				</div>
			</div>
			@include ('moduls.inc.hitsalewidget')	
			@include ('moduls.inc.contackwidget')
@endsection
