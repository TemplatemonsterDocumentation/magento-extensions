<h2 class="item1">Installazione</h2>


<div class="alert alert-danger">
    <p><strong>Attenzione!!!</strong></p>
    A causa delle caratteristiche del motore, si dovrà utilizzare qualsiasi ambiente console con la linea di comando. configurazione del modulo verrà eseguita principalmente tramite la riga di comando. Se si esegue modifiche sul server di hosting, è possibile contattare il fornitore di hosting per aiuto dalla riga di comando di hosting.
</div>

<p>In primo luogo, copiare il contenuto dell'archivio (cartella app) nella cartella principale del tuo negozio online. Dopo la copia, eseguire la console e passare alla cartella principale negozio.<br>
Poi, eseguire i seguenti comandi nella linea di comando, uno per uno:</p> 
<ol class="marked-list">
    <li>
        <strong>bin/magento setup:upgrade</strong>
    </li>
    <li>
        <strong>bin/magento index:reindex </strong>       
    </li>
    <li>
        <strong>bin/magento cache:clean</strong>
    </li>
</ol>
<div class="alert alert-warning">
    È possibile cancellare la cache del sito e ri-index dati nel pannello di amministrazione negozio, in System -> Tools -> Cache Management/Index Management sezione. Gestione della cache/indice di gestione. Tuttavia, non possiamo garantire che queste opzioni dal pannello di amministrazione funzionerà correttamente, a causa delle caratteristiche del motore e la sua novità. Si consiglia di utilizzare la riga di comando.
</div>

<p>
    Dopo reindicizzazione della cache dei dati e di compensazione, rimuovere tutti i contenuti dalle varie cartelle pub/statici, fatta eccezione per il file .htaccess. Ora siamo pronti per passare al pannello di amministrazione del sito per configurare il modulo.    
</p>

