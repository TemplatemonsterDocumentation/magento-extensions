<h2 class="item1">Instalación</h2>


<div class="alert alert-danger">
    <p><strong>Atención!!!</strong></p>
    Debido a las peculiaridades del motor, tendrá que utilizar cualquier entorno de consola con la línea de comandos. La configuración del módulo se llevará a cabo principalmente a través de la línea de comandos. Si realiza cambios en el Servidor de Alojamiento, puede ponerse en contacto con su Proveedor de Alojamiento para ayuda al usar la línea de comandos de alojamiento.
</div>

<p>En primer lugar, copie el contenido de la (carpeta app) archivo en la carpeta raíz de su tienda online. Después de copiar, ejecute la consola y vaya a la carpeta raíz de la tienda.<br>
A continuación, ejecute los siguientes comandos en la línea de comandos, uno por uno:</p> 
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
    Puede borrar la memoria caché del sitio y volver a indexar los datos en su tienda del panel de Administración, en la sección <strong>Sistema -> Herramientas -> Gestión de caché/Administración de Índice (System -> Tools -> Cache Management/Index Management). Sin embargo</strong>, no podemos garantizar que estas opciones del panel de Administración funcionarán correctamente, debido a las características del motor y su novedad. Recomendamos que utilice la línea de comandos. 
</div>

<p>
    Después de reindexing del caché y la limpieza de datos, elimine todo el contenido de las carpetas var y <strong>pub/static</strong>, excepto el archivo <strong>.htaccess</strong>. Ahora, usted está listo para navegar hasta el panel de  administración del sitio para configurar el módulo.    
</p>

