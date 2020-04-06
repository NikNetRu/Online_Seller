@extends('welcome')

@section('middleBlock')
<div class ="productManager ml-5 mr-5">
<form  method="POST" action="{{ route('addNews') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="addCategory" class="col-sm-2 col-form-label">Введите заголовок</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="addName" name="addName" placeholder="">
    </div>
    <label for="addCategory" class="col-sm-2 col-form-label">Загрузите картинку для главного экрана</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="addImg" name="addImg" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Добавить новость</button>
  </div>
</form>
    
<form  method="POST" action="{{ route('deleteNews') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group row" id="formDelNews">
    <label for="addCategory" class="col-sm-2 col-form-label">Введите заголовок</label>
    <div class="col-sm-10">
      <p><select name="select" size="3" multiple>
        @foreach (DB::table('news')->get() as $example)    
        <option @click="srcImg = '../..//storage/app\\{{$example->srcImg}}'" value="{{$example->name}}">{{$example->name}}</option>
        @endforeach
        </select>
    </div>
    <image v-bind:src="srcImg"  height="200" width = "200" alt=""/>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Удалить новость</button>
</form>

</div>
@endsection