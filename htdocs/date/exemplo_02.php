<?php

//O strtotime ele aceita expressao, portanto posso colocar o now de agora que ele aceita normalmente.

//$ts = strtotime("2001-09-11");  //string
//$ts = strtotime("now");         //agora
$ts = strtotime("+1 week");          // mais um ano

echo date("l, d/m/Y", $ts);

?>