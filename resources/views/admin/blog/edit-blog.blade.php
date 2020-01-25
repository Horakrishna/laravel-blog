@extends('admin.master')
@section('title')
  Edit Blog
@endsection
@section('body') 

<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
   <!-- Horizontal Form -->
   <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title text-center">Edit Blog Form</h3>

    </div>

    <!-- /.card-header -->
    <!-- form start -->
<form action="{{ route('update-blog')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" name="editFromblog">
        @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="Category Name" class="col-sm-2 col-form-label">Category Name</label>
          <div class="col-sm-5">
             <select name="category_id" class="form-control select2" style="width: 100%;">
                @foreach ($category as $category)
                <option value="{{ $category->id }}">{{$category->category_name }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
            <label for="Category Name" class="col-sm-2 col-form-label">Blog Title</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" value="{{$blog->blog_title}}" name="blog_title" placeholder="Blog Title">
            <input type="text" class="form-control" value="{{ $blog->id }}" name="id">
            </div>
          </div>
        <div class="form-group row">
          <label for="Textarea" class="col-sm-2 col-form-label">Blog Short Discription</label>
          <div class="col-sm-5">
            <textarea class="form-control" rows="2" name="blogshort_dis" placeholder="Enter Short Discription">{{$blog->blogshort_dis}}</textarea>
          </div>
        </div>
        <div class="form-group row">
            <label for="Textarea" class="col-sm-2 col-form-label">Blog Long Discription</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="editor" rows="5" name="bloglong_dis" placeholder="Enter Long Discription">{{$blog->bloglong_dis}}</textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="Blog image" class="col-sm-2 col-form-label">Blog Title</label>
            <div class="col-sm-5">
              <input type="file" name="blog_image" accept="image/*"></br>
              <img src="{{ asset( $blog->blog_image )}}" alt="" height="100" width="120">
            </div>
        </div>

        <div class="form-group row">
         <label for="publication_status" class="col-sm-2 col-form-label">Publication Status</label>
          <div class="col-sm-8">
            <div class="form-check">
              <label><input type="radio" name="publication_status" {{ $blog->publication_status == 1 ? 'checked' : '' }} value="1"/>Published</label>
              <label><input type="radio" name="publication_status" {{ $blog->publication_status == 0 ? 'checked' : '' }} value="0">UnPublished</label>
            </div>
          </div>
        </div>

      <!-- /.card-body -->
      <div class="card-footer">
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-info text-center">Update blog info</button>
            </div>
          </div>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
  <script>
      document.forms['editFromblog'].elements['category_id'].value = '{{ $blog->category_id }}';
  </script>
@endsection