@extends('admin_template')

@section('content')
<!-- <meta http-equiv="refresh" content="3"> -->

<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">All Delivery Orders</h3>
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
                      <th>Address</th>
                      <th>Menu</th>
                      <th>QTY</th>
                      <th>Price</th>
                      <th>Sub Price</th>
                      <th>Action</th>
                    </thead>
                    <tbody>

                      @foreach ($delivery_orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->menu->name}}</td>
                        <td>{{$order->qty}}</td>
                        <td>{{$order->menu->price}}</td>
                        <td>{{$order->price_total}}</td>
                        {!! Form::model($delivery_orders, ['route' => ['delivery_order.update', $order->id], 'method' => 'PUT']) !!}
                        <td>
                          {{ Form::submit('Done', ['class' => 'btn btn-primary btn-sm'])}}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>

                  </table>
                </div>
                <!-- /.box-body -->
                <div class="text-center">
                  {!! $delivery_orders->links(); !!}
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
