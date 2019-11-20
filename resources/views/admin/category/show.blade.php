@extends('admin_template')

@section('content')

<div class="row">
  {!! Form::model($category, ['route' => ['category.destroy', $category->id], 'method' => 'DELETE']) !!}
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
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{ $category->name }}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Created At</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{date('M j, Y H:i', strtotime($category->created_at))}}'>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Updated At</label>

                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" disabled="disabled" value='{{date('M j, Y H:i', strtotime($category->updated_at))}}'>
                    </div>
                  </div>



                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  {!! Html::linkRoute('category.edit', 'Edit', array($category->id), array('class' => 'btn btn-info btn-block')) !!}

                  {!! Form::open(['route' => ['category.destroy', $category->id]]) !!}
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
