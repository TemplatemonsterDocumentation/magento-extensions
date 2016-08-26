<h2 class="item1">Installation</h2>


<div class="alert alert-danger">
    <p><strong>Attention!!!</strong></p>
    En raison des particularités du moteur, vous devrez utiliser tout environnement de console avec la ligne de commande. La configuration du module sera effectuée principalement via la ligne de commande. Si vous apportez des modifications sur le serveur d'hébergement, vous pouvez contacter votre fournisseur d'hébergement pour l'aide à utiliser la ligne de commande d'hébergement.
</div>

<p>Tout d'abord, copiez le contenu de l'archive (dossier app) dans le dossier racine de votre boutique en ligne. Après la copie, exécutez la console et naviguez vers le dossier racine de la boutique.<br>
Ensuite, exécutez les commandes suivantes dans la ligne de commande, un par un:</p> 
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
    Vous pouvez effacer le cache du site et réindexer les données dans votre panneau d'administration de la boutique, dans la section System -> Tools -> Cache Management/Index Management. Cependant, nous ne pouvons pas garantir que ces options du panneau d'administration fonctionneront correctement, en raison des caractéristiques du moteur et de sa nouveauté. Nous vous recommandons d'utiliser la ligne de commande. 
</div>

<p>
    Après avoir effacé le cache et la réindexation des données, retirez tout le contenu des dossiers var et pub/static, sauf pour le fichier .htaccess. Maintenant, on peut naviguer sur le panneau d'administration du site pour configurer le module.    
</p>

