@include('frontend.layouts.header')
@include('frontend.layouts.navbar')
        
    <main>
    
    @yield('main-content')

    </main>

@include('frontend.layouts.copyright')
@include('frontend.layouts.modal')
@include('frontend.layouts.footer')