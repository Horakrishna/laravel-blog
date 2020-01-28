@extends('front-end.master')
@section('title')
    Sign in Form
@endsection
@section('body')
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">User Sign in</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{ route('/') }}">Home</a>
      </li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                <h3 class="text-center text-danger">{{ Session::get('message') }}</h3>
                 <form action="{{ route('visitor-sign-in')}}" method="POST">
                      @csrf
                    <div class="form-group row">
                        <label for="email_address" class="col-form-label col-md-3">Email Address:</label>
                        <div class="col-md-9">
                          <input type="email" name="email_address"  class="form-control" placeholder="Write your Email name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-form-label col-md-3">User Password:</label>
                        <div class="col-md-9">
                          <input type="password" name="user_pass"  class="form-control" placeholder="Write your Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" name="btn" class="btn btn-success btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Signup Form  -->
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <!-- Search Widget -->
        @include('front-end.include.sidebar')

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection