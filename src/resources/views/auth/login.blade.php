@extends('auth.parent')

@section('content')
    <main class="login-form">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">ログイン</div>
                        <div class="card-body">

                            <form action="{{ route('login.post') }}" method="POST" autocomplete="off">
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email" required
                                            autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div clas="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label class="d-flex align-items-center justify-content-start">
                                                <input type="checkbox" name="remember">ログイン情報を保存する
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary w-100">
                                            ログイン
                                        </button>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>
@endsection
