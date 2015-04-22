<!-- view/layouts/base.blade.php -->
@if(Auth::guest())
   <li class="pull-right">
      <a href="{{ route('login') }}">login</a>
      / <a href="{{ route('register') }}">register</a>
   </li>
@else
   <li><a href="{{ route('profile', Auth::user()->getKey() ) }}">Profile</a></li>
   <li class="pull-right">{{ Auth::user()->name }}<a href="{{ route('logout') }}">logout</a></li>
@endif