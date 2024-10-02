<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>{{ __('messages.welcome') }} </a></li>
                <li><a href="{{url('category_page')}}"> <i class="icon-grid"></i>categories </a></li>
                <li><a href="{{url('book_page')}}"> <i class="icon-padnote"></i>Books </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>{{ __('messages.ShowingData') }} </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('showcategory_page')}}">Show Categories</a></li>
                    <li><a href="{{url('showbook_page')}}">Show Books</a></li>
                    <li><a href="{{url('showusers_page')}}">Show Users</a></li>
                  </ul>
                  <li>
                        <a href="#Lang" aria-expanded="false" data-toggle="collapse">
                          <i class="bi bi-translate"></i> {{ __('messages.language') }}
                        </a>
                    <ul id="Lang" class="collapse list-unstyled">
                    <li><a href="{{ url('lang/en') }}">{{ __('messages.english') }}</a></li>
                    <li><a href="{{ url('lang/ar') }}">{{ __('messages.arabic') }}</a></li>
                    </ul>
                  </li>

      </nav>