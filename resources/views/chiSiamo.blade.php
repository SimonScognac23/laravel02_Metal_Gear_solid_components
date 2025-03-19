<x-layout>
   
    <!-- Sezione principale del contenuto -->
    <div class="container-fluid vh-100">
        <!-- Righe per centrare il contenuto -->
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <!-- Titolo principale della sezione -->
                <h1 class="text-center py-5">
                    Alcuni personaggi della saga di Metal Gear Solid
                </h1>
            </div>
        </div>

        <!-- Lista dei personaggi della saga -->
        <div class="row">
            <!-- Lista dei nomi Patriots (senza card) -->
            <div class="col-12">
                <ul class="list-unstyled"> <!-- Aggiunto "list-unstyled" per rimuovere i punti di elenco e margini -->
                    @foreach ( $patriots as $patriot )
                        <!-- Visualizza il nome e cognome di ogni personaggio -->
                        <li> {{$patriot['name']}} {{$patriot['surname']}} </li>
                    @endforeach
                </ul>
            </div>
            <!-- Fine lista dei nomi Patriots -->

            <!-- Lista dei personaggi con card (immagini e dettagli) -->
            <div class="row justify-content-center align-items-start">

                @foreach ( $patriots as $patriot )  <!-- IMPORTANTE! ora pero $patriot deve arrivare come dato anche dentro card.blade -->
                    <div class="col-12 col-md-4 col-lg-3 mb-4"> <!-- Ogni card occuperà un terzo della larghezza su dispositivi medi o più grandi -->


                   <!--  per passare i dati a un componente blade ossia in questo caso "card.blade" sfrutto gli attributi HTML qui sto passando
                      i dati primitivi, e quindi sfrutto un semplice tag HTML, patriotName sarebbe il valore che passo che sarà
                      uguale a il singolo array ciclato $patriot che corrisponde a name ossia il singolo nome
                  
                      Cosi creo degli attributi uno per elemento del mio arrayPatriots,questo è un dato dinamico
                      io passo di volta in volta il nome del singolo patriot
                   -->
                      <x-card 
                      patriotName="{{ $patriot['name'] }}"  
                      patriotSurname="{{ $patriot['surname'] }}"                       
                      patriotPhoto="{{ $patriot['photo'] }}" 
                      patriotId="{{ $patriot['id'] }}"  >
                      
                     >


                      </x-card >



                    </div>
                @endforeach
                
            </div>
            <!-- Fine lista dei personaggi con card -->

        </div>
    </div>

</x-layout>