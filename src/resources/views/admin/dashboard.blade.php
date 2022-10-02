@extends('layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          @if(seesion('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif

          You are logged in
        </div>
      </div>

    </div>

  </div>

</div>
@endsection