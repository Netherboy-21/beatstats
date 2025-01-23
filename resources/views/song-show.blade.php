<div>
    <h1>{{ $song->name }} ({{ $song->difficulty }}): {{ $song->getDifficultyRating() }}</h1>
    <em>{{ $song->artist }}, {{ $song->pack }}</em>
</div>
