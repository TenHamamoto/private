<?php
$pdo = new PDO(
    'mysql:host=localhost; dbname=mydb; charset=utf8',
    'sysuser',
    'secret'
);
$stmt = $pdo->query('SELECT * FROM members');
$members = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($members);
echo '</pre>';
