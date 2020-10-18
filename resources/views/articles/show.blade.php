@extends('../layouts.partials.mainlayout')



@section('content')


<section class="content"></section>
<div class="card text-center">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="text-muted card-subtitle mb-2">dernière mise à jour : {{ $article->updated_at->format('d/m/Y') }} </h6>
        <p class="card-text">{{ $article->content }}</p>
    </div>
</div>



@endsection