@extends('../layouts.partials.mainlayout')



@section('content')


<section class="content"></section>
<div class="card text-center">
    <div class="card-body">
        
        <h6 class="text-muted card-subtitle mb-2">dernière mise à jour : {{ $comment->updated_at->format('d/m/Y') }} </h6>
        <p class="card-text">{{ $comment->content }}</p>
    </div>
</div>


@endsection