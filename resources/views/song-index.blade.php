<div>
    @foreach ($songs as $song)
        <b>{{ $song->name }} ({{ ucwords($song->difficulty) }}) : {{ $song->getDifficultyRating() }}</b><br>
        <em>{{ $song->artist }}</em>
        <hr>
    @endforeach
</div>
