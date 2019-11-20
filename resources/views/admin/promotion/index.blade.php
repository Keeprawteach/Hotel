@extends('admin_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">All Promo</h3>
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
              <th>Menu</th>
              <th>Created At</th>
              <th>Action</th>
            </thead>
            <tbody>

              @foreach ($promotions as $promotion)
            <tr>
              <td>{{$promotion->id}}</td>
              <td>{{$promotion->menu->name}}</td>

              <!-- <td><span class="label label-success">Approved</span></td> -->
              <td>{{ date('M j, Y', strtotime($promotion->created_at))}}</td>
              <td>
                {!! Form::open(['route' => ['promotion.destroy', $promotion->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close()  !!}
              </td>
            </tr>
            @endforeach
            </tbody>

          </table>
        </div>
        <!-- /.box-body -->
        <div class="text-center">
            {!! $promotions->links(); !!}
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
