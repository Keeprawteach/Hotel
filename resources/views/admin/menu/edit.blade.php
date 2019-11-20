@extends('admin_template')

@section('content')

<div class="row">
  {!! Form::model($menu, ['route' => ['menu.update', $menu->id], 'method' => 'PUT', 'files' => true]) !!}
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Menu</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
        <!-- /.box-header -->
            {{ Form::label('name', 'Name : ') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::label('description', 'Description : ') }}
            {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}

            {{ Form::label('price', 'Price : ') }}
            {{ Form::text('price', null, array('class' => 'form-control', 'required' => '')) }}

            {{ Form::label('image', 'Upload Image : ') }}
            {{ Form::file('image') }}

            {!! Html::linkRoute('menu.index', 'Cancel', array($menu->id), array('class' => 'btn btn-danger btn-block')) !!}
            {{ Form::submit('Save', ['class' => 'btn btn-primary btn-block'])}}
      </div>
    </div>
</div>
</div>
{!! Form::close() !!}
</div>
      <!-- /.box -->
@endsection
