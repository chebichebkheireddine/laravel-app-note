{{-- resources/views/errors/503.blade.php --}}
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>الموقع تحت الصيانة</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            padding: 2rem;
            background: rgb(32, 32, 32);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ffffff;
        }

        p {
            color: #d1ddf4;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🔧 الموقع تحت الصيانة</h1>
        <p>نعمل على تحسين تجربتكم. نعود خلال دقائق...</p>
        @if (isset($retryAfter))
            <p>⏱️ المحاولة بعد: {{ $retryAfter }} ثانية</p>
        @endif
    </div>
</body>

</html>
