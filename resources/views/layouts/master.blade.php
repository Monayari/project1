<!DOCTYPE HTML>
<html>

        @include('particals.head')
<body>



        @include('particals.navbar')


        @include('particals.header')

       @yield('content')

      @include('particals.sidebar')


    @include('particals.footer')


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

    @include('particals.jquery')

</body>
</html>



