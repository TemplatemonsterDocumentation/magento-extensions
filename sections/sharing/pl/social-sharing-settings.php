<h2 class="item1">Extension settings</h2>
<h3>Ogólne (General)</h3>
<p>Aby skonfigurować moduł, należy przejść do karty Sklep -> Konfiguracja ->  Templatemonster-> Udostępnianie Społeczne. Tutaj można znależć wszystkie ustawienia, które są niezbędne dla ustanowienia modułu.<br>W tej sekcji znajdują się 2 opcje.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>włączenie/wyłączenie moduł;</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>identyfikator Addthis.</td>
    </tr>    
</table>
<p>
    Aby otrzymać ID profilu (profile Id), należy zarejestrować się w witrynie <a target="_blank" href="https://www.addthis.com/">Addthis</a>. Po rejestracji, w swoim pulpicie nawigacyjnym (Dashboard) należy stworzyć projekt. Podczas tworzenia projektu, zostanie Państwo przekierowane do Ustawień ogólnych, gdzie w sekcji Ogólne można zobaczyć pole ID. Należy wykorzystać ten identyfikator.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Look &amp; Feel</h3>
<p>W tej sekcji, można ustawić wygląd ikon. Można wybrać jeden z wcześniej zdefiniowanych presetów lub można dodać własne ikony.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Dodaj własne ikony (Add your own icons). W tej sekcji są dostępne 2 opcje:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - należ wybrać tą opcję i podać link do obrazka w polu wprowadzania. Po kliknięciu na link, można zobaczyć wyskakujące okienko wyboru usługi udostępniania.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - w przypadku wybrania tej opcji, można w pełni zastąpić wyświetlanie ikon według własnych upodobań. Pole może mieć kod HTML i CSS. Jeśli trzeba dodać niestandardowe Facebook, Twitter lub innych usług ikonę, i żeby to działało, należy dodać odpowiednią klasę do linku. Dla Facebook’a to będzie klasa ="addthis_button_facebook", dla Twitter’a - klasa ="addthis_button_twitter", dla okienka wyskakującego z wyborem sieci społecznościowych - klasa ="addthis_button_more".
</p>
<h3>Custom Metadata</h3>
<p>W tej sekcji można ustawić udostępnianie na stronie niestandardowej.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Po określeniu wszystkich danych, można zobaczyć swoje dane wyjściowe w oknie dialogowym udostępniania. Tam pojawią się określone dane.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Custom Sharing Service</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    W tej sekcji można dodać ikonę sieci społecznościowej, a użytkownicy będą mogli udostępniać, korzystając z tej usługi.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>nazwa usługi udostępniania.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>link usługi udostępniania.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>ikona usługi udostępniania.</td>
    </tr>   
</table>
<p>Twój moduł zostanie odpowiednio zmieniony.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Api Configuration Options</h3>
<p>Ta sekcja zawiera ustawienia API usługi Addthis.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>wykluczenie usług ze wszystkich menu. Na przykład, ustawienie tej opcji do ‘facebook, myspace’ ukryje Facebook i MySpace na wszystkich naszych menu.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>wykorzystanie usług w menu kompaktowym. Na przykład, ustawienie tej opcji do ‘druk, email, ulubione’ spowoduje wyświetlanie tylko wybranych trzech usług.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>wykorzystanie usług w menu rozszerzonym. Przydatne, jeśli bardzo niewiele usług są potrzebne - określenie długiej listy za pośrednictwem services_exclude może być męczące, i nie zdążyłoby zapisać nowej usługi dodanej później. Na przykład, ustawienie tej opcji do 'bebo,misterwong,netvibes' spowodowałoby wyświetlenie jedynie tych trzech usług w menu rozszerzonym.</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>można wyłączyć, aby nie uwidoczniać kompaktowego menu po najechaniu kursorem na przycisk regularny. Zostanie natomiast ujawnione po kliknięciu przycisku.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>opóźnienie, w milisekundach, przed wyświetleniem menukompaktowego , po najechaniu kursorem na regularny przycisk. Ograniczenie do 500 ms.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>zwykle pokazujemy kompaktowe menu w kierunku przeglądarki użytkownika, która ma najwięcej miejsca. Można zmienić aby dostosować domyślne działanie usługi.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>Jeśli włączone, kliknięcie przycisku AddThis otworzy nowe okno do strony wspomagającego udostępniania bez JavaScript.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>forsować menu do używania określonego języka.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>liczba pikseli wyrównania górnej części kompaktowego menu od jego elementu nadrzędnego.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>liczba pikseli wyrównania górnej części kompaktowego menu od jego elementu nadrzędnego.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>można wyłączyć, aby nie ładować nasz standardowy plik CSS, co pozwala stylizować wszystko według własnego gustu.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>można włączyć, aby umożliwić nam dołączanie zmiennej do adresów URL dla udostępniania. Będziemy używać tego, aby śledzić, ile osób powraca do udostępnianych  treści za pośrednictwem linków w AddThis.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>należy włączyć w celu umożliwienia modułu.</td>
    </tr>
</table>
