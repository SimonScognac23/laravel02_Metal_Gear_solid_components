<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatriotController extends Controller
{



    //---------------------------------PAGINA CHI SIAMO ---> GO SOMEWHERE ----------------------------------------------------------------------------------------------------------




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





    public function patriot($id) {  // ovviamente il parametro snake lo passiamo alla funzione
        // 1 step >>> affinche ogni pagina ha le sue caratteristiche e dati devo riportarmi l'array nella funzione dove ritorna la vista di dettaglio.Patriot, si fa cosi affinche non si ha il db
        // $arrayPatriots = [   // creo un array di patriots   

        // 2 step >>>>  per ogni array di arrayPatriots il nome che mi arriva in ingresso ossia  $snake è uguale al nome dell'array? se si fai qualcosa...ossia un foreach

        //   ['id' => 1, 'name' => 'The', 'surname' => 'Boss'],
        //   ['id' => 2, 'name' => 'Big', 'surname' => 'Bos66s'],
        //   ['id' => 3, 'name' => 'Major', 'surname' => 'Zero'],
        //   ['id' => 4, 'name' => 'Ocelot', 'surname' => 'Mama'],
        //];

        foreach($this->arrayPatriots as $patriot) {  // primo cicliamo sull array
            //se clicco sul bottone name'' 
            if($id == $patriot['id']) {    // qui faccio un controllo se il parametro in ingresso ossia $name è uguale al $patriot che è l'array ciclato del valore 'name' cioè il nome del patriot
                return view('patriot.dettaglioPatriot', ['patriot' => $patriot]); // dentro l'if ci metto la view per vedere la vista e il dato singolo del patriot che la condizione if si porta con se 
                // QUINDI SE LA CONDIZIONE è ACCETTATA FAMMI VEDERE LA VISTA CON IL DATO CHE MI SERVE, IL SINGOLO DATO LO OTTENTO DA 'PATRIOT'=>$PATRIOT
            }
        }

        return view('patriot.dettaglioPatriot');  // qui ancora non esiste la vista quindi lo stabilisco qui come si chiamerà
        // al momento la pagina dettaglioPatriot NON esiste 
        // puo avere senso avere sottocartelle di views per i diversi argomenti
        // dopo devo linkare questa pagina al bottone go somewhere

        // IMPORTANT -->> andro a creare la sotto cartella 'patriot' dentro 'views' e la pagina 'dettaglioPatriot' l'andrò a creare li dentro!!
        // per recuperare la sottocartella dettaglioPatriot possiamo o usare la sintassi 'patriot/dettaglioPatriot' oppure patriot.dettaglioPatriot
    }





    
    //------------------------------ PAGINA HIDEO KOJIMA ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function Kojima() {  
        return view('hideoKojima'); 
    }
}











