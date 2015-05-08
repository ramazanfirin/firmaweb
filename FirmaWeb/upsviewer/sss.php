<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include 'include.php'; ?>
</head>

<body id="page3">
	<div id="main">
		<!-- header -->
		<div id="header">
			<div class="row-1" id="header">
				 	<?php include 'header.php'; ?>
			<div class="row-2" id="menu">
				 	<?php include 'menu.php'; ?>
				  
			</div>
				 <div class="row-3" id="main-box">
				 	<?php include 'main-box.php'; ?>
				 </div>
			</div>
	
		<!-- content -->
		<div id="content"><div class="inner_copy"><div class="inner_copy"> Need a website? <a href="http://www.websitetemplatesonline.com">Free website templates</a> by professional designers.</div></div>
				 <div class="indent">
						<h2>SIK SORULAN SORULAR</h2>
						<dl>
							 <dt>S. Tam sürüm ne zaman piyasaya sürülecektir?</dt>
							 <dd>C. Tam sürümün 30 Mart 2013 de piyasaya sürülmesi hedeflenmektedir.</dd>
							 
							 <dt>S. UPS Watchwer 1.0 hangi  bileşenlerden oluşmaktadır?</dt>
							 <dd>C. Bir donanım(console) ve bir yazılım(program) kısmından oluşmaktadır.</dd>
							 
							  <dt>S. Pogran hangi marka/model ups leri desteklemektedir.</dt>
							 <dd>C. Tüm marka ve modellerle test edilmemiştir ama teorik olarak tüm marka/model ups lerin tamamına yakınını desteklemektedir.</dd>
							 
							 <dt>S. Program hangi iletişim protocollerini desteklemektedir..</dt>
							 <dd>C. Program usb,serial,SNMP,Eaton/MGE,HTTP/XML protokollerini desteklemektedir.</dd>
							 
							 <dt>S. Geçmişe dönük rapor alabilir miyiz?</dt>
							 <dd>C. Tüm ups değerleri kayıt edilmektedir. Geçmişe dönük raporları hem excel formatında hem de grafik formatta alabilirsiniz
								<br/>3 adet rapor ekranı bulunmaktadır.
								<br/>a)Genel Rapor Ekranı: Tüm değerlere ilişkin rapor almanızı sağlar.Örnek resim için <a href="screenshots/ups/raporlar.jpg">Genel Raporlar</a>
								<br/>b)Hata Rapor Ekranı : Tanımı yapılan alarmlarlar ilgili bilgi alanabilir. Bu ekranda hangi ups değerinde dolayı alarm üretildiği de görülebilir.<a href="screenshots/ups/hata_raporlari.jpg">Hata Raporları</a>
								<br/>c)Statu Değişim Rapor ekranı: Statu değişimi değerleri burada görülebilir.(Online(OL), OnBattery(OB) vs..) <a href="screenshots/ups/statu_degisim_rapor.jpg">Statu Değişim Raporları</a>		
							 </dd>
							 
							 <dt>S. Ups datalarını hangi fotmatlarda görebiliriz?</dt>
							 <dd>C. Toplam 3 ayrı formatta görebilirsiniz
								<br></br>1)Sayısal format : Bu ekranda ups ler alt alta sıralanır. Alarm üreten/ hata oluşan ups farklı renkte gösterilir. Ups sayısının çok olduğu durumlarda faydalıdır. Örnek:
								<br></br>2)Grafik format  : Her değer ayrı bir grafikte gösterilir .Sadece anlık değerler görülür. Örnek:
								<br></br>3)Çizgi format   : UPs deperleri bir grafikte görülür.Bu ekranda son iki saatteki ups datlarındaki değişimde görünür.
							 </dd>
							 
							 <dt>S. Ups e ait hangi dataları görebiliriz?</dt>
							 <dd>C. Ups den gelen değerler marka model ve iletişim protokolune göre değişiklik gösterebilmekle beraber oldukça ayrıntılı verilere ulaşabilirsiniz.Örnek olarak <a href="screenshots/ups/ups_variables_3.jpg">Snmp-ups değerleri </a> ,<a href="screenshots/ups/ups_variables_2.jpg">serial-ups değerleri </a>,<a href="screenshots/ups/ups_variables_1.jpg">sanal-ups değerleri </a>
							 </dd>
							 
							 
							 <dt>S. Programı her bilgisayara kurmamız gerekiyor mu?</dt>
							 <dd>C. Programı bir server a kurmanız yeterlidir. Diğer bilgisalardan web browser üzerinden programa bağlabilirsiniz.</dd>
							 
							 <dt>S. Programı diğer şudeden ya da evden bağlanabilir miyiz?</dt>
							 <dd>C. Program internet tabanlı olduğu için, internete bağlı herhangi bir noktadan programa bağlanabilirsiniz.</dd>
							 							 
							 <dt>S. Programa bilgisayardan başka cihazlarla bağlanabilir miyiz?</dt>
							 <dd>C. Akıllı cep telefonlarından veya tablet bilgisayardan bağlantı kurabilirsiniz.</dd>
							 
							 <dt>S. UPS Watchwer 1.0 programını kullanmam için ek bir program kurmama gerek var mı?</dt>
							 <dd>C. UPS Watchwer 1.0 için java platformunun kurulu olması gerekmektedir. Database programına ve Web sunucu kurulumuna ihtiyaç yoktur.</dd>
							 
							 <dt>S. Hangi Java versiyonu gerekiyor?</dt>
							 <dd>C. Java 1.6 veya üzeri bir versiyon kullanabilirsiniz. Java 7 yi aşağıdaki adresten indirebilirsiniz.http://www.oracle.com/technetwork/java/javase/downloads/jdk7u7-downloads-1836413.html</dd>
							 
							 <dt>S. Programı çalıştırdım ama kullanıcı adı ve şifresini bilmiyorum.</dt>
							 <dd>C. Programda iki tip kullanıcı vardır. Admin ve User tipi kullanıcılar. Programda iki kullanıcı için de birer tane kullanıcı tanımlanmıştır.Admin yetkisi için kullanıcı adı:Admin şifre :Admin, normal kullanıcı için kullanıcı adı:User şifre:User. <br/>
							 Program çalıştırıldıktan sonra bu şifrelerin değiştirilmesi gerekmektedir.
							 </dd>
							 
							 <dt>S. Admin ve User kullanıcılarının farkı nedir?</dt>
							 <dd>C. Admin kullanıcı datalar üzerinde değişiklik yapabilir. User kullanıcısı ise sadece datalaeı görüntüleyebilir.</dd>
							 
							 <dt>S. Programa yeni özellikler ekletebilir miyiz?</dt>
							 <dd>C. İsteğiniz doğrultuda programa yeni özellikler ekleyebiliriz.</dd>
							 
							 <dt>S.Programını çalıştırmak için hangi özelliklerdeki bir server a ihtiyaç vardır?</dt>
							 <dd>C. Sıradan bir pc yeterlidir. Buradaki tek kısıt 64-bit mimari (64-bit donanım ve 64-bit işletim sistemi) gerekmektedir. İlerki sürümlerde bu kısıtın kaldırılması planlanmaktadır.</dd>
							 
							</dl>
				 </div>
		</div>
		<!-- footer -->
		<div id="footer">
				<?php include 'footer.php'; ?>
			</div>
	</div>
	</div>
</body>
</html>