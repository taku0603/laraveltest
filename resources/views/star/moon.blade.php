@extends('layout.common')

@section('title', '月のページ')
@section('keywords', 'キーワード7,キーワード8,キーワード9')
@section('description', '月ページの説明文です')
@section('pageCss')
    <link href="/css/star/moon.css" rel="stylesheet">
@endsection

@include('layout.header')

@section('content')
    <p>このページは月ページです。</p>
{{--    <p><img src="/img/star/moon.png" width="100" alt="月画像"></p>--}}
    <p><img src="star.png" width="100" alt="星画像"></p>
@endsection

@include('layout.submenu')

@include('layout.footer')
