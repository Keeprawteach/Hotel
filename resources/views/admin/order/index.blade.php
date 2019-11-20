@extends('admin_template')

@section('content')
<!-- <meta http-equiv="refresh" content="3"> -->

<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">All Place Orders</h3>
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
                <div id="result" class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <th>ID</th>
                      <th>Customer</th>
                      <th>Order At</th>
                      <th>Action</th>
                    </thead>
                    <tbody>

                      @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer->name}}</td>
                        <td>{{$order->created_at}}</td>
                        <!-- <td><span class="label label-success">Approved</span></td> -->
                        <td>
                          {!! Form::model($orders, ['route' => ['order.update', $order->id], 'method' => 'PUT']) !!}
                          <a href="{{ route('place_order.show', $order->id)}}" class="btn btn-info btn-sm">View</a>
                          <!-- <a href="{{ route('order.update', $order->id)}}" class="btn btn-warning btn-sm">Paid</a> -->
                          {{ Form::submit('Paid', ['class' => 'btn btn-primary btn-sm'])}}

                        </td>
                      </tr>
                      @endforeach
                    </tbody>

                  </table>
                </div>
                <!-- /.box-body -->
                <div class="text-center">
                  {!! $orders->links(); !!}
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
