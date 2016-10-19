<h2 class="item1">Настройки модуля</h2>
<h3>Основные настройки</h3>
Для настройки модуля Вам необходимо перейти в пункт меню <strong>Stores -> Configuration</strong> и в разделе слева выбрать пункт <strong>Templatemonster -> Site maintenance</strong>. <br>
Там будет три раздела:
<ul class="marked-list">
    <li>Настройка страницы;</li>
    <li>Раздел счётчика;</li>
    <li>Настройки формы.</li>
</ul>

<h3>Раздел “Настройки страницы”</h3>
Данный раздел отвечает за настройку внешнего вида страницы и содержит ряд основных настроек.
<figure class="img-polaroid"><img src="img/magento/maintenance-2.png" alt="" /></figure>
Рассмотрим настройки данного раздела.
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Site Maintenance </strong></td>
        <td>-</td>
        <td>регулирует включение/отключение модуля в целом.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Title</strong></td>
        <td>-</td>
        <td>название страницы. Оно также является заголовком в содержимом страницы.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Allow frontend for current IP</strong></td>
        <td>-</td>
        <td>с помощью данной кнопки Вы можете автоматически добавить свой IP в белый список и получить доступ к сайту, минуя страницу режима техобслуживания.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>IP Whitelist</strong></td>
        <td>-</td>
        <td>в этом поле Вы можете добавить IP-адреса клиентов, которым нужен доступ к фронтенду сайта, минуя страницу режима техобслуживания.</td>
    </tr>       
    <tr>
        <td class="col-1"><strong>Logo</strong></td>
        <td>-</td>
        <td>Вы можете добавить логотип на страницу в виде картинки.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Background Type</strong></td>
        <td>-</td>
        <td>Вы можете выбрать тип фона для страницы. Есть два варианта: <strong>Image</strong>, <strong>Color</strong>. В зависимости от выбранного варианта, у Вас появятся новые настройки. Если Вы выбрали <strong>Color</strong>, то у Вас будет настройка <strong>Background color</strong>. При выборе типа <strong>Image</strong> у Вас появятся дополнительные настройки..</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Background Color</strong></td>
        <td>-</td>
        <td>цвет фона страницы.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Background Image</strong></td>
        <td>-</td>
        <td>картинка, которая будет отображена на фоне вашей страницы.</td>
    </tr>
    <tr>
        <td class="col-2"><strong><a href="http://www.w3schools.com/cssref/pr_background-repeat.asp" target="_blank">Background Repeat</a></strong>, <strong><a href="http://www.w3schools.com/cssref/pr_background-position.asp" target="_blank">Background Position</a></strong>, <strong><a href="http://www.w3schools.com/cssref/css3_pr_background-size.asp" target="_blank">Background Size</a></strong>, <strong><a href="http://www.w3schools.com/cssref/pr_background-attachment.asp" target="_blank">Background Attachment</a></strong></td>
        <td>-</td>
        <td>css-свойства для регулирования фона в виде картинки.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Page Description</strong></td>
        <td>-</td>
        <td>поле для настройки содержимого вашей страницы. Вы можете использовать как WYSIWYG - редактор, так и работать с html-кодом.</td>
    </tr>
</table>

<h3>Раздел “Счётчик обратного отсчёта”</h3>
Данный раздел отвечает за отображение и настройку счетчика обратного отсчета на странице режима техобслуживания.
<figure class="img-polaroid"><img src="img/magento/maintenance-3.jpg" alt="" /></figure>
Рассмотрим настройки данного раздела.
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>регулирует включение/отключение таймера на странице.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Timer Text</strong></td>
        <td>-</td>
        <td>позволяет с помощью WYSIWYG-редактора или html-кода вывести текст перед таймером.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Date/Time</strong></td>
        <td>-</td>
        <td>установка даты окончания проведения сервисных работ.</td>
    </tr>      
    <tr>
        <td class="col-1"><strong>Timer Format</strong></td>
        <td>-</td>
        <td>поле для форматирования отображения таймера. Поле принимает html-код. Более детальную информацию по форматированию отображения таймера Вы можете найти на <a href="http://hilios.github.io/jQuery.countdown/" target="_blank">официальном сайте</a> плагина.</td>
    </tr>           
</table>


<h4>Раздел “Настройки формы”</h4>
Данный раздел отвечает за отображение и настройку формы подписки. 
<figure class="img-polaroid"><img src="img/magento/maintenance-4.jpg" alt="" /></figure>
Рассмотрим настройки данного раздела.
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>регулирует включение/отключение формы подписки на странице.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Form Title</strong></td>
        <td>-</td>
        <td>название блока с формой, которое будет выводиться перед формой.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Form Text</strong></td>
        <td>-</td>
        <td>позволяет с помощью WYSIWYG-редактора или html-кода отобразить текст перед формой подписки.</td>
    </tr>              
</table>