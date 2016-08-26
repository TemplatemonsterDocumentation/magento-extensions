<h2 class="item1">Kurulum</h2>


<div class="alert alert-danger">
    <p><strong>Dikkat!!</strong></p>
    Uygulamadaki özellikler nedeniyle, komut satırı kullanmanız gerekir. Modül ayarları, esas olarak komut satırıyla gerçekleşir. Hosting sunucunuzda bir değişiklik yaparsanız, hizmet sağlayıcınızla iletişime geçip komut satırı kullanımıyla ilgili bilgi alınız.
</div>

<p>Öncelikle, arşiv içeriğini (uygulama klasörü) çevrimiçi mağazanızın kök dizinine kopyalayın. Kopyaladıktan sonra, uygulamayı çalıştırın ve mağazanın ana klasörüne girin.<br>
Ardından, aşağıdaki komutları komut satırında tek tek çalıştırın:</p> 
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
    Sitenizin önbelleğini temizleyebilir ve yönetici panelindeki  Sistem -❯ Araçlar -❯ Bellek Yönetimi/İndeks Yönetimi bölümünden verileri yeniden indeksleyebilirsiniz. Yine de, yönetici panelinden yapılan bu işlemden tam verim alınabileceğine dair garanti vermiyoruz. Bu yüzden komut satırı kullanmanızı öneriyoruz. 
</div>

<p>
    Verileri yeniden indeksleyip önbelleği temizledikten sonra, .htaccess dosyası hariç, var ve   pub/static klasörlerdeki tüm içeriği silin. Artık yönetici paneline gidebilir ve modül ayarlarını yapmaya başlayabilirsiniz.    
</p>

