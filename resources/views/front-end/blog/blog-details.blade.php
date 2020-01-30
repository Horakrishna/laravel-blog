@extends('front-end.master')
@section('title')
    Blog Details
@endsection
@section('body')
<div class="container">

    <!-- Page Heading/Breadcrumbs -->

    <h1 class="mt-4 mb-3">{{ $blog->blog_title }}</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{ route('/') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog Home</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
      <img class="img-fluid rounded" src="{{ asset($blog->blog_image)}}" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Posted on Januarey 1,2020 at 12.01 am</p>

        <hr>
        <h1 class="mt-4 mb-3 text-success">{{ Session::get('message') }}</h1>
        <!-- Post Content -->
      <p class="lead">{{ $blog->blogshort_dis}}</p>

        <p>{!!$blog->bloglong_dis!!}</p>

        <hr>

        @if($visitorId = Session::get('visitorId'))
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action="{{ route('new-comment') }}" method="POST">
              @csrf
              <div class="form-group">
              <input type="hidden" name="visitor_id" value="{{ $visitorId }}">
              <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                <textarea class="form-control" name="comment" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
       @else
       <div class="card my-4">
        <div class="card-body">
        <h5 class="card-title">You have to login to comnmit this blog.if you register you can <a href="{{ route('sign-up') }}">login</a> and <a href="{{ route('visitor-login')}}">signin</a></h5>
        </div>
      </div>
      @endif
        <!-- Single Comment -->
        @foreach($comments as $comment)
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
          <h5 class="mt-0">{{ $comment->first_name.''.$comment->last_name}}</h5>
            {{ $comment->comment }}
          </div>
        </div>
        @endforeach

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
      @include('front-end.include.sidebar')

        <!-- Categories Widget -->


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection