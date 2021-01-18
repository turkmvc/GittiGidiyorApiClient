<?php
require 'client.php';
$client = new ggClient();
$ini_array = parse_ini_file("config.ini");
$developerId = $ini_array['developerId'];
$apiKey = $ini_array['apiKey'];
$secretKey = $ini_array['secretKey'];
$name = $ini_array['name'];
$description = $ini_array['description'];
$nick = $ini_array['nick'];
$password = $ini_array['password'];
$auth_user = $ini_array['auth_user'];
$auth_pass = $ini_array['auth_pass'];
$lang = $ini_array['lang'];

/*
//GittiGidiyor da yer alan bütün kategori bilgilerine ulaşmak için kullanılır.
 Ürün ekleme işlemi sırasında ilgili kategori bilgisinin belirtilmesi gerektiği için bu bilginin gönderilmesi zorunludur.
$a = $client->getCategories(0,100,false,false,false);
$b=($a->categories);
echo  "<textarea cols=224 rows=20>";
print_r($b);
echo  "</textarea>";
echo  "<p>&nbsp;</p>";


//Bu metot, geliştirici tarafından oluşturulan uygulamaların bilgisine ulaşmak için kullanılır.
//$developerId=$client->getDeveloperId();
$result=$client->getApplicationList($developerId);
echo  "<textarea cols=224 rows=12>";
print_r($result);
echo  "</textarea>";
echo  "<p>&nbsp;</p>";

//GittiGidiyor API kullanıcısını, "geliştirici" olarak sisteme kaydetmek için bu metot çağırılmalıdır.
 Bu metodun döndürmüş olduğu Developer ID vasıtasıyla uygulamalar yaratılabilir.
$a=$client->isDeveloper($nick,$password);
echo  "<textarea cols=224 rows=12>";
print_r($a);
echo  "</textarea>";
echo  "<p>&nbsp;</p>";

//Herhangi bir GittiGidiyor kullanıcısının geliştirici olup olmadığını kontrol etmek için bu metot kullanılır.
$a=$client->registerDeveloper($nick,$password);
echo  "<textarea cols=224 rows=12>";
print_r($a);
echo  "</textarea>";
echo  "<p>&nbsp;</p>";

//GittiGidiyor daki bütün şehir bilgilerine ulaşmak için kullanılır.
 Ürün ekleme işlemi sırasında ilgili şehir bilgisinin (şehir adları ve kodları) belirtilmesi gerektiği için bu bilginin gönderilmesi zorunludur.
$a=$client->getCities(0,82);
echo  "<textarea cols=224 rows=12>";
print_r($a);
echo  "</textarea>";
echo  "<p>&nbsp;</p>";
//yorum satırındaki kodlar çalışmaktadır. yanlız gerçek magaza bilgileri gerekmekte.

$a = $client->getCategories(0,100,false,false,false);
$b=($a->categories);
echo  "<textarea cols=224 rows=20>";
print_r($b);
echo  "</textarea>";
echo  "<p>&nbsp;</p>";
*/

/*
$c = $client->getParentCategories(0,100,false, false, false);
foreach ($c->categories->category as $item) {
    print_r($item->categoryCode);
    echo "<br>";
    print_r($item->categoryName);
    echo "<br>";
}
echo "<br>";

$a = $client->getCities(0, 82);
foreach ($a->cities->city as $item) {
    echo $item->trCode;
    echo "<br>";
    echo $item->cityName;
    echo "<br>";
}
*/

$a=$client->isDeveloper($nick,$password);
echo "Geliştirici Bilgileri";
echo "<br>";

echo "Developer Id : " . $a->developerId;
echo "<br>";
echo "Role Name : " . $a->nick;
echo "<br>";
echo "Role Password : " . $auth_pass;
echo "<br>";
echo "<br>";

$b=$client->getApplicationList($developerId);
echo "Kayıtlı API anahtarları";
echo "<br>";

echo "Api Key : " . $b->applications->application->apiKey;
echo "<br>";
echo "Secreet Key : " . $b->applications->application->secretKey;
echo "<br>";
echo "Uygulama Adı : " . $b->applications->application->name;
echo "<br>";
echo "Açıklama : " . $b->applications->application->description;
echo "<br>";
echo "Kayıt Tarihi : " . $b->applications->application->registerDate;
echo "<br>";
echo "<br>";

echo '<title>' . $b->applications->application->name . '</title>';

exit();
?>
