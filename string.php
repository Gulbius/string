<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
     echo "Uzduotis 1";
     echo "<hr>";
    $name = "Silvester";
    $sur = "Stalone";
    if(strlen($name)<strlen($sur)){
        echo $name;
    }else{
        echo $sur;
    }
    //////////////////////////////////////////
    // Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
    echo "<hr>";
    echo "Uzduotis 2";
    echo "<hr>";
    $name = "Keanu";
    $sur = "Reeves";
    echo strtoupper($name)." ";
    echo strtolower($sur)." ";
    ///////////////////////////////////////////
    // Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
    echo "<hr>";
    echo "Uzduotis 3";
    echo "<hr>";
    $name = "Keanu";
    $sur = "Reeves";
    $result = " ";
    echo $result =  substr($name,0,1)." ".substr($sur,0,1) ;
///////////////////////////////////////////////////////////////////////
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
    echo "<hr>";
    echo "Uzduotis 4";
    echo "<hr>";
    $name = "Silvesteris";
    $sur = "Stalone";
    $raid = "";
    echo $raid = substr($name,-3).substr($sur, -3);
    ///////////////////////////////////////////////////////////////////
    // Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
    echo "<hr>";
    echo "Uzduotis 5";
    echo "<hr>";
    $str = "An American in Paris";
    $new = str_ireplace("a","*",$str);
    echo $new;
    ///////////////////////////////////////////
    // Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti./+
    echo "<hr>";
    echo "Uzduotis 6";
    echo "<hr>";
    $str2 = "An American in Paris";
    $ats = substr_count(strtolower($str2), "a");
    echo $ats;
    ////////////////////////////////////////////
    // Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
    echo "<hr>";
    echo "Uzduotis 7";
    echo "<hr>";
    $str3= "An American in Paris";
    $str4= "Breakfast at Tiffany's";
    $str5 = "2001: A Space Odyssey";
    $str6 = "It's a Wonderful Life";
    $bals = preg_replace('/[aeiou]/i', '', $str3);
    $bals2 =  preg_replace('/[aeiou]/i', '', $str4);
    $bals3 = preg_replace('/[aeiou]/i', '', $str5);
    $bals4 = preg_replace('/[aeiou]/i', '', $str6);
    echo $bals . " ||". $bals2. "||".$bals3."||".$bals4;
///////////////////////////////////////////////////////////////////////
// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
    echo "<hr>";
    echo "Uzduotis 8";
    echo "<hr>";
    $string2 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
    echo $string2; 
    echo "<br>";
    echo substr($string2,-14,1);
///////////////////////////////////////////////////////////////////////////
// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
    echo "<hr>";
    echo "Uzduotis 9s" ;
    echo "<hr>" ;



?>



</body>
</html>