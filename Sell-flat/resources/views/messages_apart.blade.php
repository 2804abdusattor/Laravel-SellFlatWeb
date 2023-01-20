@extends('layouts.app')

@section('title-block')Все Сообщения @endsection

@section('content')
	<h1>Квартира по объявлению</h1>
	@foreach($data as $el)
		<div class="alert alert-info">
			<h3>Данные о собственика</h3>
			<p>Идентификатор: {{$el->id}}</p>
			<p>Имя: {{ $el->owner_name }}</p>
			<p>Email: {{ $el->owner_email }}</p>
			<p>Телефон: {{ $el->owner_phone }}</p>
			<p>Адрес: {{ $el->owner_address }}</p>
			<p>Страна: {{ $el->owner_country }}</p>

			<h3>Данные о недвижимости</h3>
			<p>Адрес: {{ $el->address_apart}}</p>
			<p>Номер дома: {{ $el->number_home}}</p>
			<p>Номер квартиры: {{ $el->number_flat}}</p>
			<p>Общая стоимость: {{ $el->price_apart}} ₽</p>
			<p>Общая площадь: {{ $el->total_area}} м²</p>
			<p>Жилая площадь :{{ $el->living_space}} м²</p>
			<p>Всего комната в квартире: {{ $el->room_apart}}</p>
			<p>Тип: {{ $el->type_of_home}}</p>
			<p>Этаж: {{ $el->floor_apart}}</p>
			<p>Фото квартиры<br><img src="{{ Storage::url('image/news/thumbnail/'.$el->image) }}" height="100" width="100" alt=""><br><small>Для больше просмотра фото квартиры нажмите <a href="">тут</a></small></p>
			<p><small>Объявлено:{{ $el->created_at }}</small></p>
			<a href="{{ route('apart-data-one',$el->id) }}"><button class="btn btn-warning">Детальнее</button></a>
		</div>
	@endforeach
@endsection

