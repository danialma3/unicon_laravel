@extends('beautymail::templates.sunny')

@section('content')

@include ('beautymail::templates.sunny.heading' , [
'heading' => 'Terima Kasih Telah Membeli!',
'level' => 'h1',
])

@include('beautymail::templates.sunny.contentStart')

<p>Berikut QR Code tiket Anda!</p>

    <img   src="{!!$message->embedData(QrCode::backgroundColor(255, 255, 255)->margin(2)->style('square')->format('png')->merge(asset('a.png'), 0.2, true)->size(500)->generate('1'), 'QrCode.png', 'image/png')!!}">

    <img src="data:image/png;base64, {!! base64_encode(
            $message->embedData(
                QrCode::backgroundColor(255, 255, 255)->margin(2)->style('square')->format('png')->merge(asset('a.png'), 0.2, true)->size(500)->generate('1'),
                'QrCode.png',
                'image/png',
            ),
        ) !!} " style="display:none">

@include('beautymail::templates.sunny.contentEnd')

@include('beautymail::templates.sunny.button', [
'title' => 'Go To Website',
'link' => 'http://kalselunite.com'
])



@stop