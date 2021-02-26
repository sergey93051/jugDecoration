@extends('main.layouts.index')
@section('page1','Jug')

@section('header')
@include('main.controlheader.mainheader')   
@endsection
@section('fcmess')
@include('main.messfc.messlink')
@endsection

@section('containerMain')
{{-- header --}}

{{-- content --}}
@include('main.pageProduct.catepage')

@endsection

{{-- footer --}}
@section('footer')
@include('main.footer.footer')  
@endsection
