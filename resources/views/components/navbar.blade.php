<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Pulsante per il menu mobile (toggle) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu di navigazione che appare quando la navbar è espansa -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Link alla Home page -->
                <li class="nav-item">
                <a class="nav-link @if (Route::currentRouteName() == 'home-page') kojima navbar.kojima @endif" href="{{ route('home-page') }}">Home</a>

                    <!-- URI per la home page -->
                    <!-- IMPORTANTE!! a partire dalla classe route fammi scattare la funzione currentRouteName() che restituisce una stringa, quindi quello che restituisce il metodo deve essere uguale a 'home-page' ossia il nome della rotta, se questa condizione è rispettata allora metti la classe active -->
                </li>

                <!-- Link alla pagina "Chi siamo" -->
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'chi-siamo') active @endif" href="{{ route('chi-siamo') }}">Chi siamo</a>
                    <!-- URI per "Chi siamo" -->
                </li>

                <!-- Link alla pagina "Hideo Kojima" -->
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'kojima-productions') active @endif" href="{{ route('kojima-productions') }}">Hideo Kojima</a>
                    <!-- URI per "Hideo Kojima" -->
                </li>

                <!-- Link alla pagina "I nostri servizi" -->
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'nostri-servizi') active @endif" href="{{ route('nostri-servizi') }}">I nostri servizi</a>
                    <!-- URI per "I nostri servizi" -->
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
