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
      <form action="{{ route('new-sign-up')}}" method="POST">
        @csrf
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
                          <input type="email" name="email_address"  class="form-control" placeholder="Write your Email name" onblur="emailcheck(this.value)">
                          <span id="res" class="text-success"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-form-label col-md-3">User Password:</label>
                        <div class="col-md-9">
                          <input type="password" name="user_pass"  class="form-control" placeholder="Write your Password">
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
                            <input type="submit" name="btn" id="regBtn" class="btn btn-success btn-block" value="Register">
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

        <!-- Categories Widget -->
      @include('front-end.include.sidebar')
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<script>

  function emailcheck(email){

    var xmlHttp = new XMLHttpRequest();
    var serverPage = 'http://127.0.0.1:8000/email-check/'+ email;
    xmlHttp.open('GET', serverPage);
    xmlHttp.onreadystatechange = function() {
      if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
       document.getElementById('res').innerHTML = xmlHttp.responseText;

        if(xmlHttp.responseText == 'Email adress Exit') {
          document.getElementById('regBtn').disabled =true;
        }else{
          document.getElementById('regBtn').disabled =false;
        }
      }
    }
    xmlHttp.send()
  }
</script>
@endsection