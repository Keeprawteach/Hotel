@extends('admin_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">New Promotion</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
        <!-- /.box-header -->
        {!! Form::open(['route' => 'promotion.store', 'data-parsley-validate' => '', 'files' => true]) !!}

            {{ Form::label('promotion', 'Promo : ') }}
            <select class="form-control" name="menu_id">
                  @foreach($menus as $menu)
                  <option value='{{ $menu->id }}'>{{ $menu->name }}</option>
                  @endforeach
            </select>

            {{ Form::label('image', 'Upload Image : ') }}
            {{ Form::file('image') }}
            {{ Form::submit('Create Promo', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
        {!! Form::close() !!}
      </div>
    </div>
</div>
</div>
</div>
      <!-- /.box -->
@endsection
