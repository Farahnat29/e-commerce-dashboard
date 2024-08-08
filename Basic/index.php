<?php
echo "Hello PHP<br>";

$bit="Hello mr.Bit";
$mega="Hello Scramblebit.com";
echo "$bit <br>";

echo " $mega<br>";

echo "<h1>".$mega."</h1>";

print "Hello Scramblebit.com.ttr<br>";
print ("Hello Scramblebit");
$x=10;
echo "$x<br>" ;

$y=true;
echo $y;
if(15>55){
    echo"Good Morning";
}
else if (10>5){
    echo"Good ";
}
else {
    echo"Good Day";
}
$bitt=20;
if ($bitt==20){
    echo "Have a Good Day<br> ";
}

$day=4;
switch ($day){
    case 1 :
        echo "Today is sunday";
        break;
    case 2 :
        echo "Tody is Monday";
        break;

    case 4 :
        echo "Today is saturday";
        break;
    case 5 :
            echo "Today is wednesday";
        break;

      


}
//for loop
for($a=0;$a<=20;$a++){
    echo "The Number is : $a <br>";
}



for($b=0;$b<=5;$b++){
    if ($b ==3)
    continue;
    echo "The Number is : $b<br>";
}


?>