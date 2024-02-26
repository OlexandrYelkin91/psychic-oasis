@extends ('moduls.app')

@section ('title-block'){{$link[0]->tittle}}@endsection

@section ('style-way')../../../../@endsection
@section ('content')
            @include ('moduls.inc.mapwidget')
            <?
            function arrtoselect  ($word) {
            $arr = explode(",", $word);
                for ($i=0; count($arr)>$i;$i++) {
                    $elem = str_ireplace('"', ' ',  $arr[$i]);
                    echo "<option value='".$elem."'>".$elem."</option>";
                }
            }
            ?>
            <div class="dsalt">
            @csrf
                <h4><a href="#">{{ $link[0]->tittle }}</a></h4>
                <div class="characteristics">
                @foreach ($merchandise as $goods)
                @if ($link[0]->link == $goods->type )
                    <div class="ware-flex">
						<img src="{{$goods->image}}" alt="{{$link[0]->link}}">
						<div class="parameters">
							<label >Код товару:</label>
							<select disabled name="code" id="code" class="code-bay">
								<option value="{{$goods->code}}" selected>{{$goods->code}}</option>
							</select>
							<label for="size">Розмір:</label>
							<select name="size" id="size">
								<option value="0" selected>Не обрано</option>
                                <?
                                    arrtoselect ($goods->size);
                                ?>
							</select>
							<br>
							<label for="coating">Покриття:</label>
							<select name="coating" id="coating">
								<option value="0" selected>Не обрано</option>
                                <?
                                    arrtoselect ($goods->coating );
                                ?>
							</select>
							<br>
							<label for="opening">Відкриваня:</label>
							<select name="opening" id="opening">
								<option value="0" selected>Не обрано</option>
                                <?
                                    arrtoselect ($goods->opening );
                                ?>
							</select>
							<br>
							<label for="additional-option">Додаткова опція:</label>
							<select name="additional-option" id="additional-option">
                            <option value="0" selected>Без додаткової опції</option>
                                <option value="without_aluminum_end_face">Без алюмінієвого торця</option>
								<option value="with_aluminum_end">З алюмінієвим торцем</option>
							</select>
							<br>
							<label for="lock">Замок:</label>
							<select name="lock" id="lock">
								<option value="none" selected>Без замка</option>
                                <?
                                    arrtoselect ($goods->lock  );
                                ?>
							</select>
							<label>Ціна:</label>
							<select disabled name="price" id="price" class="price-bay">
								<option value="{{$goods->price }}" selected>{{$goods->price }} грн.</option>
							</select>
							<a href="#" class="bay-batton"  onClick=" AddBasketHidendoor({{$goods->id}}, 1)">КУПИТИ</a>
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
                @endforeach
                
				</div>
			</div>
			@include ('moduls.inc.hitsalewidget')	
			@include ('moduls.inc.contackwidget')
@endsection
