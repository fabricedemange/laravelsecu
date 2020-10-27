@extends('../layouts.partials.mainlayout')

@section('content')

<section class="clean-block clean-info dark">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">articles</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>contenu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td><strong><a href="{{ route('articles/show', $article->id) }}"> {{ $article->title }}</a></strong></td>
                            <td><strong>{{ substr($article->content , 0, 100)}}</strong></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection