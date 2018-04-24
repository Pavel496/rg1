@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Регистрация {{$perro}}</div>

                <div class="panel-body">


                  <form class="form-horizontal" method="POST" action="{{ url('sendsms') }}">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label for="mobil" class="col-md-4 control-label">Мобильный телефон</label>
                          <div class="col-md-6">
                              <input id="mobil" minlength="10" maxlength="10" type="text" class="form-control"
                                      name="mobil" value="{{ old('mobil', $my_phone) }}" required autofocus
                                      placeholder = "Введите номер без +7 и без 8">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-default">
                                  Получить СМС код
                              </button>
                            </div>
                      </div>
                  </form>



                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        {{-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Мобильный телефон</label> --}}

                            {{-- <div class="col-md-6"> --}}
                        <input class="form-control" type="hidden" name="oldemail" value="{{ old('oldemail', $my_phone) }}">
                            {{-- </div> type="hidden" --}}
                        {{-- </div> --}}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Введите СМС код</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"
                                        name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Повторите СМС код</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Регистрация
                                </button>
                              </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
