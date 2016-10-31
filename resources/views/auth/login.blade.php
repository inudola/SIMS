@extends('layouts.app')

@section('content')
<section>
    <div class="row">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <input id="email" type="email"  placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                <input id="password" type="password" placeholder="Password" name="password" required>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        
                    </form>
                
    </div>
  </section>
@endsection
