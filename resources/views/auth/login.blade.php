<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login 3</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Template 0/login/styles.css')}}" />
  </head>
  <body>
  <x-validation-errors class="mb-4" />

@session('status')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ $value }}
    </div>
@endsession
    <div class="login">
      <div class="avatar">
        <img src="{{asset('Template 0/login/ORIMMA.jpg')}}" />
      </div>
      <h2>Login</h2>
      <h3>Please Enter Your credentials</h3>

      <form class="login-form" method="POST" action="{{ route('login') }}">
      @csrf
        <div class="textbox">
          <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  placeholder="Username or Email" />
          <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
          <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
          <span class="material-symbols-outlined"> lock </span>
        </div>
        <button type="reset" value="Reset">Reset</button>
        <button type="submit">LOGIN</button>
        <a href="{{ route('register') }}">Sign Up Instead</a>
        <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
      </form>
    </div>
  </body>
</html>
