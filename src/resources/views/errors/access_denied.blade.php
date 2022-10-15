@extends('errors.parent')

@section('content')
<div class="container col-md-12">
    <div class="text-center">
        <h1 class="" style="color: red"><code>Access Denied</code></h1>
        <hr class="border border-white text-center" style="margin:auto;width:50%">
        <h3>You don't have permission to view this site.</h3>
        <h3>🚫🚫🚫🚫</h3>
        <h6 class="text-decoration-none" style="color: red;">error code:403 forbidden</h6>
        <a class="text-decoration-none" href="{{ route('login') }}">Back to login</a>
    </div>
</div>
@endsection