{{-- <x-app-layout>
</x-app-layout>
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.asset.style')
    {{-- icon --}}
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.includes.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.includes.navbar')
            <!-- partial -->
            {{-- main body --}}
            @include('admin.includes.body')
            {{-- main body --}}
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
 @include('admin.asset.script')

</body>
</html>