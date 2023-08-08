
@include('components.header')

<div class="row">

    @include('components.leftbar')

    <!-- Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        @yield('content')

    </main>
</div>
</div>

@include('components.footer')

@yield('script')
