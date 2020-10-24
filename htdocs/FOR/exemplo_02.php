
<?php

//ATALHO DO SUBLIME - Digite for e clique em Tab ele autocompleta.

echo "<select>";
for ($i=date("Y"); $i >= date("Y") - 100 ; $i--) { 
  
   echo '<option value="'.$i.'">'.$i.'</option>';

}
echo "</select>"

?>