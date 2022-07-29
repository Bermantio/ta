<head>
<title>Login</title>
<style>/* Credit to bootsnipp.com for the css for the color graph */
body {
  background: -webkit-linear-gradient(bottom, #DA8B03, #F49F36);
       background-repeat: no-repeat;
} 
.header {
  height: 170px;
  width: 100px;
  padding-top: 15px;
  margin-left: 125px;
}
#card {
        background: #fbfbfb;
        border-radius: 10px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 400px;
        margin: 10rem auto 8.1rem auto;
        width: 500px;
}
</style>
</head>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/asset/admin_lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/asset/admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/asset/admin_lte/dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('bootstrap/public/js/app.js') }}">
<div id="card">
<div class="container">
    <div id="card-title">
				<form method="POST" action="{{route('login')}}">
                    @csrf
        <div class="header">
						<div class="logo text-center"><img src="asset/img/lazismukabpekalonganicon.png" alt="Lazismu Logo"></div>
				</div>
        <div class="input-group mb-3">
        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus margin-bottom="10px">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
          <button type="submit" class="btn btn-primary btn-block">
            {{ _('Login') }}
          </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <center><a href="{{ route('register') }}" class="text-center">Register</a></center>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
		</form>
	</div>
</div>
</div>
</div>
<script src="{{ asset('asset/admin_lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('asset/admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/admin_lte/dist/js/adminlte.js') }}"></script>