<h2 class="item1">Extension settings</h2>
<h3>General</h3>
<p>
    In order to configure the module, navigate to <strong>Stores -> Settings -> Configuration</strong> section. <br>
    Choose the <strong>TEMPLATEMONSTER -> Theme Updater</strong> in the left side menu to go to the module settings
    interface.
</p>

<p>Module requires correct template ID and order ID to get info about available updates from templatemonster.com.
    You can find template and order IDs in your template delivery email or in your templatemonster account. </p>

<figure class="img-polaroid"><img src="img/magento/theme-updater_1.jpg" alt="" /></figure>

<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Template ID</strong></td>
        <td>-</td>
        <td>contains your template item number, usually 5 digits. Can be also found at the template page
            at templatemonster.com.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Order ID</strong></td>
        <td>-</td>
        <td>your unique order ID, near 20 symbols, letters and digits</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Version</strong></td>
        <td>-</td>
        <td>theme version installed for the current store or website. Version value is taken from theme
            composer.json file. Value field is protected and can not be modified manually.</td>
    </tr>
</table>

<p>Please select store view or website if you have multiple themes configures in your website. Theme updater will work with the theme, installed for the selected store or website. </p>
<figure class="img-polaroid"><img src="img/magento/theme-updater_3.jpg" alt="" /></figure>

<p>
    <b>Check Update</b> - button allows you check if any updated available manually.<br>
    <b>Download</b> - if there is an update available, Download button will become active and you'll be able to
    download recent version of the theme package.<br>
    <b>Backup</b> - allow you to make a backup of the current store or website theme.
</p>

<div class="alert alert-danger">
    We strongly recommend to make a backup of the currently installed theme. Theme update should be installed
    manually, replacing theme files. This may remove your changes.
</div>
