<h2 class="item1">Настройки модуля</h2>
<h3>Настройки страницы каталога</h3>
Для настройки модуля необходимо перейти в пункт меню <strong>Stores -> Configuration</strong> и в разделе слева выбрать пункт <strong>Templatemonster -> Catalog images grid</strong>. <br>
Раздел содержит две секции:
<ul class="marked-list">
    <li>General</li>
    <li>Category page</li>
</ul>

<h3>General</h3>
Секция <strong>General</strong> содержит лишь 1 настройку Enable, она включает или отключает модуль полностью.
<figure class="img-polaroid"><img src="img/magento/catalog-images-3.jpg" alt="" /></figure>
Секция <strong>Category page</strong> содержит настройки страницы категории.
<figure class="img-polaroid"><img src="img/magento/catalog-images-4.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/catalog-images-5.jpg" alt="" /></figure>
Рассмотрим настройки данной секции:
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Use Image </strong></td>
        <td>-</td>
        <td>выберите тип картинки, которую Вы хотите использовать на странице категории. На выбор есть три варианта: <strong>Thumbnail image</strong>, <strong>Category image</strong>, <strong>Custom font icon</strong>. При выборе <strong>Custom font icon</strong> вместо опции <strong>Image Width</strong> появится опция <strong>Font Icon size</strong>, где Вы можете указать размер значка в пикселях.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Category Images </strong></td>
        <td>-</td>
        <td>включает отображение картинок категорий.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Subcategory Images </strong></td>
        <td>-</td>
        <td>включает отображение картинок подкатегорий.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Image Width </strong></td>
        <td>-</td>
        <td>ширина картинки.</td>
    </tr>       
    <tr>
        <td class="col-1"><strong>Columns count </strong></td>
        <td>-</td>
        <td>количество колонок для отображения.</td>
    </tr>
    <tr>
        <td class="col-2"><strong>Count of categories to show </strong></td>
        <td>-</td>
        <td>количество категорий для отображения.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Count of subcategories to show </strong></td>
        <td>-</td>
        <td>количество подкатегорий для отображения.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Show "View More" button</strong></td>
        <td>-</td>
        <td>если категорий больше, чем указано в предыдущей настройке, появляется кнопка View More. Данная настройка отключает её вывод.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Show Before Products Grid </strong></td>
        <td>-</td>
        <td>отображает блок над списком товаров на странице категории.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Show After Products Grid </strong></td>
        <td>-</td>
        <td>отображает блок под списком товаров на странице категории.</td>
    </tr>
</table>

<h3>Настройки виджета</h3>
Помимо статического отображения на странице списка товаров, у Вас есть возможность вывести список категорий на указанной Вами странице с помощью виджета.
<p>Чтобы добавить виджет, перейдите в меню <strong>Content -> Widgets</strong> и нажмите <strong>Add Widget</strong>. В появившемся окне в поле <strong>Type</strong> выберите <strong>Catalog Image grid</strong>. В поле <strong>Design Themes</strong> выберите шаблон, к которому Вы хотите применить данный виджет.</p>
<figure class="img-polaroid"><img src="img/magento/catalog-images-6.jpg" alt="" /></figure>
В секции <strong>Layout Updates</strong> выберите страницу и <strong>Template</strong> для вывода виджета.
<figure class="img-polaroid"><img src="img/magento/catalog-images-7.jpg" alt="" /></figure>

<p>Перейдите на вкладку <strong>Widget options</strong>, и Вы увидите ряд настроек. Часть из них идентична с настройками для страницы категории.</p>
<figure class="img-polaroid"><img src="img/magento/catalog-images-8.jpg" alt="" /></figure>
Рассмотрим настройки, которые отличаются:
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Category </strong></td>
        <td>-</td>
        <td>выберите категорию, подкатегории которой Вы хотите отобразить в виде плитки с картинками.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Container css class </strong></td>
        <td>-</td>
        <td>укажите CSS класс для контейнера, в который будет обернута сетка с картинками.</td>
    </tr>           
</table>


<h4>Настройки категорий товаров</h4>
Чтобы полноценно настроить данный модуль, Вам необходимо для каждой категории настроить картинки, миниатюры и определить класс значка, если нужно. Перейдите в <strong>Products - > Categories</strong>, выберите любую категорию и Вы увидите 4 настройки.
<figure class="img-polaroid"><img src="img/magento/catalog-images-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Category image </strong></td>
        <td>-</td>
        <td>это стандартная функция движка. Загруженная картинка будет отображаться на странице категории. Но Вы можете также отобразить её в модуле.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Thumbnail </strong></td>
        <td>-</td>
        <td>настройка для загрузки картинки, которую мы рекомендуем использовать для работы с модулем.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Activate Image Grid </strong></td>
        <td>-</td>
        <td>данная настройка включает отображение сетки для выбранной  категории, настройки которой регулируются с <strong>Stores -> Configuration</strong>.</td>
    </tr> 
    <tr>
        <td class="col-1"><strong>Css class for Font Icon </strong></td>
        <td>-</td>
        <td>класс css значка, если Вы хотите использовать иконочные шрифты вместо картинок.</td>
    </tr>          
</table>