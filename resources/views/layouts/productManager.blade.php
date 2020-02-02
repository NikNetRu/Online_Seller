@extends('welcome')

@section('middleBlock')
<form  method="POST" action="{{ route('addCategory') }}">
  @csrf
  <div class="form-group row">
    <label for="addCategory" class="col-sm-2 col-form-label">Введите категорию</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addCategory" name="addCategory" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Добавить категорию</button>
  </div>
</form>

<form  method="POST" action="{{ route('deleteCategory') }}">
  @csrf
  <div class="form-group row">
    <label for="addCategory" class="col-sm-2 col-form-label">Введите категорию</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addCategory" name="addCategory" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Удалить категорию с входящими продуктами</button>
  </div>
</form>

<form  method="POST" action="{{ route('addProduct') }}">
  @csrf
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Добавление продукта</label>
    
    <label for="name" class="col-sm-2 col-form-label">Наименование</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="">
    </div>
    
    <label for="category" class="col-sm-2 col-form-label">Категория</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="category" name="category" placeholder="">
    </div>

    <label for="image" class="col-sm-2 col-form-label">Изображение</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="category" name="image" placeholder="">
    </div>
 
    <label for="description" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="description" name="description" placeholder="">
    </div>
 
    <label for="price" class="col-sm-2 col-form-label">Цена</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" name="price" placeholder="">
    </div>
    
    <button type="submit" class="btn btn-primary mb-2">Подтвердить</button>
  </div>
</form>

<form  method="POST" action="{{ route('deleteProduct') }}">
  @csrf
  <div class="form-group row">
    <label for="addCategory" class="col-sm-2 col-form-label">Введите Продукт</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addCategory" name="addCategory" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Удалить продукт</button>
  </div>
</form>

<form  method="POST" action="{{ route('setDiscount') }}">
  @csrf
  <div class="form-group row">
    <label for="addCategory" class="col-sm-2 col-form-label">Введите Продукт</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addCategory" name="addCategory" placeholder="">
    </div>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addCategory" name="addCategory" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Установить скидку</button>
  </div>
</form>
@endsection