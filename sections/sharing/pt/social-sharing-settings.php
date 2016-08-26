<h2 class="item1">Extension settings</h2>
<h3>General</h3>
<p>Para configurar o módulo, navegue para Store -> Configuration ->  Templatemonster-> aba Social Sharing. Aqui você econtrará todas as configurações necessárias para usar o módulo.<br>Tem duas opções principais nesta seção.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-2.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Enabled </strong></td>
        <td>-</td>
        <td>ativa/desativa módulo.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Profile id </strong></td>
        <td>-</td>
        <td>identificador Addthis.</td>
    </tr>    
</table>
<p>
    Para conseguir o identificador, registre-se no site do <a target="_blank" href="https://www.addthis.com/">Addthis</a>. Feito isso, você precisa criar um projeto no seu Painel. Ao criar um projeto, você será redirecionado para configurações Gerais, onde você verá o campo ID na seção. Utilize este identificador.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-3.jpg" alt="" /></figure>
<h3>Look &amp; Feel</h3>
<p>Nesta seção, você pode definir a aparência dos ícones. Você pode escolher um dos conjuntos pré-definidos ou incluir seus próprios ícones.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-4.jpg" alt="" /></figure>
<p>
    Add your own icons. There are 2 options in this section:
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-5.jpg" alt="" /></figure>
<p><strong>Custom button</strong> - escolha esta opção para definir o link para sua imagem no campo. Ao clicar no link, você verá uma janela para escolher um serviço de compartilhamento.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-7.jpg" alt="" /></figure>
<p>
    <strong>Custom code</strong> - se escolher esta opção, você pode substituir completamente a exibição dos ícones com ícones personalizados. O campo aceita código HTML e CSS. Se precisar incluir ícone personalizado de Facebook, Twitter ou outros serviços e deseja fazer funcionar, você precisa incluir a classe correspondente ao link. Para o Facebook, seria class="addthis_button_facebook", para Twitter - class="addthis_button_twitter", para exibir uma janela para escolher a rede social - class="addthis_button_more".
</p>
<h3>Custom Metadata</h3>
<p>Nesta seção você pode definir dados compartilhamento personalizados.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-8.jpg" alt="" /></figure>
<p>
    Definindo todos os dados, você verá sua o resultado na janela de comparilhamento. Você verá os dados especificados lá.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-10.jpg" alt="" /></figure>
<h3>Custom Sharing Service</h3>
<figure class="img-polaroid"><img src="img/magento/sharing-12.jpg" alt="" /></figure>
<p>
    Nesta seção, você pode incluir o ícone de sua rede social e usuários poderão compartilhar usando seu serviço.
</p>
<figure class="img-polaroid"><img src="img/magento/sharing-9.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>nomde do serviço de compartilhamento.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Url </strong></td>
        <td>-</td>
        <td>link de compartilhamento.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Icon </strong></td>
        <td>-</td>
        <td>ícone de compartilhamento.</td>
    </tr>   
</table>
<p>Seu módulo será alterado de acordo.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-11.jpg" alt="" /></figure>

<h3>Api Configuration Options</h3>
<p>Esta seção contém configurações de API do serviço Addthis.</p>
<figure class="img-polaroid"><img src="img/magento/sharing-13.jpg" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/sharing-14.jpg" alt="" /></figure>
<table  class="options-table">
    <tr>
        <td class="col-1"><strong>Exclude Services </strong></td>
        <td>-</td>
        <td>serviços que serão excluídos de todos os menus. Por exemplo, preenchendo com 'facebook,myspace' faria com que Facebook e MySpace ficassem escondidos em todos os menus.</td>
    </tr>     
    <tr>
        <td class="col-1"><strong>Compact Menu Services </strong></td>
        <td>-</td>
        <td>serviços que usarão o menu compacto. Por exemplo, configurando iso para 'print,email,favorites' faria com que apenas estes serviços aparecessem.</td>
    </tr>  
    <tr>
        <td class="col-1"><strong>Expanded Menu Service </strong></td>
        <td>-</td>
        <td>serviços que usam o menu expandido. Util se apenas alguns serviços são desejados - definindo uma lista longa através de ‘services exclude’ pode ser cansativo, e não pegaria um serviço novo mais tarde. Por exemplo, preenchendo com 'bebo,misterwong,netvibes' resultaria em apenas estes serviços aparecendo no menu expandido.</td>
    </tr>   

    <tr>
        <td class="col-1"><strong>Compact Menu Hover </strong></td>
        <td>-</td>
        <td>desligue para não exibir o menu compacto ao passar o mouse em cima do botão. Ao invés disso, será revelado ao clicar no botão.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Delay </strong></td>
        <td>-</td>
        <td>atraso, em milisegundos, antes de abrir o menu compacto. Máximo de 500 ms.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Compact Menu Direction </strong></td>
        <td>-</td>
        <td>normalmente, nós exibimos o menu compacto na direção em que o a janela tem mais espaço. Altere aqui o comportamento padrão.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>New Window </strong></td>
        <td>-</td>
        <td>se for true, clicar no botão do AddThis vai abrir uma nova página que suporte compartilhar sem JavaScript.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Menu Language </strong></td>
        <td>-</td>
        <td>força o menu a usar uma língua específica.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Top </strong></td>
        <td>-</td>
        <td>quantidade de pixels de recuo no topo.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Offset Left </strong></td>
        <td>-</td>
        <td>quantidade de pixels de recuo à esquerda.
</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Load AddThis CSS </strong></td>
        <td>-</td>
        <td>desligue para não carregar o arquivo padrão de CSS, permitindo que você use o estilo que desejar.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Track Clickbacks </strong></td>
        <td>-</td>
        <td>ligue para permitir que seja incluído uma variável ao final de sua URL ao compartilhar. Usaremos isso para definir quantas pessoas voltam a procurar seu conteúdo através dos links compartilhados pelo AddThis.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Google Analytics Id </strong></td>
        <td>-</td>
        <td>ligue para ativar o módulo.</td>
    </tr>
</table>
