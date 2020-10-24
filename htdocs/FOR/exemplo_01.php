
<?php 

echo "Exemplo de for simples:";
for ($i = 0; $i <= 10; $i++) {

echo $i . "<br>";//Concatenando com <br>

}

echo "<br>";

echo "Exemplo de for De 5 em 5:";
for ($i = 0; $i <= 50; $i += 5) {

echo $i . "<br>";//Concatenando com <br>

}

echo "<br>";


echo "Exemplo de for com continue: ";
for ($i = 0; $i <= 70; $i += 5) {

if($i > 40 && $i < 60) continue;

echo $i . "<br>";//Concatenando com <br>

}

echo "<br>";

echo "Exemplo de for com break no 20: ";
for ($i = 0; $i <= 30; $i += 5) {

if($i === 20) break;

echo $i . "<br>";//Concatenando com <br>

}


?>