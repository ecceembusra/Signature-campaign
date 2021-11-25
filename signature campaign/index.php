
<!DOCTYPE html>
<html>
<head>
	<title>imza</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<style>
*{
    box-sizing: border-box;
}
 
:root{
    --yazi-renk:#fff;
    --bg-aktif-renk:#EEE8AA;
}
 
h1,
h2,
p,
ul,
li,
body{
    margin:0;
    padding:0;
}
 
body{
    background: color:white; fixed; /*fixed arkaplanı sabitler*/
    font-family: 'Montserrat', sans-serif;
}
.sayfa{
    width: 960px;
    margin:10px auto;
    background: var(--yazi-renk);
    border:3px solid red ;
    border-radius: 15px;
    overflow: hidden;/*taşan kısımlar temizleniyor*/
}
#logo img{
    width: 100%;
    vertical-align: middle;
}
#ust-menu > ul{
    position: relative;
    list-style: none;
    display: flex;
    background-color: red ;
    justify-content: space-around;
}
 
#ust-menu > ul > li{
    position: relative;
    flex-grow: 1;
}
 
#ust-menu > ul ul{
    display: none;
    list-style: none;
    position: absolute;
     background-color: #EEE8AA ;
    width: 100%;
    border-radius: 0 0 10px 10px;
    overflow: hidden;
}
#ust-menu > ul > li:hover ul{
   /*display: block; yada flex kullanılabilir*/
   display: flex;
   flex-direction: column;
}
#ust-menu ul li:hover{
    background:var(--bg-aktif-renk);
}
#ust-menu ul li a{
    text-align: center;
    display: block; /*bulunduğu alanın içinde 100% olarak duracak*/
    height: 40px;
    line-height: 40px;
    color:var(--yazi-renk);
    text-decoration: none;
    font-size: 1.2em;

}
main{
    padding:20px;
}
main p{
    margin:5px 0;
}
 
 
 
footer{
     background-color: #939597 ;
    padding:15px;
    text-align: center;
    color:var(--yazi-renk);
}
 .card
 {
 	width: 299px;

 }


</style>

</head>
<body>


    <div class="sayfa">
        <header>
        <div id="logo">
                    <img src="img_2.jpg"
                        alt="logo">
              
            </div>
           
            <nav id="ust-menu">
                <ul>
                    <li><a href="#">ANASAYFA</a></li>
                    <li><a href="#">BİR KAMPANYA BAŞLAT</a></li>
                    <li><a href="#">GÖZ AT</a>
                         <ul>
                            <li><a href="#">Öne Çıkanlar</a></li>
                            <li><a href="#">Popüler</a></li>
                            <li><a href="#">Yakın Zammanlı</a></li>
                            <li><a href="#">Başarılar</a></li>
                        </ul>
                    </li>

                    <li><a href="#">DESTEKÇİ OL</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <article>
              <div class="card-group">
  <div class="card">
    <img src="orman.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Orman</h5>
      <p class="card-text">Ormanlar ve doğa hepimizin ortak malıdır. Orman alanlarına sahip çıkmak bir vatandaşlık görevidir.Bu kampanya ülkemizi yönetenlerin bizim sesimize kulak vermesi için düzenleniyor. Lütfen destek olun birlikte olalım. </p>
     <a href="#" class="btn btn-secondary">KAMPANYAYA GİT</a>
    </div>
  </div>
  <div class="card">
    <img src="iklim.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Z Kuşağından Çağrı</h5>
      <p class="card-text">Ülkenin her yerinde, yangınlar, seller, afetler olurken, bu krize kararlı bir eylem planı başlatmamız için tam zamanı. </p>
     <a href="#" class="btn btn-secondary">KAMPANYAYA GİT</a>
    </div>
  </div>
  <div class="card" >
    <img src="sma.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SMA Tedavileri</h5>
      <p class="card-text">Bugüne dek belki SMA hastası çocuklar için çok sayıda kampanya imzaladınız; belki çocuklarının yaşamı için mücadele eden ailelerin yürüttüğü bağış kampanyalarına destek olarak SMA hastalarının sesi oldunuz, hasta yakınlarına güç verdiniz.</p>
      <a href="#" class="btn btn-secondary">KAMPANYAYA GİT</a>
    </div>
  </div>
</div>

            </article>
           
            <article>
                <h2>
                    KYK YURDUNDA SAĞLIK KOŞULLARI
                </h2>
                <p>
                     Yükseköğretim Kurulu Başkanı Yekta Saraç, üniversitelerin 1 Ekim sonrasında açılacağını duyurdu. Ardından da
                    yurtlarda uygulanacak olan koronavirüs tedbirleri gündeme geldi. Pandemi sürecinde karantinada olması
                    gereken kişilere tahsis edilen Kredi Yurtlar Kurumu’na (KYK) bağlı yurtlarda Bilim Kurulu tavsiyeleri
                    çerçevesinde <span style="color: red; font-weight: bold;"> alınacak tedbirler : </span>
                    <br> - Yemekhaneler fiziki mesafeye uygun hale getirilecek. Gerekli durumlarda
                    yemek saatleri uzatılarak mesafe korunacak. 
                    <br> - Yemek servisinde bütün araç-gereçler her kullanım sonrasında
                    bulaşık makinesinde en az 60 derecede yıkanacak.
                    <br> - Ortak kullanımda bulunan zeytinyağı, limon sosu, tuz, nar
                    ekşisi gibi ürünler kaldırılacak. Tuz ve baharatlıklar tek kullanımlık şeklinde verilecek.
                    <br> - Yurt içinde yer
                    alan kantin ve kafeteryalara alınacak kişi sayısı, çalışanlar ve öğrenciler dahil 4 metrekareye 1 kişi
                    olacak şekilde hesaplanacak.
                    <br> - Açık ürünlerin paketlenerek satılması, öğrencilerin bu ürünlere dokunması
                    engellenecek. 
                    <br> Alınan tüm bu tedbirlerin yetersiz olduğu , okul döneminde hali hazırda uygulanan kurallar
                    dahilinde zaten yemekhanelerin steril olmadığı göz önünde bulundurularak <span style="font-weight: bold;"> yemekhanelerin tamamen kapatılması yemeklerin <u>tabldot menü olarak odalara dağıltılmasını </u></span> istiyoruz.
                </p>
                </p>
            </article>
        </main>
        <footer>
            <p>LÜTFEN TÜM BİLGİLERİNİZİ TAM GİRİNİZ</p>



<form class="form" action="islem_son.php" method="POST">

   <input type="text" required="" name="kisi_ad" placeholder="Adınızı giriniz:"> 
   <input type="text" required="" name="kisi_soyad" placeholder="Soyadınızı giriniz:">
   <input type="text" required="" name="kisi_yas" placeholder="Yaşınızı giriniz:">
   <input type="mail" required="" name="kisi_mail" placeholder="Mail adresinizi giriniz.:">

<button type="submit" name="insertislemi">İMZALA</button>
</form>
</footer>
</body>
</html>







