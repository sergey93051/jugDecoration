@extends('main.layouts.index')
@section('page1','main')

@section('containerMain')

@include('main.controlheader.mainheader')
<div class="main__prod">
        <div class="container-fluid">
               @include('main.pageProduct.product')
        </div> 
</div>
<div class="main-footer">
       <div class="container-fluid">
              @include('main.footer.footer')
       </div>
</div>
@endsection

