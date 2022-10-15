@extends('../../layout')

@section('content')
    <div class="container col-md-10 col-sm-12 float-right">
        <div class="row ml-3 mb-3">
            <h2 class="font-weight-bold text-monospace">ユーザー一覧</h2>
        </div>
        <div class="row ml-3 mb-2 col-md-12">
            <a class="btn btn-primary" href="{{ route('users.create') }}">
                <i class="fa fa-user-plus"></i>
                追加
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

            <table class="ml-2 table table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th width="280px">アクション</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('users.delete', ['id' => $user->id]) }}" method="DELETE">
    
                                <a class="btn btn-info" href="{{ route('users.edit', ['id' => $user->id]) }}">修正</a>
    
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        {!! $users->links() !!}
    </div>
@endsection
