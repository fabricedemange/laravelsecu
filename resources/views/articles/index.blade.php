@extends('../layouts.partials.mainlayout')

@section('content')

<section class="clean-block clean-info dark">
    <div class="card">
        <header class="card-header">
            <form action="{{ route('articles.create') }}">
                @csrf
                <button class="button is-danger" type="submit">Créer un nouvel article</button>
            </form>
        </header>
        
        <div class="card-content">
            <div class="content">
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
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>

                            <td><strong><a href="articles/{{ $article->id }}"> {{ $article->title }}</a></strong></td>
                            <td>
                                <form action="{{ route('articles.edit', $article->id) }}">
                                    @csrf
                                    <button class="button is-danger" type="submit">Editer</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection