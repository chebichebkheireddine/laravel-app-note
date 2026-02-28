{{-- المتغيرات من AppServiceProvider --}}
<h1>The name of web is: {{ $appName }}</h1>
<h2>Current Year: {{ $currentYear }}</h2> {{-- ← c صغيرة --}}

@php

    $names = collect(['HyaTi', 'Med', 'Laravel']);
    $upper = $names->toUppers(); // ← Macro موجود

    // $text = 'Hi my name is Khiro';
    $finalText = Str::toSlug('Hi my name is Khiro'); // ← Macro موجود
@endphp

{{-- عرض الأسماء --}}
@foreach ($upper as $name)
    <h1>{{ $name }}</h1> {{-- ← h صغيرة في h1 --}}
@endforeach

<br> {{-- ← صحيح، ليس </br> --}}

<h1>{{ $finalText }}</h1>
