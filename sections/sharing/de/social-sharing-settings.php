<h2 class="item1">Extension settings</h2>
<h3>General</h3>
<p>Um das Modul einzurichten, navigieren Sie zum <strong>Store -> Configuration -> Templatemonster-> Social Sharing Tab</strong>. Hier werden Sie alle Einstellungen finden, die notwendig sind, um das Modul einzurichten.<br>Es gibt zwei Hauptoptionen in diesem Abschnitt.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>aktivieren / deaktivieren Sie das Modul.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>Addthis Kennzeichnung.</td>
    </tr>    
</table>
<p>
    Um die Profil-ID zu erhalten, registrieren Sie sich bei der <a target="_blank" href="https://www.addthis.com/">Addthis</a> Website. Danach müssen Sie ein Projekt in Ihrem Dashboard erstellen. Beim Erstellen eines Projekts, werden Sie zu den Allgemeinen Einstellungen weitergeleitet, wo Sie das ID-Feld im Allgemeinen Abschnitt sehen werden. Sie sollten diese ID verwenden.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Look &amp; Feel</h3>
<p>In diesem Abschnitt können Sie das Aussehen der Symbole einrichten. Sie können eine der vordefinierten Voreinstellungen wählen, oder Sie können Ihre eigenen Icons hinzufügen.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Add your own icons. Es gibt zwei Optionen in diesem Abschnitt:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - wählen Sie diese Option um den Link zu Ihrem Bild in das Eingabefeld einzugeben. Wenn Sie auf den Link klicken, werden Sie ein Popup-Fenster für die Auswahl eines Sharing-Dienst sehen.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - Wenn Sie diese Option wählen, können Sie die Icons,völlig mit benutzerdefinierten Symbolen ersetzen. Das Feld kann den HTML und CSS-Code übernehmen . Wenn Sie ein benutzerdefiniertes Facebook , Twitter oder anderes Service-Icon brauchen, und wollen, dass es funktioniert, müssen Sie eine entsprechende Klasse zu dem Link hinzufügen. Für Facebook, wird es  class="addthis_button_facebook" sein, für Twitter - class="addthis_button_twitter", für einen Pop-up mit einer Auswahl von Sozialen Netzwerken- class="addthis_button_more".
</p>
<h3>Custom Metadata</h3>
<p>In diesem Abschnitt können Sie das Teilen einer benutzerdefinierten Seite einrichten.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Nachdem Sie alle Daten angegeben haben, werden Sie ihre Ausgabe im Sharing-Dialogfenster sehen. Sie werden die angegebenen Daten dort sehen.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Custom Sharing Service</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    In diesem Abschnitt können Sie ein Symbol von Ihrem sozialen Netzwerk hinzufügen und die Benutzer werden es mit Ihrem Service teilen können.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>Sharing-Service-Name.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>Sharing-Service-Link.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>Sharing-Service-Symbol.</td>
    </tr>   
</table>
<p>Ihr Modul wird entsprechend geändert.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Api Configuration Options</h3>
<p>Dieser Abschnitt enthält die API-Einstellungen des Addthis Service.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>Dienstleistungen aus allen Menüs ausschließen. Zum Beispiel , wird die Einstellung 'facebook , myspace' Facebook und MySpace auf allen unseren Menüs versteckt.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>Dienstleistungen,die im kompakten Menü erscheinen. Zum Beispiel wird die Einstellung 'Print, E-Mail, Favoriten' nur in diesen drei Diensten erscheinen.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>Dienste im erweiterten Menü. Nützlich, wenn nur sehr wenige Dienste erwünscht sind - da es nervig ist eine lange Liste über services_exclude anzugeben, und da es einen neuen Dienst, der später hinzugefügt wird, nicht anzeigen wird. Zum Beispiel wird die Einstellung ' bebo, misterwong, Netvibes ' diese drei Dienstleistungen nur im erweiterten Menü ausführen.</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>ausschalten, um das kompakte Menü ,auf Maushover über die reguläre Taste, nicht anzuzeigen. Stattdessen wird es nach dem Klicken auf dem Button angezeigt.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>Verzögerung in Millisekunden, bevor das kompakte Menü erscheint, wenn sie über eine reguläre Taste mit der Maus führen. Verschwindet nach 500 ms.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>Normalerweise wird das kompakte Menü in der Richtung des Benutzerbrowsers, die den meisten Platz hat, angezeigt. Ändern Sie es um das Standardverhalten anzupassen.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>Bei true, wird der AddThis Button ein neues Fenster mit einer Seite öffnen, die das Teilen ohne JavaScript laden kann.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>lassen Sie das Menü eine bestimmte Sprache wählen.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>Anzahl der Pixel, wie hoch das kompakte Menü von seinem übergeordneten Element ausgeglichen wird.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>Anzahl der Pixel, wie weit nach links das kompakte Menü von seinem übergeordneten Element ausgeglichen wird.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>ausschalten, um die Standard-CSS-Datei nicht zu laden, so dass Sie alles selbst gestalten können.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>einschalten, um eine Variable zur URL auf Sharing anzuhängen . Es wird benutzt, um zu verfolgen, wie viele Menschen Ihre Inhalte über AddThis Links öffnen.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>einschalten um das Modul zu aktivieren.</td>
    </tr>
</table>
