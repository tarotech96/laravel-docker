<!DOCTYPE html>
<html>

<head>
    @include('common.head')
</head>

<body>

    {{-- ヘッダーアリア --}}
    @include('common.header')

    <div class="d-flex" style="width: 100%">

        {{-- サイドバー --}}
        @include('common.sidebar')

        {{-- コンテンツアリsア --}}
        @yield('content')

    </div>

    {{-- フッタアリア --}}
    @include('common.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer>
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer>
    </script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
</body>

</html>
