Кто брал крдеиты в банках - есть опасность что неожидано прилетит исполнительное производство
Чтобы контролировать написал этот  скрипт и анализировал его выдачу через FollowThatPage.com
Очень информативно было

Пару лет работало, пока сегодня каптчу не добавили (можно переписать через https://anti-captcha.com/mainpage но позже)
https://erb.minjust.gov.ua/

Также здесь смотри кто подал по номеру впровадження<br>
https://asvpweb.minjust.gov.ua/#/search-debtors <br>


<?php
$header=[
 'Origin: https://erb.minjust.gov.ua', 
 'Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7,uk;q=0.6', 
 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36' ,
 'Content-Type: application/json;charset=UTF-8' ,
 'Accept: application/json, text/plain, */*' ,
 'Referer: https://erb.minjust.gov.ua/' ,
 'Connection: keep-alive' 
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,            "https://erb.minjust.gov.ua/listDebtorsEndpoint" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,     '{"searchType":"1","paging":"1","filter":{"LastName":"","FirstName":"","MiddleName":"","BirthDate":null,"IdentCode":"2760713434"}}' ); 
curl_setopt($ch, CURLOPT_HTTPHEADER,     $header); 

$result=curl_exec ($ch);
echo "<pre>";
print_r(json_decode(trim($result), true));
echo "</pre>";
