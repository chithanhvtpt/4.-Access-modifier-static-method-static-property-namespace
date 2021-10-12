<?php
include_once 'models/User.php';
$user1 = new User('Thanh', 'chithanhvtpt@gmail.com', 1);
$user2 = new User('Dung', 'dl0973129842@gmail.com', 2);
$user3 = new User('The', 'dl0352359396@gmail.com', 3);

echo $user1->getInfo();
echo $user2->getInfo();
echo $user3->getInfo();