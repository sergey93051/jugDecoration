@extends('main.layouts.index')
@section('page1','main')

@section('containerMain')
{{-- header --}}
@include('main.controlheader.mainheader')
{{-- content --}}
<div class="main__prod">
        <div class="container-fluid">
               @include('main.pageProduct.product')
        </div> 
</div>
{{-- footer --}}
<div class="main-footer">
       <div class="container-fluid">
              @include('main.footer.footer')
       </div>
</div>
@endsection

