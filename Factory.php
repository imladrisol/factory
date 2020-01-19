<?php

//первый вариант
class Oven
{
    /**
     * @param string $dish
     * @return Dish|null
     * @throws Exception
     */
    public function getDish($dish)
    {
        $obj = null;
        if ($dish == 'borsch') {
            $obj = new Borsch();
        } else {
            throw new Exception('there is no such a dish');
        }
        return $obj;
    }
}

interface Dish
{
    public function cook();
}

class Borsch implements Dish
{
    public function cook()
    {
        echo 'borsch cooking';
    }
}

try {
    $cooker = new Oven();
    $dish = $cooker->getDish('borsch');
    $dish->cook();
} catch (Exception $e) {
    echo $e->getMessage();
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