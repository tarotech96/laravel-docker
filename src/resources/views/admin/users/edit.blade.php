@extends('../../layout')

@section('content')
    <div class="container col-md-10">
        <div class="row ml-3 mb-3">
            <h2 class="font-weight-bold text-monospace">ユーザー編集</h2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row col-md-6 m-auto">
            <form action="{{ route('users.update') }}" method="PUT" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>名前:</strong>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>メールアドレス:</strong>
                            <input class="form-control" type="email" name="email" value="{{ $user->email }}"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </div>
    
            </form>
        </div>
    </div>
@endsection
