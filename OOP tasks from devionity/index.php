<?php

function autoload($class){
    require(strtr($class, '_\\', '//') . '.php');
}

spl_autoload_extensions('.php');
set_include_path('Classes');
//set_include_path('interfaces');
spl_autoload_register('autoload');

//$user1 = new User();
//$user1->login = 'Mike';
//$user1->password = 123;
//$user1->email = 'email@email';
//$user1->rating = 4;
//
//$user2 = new User();
//$user2->login = 'Zub';
//$user2->password = 123;
//$user2->email = 'email@email';
//$user2->rating = 10;
//
//$user3 = new User();
//$user3->login = 'Maks';
//$user3->password = 123;
//$user3->email = 'email@email';
//$user3->rating = 5;

$car1 = new Car();
$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->year = '2000';
//$car1->driver = $user1;

$car2 = new Car();
$car2->brand = 'Mazda';
$car2->model = '6';
$car2->year = '2015';
//$car2->driver = $user2;

$car3 = new Car();
$car3->brand = 'Ford';
$car3->model = 'Taurus';
$car3->year = '1995';
//$car3->driver = $user3;

//var_dump($car1);
//print_r($car1);

//$user1->login();
//$user1->logout();

$a = array('name' => 'Mike', 'email' => 'e@mail', 'massage' => 'Hello, I am Mike');
$obg = (object)$a;
//var_dump($obg);

$car1->showBrand();
$car1->showModel();

/**
 * get & set
 */
$true = true;
$car1->setPrice('1234567899009.451');
$car1->getPrice($true);

/**
 * создание экземпляров дочерних класов
 */

$manager = new Manager();
$mlogin = 'Mikes111';
$password = 123;
$email = 'email@email';
$rating = 4;
$manager->setProperty($mlogin, $password, $email, $rating);

$admin = new Admin();
$login = 'Zub';

$manager->setProperty($mlogin, $password, $email, $rating);
$admin->setProperty($login, $password, $email, $rating);

//print_r($manager->getProperty());
//print_r($admin->getProperty());


/**
 * Клонирование
 *
 */
$user4 = new User();
$user4->setProperty($mlogin, $password, $email, $rating);
//print_r($user4->getProperty());

$user5 = clone $user4;
//print_r($user5->getProperty());
$user5->setProperty('Serg', '', 123, 5);
//print_r($user4->getProperty());
//print_r($user5->getProperty());

/**
 * Contact form
 */
include 'main.html';

if (isset($_POST['submit'])){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpass = $_POST['cpass'];
    $photo = $_FILES['photo'];
    $subscriber = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
        'cpass' => $cpass,
        'photo' => $photo
    ];
    $user = new ContactForm($subscriber);
}

/**
 * static property
 */
echo "\n" . "Count cars " . Car::$count . "\n";


/**
 * static methods
 */
$num = new Fraction(5, 10);
//echo $num->dec() . "\n";

$arr[] = 1;
$arr[] = 2;
$arr[] = 0;
$arr[] = 0;

echo Fraction::sum($arr) . "\n";
echo Fraction::sub($arr) . "\n";
echo Fraction::mult($arr) . "\n";
try{
    echo Fraction::div($arr) . "\n";
}
catch (Exception $e){
   // echo $e . "\n";
    echo $e->getMessage() . "\n";
}

/**
 * __set & __get
 */
$log = new User();
$log->login = 'vasya';
$log->baba = 'bababa';

echo $log->login . "\n";
echo $log->login2 . "\n";


interface foo {}
class_alias('foo', 'bar');
echo interface_exists('bar') ? 'yes' : 'no' . "\n";
