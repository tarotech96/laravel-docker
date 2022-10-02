@section('content')
<main class="login-form">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Register</div>
          <div class="card-body">

            <form action="{{ route('register.post') }}" method="POST">
              @csrf
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                  <div class="col-md-6">
                      <input type="text" id="name" class="form-control" name="name" required autofocus>
                      @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Mail</label>
                  <div class="col-md-6">
                      <input type="text" id="email" class="form-control" name="email" required autofocus>
                      @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-md-6">
                      <input type="password" id="password" class="form-control" name="password" required>
                      @if ($errors->has('password'))
                          <span class="text-danger">{{ $errors->first('password') }}</span>
                      @endif
                  </div>
              </div>

              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      Register
                  </button>
              </div>
          </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection