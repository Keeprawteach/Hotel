@extends('admin_template')

@section('content')

<div class="row">
  {!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'PUT']) !!}
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Category</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
        <!-- /.box-header -->
        {!! Form::open(['route' => 'category.store', 'data-parsley-validate' => '']) !!}
            {{ Form::label('name', 'Name : ') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {!! Html::linkRoute('category.index', 'Cancel', array($category->id), array('class' => 'btn btn-danger btn-block', 'style' => 'margin-top:25px;')) !!}
            {{ Form::submit('Save', ['class' => 'btn btn-primary btn-block'])}}
        {!! Form::close() !!}
      </div>
    </div>
</div>
</div>
{!! Form::close() !!}
</div>
      <!-- /.box -->
@endsection
