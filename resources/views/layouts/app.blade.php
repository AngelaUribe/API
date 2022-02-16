<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @livewireStyles
</head>

<body>

    <div class="container py-5">
        @yield('content')
    </div>

    @livewireScripts

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ url('api/v1/users') }}",
                type: 'GET',
                success: function(response) {
                    let data = response.data[0];
                    $('#username').text(data.name);
                    $('#img').attr('src', data.profile_picture).show();
                    $('#bio').text(data.bio);
                    $('#phone').text(data.phone);
                    $('#email').text(data.email);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var docWidth = $('body').width(),
                $wrap = $('#wrap'),
                $images = $('#wrap .hb'),
                slidesWidth = $wrap.width();

            $(window).on('resize', function() {
                docWidth = $('body').width();
                slidesWidth = $wrap.width();
            })

            $(document).mousemove(function(e) {
                var mouseX = e.pageX,
                    offset = mouseX / docWidth * slidesWidth - mouseX / 2;

                $images.css({
                    '-webkit-transform': 'translate3d(' + -offset + 'px,0,0)',
                    'transform': 'translate3d(' + -offset + 'px,0,0)'
                });
            });
        })
    </script>

</body>

</html>
