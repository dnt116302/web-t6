@extends('layout.admin')
 
@section('title')
    <title>Trang chủ</title>
@endsection
 
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'Menu ', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <a href="{{route('menus.create')}}" class="btn btn-success float-right m-2">Add</a>
            </div>

            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên menu</th>
                        <th scope="col">Sửa</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($menus as $menu)
                      <tr>
                        <th scope="row">{{$menu->id}}</th>
                        <td>{{$menu->name}}</td>
                        <td>
                          <a href="" class="btn btn-default">Sửa</a>
                          <a href="" class="btn btn-danger">Xóa</a>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
            
            <div class="col-md-12">
              {{$menus->links()}}
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
  
  