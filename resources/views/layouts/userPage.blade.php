@extends('welcome')

@section('middleBlock')
<form  method="POST" action="{{ route('changePersonalData') }}">
  @csrf
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="staticEmail" value="{{Auth::user()->email}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="realName" class="col-sm-2 col-form-label">Имя</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="realName" name="realName" placeholder="{{Auth::user()->realName}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="realSurname" class="col-sm-2 col-form-label">Фамилия</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="realSurname" name="realSurname" placeholder="{{Auth::user()->realSurname}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phone" name="phone" placeholder="{{Auth::user()->phone}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="adress" class="col-sm-2 col-form-label">Адрес доставки</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="adress" name="adress" placeholder="{{Auth::user()->adress}}">
    </div>
  </div>
    <button type="submit" class="btn btn-primary mb-2">Подтвердить</button>
</form>
@endsection