@extends('admin_template')

@section('content')

<div class="row">
  {!! Form::model($menu, ['route' => ['menu.destroy', $menu->id], 'method' => 'DELETE']) !!}
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Menu</h3>
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
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{ $menu->name }}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" disabled="disabled" id="description" >{{ $menu->description }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Price</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{ $menu->price }}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Category</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{ $menu->category->name }}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Created At</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{date('M j, Y H:i', strtotime($menu->created_at))}}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Updated At</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{date('M j, Y H:i', strtotime($menu->updated_at))}}'>
                    </div>
                  </div>



                </div>

                <center><img src="{{ asset('images/' . $menu->image) }}"></center>

                <!-- /.box-body -->
                <div class="box-footer">
                  {!! Html::linkRoute('menu.edit', 'Edit', array($menu->id), array('class' => 'btn btn-info btn-block')) !!}

                  {!! Form::open(['route' => ['menu.destroy', $menu->id]]) !!}
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
