<h2 class="item1">Extension settings</h2>
<h3>General</h3>
<p>Para configurar el módulo, vaya a la pestaña <strong>(Store -> Configuration ->  Templatemonster-> Social Sharing) Tienda -> Configuración -> Templatemonster-> Compartir en redes Sociales</strong>. Aquí encontrará todos los ajustes que son necesarios para configurar el módulo.<br>Hay 2 opciones principales de esta sección..</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>activar/desactivar el módulo.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>identificador Addthis.</td>
    </tr>    
</table>
<p>
    Para obtener el ID de perfil, registrese en el Sitio web de  <a target="_blank" href="https://www.addthis.com/">Addthis</a> . Después de esto, es necesario crear un proyecto en su Tablero (Dashboard) . Al crear un proyecto, se le redirigirá a los ajustes Generales (General settings), donde podrá encontrar el campo ID en la sección General. Debe utilizar este mismo identificador.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Look &amp; Feel</h3>
<p>En esta sección, puede configurar el aspecto de los iconos. Puede elegir uno de los ajustes preestablecidos predefinidos, o puede añadir sus propios iconos.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Añada sus propios iconos. Hay 2 opciones de esta sección:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - seleccione esta opción y especifique el enlace a su imagen en el campo de entrada. Al hacer clic en el enlace, aparecerá una ventana emergente para seleccionar un servicio de uso compartido.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - si selecciona esta opción, puede reemplazar totalmente para mostrar los iconos con uno personalizado. El campo puede tomar el código HTML y CSS. Si es necesario agregar uno personalizado a  Facebook, Twitter o el icono de otros servicios, y quiere hacer que funcione, es necesario agregar una clase correspondiente al enlace. Para Facebook, esta será la clase="addthis_button_facebook", para Twitter - class="addthis_button_twitter", para una ventana emergente con la selección de las redes sociales - clase="addthis_button_more".
</p>
<h3>Custom Metadata</h3>
<p>En esta sección, puede configurar el uso compartido de una página personalizada.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Después de haber especificado todos los datos, verá su producción en la ventana de diálogo para compartir. Usted verá los datos especificados en él
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Custom Sharing Service</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    En esta sección, puede agregar un icono de su red social, y los usuarios podrán compartir, utilizando su servicio.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>nombre del servicio para compartir.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>enlace de servicio para compartir.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>icono de servicio para compartir.</td>
    </tr>   
</table>
<p>Su módulo se cambiará en consecuencia.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Api Configuration Options</h3>
<p>Esta sección contiene la ajustes de la API del servicio Addthis.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>los servicios se deben excluir de todos los menús. Por ejemplo, este valor está para  'facebook, myspace'  hará ocultar  Facebook y MySpace en todos nuestros menús.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>los servicios a utilizar en el menú compacto. Por ejemplo, este valor está a 'print,email,favorites' daría como resultado sólo los tres servicios que aparecen.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>servicios para utilizar en el menú desplegable. Es útil si se desean muy pocos servicios - especificando una lista larga a través de services_exclude could be tiresome, y no comprende un servicio nuevo añadido más tarde. Por ejemplo, este valor está a 'bebo,misterwong,netvibes' resultaría en sólo los tres servicios que aparecen en el menú desplegable.</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>desactive para no mostrar el menú compacto al pasar el ratón sobre el botón regular. En su lugar, se dará a conocer al  hacer  clic en el botón.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>retardo, en milisegundos, aparecerá antes del menú compacto al pasar el ratón sobre un botón regular. Máximo 500 ms.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>Normalmente, se muestra el menú compacto en la dirección del navegador del usuario que tiene más espacio. Cambiar para personalizar el comportamiento predeterminado.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>Si es verdad, al hacer clic en el botón AddThis abrirá una nueva ventana a una página que soporta el intercambio sin JavaScript.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>forzar el menú para utilizar un idioma en particular.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>número de píxeles para el offset  de la parte superior del menú compacto de su elemento padre.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>número de píxeles para compensar la izquierda del menú compacto de su elemento padre.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>desactive para no cargar nuestro archivo CSS estándar, lo que le permite estilizar todo a usted mismo.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>hay que encender para permitirnos añadir una variable a las URL de compartir. Usaremos esto para realizar un seguimiento de cómo muchas personas vienen de nuevo a su contenido a través de los enlaces para compartir (shared) con AddThis.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>hay que encender para activar el módulo.</td>
    </tr>
</table>
