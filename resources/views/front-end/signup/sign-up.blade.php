@extends('front-end.master')
@section('title')
    Sign Up Form
@endsection
@section('body')
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">User Sign Up</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{ route('/') }}">Home</a>
      </li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <form action="">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="first_name" class="col-form-label col-md-3">First Name:</label>
                        <div class="col-md-9">
                          <input type="text" name="first_name"  class="form-control" placeholder="Write your first name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-form-label col-md-3">Last Name:</label>
                        <div class="col-md-9">
                          <input type="text" name="last_name"  class="form-control" placeholder="Write your Last name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email_address" class="col-form-label col-md-3">Email Address:</label>
                        <div class="col-md-9">
                          <input type="email" name="email_address"  class="form-control" placeholder="Write your Email name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-form-label col-md-3">User Password:</label>
                        <div class="col-md-9">
                          <input type="password" name="user_pass"  class="form-control" placeholder="Write your Password name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number" class="col-form-label col-md-3">Phone Number:</label>
                        <div class="col-md-9">
                          <input type="number" name="phone_number"  class="form-control" placeholder="Write your Phone Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-form-label col-md-3">Address:</label>
                        <div class="col-md-9">
                         <textarea name="address" class="form-control"></textarea>
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
        <div class="card mb-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection