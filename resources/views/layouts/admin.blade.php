<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.admin.htmlheader')
<body>
<div id="wrapper">
    <!-- Navigation -->
    @include('layouts.partials.admin.mainheader')
    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>