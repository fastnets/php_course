<?php

require_once __DIR__ . '/src/MagicClass.php';

use App\MagicClass;
use App\Point;
use App\Vector;

// Работа с MagicClass
$obj = new MagicClass();
unset($obj);

$obj = new MagicClass();
$obj->nonExistentMethod('arg1', 'arg2');
MagicClass::nonExistentStaticMethod('arg1', 'arg2');
echo $obj->nonExistentProperty;
$obj->nonExistentProperty = "value";
isset($obj->nonExistentProperty);
unset($obj->nonExistentProperty);

$serializedObj = serialize($obj);
unserialize($serializedObj);

echo $obj;
$obj();

eval('$newObj = App\MagicClass::__set_state(array());');

$clonedObj = clone $obj;

var_dump($obj);

// Векторная часть:
$T1 = new Point(3, 4);
echo "Создана точка: $T1\n";

$V1 = new Vector(6, 8);
echo "Создан вектор V1: $V1\n";

$V2 = new Vector(0, 0);
echo "Создан нулевой вектор V2: $V2\n";

$V3 = new Vector(-8, 6);
echo "Создан вектор V3, перпендикулярный к V1: $V3\n";

echo "Длина вектора V1: " . $V1->length() . "\n";
echo "Длина вектора V2: " . $V2->length() . "\n";
echo "Длина вектора V3: " . $V3->length() . "\n";

if ($V3->isPerpendicularTo($V1)) {
    echo "Векторы V3 и V1 перпендикулярны.\n";
} else {
    echo "Векторы V3 и V1 не перпендикулярны.\n";
}

$T1->moveByVector($V1);
echo "Точка T1 после переноса на вектор V1: $T1\n";
?>
