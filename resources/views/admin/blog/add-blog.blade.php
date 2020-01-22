@extends('admin.master')
@section('title')
  Add Blog
@endsection
@section('body')

<h4 class="text-center text-success"></h4>
   <!-- Horizontal Form -->
   <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title text-center">Add Blog Form</h3>

    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('new-blog')}}" method="POST" class="form-horizontal">
        @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="Category Name" class="col-sm-2 col-form-label">Category Name</label>
          <div class="col-sm-5">
             <select name="" class="form-control select2" style="width: 100%;">
                @foreach ($categories as $category)
                <option value=" {{ $category->id }}"selected="selected">{{$category->category_name }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
            <label for="Category Name" class="col-sm-2 col-form-label">Blog Title</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="blog_title" placeholder="Blog Title">
            </div>
          </div>
        <div class="form-group row">
          <label for="Textarea" class="col-sm-2 col-form-label">Blog Short Discription</label>
          <div class="col-sm-5">
            <textarea class="form-control" rows="2" name="blogshort_dis" placeholder="Enter Short Discription"></textarea>
          </div>
        </div>
        <div class="form-group row">
            <label for="Textarea" class="col-sm-2 col-form-label">Blog Long Discription</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="editor" rows="5" name="bloglong_dis" placeholder="Enter Long Discription"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="Blog image" class="col-sm-2 col-form-label">Blog Title</label>
            <div class="col-sm-5">
              <input type="file" name="blog_image" accept="image/">
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
                <button type="submit" class="btn btn-info text-center">Save Category</button>
            </div>
          </div>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
@endsection