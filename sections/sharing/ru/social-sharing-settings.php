<h2 class="item1">Настройки модуля</h2>
<h3>Общие настройки</h3>
<p>Для настройки модуля Вам необходимо перейти в <strong>Store -> Configuration ->  Templatemonster -> Social Sharing</strong>. Здесь Вы найдете все необходимые опции для настройки вашего модуля.<br>
    В данном разделе находятся две основные опции.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>включить/отключить модуль.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>идентификационный номер пользователя сервиса Addthis.</td>
    </tr>    
</table>
<p>
    Чтобы получить <strong>Profile Id</strong>, Вам необходимо зарегистрироваться на сайте <a target="_blank" href="https://www.addthis.com/">Addthis</a>. После этого, Вам необходимо создать проект в вашей админ панели. При создании проекта Вас перекинет в раздел Основные настройки, где Вы увидите поле ID в разделе “Общее”. Именно этот идентификатор Вам необходимо использовать.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Внешний вид и восприятие</h3>
<p>В данном разделе Вы можете настроить внешний вид иконок. Есть возможность отобразить один из готовых пресетов, но есть и возможность добавить свои иконки.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Чтобы добавить свои иконки, в данном разделе есть две опции:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - выбрав эту опцию, Вам необходимо в соответствующем поле указать ссылку на вашу картинку. При нажатии левой кнопкой мышки на неё Вы увидите всплывающее окно выбора сервиса для шеринга.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - выбрав эту опцию, Вы можете полностью заменить вывод иконок на пользовательский. В поле можно вводить html и css код. Если Вам необходимо добавить пользовательскую иконку Facebook, Twitter или другого сервиса, и к тому же сделать её рабочей, добавьте соответствующий класс в ссылку. Для Facebook используйте класс class="addthis_button_facebook", для Twitter - class="addthis_button_twitter", для всплывающего окна выбора социальной сети - class="addthis_button_more".
</p>
<h3>Пользовательские метаданные</h3>
<p>В данном разделе Вы можете настроить шеринг для пользовательской страницы.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Указав все данные, Вы увидите их в диалоговом окне шеринга. Здесь отобразятся указанные Вами данные.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Пользовательский сервис шеринга</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    В данном разделе Вы можете добавить иконку своей социальной сети, и пользователи смогут делится ссылками используя ваш сервис.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>название сервиса.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>ссылка на сервис.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>иконка сервиса.</td>
    </tr>   
</table>
<p>Ваш модуль будет изменён соответственно.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Опции настройки API</h3>
<p>Данный раздел содержит настройки API сервиса Addthis.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>сервисы, которые нужно исключить из всех меню. Например, если Вы зададите значение 'facebook,myspace', это скроет Facebook и MySpace во всех меню.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>сервисы, которые нужно использовать в компактном меню. Например, если Вы зададите значение 'print,email,favorites', отобразятся только эти сервисы.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>сервисы, которые нужно использовать в расширенном меню. Эта опция полезна, если нужно отобразить только несколько сервисов. Указание длинного списка в services_exclude довольно утомительно, и Вы не охватите новые сервисы, которые будут добавлены позже. Например, если Вы зададите значение 'bebo,misterwong,netvibes', в расширенном меню отобразятся только эти три сервиса.</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>выключите, если Вы не хотите, чтобы при наведении курсором мышки на кнопку отображалось компактное меню. Вместо этого, меню будет открываться при нажатии на кнопку.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>отсрочка в миллисекундах до отображения компактного меню при наведении курсором мышки на обычную кнопку. Ограничено 500 мс.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>как правило, компактное меню отображается в том направлении в браузере, где есть больше всего места. Измените, для того чтобы изменить стандартное поведение.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>если выбрано значение “True”, нажатие на кнопку AddThis откроет новое окно для страницы, которая поддерживает шеринг без JavaScript.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>сделайте так, чтобы меню использовало определённый язык.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>количество пикселей для смещения верхней части компактного меню относительно её родительского элемента.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>количество пикселей для смещения левой части компактного меню относительно её родительского элемента.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>отключите, для того чтобы не загружать стандарный файл CSS. Это позволит Вам задать для всего собственные стили.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>включите, чтобы позволить нам добавить переменную для ваших URL-адресов при шеринге. Мы будем использовать эту функцию, чтобы отследить, сколько людей вернутся к вашему содержимому сайта при помощи ссылок, которыми пользователи поделились при помощи AddThis.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>включите для активации модуля.</td>
    </tr>
</table>
