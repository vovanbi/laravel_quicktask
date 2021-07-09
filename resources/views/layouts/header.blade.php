<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Laravel Quick Task</a>
  <ul class="nav nav-pills">
     @if(Auth::check())  
      <li class="nav-item">
        <a class="nav-link ">
          Tài khoản : <span>{{Auth::user()->name}}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">
          Đăng xuất 
        </a>
      </li>
    @else
      <li class="nav-item">
        <a class="nav-link " data-toggle="modal" data-target="#exampleModal">@lang('auth.login')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal1">@lang('auth.logup')</a>
      </li>
    @endif

    <li class="nav-item dropdown">
      <div class="dropdown">
           @php $locale = session()->get('locale'); @endphp
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                @switch($locale)
                    @case('vi')
                    <img src="{{asset('image/vi.png')}}"> VN
                    @break
                    @case('en')
                    <img src="{{asset('image/en.png')}}"> English
                    @break
                    @default
                    <img src="{{asset('image/vi.png')}}"> VN
                @endswitch
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('change-language',['vi'])}}"><img src="{{asset('image/vi.png')}}"> VN</a>
                <a class="dropdown-item" href="{{route('change-language',['en'])}}"><img src="{{asset('image/en.png')}}"> English</a>
            </div>
         </div>
    </li>
  </ul>
</nav>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">@lang('auth.login')</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form class="m-3" method="POST" action="{{ route('login')}}">
            @csrf
              <div class="form-group m-5">
                <label for="exampleInputEmail1">@lang('auth.email')</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email" placeholder="Enter email">
                <label for="exampleInputPassword1">@lang('auth.password')</label>
                <input type="password"  class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">@lang('auth.submitlogin')</button>
            </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">@lang('auth.logup')</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form class="m-3" method="POST" action="{{ route('logup')}}">
            @csrf
              <div class="form-group m-5">
                <label for="exampleInputEmail1">@lang('auth.nameuser')</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name" placeholder="Enter email"><br>
                 <span class="form-message">
                   @if($errors->has('name'))
                  <span class="text-danger">
                      {{ $errors->first('name') }}
                  </span>
                   @endif
                 </span>
                 <br>
                <label for="exampleInputEmail1">@lang('auth.email')</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email" placeholder="Enter email">
                 <span class="form-message">
                     @if($errors->has('email'))
                    <span class="text-danger">
                        {{ $errors->first('email') }}
                    </span>
                     @endif
                </span>
                <br>
                <label for="exampleInputPassword1">@lang('auth.password')</label>
                <input type="password"  class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                <label for="exampleInputPassword1">@lang('auth.password_confirmation')</label>
                <span class="form-message">
                     @if($errors->has('password'))
                    <span class="text-danger">
                        {{ $errors->first('password') }}
                    </span>
                     @endif
                </span>
                <br>
                <input type="password"  class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">@lang('auth.submitlogup')</button>
            </form>
      </div>
    </div>
  </div>
