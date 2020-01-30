@extends('admin.master')
@section('title')
  Manage Comment
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
                <th>Visitor Name</th>
                <th>Blog title</th>
                <th>Comment</th>
                <th>Publication Status</th>
                <th>Action</th>
              </tr>
                @php($i=0)
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $comment->first_name.''.$comment->last_name }}</td>
                        <td>{{ $comment->blog_title }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ $comment->publication_status == 1 ? 'Published' : 'unPublished' }}</td>
                        <td>
                            @if($comment->publication_status ==1)
                            <a href="{{ route('unpublished-comment',['id'=>$comment->id])}}" class="btn btn-info btn-xs">
                                <span class="fa fa-arrow-up"></span></a>
                              @else
                            <a href="{{ route('published-comment',['id'=>$comment->id])}}" class="btn btn-warning btn-xs">
                               <span class="fa fa-arrow-down"></span>
                             </a>
                             @endif
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