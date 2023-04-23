@extends('layout.admin')
 
@section('title')
    <title>Trang chủ</title>
@endsection
 
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'Menu ', 'key' => 'Edit'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('menus.update', ['id'=> $menu->id ])}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên menu</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên menu">
                      </div>
                      <div class="form-group">
                        <label>Chọn menu cha</label>
                        <select class="form-control" name="parent_id" id="exampleFormControlSelect1">
                          <option value="0">None</option>
                            {!! $optionSelect !!}
                        </select>
                      </div>

                      <button type="Submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
  
  