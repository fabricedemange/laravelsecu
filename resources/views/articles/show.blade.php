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
        <form action="{{ route('comments/create', $article) }}">
            @csrf

            <input hidden readonly class="form-control" type="text" name="id" value="{{ $article->id}}" placeholder="titleA" style="height: 40px;width: 650;">

            <button class="button is-danger" type="submit">créer un commentaire</button>
        </form>
        <table class="table is-hoverable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>

                    <td><strong><a href="{{ route('comments/show', $comment->id) }}"> {{ $comment->content }}</a></strong></td>
                    <td>
                        <a class="button is-danger" href="{{ route('comments/edit', $comment) }}">Edit</a>


                    </td>
                    <td>
                        <form action="{{ route('comments/destroy', $comment->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="button is-danger" type="submit">Supprimer</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>


        @else
        {{ Session::flash('message', 'Vous devez vous connecter pour poster un commentaire') }}
      

        @endif
        @endif
    </div>
</div>




@endsection