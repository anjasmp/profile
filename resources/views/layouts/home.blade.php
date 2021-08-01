<!DOCTYPE html>
<html lang="en" id="section-home">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Anjas Mulya Putra</title>

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body>


    <!-- Scroll Top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up" id="iconBtn"></i></button>



    {{-- loader --}}
    @include('includes.loader')

    {{-- navbar --}}
    @include('includes.navbar')

    



    <!-- Page Content -->
    

        {{-- About --}}
        @yield('about')
        

        <!-- Skill -->
        @yield('skill')


        <!-- Portfolio -->
        @yield('portfolio')

        {{-- </div> --}}

        <!-- certificate -->
        @yield('certificate')


        <!-- Education -->
        @yield('education')



        <!-- Interest -->
        @yield('interest')


     <!-- End Page Content -->

    {{-- footer --}}
    @include('includes.footer')



    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

</body>

</html>