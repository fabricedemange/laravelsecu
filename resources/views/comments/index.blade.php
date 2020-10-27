@extends('../layouts.partials.mainlayout')

@section('content')

<section class="clean-block clean-info dark">
    <div class="card">

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
            </div>
        </div>
    </div>
</section>
@endsection