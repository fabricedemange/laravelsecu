@extends('../layouts.partials.mainlayout')



@section('content')


<section class="content"></section>
<div class="card text-center">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="text-muted card-subtitle mb-2">dernière mise à jour : {{ $article->updated_at->format('d/m/Y') }} </h6>
        <p class="card-text">{{ $article->content }}</p>
        @if (Route::has('login'))

        @auth
        <form action="{{ route('comments.create', $article) }}">
            @csrf

            <input hidden readonly class="form-control" type="text" name="id" value="{{ $article->id}}" placeholder="titleA" style="height: 40px;width: 650;">

            <button class="button is-danger" type="submit">créer un commentaire</button>
        </form>
        @else

        Vous devez vous connecter pour poster un commentaire

        @endif
        @endif
    </div>
</div>




@endsection