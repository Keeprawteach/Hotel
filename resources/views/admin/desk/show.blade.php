@extends('admin_template')

@section('content')

<div class="row">
  {!! Form::model($desk, ['route' => ['desk.destroy', $desk->id], 'method' => 'DELETE']) !!}
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Category</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
          <div class="col-md-12">
            <!-- Horizontal Form -->

              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{ $desk->name }}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Capacity</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{$desk->capacity}}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Available</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{$desk->available}}'>
                    </div>
                  </div>



                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  {!! Html::linkRoute('desk.edit', 'Edit', array($desk->id), array('class' => 'btn btn-info btn-block')) !!}

                  {!! Form::open(['route' => ['desk.destroy', $desk->id]]) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                  {!! Form::close()  !!}
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
      </div>
    </div>
</div>
</div>
{!! Form::close() !!}
</div>
      <!-- /.box -->
@endsection
