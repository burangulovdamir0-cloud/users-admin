<?php
require_once 'Admin.php';


$admin = new Admin("Иван Петров", "admin@mail.ru");

echo "<h2>Админ:</h2>";
$admin->show();


$user1 = $admin->createUser("Анна Смирнова", "anna@mail.ru");
$user2 = $admin->createUser("Олег Новиков", "oleg@mail.ru");
$user3 = $admin->createUser("Мария Иванова", "maria@mail.ru");

echo "<h2>Созданные пользователи:</h2>";
$user1->show();
$user2->show();
$user3->show();


echo "<h2>Данные пользователя Анна (массив):</h2>";
print_r($admin->getUserData($user1));

echo "<h2>Данные пользователя Олег (массив):</h2>";
print_r($admin->getUserData($user2));


echo "<h2>Все пользователи в одном массиве:</h2>";
$allUsers = [$user1, $user2, $user3];
$allData = [];

foreach($allUsers as $user) {
    $allData[] = $admin->getUserData($user);
}

print_r($allData);
?>