<h2 class="item1">Installation</h2>

<div class="alert alert-warning">
    <p><strong>Please note.</strong></p>
    Due to the Magento 2 engine peculiarities you need to have SSH access to your Magento installation. Command line interface is required to install Magento extension. Please contact your hosting provider for assistance with SSH access and command line interface.
</div>

<p>First, copy the content of the archive (<strong>app</strong> folder) to the root folder of your online shop. After copying run the console and navigate to the root shop folder.<br>
Then run the following commands in the command line, one by one:</p> 
<ol class="marked-list">
    <li>
        <strong>bin/magento setup:upgrade</strong>
    </li>    
    <li>
        <strong>bin/magento cache:clean</strong>
    </li>
</ol>
<div class="alert alert-info">
    You can also clear site cache in your shop admin panel, in <strong>System -> Tools -> Cache Management</strong> section. 
</div>