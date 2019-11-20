@extends('admin_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">New Menu</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
        <!-- /.box-header -->
        {!! Form::open(['route' => 'menu.store', 'data-parsley-validate' => '', 'files' => true]) !!}
            {{ Form::label('name', 'Name : ') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::label('category', 'Category : ') }}
            <select class="form-control" name="category_id">
                  @foreach($categories as $category)
                  <option value='{{ $category->id }}'>{{ $category->name }}</option>
                  @endforeach
            </select>
            {{ Form::label('price', 'Price : ') }}
            {{ Form::text('price', null, array('class' => 'form-control', 'required' => '')) }}

            {{ Form::label('description', 'Description : ') }}
            {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}

            {{ Form::label('image', 'Upload Image : ') }}
            {{ Form::file('image', null, array('class' => 'form-control', 'required' => '')) }}
            {{ Form::submit('Create Menu', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
        {!! Form::close() !!}
      </div>
    </div>
</div>
</div>
</div>
      <!-- /.box -->
@endsection
