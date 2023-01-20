@extends('layouts.app')
@section('title-block')Котнтакты @endsection
@section('content')
	<h1 class="fw-light">Обновление записи</h1>

	<form action="{{route('apart-update-submit', $data->id)}}" method="post">
		@csrf
		<h3>Данные о пользователе</h3>
		<div class="form-group">
			<label for="owner_name">Введите имя</label>
			<input type="text" name="owner_name"  value="{{ $data->owner_name }}" placeholder="Введите имя" id="name" class="form-control">
		</div>

		<div class="form-group">
			<label for="owner_email">Введите email</label>
			<input type="text" name="owner_email" value="{{ $data->owner_email }}" placeholder="Введите email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="owner_phone">Номер телефон</label>
			<input type="tel" name="owner_phone" value="{{ $data->owner_phone }}" placeholder="Введите номер телефон" id="email" class="form-control">
		</div>
        <div class="col-12">
			<label for="owner_address" class="form-label">Адрес</label>
			<input type="text" class="form-control" id="address" name="owner_address" value="{{ $data->owner_address }}"  placeholder="Введите адрес" required="">
		</div>
		<div class="col-md-5">
            <label for="owner_country" class="form-label">Страна</label>
           	<select class="form-select" id="owner_country" name="owner_country" value="{{ $data->owner_country }}"  required="">
             	<option value="">Выберите ...</option>
                <option>Россия</option>
				<option>Таджикистан</option>
				<option>Узбекистан</option>
				<option>Казахстан</option>
            </select>
		</div>
		<hr class="my-4">
		<h3>Инфрмация о недвижимости</h3>
		<div class="col-12">
			<label for="address_apart" class="form-label">Адрес</label>
			<input type="text" class="form-control" id="address_apart" name="address_apart" value="{{ $data->address_apart }}" placeholder="Введите адрес">
		</div>
		<div class="col-6">
			<label for="number_home" class="form-label">Номер дома</label>
			<input type="text" class="form-control" id="number_home" name="number_home"  value="{{ $data->number_home }}"  placeholder="Введите номер дома">
		</div>
		<div class="col-6">
			<label for="number_flat" class="form-label">Номер квартиры</label>
			<input type="text" class="form-control" id="number_flat" name="number_flat" value="{{ $data->number_flat }}" placeholder="Введите номер квартиры">
		</div>
		<div class="col-12">
			<div class="col-12">
				<label for="price_apart" class="form-label">Общая стоимость</label>
              	<div class="input-group has-validation">
					<input type="text" class="form-control" id="price_apart" name="price_apart" value="{{ $data->price_apart }}" placeholder="Введите общая стоимость">
					<span class="input-group-text">₽</span>
             	</div>
            </div>
		</div>
		<div class="col-12">
			<div class="col-12">
				<label for="total_area" class="form-label">Общая площадь</label>
				<div class="input-group has-validation">
					<input type="text" class="form-control" id="total_area" name="total_area" value="{{ $data->total_area }}" placeholder="Введите общая площадь">
					<span class="input-group-text">м²</span>
             	</div>
			</div>
		</div>
		<div class="col-12">
			<div class="col-12">
				<label for="living_space" class="form-label">Жилая площадь</label>
				<div class="input-group has-validation">
					<input type="text" class="form-control" id="living_space" name="living_space" value="{{ $data->living_space }}" placeholder="Введите жилая площадь">
					<span class="input-group-text">м²</span>
             	</div>
			</div>
		</div>
		<div class="col-12">
			<label for="room_apart" class="form-label">Всего комнат в квартире</label>
			<input type="text" class="form-control" id="room_apart" name="room_apart" value="{{ $data->room_apart }}" placeholder="Введите количество комнаты">
		</div>
		<div class="col-12">
			<label for="type_of_home" class="form-label">Тип</label>
		   <select  name="type_of_home"  value="{{ $data->type_of_home }}" id="type_of_home" class="form-control" >
		   <option value="">Тип недвисжимости...</option>
		        <option value="сталинка">сталинка</option>
		        <option value="монолитный">монолитный</option>
		        <option value="панельный">панельный</option>
		        <option value="блочный">блочный</option>
		        <option value="кирпичный">кирпичный</option>
		        <option value="монолитно-кирпичный">монолитно-кирпичный</option>
		        <option value="деревянный">деревянный</option>
		    </select>
		</div>
		<div class="col-12">
			<label for="floor_apart" class="form-label">Этаж</label>
			<input type="text" class="form-control" id="floor_apart" name="floor_apart" value="{{ $data->floor_apart }}" placeholder="Введите этаж">
		</div>

		<div class="form-group">
			<label for="image" class="form-label">Добавить изображение</label>
			<input class="form-control" name="image" value="{{ $data->image }}" type="file" id="formFile">
        </div>
        <hr class="my-4">
		<button type="submit" class="w-100 btn btn-success">Обновить</button>
	</form>
@endsection