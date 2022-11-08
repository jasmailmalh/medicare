<?php
$age=18;
$height=4;
$weight=40;
if($age==18 && $height==4 && $weight==40)
{
    echo" age==18 height==4 weight==40<br 1st person is non-veg<br>";
    echo"Dalia with veggies (2 bowl) + skimmed milk (1 glass)
Vegetable Poha (2 bowl) + skimmed milk (1 glass)
Vegetable Omelette (2) + Bread ( 3 slice)
Roti (2)+ Vegetable (1 bowl) + skimmed milk (1 glass)
Bread (Atta, 3 slice) + boiled egg white (2)<br>";
}
else if($age==30 && $height==5 && $weight==50)
{
    echo "person is non-veg<br>";
    echo "Vegetable omelette (1) + Bread (2 slice)
Dalia with veggies (1 bowl) + skimmed milk (1glass)
Vegetable Poha (1 bowl) + skimmed milk (1glass)
Stuffed Roti (vegetable/dal): 2 medium + Raita (1 bowl)
Boiled egg white (2) + Bread ( 2 slice )<br>";
}
else if ($age==50 && $height==6 && $weight==60) {
    echo "person is non-veg<br>";
    echo "Vegetable omelette (1) + Bread (2 slice)
Dalia with veggies (1 bowl) + skimmed milk (1glass)
Vegetable Poha (1 bowl) + skimmed milk (1glass)
Stuffed Roti (vegetable/dal): 2 medium + Raita (1 bowl)
Boiled egg white (2) + Bread ( 2 slice )<br>";
}
else if ($age==60 && $height==6 && $weight==70) {
    echo "person is non-veg<br>";
    echo " Breakfast (0800 – 0900Hrs.) Dalia with veggies (2 bowl) + skimmed milk (1 glass) Vegetable Poha (2 bowl) + skimmed milk (1 glass) Vegetable Omelette (2) + Bread ( 3 slice) Roti (2)+ Vegetable (1 bowl) + skimmed milk (1 glass) Bread (Atta, 3 slice) + boiled egg white (2)<br>";
}
else{
 echo "person is veg<br>";
 echo "Food group*  Daily amount
Vegetables  2 1/2 cups a day
Fruits  2 cups a day
Grains (mostly whole)   6 1/2 ounces a day
Dairy   3 cups a day<br>";
}
?>