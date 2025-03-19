




<div class="card mx-auto h-100" style="width: 18rem;"> <!-- Card responsiva con altezza fissa -->
    <!-- Immagine del personaggio -->
    <img src="{{ $patriotPhoto }}" class="card-img-top" alt="{{ $patriotName }} {{ $patriotSurname }} Photo">
    
    <div class="card-body d-flex flex-column"> <!-- Flexbox per organizzare il contenuto all'interno della card -->
        <h5 class="card-title"> {{ $patriotName }} {{ $patriotSurname }} </h5> <!-- Nome del personaggio -->
        <p class="card-text"></p> <!-- Sezione per descrizione (vuota per ora) -->

        <!-- Link per visualizzare i dettagli del personaggio -->
        <a href="{{ route('la-li-lu-le-lo' , ['id' => $patriotId]) }}" class="btn btn-outline-secondary mt-auto">Vai al dettaglio</a>
    </div>
</div>
