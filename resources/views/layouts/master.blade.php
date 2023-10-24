<!DOCTYPE html>
<html lang="en">
    <head>
    @include('layouts.header')
    </head>
    <body class="sb-nav-fixed">
        <!-- navbar here -->
        @include('layouts.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               <!-- sidebar here -->
               @include('layouts.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                   <!-- main content here -->
                   @yield('content')
                </main>
                <!-- footer here -->
            </div>
        </div>
        @include('layouts.all-scripts')
    </body>
</html>
