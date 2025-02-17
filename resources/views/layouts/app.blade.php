@extends('layouts.clean')

@section('childContent')
    @include('layouts.partials.header')
    @yield('content')
    @hasSection ('footerLinks')
        <footer>
            @yield('footerlinks')
        </footer>       
    @endif
@endsection
