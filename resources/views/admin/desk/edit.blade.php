@extends('admin_template')

@section('content')

<div class="row">
  {!! Form::model($desk, ['route' => ['desk.update', $desk->id], 'method' => 'PUT']) !!}
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Table</h3>
      </div>
      <div class="box-body">
        <div class="form-group">
          <!-- /.box-header -->
          {!! Form::open(['route' => 'desk.store', 'data-parsley-validate' => '']) !!}
          {{ Form::label('name', 'Name : ') }}
          {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        </br>
          {{ Form::label('capacity', 'Capacity : ') }}
          {{ Form::text('capacity', null, array('class' => 'form-control', 'required' => '')) }}
        </br>
        {{ Form::label('available', 'Available : ') }}
        <select class="form-control" name="available">
          <option value='1'>AVAILABLE</option>
          <option value='0'>BOOKED</option>
        </select>

        {!! Html::linkRoute('desk.index', 'Cancel', array($desk->id), array('class' => 'btn btn-danger btn-block', 'style' => 'margin-top:25px;')) !!}
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
