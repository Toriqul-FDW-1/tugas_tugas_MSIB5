@include('admin.layout.sidebar')
<!-- Content Wrapper -->

<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

@include('admin.layout.top')
<!-- Begin Page Content -->
<div class="container-fluid">

@yield('content')

</div>
    </div>


@include('admin.layout.footer')