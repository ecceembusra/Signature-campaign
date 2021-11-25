<?php 

require_once 'baglan_son.php';



if (isset($_POST['insertislemi']))
{
	
	$kaydet=$db->prepare("INSERT into bilgiler set 
	kisi_ad=:kisi_ad,
	kisi_soyad=:kisi_soyad,
	kisi_mail=:kisi_mail,
	kisi_yas=:kisi_yas");

	$insert=$kaydet->execute(array(
	'kisi_ad' =>$_POST['kisi_ad'] ,
	'kisi_soyad'=>$_POST['kisi_soyad'],
	'kisi_mail'=>$_POST['kisi_mail'],
	'kisi_yas'=>$_POST['kisi_yas'] 
	));

}
if ($insert)
{
	
	Header("Location:index.php?durum=ok");
	exit;
}
else
{
Header("Location:index.php?durum=no");
	exit;
}


 ?>

