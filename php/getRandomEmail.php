<?php
 $a=curl_init();curl_setopt($a,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($a,CURLOPT_SSL_VERIFYHOST,false);curl_setopt_array($a,[CURLOPT_URL=>"https://internxt.com/api/temp-mail/create-email",CURLOPT_RETURNTRANSFER=>true,CURLOPT_ENCODING=>"",CURLOPT_MAXREDIRS=>10,CURLOPT_TIMEOUT=>30,CURLOPT_HTTP_VERSION=>CURL_HTTP_VERSION_1_1,CURLOPT_CUSTOMREQUEST=>"GET",CURLOPT_HTTPHEADER=>["Accept: application/json, text/plain, */*","Accept-Encoding: deflate, gzip","Accept-Language: zh-CN,zh;q=0.9,en;q=0.8,en-GB;q=0.7,en-US;q=0.6,zh-TW;q=0.5","Connection: keep-alive","Referer: https://internxt.com/zh/temporary-email","Sec-Fetch-Dest: empty","Sec-Fetch-Mode: cors","Sec-Fetch-Site: same-origin","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 Edg/119.0.0.0","sec-ch-ua: 'Microsoft Edge';v='119', 'Chromium';v='119', 'Not?A_Brand';v='24'","sec-ch-ua-mobile: ?0","sec-ch-ua-platform: 'Windows'"],]);$b=curl_exec($a);$c=curl_error($a);curl_close($a);if($c){echo "cURL Error #:".$c;}else{echo $b;}