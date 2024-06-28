<?php
require_once ".\..\bootstrap.php";
session_start();

$categories = $entityManager->getRepository(Category::class)->findAll();
$entityManager->persist(new Category("Category 1", 1));
$entityManager->flush();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Page</title>
</head>
<body>
    <?php
    foreach ($categories as $category) {
        echo "<h1>" . $category->getName() . "</h1>";
    }
    ?>
</body>
