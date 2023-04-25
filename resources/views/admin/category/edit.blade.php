@extends('layout.admin')
 
@section('title')
    <title>Trang chủ</title>
@endsection
 
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'Category ', 'key' => 'Edit'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('categories.update', ['id'=> $category->id ])}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name ?? 'None'}}" placeholder="Nhập tên danh mục">
                      </div>
                      <div class="form-group">
                        <label>Chọn danh mục cha</label>
                        <select class="form-control" name="parent_id" id="exampleFormControlSelect1">
                          <option value="0">None</option>
                            {!! $htmlOption !!}
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
  
  