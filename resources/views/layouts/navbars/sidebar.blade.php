<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('ENN ASIA CHANNEL') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      @if(Auth::user()->role->name=='Admin')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('User Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            {{--<li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">--}}
              {{--<a class="nav-link" href="{{ route('profile.edit') }}">--}}
                {{--<span class="sidebar-mini"> UP </span>--}}
                {{--<span class="sidebar-normal">{{ __('User profile') }} </span>--}}
              {{--</a>--}}
            {{--</li>--}}
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endif
      @if(Auth::user()->role->name=='Admin')
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('category.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Category') }}</p>
        </a>
      </li>
      @endif
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('content.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Content') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('sys_static.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Control Item') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'real_estate' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('real_estate.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Real Estate') }}</p>
        </a>
      </li>
      {{--<li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('map') }}">--}}
          {{--<i class="material-icons">location_ons</i>--}}
            {{--<p>{{ __('Content') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}


    </ul>
  </div>
</div>