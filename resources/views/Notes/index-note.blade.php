@extends('layout.app')

@php
    $breadcrumbs = [['label' => 'الصفحة الرئيسية', 'url' => route('home')], ['label' => 'مصلحة التمدرس', 'url' => '#']];
@endphp

@section('header.name')
    مديرية التربية <span
        class="relative inline-block bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent font-bold">
        لولاية المنيعة
        <span
            class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full opacity-80"></span>
        {{-- Replace the problematic SVG with a simple CSS gradient line --}}
    </span> <span className='relative bg-gradient-to-r from-[#764de1] to-indigo-600 bg-clip-text text-transparent'>ترحب
    </span> بكم .
@endsection

@section('content')
    <button
        class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors duration-200">
        <i class="fa-solid fa-plus text-sm"></i>
        <span>إضافة جديد</span>
    </button>




    <div class="h-30 w-70 bg-white mt-3 hover:bg-blue-400 focus:ring-2 focus:ring-blue-500 rounded-4xl ">

    </div>
@endsection
