@extends('layout.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'Product ', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nhập tên sản phẩm">
                    </div>

                    <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input type="text" class="form-control" name="price" id="exampleInputEmail1" placeholder="Nhập giá sản phẩm">
                    </div>

                    <div class="form-group">
                        <label>Ảnh giới thiệu</label>
                        <input type="file" class="form-control" name="feature_image_path" id="exampleInputEmail1">
                    </div>

                    <div class="form-group">
                        <label>Ảnh chi tiết</label>
                        <input type="file" multiple class="form-control" name="image_path[]" id="exampleInputEmail1">
                    </div>

                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea class="form-control" name="content" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Chọn danh mục</label>
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


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function ()){
            $(".tags_select_choose").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })
        }
    </script>
@endsection
