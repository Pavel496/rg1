@extends('admin.layout')

@section('content')
  <div class="row">
    <div class="col-md-3">          <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          {{-- <img class="profile-user-img img-responsive img-circle"
          src="/adminlte/img/voy2.jpg"
          alt="{{ $user->name }}"> --}}

          <h3 class="profile-username text-center">{{ $user->name }}</h3>

          <p class="text-muted text-center">{{ $user->getRoleNames()->implode(', ') }}</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Email</b> <a class="pull-right">{{ $user->email }}</a>
            </li>
            <li class="list-group-item">
              <b>Публикаций</b> <a class="pull-right">{{ $user->posts->count() }}</a>
            </li>
            @if ($user->roles->count())
            <li class="list-group-item">
              <b>Роли</b> <a class="pull-right">{{ $user->getRoleNames()->implode(', ') }}</a>
            </li>
            @endif
          </ul>

          <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-block"><b>Обновить</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Публикации</h3>
        </div>
        <div class="box-body">
          @forelse ($user->posts as $post)
            <a href="{{ route('admin.posts.edit', $post) }}">
              <strong>{{ $post->title }}</strong>
            </a>
            <br>
            <small class="text-muted">Дата публикации {{ optional($post->published_at)->format('M d') }}</small>
            {{-- $post->published_at->format('d/m/Y')             --}}
            {{-- <p class="text-muted">{{ $post->excerpt }}</p> --}}
            @unless ($loop->last)
              <hr>
            @endunless
          @empty
            <small class="text-muted">Нет публикаций</small>
          @endforelse
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Роли</h3>
        </div>
        <div class="box-body">
          @forelse ($user->roles as $role)
            <strong>{{ $role->name }}</strong>
            @if ($role->permissions->count())
              <br>
              <small class="text-muted">
                Разрешения: {{ $role->permissions->pluck('name')->implode(', ') }}
              </small>
            @endif
            @unless ($loop->last)
              <hr>
            @endunless
          @empty
            <small class="text-muted">Нет ролей</small>
          @endforelse
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Дополнительные разрешения</h3>
        </div>
        <div class="box-body">
          @forelse ($user->permissions as $permission)
            <strong>{{ $permission->name }}</strong>
            @unless ($loop->last)
              <hr>
            @endunless
          @empty
            <small class="text-muted">Нет разрешений</small>
          @endforelse
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-8">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Найдите Ваши вакансии в нашей базе</h3>
        </div>
        <div class="box-body">
          <form method="POST" action="{{ url('sendsms') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="mobil">Телефон</label>
                <input type="text" class="form-control" id="mobil" name="mobil"
                        placeholder="Введите номер мобильного без +7 и без 8">
              </div>
              <button type="submit" class="btn btn-default">Запрос пароля</button>
          </form>
        </div>

        <div class="box-body">
          <form method="POST" action="{{ url('getvacancies') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="code">СМС код</label>
                <input type="text" class="form-control" id="code" name="code"
                placeholder="Введите полученный код">
              </div>
              <button type="submit" class="btn btn-default">Идентификация вакансий</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
