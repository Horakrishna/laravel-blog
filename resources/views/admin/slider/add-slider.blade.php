@extends('admin.master')
@section('title')
  Add Slider
@endsection
@section('body')

<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
   <!-- Horizontal Form -->
   <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title text-center">Add Slider Form</h3>

    </div>

    <!-- /.card-header -->
    <!-- form start -->
<form action="{{ route('new-slider')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
      <div class="card-body">

        <div class="form-group row">
            <label for="Category Name" class="col-sm-2 col-form-label">Slider Title</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="slider_title" placeholder="Slider Title">
            </div>
          </div>
        <div class="form-group row">
          <label for="slider_dis" class="col-sm-2 col-form-label">Slider Discription</label>
          <div class="col-sm-5">
            <textarea class="form-control" rows="2" name="slider_dis" placeholder="Enter Short Discription"></textarea>
          </div>
        </div>

          <div class="form-group row">
            <label for="Slider image" class="col-sm-2 col-form-label">Blog Title</label>
            <div class="col-sm-5">
              <input type="file" name="slider_image" accept="image/">
            </div>
        </div>

        <div class="form-group row">
         <label for="publication_status" class="col-sm-2 col-form-label">Publication Status</label>
          <div class="col-sm-8">
            <div class="form-check">
              <label><input type="radio" name="publication_status" value="1">Published</label>
              <label><input type="radio" name="publication_status" value="0">UnPublished</label>
            </div>
          </div>
        </div>

      <!-- /.card-body -->
      <div class="card-footer">
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-info text-center">Save Slider Info</button>
            </div>
          </div>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
@endsection