@extends('admin.layout')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Персональные данные</h3>
        </div>
        <div class="box-body">

          @include('admin.partials.error-messages')

          <form method="POST" action="{{ route('admin.users.update', $user) }}">
            {{ csrf_field() }} {{ method_field('PUT') }}

            <div class="form-group">
              <label for="name">Имя:</label>
              <input name="name" value="{{ old('name', $user->name) }}" class="form-control">
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input name="email" value="{{ old('email', $user->email) }}" class="form-control">
            </div>

            <div class="form-group">
              <label for="password">Пароль:</label>
              <input type="password" name="password" class="form-control" placeholder= "Пароль">
              <span class="help-block">Оставьте незаполненным, чтобы не менять пароль</span>
            </div>

            <div class="form-group">
              <label for="password_confirmation">Подтверждение пароля:</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder= "Подтверждение пароля">
              <span class="help-block">Оставьте незаполненным, чтобы не менять пароль</span>
            </div>

            <button class="btn btn-primary btn-block">Обновить</button>
          </form>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Роли</h3>
        </div>
        <div class="box-body">

          @role('Admin')
          <form method="POST" action="{{ route('admin.users.roles.update', $user) }}">
              {{ csrf_field() }} {{ method_field('PUT') }}

              @include('admin.roles.checkboxes')

              <button class="btn btn-primary btn-block">Обновить роли</button>
          </form>
          @else
            <ul class="list-group">
              @forelse ($user->roles as $role)
                <li class="list-group-item">{{ $role->name }}</li>
              @empty
                <li class="list-group-item">Нет ролей</li>
              @endforelse
            </ul>
          @endrole

        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Разрешения</h3>
        </div>
        <div class="box-body">

          @role('Admin')
          <form method="POST" action="{{ route('admin.users.permissions.update', $user) }}">
              {{ csrf_field() }} {{ method_field('PUT') }}

              @include('admin.permissions.checkboxes', ['model' => $user])

              <button class="btn btn-primary btn-block">Обновить разрешения</button>
          </form>
          @else
            <ul class="list-group">
              @forelse ($user->permissions as $permission)
                <li class="list-group-item">{{ $permission->name }}</li>
              @empty
                <li class="list-group-item">Нет разрешений</li>
              @endforelse
            </ul>
          @endrole

        </div>
      </div>
    </div>


    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Регистрация телефона.<br>Поможет найти все Ваши вакансии</h3>
        </div>
        <div class="box-body">

          <form method="POST" action="{{ url('sendsms') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="mobil">Телефон</label>
                <input type="text" class="form-control" id="mobil" name="mobil"
                        value="{{ old('mobil') }}" placeholder="Введите номер без +7 и без 8">
              </div>
              <button type="submit" class="btn btn-default">Зопрос пароля</button>
          </form>

        </div>

        <div class="box-body">

          <form method="POST" action="{{ route('admin.users.permissions.update', $user) }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputName2">СМС код</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Введите полученный код">
              </div>
              <button type="submit" class="btn btn-default">Регистрация телефона</button>
          </form>

        </div>
      </div>
    </div>


  </div>
@endsection
