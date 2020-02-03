<footer>
    <h1>Profilis</h1>
    <p>Čia esu aš</p>
    @foreach($darbuotojai as $darbuotojas)
        <ul>
            <li>{{$darbuotojas}}</li>
        </ul>
    @endforeach
</footer>