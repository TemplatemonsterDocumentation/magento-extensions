<h2 class="item1">Instalação</h2>


<div class="alert alert-danger">
    <p><strong>Atenção!!!</strong></p>
    Devido às peculiaridades da engine, você deverá usar qualquer ambiente de console com a linha de comando. A configuração do módulo é feita primáriamente através da linha de comando. Se você fizer alterações no servidor de hospedagem, entre em contato com seu provedor de hospedagem para ajuda com relação ao uso da linha de comando no servidor.
</div>

<p>Primeiro, copie o conteúdo do arquivo (pasta app) para a pasta raíz de sua loja online. Após copiar, execute o console e navegue até a pasta raíz da loja.<br>
Então, execute os seguintes comandos, um por um:</p> 
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
    Você pode limpar o cache do site e reindexar sua loja em System -> Tools -> Cache Management/Index Management. No entanto, não podemos garantir que essas opções do painel administrativo fucionarão corretamente, por conta da engine usada ser recente. Recomendamos que use a linha de comando. 
</div>

<p>
    Após reindexar os dados e limpar o cache, apague todo o conteúdo das pastas var e pub/static, exceto pelo arquivo .htaccess. Agora você está pronto para navegar até o painel administrativo para configurar o módulo.    
</p>

