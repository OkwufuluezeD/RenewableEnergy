@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Distributor</div>
        <div class="panel-body">
          {{Form::model($distributor, ['route' => ['distributors.update', $distributor->id], 'class' => 'form-horizontal', 'role' => 'form'])}}
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            @include('admin.distributors._form')
          {{Form::close()}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
