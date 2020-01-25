@extends('admin.master')
@section('title')
  Manage Blog
@endsection
@section('body')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center text-success">{{ Session::get('message')}}</h3>
          <h3 class="card-title text-center">Manage Blog Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="table-responsive">
          <table class="table table-hover"  id="dataTable" width="100%" cellspacing="0">
              <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Blog Title</th>
                <th>Blog Short Discription</th>
                <th>Blog Long Discription</th>
                <th>Blog Image</th>
                <th>Publication Status</th>
                <th>Action</th>
              </tr>
              @php($i=0)
              @foreach ($blogs as $blog)
               <tr>
                <td>{{ $i++}}</td>
                <td>{{ $blog->category_name }}</td>
                <td>{{ $blog->blog_title }}</td>
                <td>{{ $blog->blogshort_dis }}</td>
                <td>{{ $blog->bloglong_dis }}</td>
                <td><img src="{{ asset($blog->blog_image) }}" alt="" height="100"></td>
                <td>{{ $blog->publication_status ==1 ?'Published' :'unPublished'}}</td>
                <td>

                <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-edit btn-xs">
                    <span class="fa fa-edit"></span>
                  </a>
                <a href="#" id="{{ $blog->id }}" onclick="
                      event.preventDefault();
                      var check = confirm('Are you sure to Delete blog!!!!');
                      if(check){
                      document.getElementById('deleteBlogForm'+'{{ $blog->id }}').submit();
                      }
                     " class="btn btn-danger btn-xs">
                    <span class="fa fa-trash"></span>
                  </a>
                <form id="deleteBlogForm{{ $blog->id }}" action="{{ route('delete-blog') }}" method="POST">
                  @csrf
                    <input type="hidden" value="{{ $blog->id }}" name="id"/>
                </form>
                </td>
              </tr>
             @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
@endsection