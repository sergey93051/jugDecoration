<div class="header">
    @include('main.header.nav')
    <div class="main__reg">
           @include('main.header.regiSter')
           @include('main.header.login')
    </div>
    @if (Request::path() == '/')
       @include('main.header.main')
    @endif
</div>