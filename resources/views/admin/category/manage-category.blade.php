@extends('admin.master')
@section('title')
  Manage Category
@endsection
@section('body')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center text-success">{{ Session::get('message')}}</h3>
          <h3 class="card-title text-center">Manage Category Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="table-responsive">
          <table class="table table-hover"  id="dataTable" width="100%" cellspacing="0">
              <tr>
                <th>ID</th>
                <th>Category name</th>
                <th>Category Discription</th>
                <th>Publication Status</th>
                <th>Action</th>
              </tr>
              @php ($i=0)
              @foreach ($categories as $category)
              <tr>
                <td >{{$i++}}</td>
                <td>{{ $category->category_name}}</td>
                <td>{{ $category->cat_dis}}</td>
                <td>{{ $category->publication_status ==1 ?'Published' :'unPublished'}}</td>
                <td>
                  @if($category->publication_status ==1)
                 <a href="{{ route('unpublished-category',['id'=>$category->id])}}" class="btn btn-info btn-xs">
                     <span class="fa fa-arrow-up"></span></a>
                   @else
                 <a href="{{ route('published-category',['id'=>$category->id])}}" class="btn btn-warning btn-xs">
                    <span class="fa fa-arrow-down"></span>
                  </a>
                  @endif
                  <a href="{{ route('edit-category', ['id'=>$category->id])}}" class="btn btn-edit btn-xs">
                    <span class="fa fa-edit"></span>
                  </a>
                <a href="#" class="btn delete-btn btn-danger btn-xs" id="{{ $category->id }}" onclick="
                      event.preventDefault();
                      var check =confirm('Are you sure to Delete This!!!!');
                      if(check){
                      document.getElementById('deletecategoryForm'+'{{$category->id}}').submit();
                      }
                ">
                    <span class="fa fa-trash"></span>
                  </a>
                <form id="deletecategoryForm{{$category->id}}" action="{{ route('delete-category') }}" method="POST">
                  @csrf
                    <input type="hidden" value="{{ $category->id }}" name="id"/>
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