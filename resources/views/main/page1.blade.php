@extends('main.layouts.index')
@section('page1','main')

@section('containerMain')
{{-- header --}}
@include('main.controlheader.mainheader')
{{-- content --}}
{{-- @include('main.pageProduct.product') --}}
@include('main.pageProduct.catepage')
{{-- footer --}}
<div class="container">
              @include('main.footer.footer')
</div>
@endsection

