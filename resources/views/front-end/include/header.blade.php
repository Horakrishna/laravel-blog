 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="{{ route('/') }}">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @foreach ($categories as $category)
          <li class="nav-item">
          <a class="nav-link" href="{{ route('category-blog',['id'=>$category->id ,'name'=>$category->category_name])}}">{{ $category->category_name}}</a>
            </li>
          @endforeach
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if(Session::get('visitorId'))

                {{Session::get('visitorName')}}
              @else
                 User
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              @if(Session::get('visitorId'))
              <a class="dropdown-item" href="#" onclick="
                event.preventDefault();
                document.getElementById('visitorLogoutForm').submit();

              ">Log Out</a>
              <form id="visitorLogoutForm" action="{{ route('visitor-logout')}}" method="POST">
                @csrf

              </form>
              @else
              <a class="dropdown-item" href="{{ route('sign-up') }}">Sign up</a>
              <a class="dropdown-item" href="{{ route('visitor-login') }}">Login</a>
              @endif

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>