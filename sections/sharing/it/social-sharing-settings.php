<h2 class="item1">Extension settings</h2>
<h3>Generale</h3>
<p>Per configurare il modulo, passare a Store -> Configuration ->  Templatemonster-> Social Sharing tab. Qui troverete tutte le impostazioni necessarie per configurare il modulo.<br>Ci sono 2 opzioni principali di questa sezione.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>abilita/disabilita il modulo.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>identificatore Addthis.</td>
    </tr>    
</table>
<p>
    Per ottenere il profilo Id, registrarsi al <a target="_blank" href="https://www.addthis.com/">Addthis</a> website. Dopo questo, è necessario creare un progetto in Dashboard. Quando si crea un progetto, verrai reindirizzato alle impostazioni generali, dove si vede il campo ID nella sezione Generale. Si consiglia di utilizzare questo identificatore.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Look &amp; Feel</h3>
<p>In questa sezione, è possibile impostare l'aspetto delle icone. È possibile scegliere uno dei preset predefiniti, oppure è possibile aggiungere le proprie icone.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Aggiungere le proprie icone. Ci sono 2 opzioni in questa sezione:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - selezionare questa opzione e specificare il collegamento alla vostra immagine nel campo di input. Quando si fa clic sul collegamento, verrà visualizzato un popup per la selezione di un servizio di condivisione.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - se si seleziona questa opzione, è possibile sostituire completamente alla visualizzazione delle icone con uno personalizzato. Il campo può prendere il codice HTML e CSS. Se è necessario aggiungere un costume Facebook, Twitter o l'icona di un altro servizio, e vogliono farlo funzionare, è necessario aggiungere una classe corrispondente al link. Per Facebook, la classe è la seguente class="addthis_button_facebook", per Twitter - class="addthis_button_twitter", per un popup con la selezione dei social network - class="addthis_button_more".
</p>
<h3>Custom Metadata</h3>
<p>In questa sezione, è possibile impostare la condivisione per una pagina personalizzata..</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Dopo aver specificato tutti i dati, vedrete il loro output nella finestra di dialogo di condivisione. Vedrete i dati specificati lì.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Custom Sharing Service</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    In questa sezione, è possibile aggiungere un'icona del tuo social network, e gli utenti saranno in grado di condividere, utilizzando il vostro servizi
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>il nome del servizio di condivisione.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>condivisione di collegamento di servizio.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>condivisione icona del servizio.</td>
    </tr>   
</table>
<p>Il modulo sarà modificato di conseguenza.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Api Configuration Options</h3>
<p>Questa sezione contiene le impostazioni API del servizio Addthis.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>servizi di escludere da tutti i menu. Per esempio, impostando questo 'facebook, myspace' nasconderà Facebook e MySpace su tutti i nostri menu.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>Services per l'utilizzo nel menu compatto. Per esempio, impostando questo per 'stampa, e-mail, preferiti' comporterebbe solo i tre servizi che appaiono.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>Servizio da utilizzare nel menu espanso. Utile se molto pochi servizi sono desiderati - specificando una lunga lista tramite services_exclude potrebbe essere faticoso, e non avrebbe raggiunto un nuovo servizio aggiunto in seguito. Per esempio, impostando questo 'Bebo, MisterWong, Netvibes' comporterebbe solo quei tre servizi che appaiono nel menu espanso.</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>spegnere per non mostrare il menu compatto sul mouse sopra il pulsante regolare. Invece, sarà rivelato al momento facendo clic sul pulsante.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>ritardo, in millisecondi, prima di menù compatto appare al passaggio del mouse sopra un pulsante regolare. Limitato a 500 ms.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>normalmente, mostriamo il menu compatto nella direzione del browser dell'utente che ha più spazio. Cambiare per personalizzare il comportamento di default.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>Se fosse vero, facendo clic sul pulsante AddThis si aprirà una nuova finestra per una pagina di supporto di condivisione senza JavaScript.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>per il menu per utilizzare una determinata lingua.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>il numero di pixel per compensare la parte superiore del menu compatta dal suo elemento genitore.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>numero di pixel per compensare la sinistra del menu compatta dal suo elemento genitore.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>spegne di non caricare il nostro file CSS standard, consentendo allo stile tutto da soli.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>accendere per permetterci di aggiungere una variabile per gli URL su di condivisione. Useremo questo per monitorare quante persone tornano al suo sito web tramite link condivisi con AddThis.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>accende per attivare il modulo.</td>
    </tr>
</table>
