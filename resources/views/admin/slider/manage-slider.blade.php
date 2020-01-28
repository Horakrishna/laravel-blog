@extends('admin.master')
@section('title')
  Manage Slider
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
                <th>slider Title</th>
                <th>slider  Discription</th>
                <th>slider Image</th>
                <th>Publication Status</th>
                <th>Action</th>
              </tr>

               <tr>
                <td>554</td>
                <td>554</td>
                <td>554</td>
                <td>554</td>
                <td>554</td>
                <td><img src="" alt="" height="100"></td>
                <td></td>
                <td>

                <a href="" class="btn btn-edit btn-xs">
                    <span class="fa fa-edit"></span>
                  </a>
                <a href="#" id="" onclick="
                      event.preventDefault();
                      var check = confirm('Are you sure to Delete blog!!!!');
                      if(check){
                      document.getElementById('deleteBlogForm'+'').submit();
                      }
                     " class="btn btn-danger btn-xs">
                    <span class="fa fa-trash"></span>
                  </a>
                <form id="deleteBlogForm" action="" method="POST">
                  @csrf
                    <input type="hidden" value="" name="id"/>
                </form>
                </td>
              </tr>

          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
@endsection