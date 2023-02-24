<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <img src="data:image/png;base64, {!! base64_encode(
        $message->embedData(
            QrCode::format('png')->merge(asset('a.png'), 0.2, true)->size(1000)->generate('1'),
            'QrCode.png',
            'image/png',
        ),
    ) !!} ">
</body>

</html>
