<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//-------------------- PAGINA WELCOME  ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

class PublicController extends Controller
{
  // PatriotController ---> controller creato appositamente per gestire dinamicamente le pagine del 'go somewhere' che appartengono alle singole card
  // PatriotController ---> controller creato appositamente per gestire dinamicamente le pagine del 'go somewhere' che appartengono alle singole card
  public $arrayPatriots = [   // creo un array di patriots
    ['id' => 1, 'name' => 'The', 'surname' => 'Boss', 'biography' => 'The Boss era una soldatessa leggendaria e la leader della Cobra Unit durante la Guerra Fredda. Era anche conosciuta come la "Madre delle Forze Speciali" ed è stata una delle figure principali nella storia della serie Metal Gear.', 'photo' => 'https://th.bing.com/th/id/OIP.QFLjA8HbDvP7Fj95NJz52AHaHa?rs=1&pid=ImgDetMain'],
    ['id' => 2, 'name' => 'Big', 'surname' => 'Boss', 'biography' => 'Big Boss, inizialmente conosciuto come Naked Snake, era un soldato altamente qualificato e il fondatore di FOXHOUND e Outer Heaven. È diventato una figura centrale nella saga di Metal Gear, sia come eroe che come antagonista.', 'photo' => 'https://vignette.wikia.nocookie.net/p__/images/5/5b/Metal_Gear_Big_Boss3.jpg/revision/latest?cb=20151219031944&path-prefix=protagonist'],
    ['id' => 3, 'name' => 'Major', 'surname' => 'Zero', 'biography' => 'Major Zero, noto anche come Zero, era il fondatore e il primo leader dei Patriots, un\'organizzazione che cercava di controllare il flusso di informazioni e potere nel mondo. Ha giocato un ruolo cruciale nel plasmare gli eventi della serie.', 'photo' => 'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/09/metal-gear-solid-zero-1.jpg'],
    ['id' => 4, 'name' => 'Ocelot', 'surname' => 'Mama', 'biography' => 'Revolver Ocelot era un maestro nell\'uso delle pistole e una figura chiave negli eventi che riguardano sia Big Boss che Solid Snake. È stato un operatore per il KGB, i Patriots, e ha giocato un ruolo fondamentale nel manipolare gli eventi mondiali per i suoi scopi.', 'photo' => 'https://i.pinimg.com/originals/4d/dd/a9/4ddda966793b6d83f44ae985bf223c61.png'],
    ['id' => 5, 'name' => 'Solid', 'surname' => 'Snake', 'biography' => 'Solid Snake, il protagonista principale della saga Metal Gear, è un soldato d\'elite noto per le sue incredibili abilità furtive e di combattimento. È stato coinvolto in missioni per fermare il lancio di armi nucleari e le macchinazioni dei Patriots.', 'photo' => 'https://ilarge.lisimg.com/image/4282946/740full-solid-snake.jpg'],
    ['id' => 6, 'name' => 'Liquid', 'surname' => 'Snake', 'biography' => 'Liquid Snake, gemello di Solid Snake, è un antagonista nella saga. Ha un odio profondo per suo fratello e cerca di usare Metal Gear per scatenare una guerra nucleare. Il suo obiettivo è dimostrare che è superiore a Solid Snake.', 'photo' => 'https://th.bing.com/th/id/OIP.xukuA6NKoDA-A09IA2cdaQHaFk?rs=1&pid=ImgDetMain'],
    ['id' => 7, 'name' => 'Vamp', 'surname' => '', 'biography' => 'Vamp è un assassino e un soldato dalla natura spietata, noto per la sua incredibile agilità e la sua capacità di rigenerarsi da ferite mortali. È stato un membro del gruppo Dead Cell ed è stato coinvolto in numerosi complotti dei Patriots.', 'photo' => 'https://th.bing.com/th/id/R.b31aaeedd56f2834096f469147371520?rik=Md%2formWsVhx4CQ&pid=ImgRaw&r=0'],
    ['id' => 8, 'name' => 'Raiden', 'surname' => '', 'biography' => 'Raiden, il cui vero nome è Jack, è un ex bambino soldato che diventa un membro delle Forze Speciali degli Stati Uniti. Si unisce a Solid Snake durante le operazioni contro i Patriots e diventa un protagonista centrale in Metal Gear Solid 2: Sons of Liberty.', 'photo' => 'https://th.bing.com/th/id/R.ec1baba50a4bcac51ac2029a50ea537a?rik=xANsPcOgyN5F%2bw&pid=ImgRaw&r=0'],
    ['id' => 9, 'name' => 'Meryl', 'surname' => 'Silverburgh', 'biography' => 'Meryl Silverburgh è una soldatessa e un membro della FOXHOUND, ed è anche la nipote di Roy Campbell. Aiuta Solid Snake durante la missione su Shadow Moses, ed è un personaggio chiave in Metal Gear Solid.', 'photo' => 'https://th.bing.com/th/id/R.d8f51474bd2cfa3745bf6f0a20327f3a?rik=AAAGbcmt0KKb4g&pid=ImgRaw&r=0'],
    ['id' => 10, 'name' => 'Otacon', 'surname' => 'Hal Emmerich', 'biography' => 'Hal "Otacon" Emmerich è uno degli scienziati più brillanti e il progettista principale di Metal Gear REX. Durante la missione su Shadow Moses, diventa un alleato di Solid Snake, e la sua conoscenza tecnologica è fondamentale per fermare i piani dei nemici.', 'photo' => 'https://th.bing.com/th/id/OIP.5Y0xN7celLXcjf2b_H99WAHaGJ?rs=1&pid=ImgDetMain'],
    ['id' => 2, 'name' => 'Big', 'surname' => 'Boss', 'biography' => 'Big Boss, inizialmente conosciuto come Naked Snake, era un soldato altamente qualificato e il fondatore di FOXHOUND e Outer Heaven. È diventato una figura centrale nella saga di Metal Gear, sia come eroe che come antagonista.', 'photo' => 'https://vignette.wikia.nocookie.net/p__/images/5/5b/Metal_Gear_Big_Boss3.jpg/revision/latest?cb=20151219031944&path-prefix=protagonist'],
];  // questo attributo arrayPatriots sara disponibile a ogni funzione di questa classe nel controller





    public function homepage() {  // qui sono dentro la funzione che mi restituisce la vista di welcome
        $title = 'Snaaakee!!';  //questo $title dovra arrivare dentro la pagina di welcome, e per far  cio si passa all interno della funzione scritta nella riga successiva
        return view('welcome', ['titolo' => $title]); //la funzione view puo accettare 2 parametri il primo è la vista e il secondo sono i dati sotto forma di array, questo array sarà di tipo chiave-valore
    }  // funzione riportata da web.php




    //-------------------------- PAGINA CHI SIAMO ------------------------------------------------------------------------------------------------------------------------------------------------------



    
    public function chiSiamo() { // Qui dentro scriviamo quello che vogliamo, purche 'chi-siamo' sia parlante, perchè sarà quello che l'utente vedrà
        return view('chiSiamo', ['patriots' => $this->arrayPatriots]);  // view--> metodo di Laravel che si occupa di dare le viste, view va a vedere in pratica i files dentro views
        // il dato che effettivamente voglio passare sarà $arrayStudents, e sarà un array chiave valore, la chiave sarà il nome della variabile disponibile sulla lista e il valore è il valore stesso della variabile ossia il contenuto della variabile
        // uso il this per prendere l attributo dentro la classe
    }








//------------------------------------ PAGINA SERVIZI-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

public function servizi() {      
  
    $title1 = "Metal Gear Solid (1998) per PS1 è un gioco stealth d'azione diretto da Hideo Kojima. Il protagonista, Solid Snake, deve fermare un gruppo di terroristi che minaccia di lanciare un'arma nucleare. Ambientato sull'isola di Shadow Moses, il gioco è famoso per il suo gameplay stealth, dove il giocatore deve evitare i nemici piuttosto che combatterli direttamente. La trama complessa e le sequenze cinematografiche hanno reso il titolo un classico della PlayStation 1."; 
    $title2 = "Metal Gear Solid 2: Sons of Liberty (2001) per PS2 è il sequel di Metal Gear Solid, sempre diretto da Hideo Kojima. La trama segue principalmente Raiden, un nuovo protagonista, che deve fermare una crisi legata a una nuova versione dell'arma nucleare Metal Gear. Il gioco inizia con una missione in cui Solid Snake è coinvolto, ma ben presto il focus si sposta su Raiden, un giovane soldato che si ritrova a fronteggiare una cospirazione globale. Il gioco introduce un gameplay ancora più raffinato, con movimenti fluidi e un'IA avanzata dei nemici. La trama complessa esplora temi come il controllo dell'informazione e la manipolazione della società, con molteplici colpi di scena. Metal Gear Solid 2 è celebre per la sua innovativa grafica, il design del gameplay e la sua narrazione profonda, che ha suscitato discussioni e riflessioni tra i giocatori.";
    $title3 = "Metal Gear Solid 3: Snake Eater (2004) per PS2 è un prequel della serie, ambientato durante la Guerra Fredda negli anni '60. Il protagonista è Naked Snake (che diventerà poi Big Boss), e il gioco si concentra sulla sua missione per fermare un'arma biologica chiamata Shagohod, sviluppata da una fazione sovietica. Durante la missione, Snake deve affrontare The Boss, la sua mentore, che si è alleata con i nemici. Il gioco introduce il gameplay di sopravvivenza, con meccaniche come la gestione della salute, la caccia per procurarsi cibo e l'uso del camuffamento. La trama esplora temi di lealtà, tradimento e il significato del dovere. Metal Gear Solid 3 è amato per la sua narrazione intensa, i personaggi memorabili e il profondo impatto emotivo. È considerato uno dei capitoli migliori della saga per il suo equilibrio tra gameplay, storia e atmosfera.";
    $title4 = "Metal Gear Solid 4: Guns of the Patriots (2008) per PS3 è il quarto capitolo principale della serie e conclude la storia di Solid Snake. Ambientato in un futuro prossimo, il gioco segue Snake mentre affronta una guerra globale controllata da un sistema di intelligenza artificiale che gestisce le armi e i conflitti. Snake, ormai invecchiato e afflitto da un inesorabile deterioramento fisico, deve fermare Liquid Ocelot, che minaccia di scatenare una nuova era di conflitti. Il gioco presenta un mix di gameplay stealth, azione e narrazione cinematografica. Le meccaniche di gioco sono state ulteriormente perfezionate, con l'introduzione di nuove armi, movimenti e una maggiore interazione con l'ambiente. Metal Gear Solid 4 è noto per le sue sequenze filmiche straordinariamente lunghe e la trama complessa, che chiude molte delle linee narrative delle storie precedenti. È stato lodato per la sua grafica rivoluzionaria, la profondità della trama e il suo approccio epico alla conclusione della saga di Snake.";

   
    return view('serviziMetalGear', [
        'titolo1' => $title1,
        'titolo2' => $title2,
        'titolo3' => $title3,
        'titolo4' => $title4
    ]);
}


}