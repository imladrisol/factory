<?php
//первый вариант
class Oven {
    public function getDish($dish)
    {
        if($dish == 'borsch'){
            return new Borsch();
        }
        return null;
    }
}

interface Dish{
    public function cook();
}

class Borsch implements Dish{
    public function cook(){
        echo 'borsch cooking';
    }
}

$cooker = new Oven();
$dish  = $cooker->getDish('borsch');
if($dish){
    $dish->cook();
} else {
    echo 'there is no such a dish';
}



//второй вариант
/*class Dish{
    public function getDish($dish)
    {
        if($dish == 'borsch'){
            return new Borsch();
        }
        return null;
    }
    public function cook(){}
}

class Borsch extends Dish{
    public function cook(){
        echo 'borsch cooking';
    }
}

$cooker = new Dish();
$dish  = $cooker->getDish('borsch');
if($dish){
    $dish->cook();
} else {
    echo 'there is no such a dish';
}
*/