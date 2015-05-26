<?php 
echo '例子：';

file_put_contents('/home/xiaoju/webroot/webroot/test/log.txt', '生存还是毁灭,这是个问题.');
fastcgi_finish_request(); /* 响应完成, 关闭连接 */
 
/* 记录日志 */
file_put_contents('/home/xiaoju/webroot/webroot/test/log1.txt', '生存还是毁灭,这是个问题.');
?>