<div class="container-flute">
    <div class="header">
        @include('main.header.nav')
        <div class="main__reg">
               @include('main.header.regiSter')
               @include('main.header.login')
               @include('main.header.neworder')         
        </div>
        <div class="main__helpmail">
            @include('main.header.helpmail')
        </div>
        @if (Request::path() == '/')
           @include('main.header.main')
        @endif
    </div>
</div>
