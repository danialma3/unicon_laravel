<?php
$value = config('comingsoon');
$dt = \Carbon\Carbon::create($value['snw_year'], $value['snw_month'], $value['snw_day'], $value['snw_hours'], $value['snw_minutes'], $value['snw_seconds']);
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coming Soon!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
        <!-- Styles -->

        <link href="{{asset('assets/tema')}}/css/comingsoon.css" rel="stylesheet">
    </head>
    <body>
    <div id="particles-js"></div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md " >
                    Coming Soon
                </div>
                <div class="title m-b-md" id="clock"></div>
                @if ($value['snw_enable_email_form'])
                <form class="m-b-md" action="/" method="post">
                    @csrf
                    <input class="form-control" type="email" name="email" required placeholder="Email">
                    <input class="btn" type="submit" value="Submit">
                </form>
                @endif
                <ul class="links">
                    @if (strlen($value['snw_facebook']))
                        <li><a href="{{$value['snw_facebook']}}">Facebook</a></li>
                    @endif
                    @if (strlen($value['snw_twitter']))
                        <li><a href="{{$value['snw_twitter']}}">Twitter</a></li>
                    @endif
                    @if (strlen($value['snw_instagram']))
                        <li><a href="{{$value['snw_instagram']}}">Instagram</a></li>
                    @endif
                    @if (strlen($value['snw_github']))
                        <li><a href="{{$value['snw_github']}}">Github</a></li>
                    @endif
                    @if (strlen($value['snw_mail']))
                        <li><a href="mailto:{{$value['snw_mail']}}">Email Us</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{asset('assets/tema')}}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('assets/tema')}}/js/particles.min.js"></script>
    <script src="{{asset('assets/tema')}}/js/comingsoon.js"></script>

    
    <script>
    var $clock = $('#clock');
    $('#clock').countdown('{{$dt}}', function(event) {
        var $this = $(this).html(event.strftime(''
            + '<span>%D<div>days</div></span>'
            + '<span>%H<div>hr</div></span>'
            + '<span>%M<div>min</div></span>'
            + '<span>%S<div>sec</div></span>'));
        });
    </script>
</html>
