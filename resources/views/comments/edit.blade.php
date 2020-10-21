@extends('../layouts.partials.mainlayout')


@section('content')



<section class="clean-block clean-info dark">
    <div class="container d-lg-flex justify-content-lg-center align-items-lg-end flex-wrap" style="width: 670;">
        <form class="text-left" style="text-align: left;" action="{{ route('comments.update', $comment->id) }}" method="post">
            @csrf
            @method('put')
        
            <h2 class="text-info" style="text-align: left;width: 650px;">Contenu
                <textarea class="form-control" type="text" name="content" placeholder="content" style="height: 77px;width: 650;">{{old('content', $comment->content)}}</textarea></h2>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>
    </div>
</section>

@endsection