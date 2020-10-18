@extends('layouts.partials.mainlayout')


@section('header2')
<div class="card text-center style= margin: 20px; height:20px;margin-top:30px;">

    {{ Session::flash('message', 'Bienvenue sur mon Blog !!')}}
    
</div>
</div>
@endsection


@section('content')




<section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
    <div class="text">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p><button class="btn btn-outline-light btn-lg" type="button">Learn More</button>
    </div>
</section>
<section class="clean-block clean-info dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Info</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>

    </div>
</section>




@endsection