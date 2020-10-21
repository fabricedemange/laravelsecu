@extends('../layouts.partials.mainlayout')



@section('content')






<section class="clean-block clean-info dark">
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-end flex-wrap" style="width: 670;">
        <form class="text-left" style="text-align: left;" action="{{ route('comments.store') }}" method="POST">
            @csrf
            <h2 class="text-info" style="text-align: left;width: 650px;">Pseudo
                <input readonly class="form-control" type="text" name="pseudo" value="{{ Auth::user()->name }}" placeholder="titleA" style="height: 40px;width: 650;"></h2>

            <h2 class="text-info" style="text-align: left;width: 650px;">Contenu
                <textarea class="form-control" type="text" name="content" placeholder="content" style="height: 77px;width: 650;">{{old('content', $article->content)}}</textarea></h2>
            <input hidden class="form-control" type="text" name="article_id" placeholder="id" value="{{ $_GET['id'] }}" style="height: 40px;width: 650;"></h2>


            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>
    </div>
</section>




@endsection