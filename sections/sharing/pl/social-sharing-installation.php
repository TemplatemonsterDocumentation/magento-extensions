<h2 class="item1">Instalacja</h2>


<div class="alert alert-danger">
    <p><strong>Uwaga!!!</strong></p>
    Ze względu na specyfikę silnika, trzeba będzie użyć dowolnego środowiska konsoli z wierszem komend. Konfiguracja modułu zostanie przeprowadzone głównie za pośrednictwem wiersza komend. Jeśli zmiany są przeprowadzane na serwerze hostingowym, można skontaktować się z dostawcą usług hostingowych aby uzyskać pomoc w korzystaniu z hostingowego wiersza komend.
</div>

<p>Najpierw, należy skopiować zawartość archiwum (folder app) do folderu głównego swojego sklepu internetowego. Po skopiowaniu należy uruchomić konsolę i przejść do folderu głównego sklepu.<br>
Następnie uruchom następujące komendy w wierszu komend, jeden po drugim:</p> 
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
    Można wyczyścić pamięć podręczną strony oraz dane ponownego indeksowania w panelu administracyjnym sklepu, w sekcji System -> Narzędzia-> Zarządzanie Pamięcią Podręczną/Zarządzanie Indeksowaniem. Jednak nie możemy gwarantować, że te opcje panelu administratora będą działać poprawnie, ze względu na cechy silnika i jego nowatorstwo. Zachęcamy do korzystania z wiersza komend. 
</div>

<p>
    Po reindeksowaniu danych i wyczyszczeniu pamięci podręcznej, należy usunąć całą zawartość z folderów var i pub/static, oprócz pliku .htaccess. Teraz można przejść do panelu administratora witryny w celu konfigurowania modułu.    
</p>

