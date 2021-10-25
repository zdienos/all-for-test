<?php 


@ini_set('output_buffering','Off');
@ini_set('zlib.output_compression',0);

set_time_limit(0);
ob_implicit_flush(1);
ob_end_flush();


for ($i = 1; $i <= 10; $i++): 
        sleep(1); 
        echo "$i\n";
        ob_flush(); 
        flush(); 
endfor; 

?>
