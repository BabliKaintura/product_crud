@include('layouts.partials.head')
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts.partials.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layouts.partials.navbar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('layouts.partials.footer')
        </div>
    </div>
    @include('layouts.partials.footer-scripts')