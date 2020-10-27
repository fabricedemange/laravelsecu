@extends('../layouts.partials.mainlayout')


@section('content')



<section class="clean-block clean-info dark">
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-end flex-wrap" style="width: 670;">
        <form class="text-left" style="text-align: left;" action="{{ route('comments/update', $comment->id) }}" method="POST">
            @csrf
            @method('put')
            <input readonly class="form-control" type="text" name="pseudo" value="{{ $comment->pseudo}}" placeholder="titleA" style="height: 40px;width: 650;"></h2>
            <input readonly class="form-control" type="text" name="article_id" value="{{ $comment->article_id}}" placeholder="titleA" style="height: 40px;width: 650;"></h2>

            <h2 class="text-info" style="text-align: left;width: 650px;">Contenu
                <textarea class="form-control" type="text" name="content" placeholder="content" style="height: 77px;width: 650;">{{old('content', $comment->content)}}</textarea></h2>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>



    </div>
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-end flex-wrap" style="width: 670;">
        <form class="text-left" style="text-align: left;" action="{{ route('comments/valider', $comment->id) }}" method="POST">
            @csrf
            @method('put')
            <button class="btn btn-primary" type="submit">Valider le commentaire</button>
        </form>
    </div>
</section>

@endsection