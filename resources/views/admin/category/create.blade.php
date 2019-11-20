@extends('admin_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">New Category</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
        <!-- /.box-header -->
        {!! Form::open(['route' => 'category.store', 'data-parsley-validate' => '']) !!}
            {{ Form::label('name', 'Name : ') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::submit('Create Category', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
        {!! Form::close() !!}
      </div>
    </div>
</div>
</div>
</div>
      <!-- /.box -->
@endsection
