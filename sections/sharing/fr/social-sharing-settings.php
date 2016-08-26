<h2 class="item1">Extension settings</h2>
<h3>Général</h3>
<p>Pour configurer le module, accédez à <strong>Store -> Configuration ->  Templatemonster-> Social Sharing tab</strong>. Vous trouverez ici tous les paramètres qui sont nécessaires pour mettre en place le module.<br>Il y a 2 options principales dans cette section:</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>activer / désactiver le module.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>identifiant d'AddThis.</td>
    </tr>    
</table>
<p>
    Pour obtenir le profil d’identité, inscrivez-vous sur le site <a target="_blank" href="https://www.addthis.com/">d'AddThis</a>. Après cela, vous devez créer un projet dans votre tableau de bord. Lors de la création d'un projet, vous serez redirigé vers General Settings, où vous verrez le champ de saisie de l'ID dans la section General. Vous devez utiliser cet identifiant.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Look &amp; Feel</h3>
<p>Dans cette section, vous pouvez configurer l'apparence des icônes. Vous pouvez choisir un des préréglages prédéfinis, ou vous pouvez ajouter vos propres icônes.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Ajoutez vos propres icônes. Il y a 2 options dans cette section:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - sélectionnez cette option et indiquez le lien pour votre image dans le champ de saisie. En cliquant sur le lien, vous verrez un popup de sélection d'un service de partage.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - si vous sélectionnez cette option, vous pouvez entièrement remplacer à l'affichage des icônes avec un personnalisé. Le champ peut prendre le code html et css. Si vous avez besoin d'ajouter une icône personnalise Facebook, Twitter ou tout autre, et voulez la faire fonctionner, vous devez ajouter une classe correspondant au lien. Pour Facebook, ce sera class="addthis_button_facebook", pour Twitter - class="addthis_button_twitter", pour un popup avec la sélection des réseaux sociaux - class="addthis_button_more".
</p>
<h3>Custom Metadata</h3>
<p>Dans cette section, vous pouvez configurer le partage d'une page personnalisée.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Après avoir spécifié toutes les données, vous verrez leur sortie dans la fenêtre de partage. Vous verrez les données spécifiées là.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Custom Sharing Service</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    Dans cette section, vous pouvez ajouter une icône de votre réseau social, et les utilisateurs seront capables de partager, en utilisant votre service.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>le nom du service de partage.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>le lien du service de partage.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>l'icône du service de partage.</td>
    </tr>   
</table>
<p>Votre module sera modifié en conséquence.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Api Configuration Options</h3>
<p>Cette section contient les paramètres de l'API du service d'AddThis.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>les services à exclure de tous les menus. Par exemple,en  réglant ce paramètre sur 'Facebook, MySpace' cacherait Facebook et MySpace sur tous vos menus.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>les services à utiliser dans le menu compact. Par exemple, en  réglant ce paramètre sur 'print,email,favorites' conduirait à seulement ces trois services apparaissant.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>les services à utiliser dans le menu élargi. Il est utile si très peu de services sont souhaités - une spécification d'une longue liste via services_exclude pourrait être fastidieux, et ne pouvait pas attraper un nouveau service ajouté plus tard. Par exemple, en réglant ce paramètre sur 'bebo,misterwong,netvibes' conduirait à seulement ces trois services apparaissant dans le menu élargi.</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>désactiver pour ne pas afficher le menu compact en positionnant la souris sur le bouton régulier. Au lieu, il sera révélé lorsque vous cliquez sur le bouton.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>le délai, en millisecondes, avant le menu compact apparaît en positionnant la souris sur un bouton régulière. Plafonné à 500 ms.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>normalement, il affiche le menu compact dans la direction du navigateur de l'utilisateur qui a le plus d'espace. Changer pour personnaliser le comportement par défaut.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>si c’est vrai, en cliquant sur le bouton AddThis ouvrira une nouvelle fenêtre vers une page soutenant le partage sans JavaScript.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>forcer le menu à utiliser une langue particulière.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>le  nombre de pixels de décalage en haut du menu compact de son élément parent.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>le nombre de pixels de décalage à gauche du menu compact de son élément parent.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>désactiver pour ne pas charger le fichier CSS standard, vous permettant de coiffer tout vous-même.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>activer pour permettre d'ajouter une variable à vos URL sur le partage. Vous l’utiliserez pour suivre combien de gens viennent à votre contenu via des liens partagés avec AddThis.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>activer pour activer le module.</td>
    </tr>
</table>
