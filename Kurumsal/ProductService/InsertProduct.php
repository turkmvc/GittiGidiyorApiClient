<?php

include "../../client.php";
$client=new ggClient();
$xml=
'<product>  <categoryCode>gdk</categoryCode>  <storeCategoryId></storeCategoryId>  <title>Kodak Z915 12MP</title>  <subtitle></subtitle>  <specs>  <spec name="Durumu" value="Kullanılmış" type="Combo" required="true"/>  <spec name="Çözünürlük (Megapiksel)" value="10.0 - 11.9 MP" type="Combo" required="true"/>  <spec name="Marka" value="Kodak" type="Combo" required="true"/>  </specs>  <photos>  <photo photoId="0">  <url>http://images.gittigidiyor.com/2941/KODAK-Z915-10MP-10X-ZOOM-HD-SIFIRURUN__29416457_0.jpg</url>  </photo>  </photos>  <pageTemplate>1</pageTemplate>  <description>Kodak Z915 Fotograf Makinesi 10Mp 50X zoom</description>  <startDate></startDate>  <catalogId></catalogId>  <catalogDetail></catalogDetail>  <format>S</format>  <startPrice></startPrice> <buyNowPrice>240</buyNowPrice>  <netEarning></netEarning>  <listingDays>30</listingDays>  <productCount>1</productCount>  <cargoDetail>  <city>34</city>  <cargoCompanies>  <cargoCompany>aras</cargoCompany>  </cargoCompanies>  <shippingPayment>B</shippingPayment>  <cargoDescription></cargoDescription>  <shippingWhere>country</shippingWhere>  </cargoDetail>  <affiliateOption>false</affiliateOption>  <boldOption>false</boldOption>  <catalogOption>false</catalogOption>  <vitrineOption>false</vitrineOption>  </product>';

$deneme = $client->insertProducts(null,$xml,false,false);
 print_r ($deneme);
