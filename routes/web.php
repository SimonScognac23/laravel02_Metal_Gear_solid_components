<?php

// web.php quà dentro andremo ad inserire tutte le richieste possibili che l'utente può fare sul nostro sito web
// Questo file è detto file di routing, dobbiamo pensare a questo file come se fosse un vigile urbano



use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController; // è l'estensione che serve per dire che il file che stiamo usando esiste da un altra parte, ossia in PublicController.php
use \App\Http\Controllers\PatriotController;












//-------------------- PAGINA WELCOME  ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



// funzione che restituisce la pagina di welcome

Route::get('/', [PublicController::class , 'homepage'])->name('home-page');  // per aggiungere il nome a una rotta ci alleghiamo il metodo name() che accetta in ingresso una stringa che sarà l'etichetta della pagina, ci sono delle convezioni ma è un etichetta

// nell array avro una chiave , la chiave è il nome della variabile che sarà disponibile sulla lista, mentre il valore è il contenuto ossia $title
// in web.php  qui nell uri devo dire che la risposta  per questa richiesta sarà gestita all'indirizzo PublicController, tramite il  [] come primo parametro ci inserirò il controller che gestisce la logica, in questo caso si chiamerà PublicController::class, il secondo parametro è il nome della funzione in questo esempio è 'homepage'













//-------------------------- PAGINA CHI SIAMO ------------------------------------------------------------------------------------------------------------------------------------------------------


// Partendo dalla classe Route prendiamo il metodo get (per visualizzare una risorsa), la richiesta get deve partire quando l'utente digita l'uri
// 
Route::get('/about-us' , [PublicController::class , 'chiSiamo'] )->name('chi-siamo');  // metodo name() per dare il nome a una rottaj

// a partire dalla classe rote prendiamo il metodo get(per visualizzare una risorsa)













//------------------------------ PAGINA HIDEO KOJIMA ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------




// funzione che restituisce la pagina di hideo kojima

Route::get('/hideo-kojima',  [PatriotController::class , 'Kojima'] )->name('kojima-productions');










//------------------------------------- PAGINA GO SOMEWHERE ----------------------------------------------------



// rotta parametrica  >>> rotta che accetta un parametro, il parametro che serve per fare la rotta parametrica è 'id'
// stiamo passando il parametro all'uri

Route::get('/Patriot/dettaglio/{id}' , [PatriotController::class, 'patriot'] )->name('la-li-lu-le-lo');
// per dire che all' uri deve accettare un parametro andremo a inserire questa sintassi -->{id}<---- con dentro il nome del parametro








//---------------------------------------------PAGINA SERVIZI--------------------------------------------------------------------------------------------

Route::get('/services' , [PublicController::class , 'servizi'] )->name('nostri-servizi');