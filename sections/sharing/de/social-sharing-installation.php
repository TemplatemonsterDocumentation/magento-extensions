<h2 class="item1">Installation</h2>


<div class="alert alert-danger">
    <p><strong>Achtung!!!</strong></p>
    Aufgrund der Besonderheiten der Engine, werden Sie das Konsole Umfeld mit der Befehlszeile verwenden müssen. Modulkonfiguration wird hauptsächlich über die Befehlszeile ausgeführt. Wenn Sie Änderungen auf dem Hosting-Server ausführen, sollten Sie sich an Ihren Hosting-Provider wenden, um die Hosting-Befehlszeile zu verwenden.
</div>

<p>Kopieren Sie zunächst den Inhalt des Archives (App-Ordner) in den Stammordner Ihres Online-Shops. Nach dem Kopieren, öffnen Sie die Konsole und dann navigieren Sie in den Shop Stammordner .<br>
Führen Sie dann die folgenden Befehle in der Befehlszeile , eins nach dem anderen, aus:</p> 
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
    Sie können WebsiteCache löschen und Daten neu indexieren in Ihrem Shop-Admin-Panel, in <strong>System -> Tools -> Cache Management / Index Management Abschnitt</strong>. Allerdings können wir nicht garantieren, dass diese Admin-Panel Optionen ordnungsgemäß funktionieren , aufgrund der Engine Eigenschaften und der Neuheit. Wir empfehlen, die Befehlszeile zu verwenden. 
</div>

<p>
    Wenn Sie die Daten indiziert haben und den Cache gelöscht haben, entfernen Sie den gesamten Inhalt aus den Ordnern var und pub /static, mit Ausnahme der .htaccess-Datei. Nun sind Sie bereit, die Website Admin-Panel zu öffnen, und das Modul zu konfigurieren.   
</p>

