@extends('admin.layout')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Обновить роль</h3>
        </div>
        <div class="box-body">

          @include('admin.partials.error-messages')

          <form method="POST" action="{{ route('admin.roles.update', $role) }}">
            {{ method_field('PUT') }}

            @include('admin.roles.form')

            <button class="btn btn-primary btn-block">Обновить роль</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
