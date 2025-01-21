<div>
    <form method="post">
        @csrf
        <div>
            <label for="name">Name:</label><br>
            <input id="name" name="name" value="{{ old("name") }}" type="text">
        </div>
        <div>
            <label for="artist">Artist:</label><br>
            <input id="artist" name="artist" value="{{ old(key: "artist") }}" type="text">
        </div>
        <div>
            <label for="pack">Pack:</label><br>
            <select id="pack" name="pack" value="{{ old("pack") }}">
                <option value="OST Vol. 1">OST Vol. 1</option>
                <option value="OST Vol. 2">OST Vol. 2</option>
                <option value="OST Vol. 3">OST Vol. 3</option>
                <option value="OST Vol. 4">OST Vol. 4</option>
                <option value="OST Vol. 5">OST Vol. 5</option>
                <option value="OST Vol. 6">OST Vol. 6</option>
                <option value="OST Vol. 7">OST Vol. 7</option>
                <option value="Extra">Extra</option>
                <option value="Camellia">Camellia</option>
            </select>
        </div>
        <div>
            <label for="difficulty">Difficulty:</label><br>
            <select id="difficulty" name="difficulty" value="{{ old("difficulty") }}" type="text">
                <option value="easy">Easy</option>
                <option value="normal">Normal</option>
                <option value="hard">Hard</option>
                <option value="expert">Expert</option>
                <option value="expert+">Expert+</option>
            </select>
        </div>
        <div>
            <label for="mode">Mode:</label><br>
            <select id="mode" name="mode" value="{{ old("mode") }}" type="text">
                <option value="default">Default</option>
                <option value="one hand">One Hand</option>
                <option value="no arrows">No Arrows</option>
                <option value="90 degrees">90 Degrees</option>
                <option value="360 degrees">360 Degrees</option>
            </select>
        </div>
        <div>
            <label for="seconds">Length (seconds):</label><br>
            <input id="seconds" name="seconds" value="{{ old("seconds") }}" type="number">
        </div>
        <div>
            <label for="bpm">BPM:</label><br>
            <input id="bpm" name="bpm" value="{{ old("bpm") }}"type="number">
        </div>
        <div>
            <label for="notes_per_second">Notes per second:</label><br>
            <input id="notes_per_second" name="notes_per_second" value="{{ old("notes_per_second") }}" type="number", step=0.01>
        </div>
        <div>
            <label for="notes">Note count:</label><br>
            <input id="notes" name="notes" value="{{ old("notes") }}" type="number">
        </div>
        <div>
            <label for="walls">Wall count:</label><br>
            <input id="walls" name="walls" value="{{ old("walls") }}" type="number">
        </div>
        <div>
            <label for="bombs">Bomb count:</label><br>
            <input id="bombs" name="bombs" value="{{ old("bombs") }}" type="number">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
