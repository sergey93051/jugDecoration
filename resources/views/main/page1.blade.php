@extends('main.layouts.index')
@section('page1','main')

@section('header')
@include('main.controlheader.mainheader')   
@endsection

@section('containerMain')
{{-- header --}}

{{-- content --}}
{{-- @include('main.pageProduct.product') --}}
@include('main.pageProduct.catepage')
{{-- footer --}}
@include('main.footer.footer')

@endsection

