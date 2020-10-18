


<div class="card text-center">
    <div class="card-body" style="margin: 20px; height:20px;margin-top:30px;">
        @if (session()->has('message'))
        <h4 class="card-title">{{ session('message') }}</h4>
        @endif

        @if (session()->has('info'))
        <h4 class="card-title">{{ session('info') }}</h4>
        @endif
    </div>

</div>

@yield('header2')