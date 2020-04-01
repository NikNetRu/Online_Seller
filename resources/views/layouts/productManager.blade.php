@extends('welcome')

@section('middleBlock')
<div class ="productManager ml-5 mr-5">
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
    <label for="addCategory" class="col-sm-2 col-form-label">Выберите категорию</label>
    <div class="col-sm-10">
        <select class="form-control" id="deleteThisCategory" name="deleteThisCategory">
                @foreach (DB::table('categorys')->get() as $category)
                <option value = "{{$category->name}}">{{$category->name}}</option>
                @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Удалить категорию с входящими продуктами</button>
  </div>
</form>

<form  method="POST" action="{{ route('addProduct') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label class="col-sm-12 col-form-label">Добавление продукта</label>
    
    <label for="name" class="col-sm-2 col-form-label">Наименование</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="">
    </div>
    
    <label for="category" class="col-sm-2 col-form-label">Категория</label>
    <div class="col-sm-10">
        <select class="form-control" id="selectCategory" name="selectCategory">
                @foreach (DB::table('categorys')->get() as $category)
                <option value = "{{$category->name}}">{{$category->name}}</option>
                @endforeach
        </select>
    </div>

    <label for="image" class="col-sm-2 col-form-label">Изображение</label>
    <div class="col-sm-10">
        <input type="file"  id="image" name="image" placeholder="">
    </div>
 
    <label for="description" class="col-sm-2 col-form-label">Короткое описание</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="description" name="description" placeholder="">
    </div>
    
    <label for="description" class="col-sm-2 col-form-label">Подробное описание</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="longDescription" name="longDescription" placeholder="">
        </textarea>
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
    <label for="addCategory" class="col-sm-2 col-form-label">Введите категорию</label>
    <div class="col-sm-10">
        <select class="form-control" id="selectedCategoryForDelProduct" name="selectedCategoryForDelProduct">
                @foreach (DB::table('categorys')->get() as $category)
                <option value = "{{$category->name}}">{{$category->name}}</option>
                @endforeach
        </select>
    </div>
    @isset($status)
    @if ($status = 'selected')
        <select class="form-control" id="selectedProduct" name="selectedProduct">
                @foreach ($products as $product)
                <option value = "{{$product->id}}">{{$product->name}}</option>
                @endforeach
        </select>
    <button type="submit" class="btn btn-primary mb-2">Удалить продукт</button>
    @endisset
    @else
    <button type="submit" class="btn btn-primary mb-2">Выбрать категорию</button>
    @endif
  </div>
</form>
</div>

@endsection