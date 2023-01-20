@extends('layouts.app')

@section('title-block'){{ $data->subject }} @endsection

@section('content')
		<div class="alert alert-info">
			<h3>Данные о собственика</h3>
			<p>Идентификатор: {{$data->id}}</p>
			<p>Имя: {{ $data->owner_name }}</p>
			<p>Email: {{ $data->owner_email }}</p>
			<p>Телефон: {{ $data->owner_phone }}</p>
			<p>Адрес: {{ $data->owner_address }}</p>
			<p>Страна: {{ $data->owner_country }}</p>

			<h3>Данные о недвижимости</h3>
			<p>Адрес: {{ $data->address_apart}}</p>
			<p>Номер дома: {{ $data->number_home}}</p>
			<p>Номер квартиры: {{ $data->number_flat}}</p>
			<p>Общая стоимость: {{ $data->price_apart}} ₽</p>
			<p>Общая площадь: {{ $data->total_area}} м²</p>
			<p>Жилая площадь :{{ $data->living_space}} м²</p>
			<p>Всего комната в квартире: {{ $data->room_apart}}</p>
			<p>Тип: {{ $data->type_of_home}}</p>
			<p>Этаж: {{ $data->floor_apart}}</p>

			<p>Изображение квартиры<br><img src="{{ Storage::url('image/news/thumbnail/'.$data->image) }}" height="100" width="100" alt=""></p>
			<p><small>Объявлено:{{ $data->created_at }}</small></p>
			<a href="{{ route('apart-update',$data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
			<a href="{{ route('apart-delete',$data->id) }}"><button class="btn btn-danger">Удалить</button></a>
		</div>
@endsection

