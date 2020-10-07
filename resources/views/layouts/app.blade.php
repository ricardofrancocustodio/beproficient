<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('layouts.headapp') 
<body>
    <div id="app">
       @include('layouts.menuapp')
       <div id="parallax" class="header-content d-flex align-items-center">
            <main class="col-md-12">

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
@include('layouts.reqscriptsapp')
<script type="text/javascript">
    $('body').addClass('stop-scrolling');
</script>
