<x-base-layout>
    @include('layouts.partials.header')
    {{$slot}}
    <footer>
        @yield('footerlinks')
    </footer> 
</x-base-layout>



{{-- @extends('layouts.clean')

@section('childContent')
    @include('layouts.partials.header')
    @yield('content')
    @hasSection ('footerLinks')
        <footer>
            @yield('footerlinks')
        </footer>       
    @endif
@endsection --}}
