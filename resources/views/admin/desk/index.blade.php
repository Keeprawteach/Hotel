@extends('admin_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">All Table</h3>
        </div>
        <div class="box-body">
        <div class="form-group">
          <div class="col-md-12">
            <!-- Horizontal Form -->

              <!-- /.box-header -->
              <!-- /.row -->
  <div class="row">
    <div class="col-xs-12">
      <!-- <div class="box"> -->
        <div class="box-header">
          <h3 class="box-title"></h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Capacity</th>
              <th>Available</th>
              <th>Action</th>
            </thead>
            <tbody>

              @foreach ($desks as $desk)
            <tr>
              <td>{{$desk->id}}</td>
              <td>{{$desk->name}}</td>
              <td>{{$desk->capacity}}</td>
              <td>{{$desk->available}}</td>
              <!-- <td><span class="label label-success">Approved</span></td> -->
              <td><a href="{{ route('desk.show', $desk->id)}}" class="btn btn-info btn-sm">View</a><a href="{{ route('desk.edit', $desk->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
            </tr>
            @endforeach
            </tbody>

          </table>
        </div>
        <!-- /.box-body -->
        <div class="text-center">
            {!! $desks->links(); !!}
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
                <!-- /.box-footer -->
              </form>
            </div>
      </div>
    </div>
</div>
</div>
</div>


      <!-- /.box -->
@endsection
