@extends('admin_template')

@section('content')

<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">New Staff or Administrator</h3>
      </div>
      <div class="box-body">
        <div class="form-group">
          <!-- /.box-header -->
          {!! Form::open() !!}
          {{ Form::label('name', 'Name : ') }}
          {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

          {{ Form::label('email', 'Email : ') }}
          {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

          {{ Form::label('password', 'Password : ') }}</br>
          {{ Form::password('password', array('class' => 'form-control')) }}

          {{ Form::label('password_confirmation', 'Password Confirmation: ') }}</br>
          {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

          {{ Form::submit('Create', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.box -->
@endsection
