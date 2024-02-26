@extends ('moduls.app')

@section ('title-block') Контакти @endsection

@section ('content')
            <p class="way-page">
                <a href="{{route('home')}}">Головна</a> / <a href="{{route('contacts')}}">Контакти</a>
            </p>
            <div class="stock">
				<h4><a href="{{route('contacts')}}">Контакти</a></h4>
            </div>
@endsection
