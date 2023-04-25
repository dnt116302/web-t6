@extends('layout.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'Product ', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Add</a>
            </div>

            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Sửa</th>
                      </tr>
                    </thead>
                    <tbody>

                      {{-- @foreach ($categories as $category) --}}
                      <tr>
                        <th scope="row">1</th>
                        <td>iphone14</td>
                        <td>32.000.000</td>
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>điện thoại</td>
                        <td>
                          <a href="" class="btn btn-default">Sửa</a>
                          <a href="" class="btn btn-danger">Xóa</a>
                        </td>
                      </tr>
                      {{-- @endforeach --}}

                    </tbody>
                  </table>
            </div>

            <div class="col-md-12">
              {{-- {{$categories->links()}} --}}
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

