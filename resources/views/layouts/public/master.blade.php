<!DOCTYPE html>
<html lang="en">
    @include('layouts.public.head')
    <body class="d-flex flex-column h-100" ng-app="myApp">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('layouts.public.nav')
            @yield('content')
        </main>
        <!-- Footer-->
        @include('layouts.public.footer')
        @include('layouts.public.vendor-scripts')
    </body>
</html>
