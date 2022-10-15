@extends('layout')

@section('content')
    <div class="container col-md-10 col-sm-12 float-right">
        <div class="row ml-3 mb-3">
            <h2 class="font-weight-bold text-monospace">ダッシュボード</h2>
        </div>
        <div class="ml-2 card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                You are logged in
            </div>
        </div>

    </div>
@endsection
