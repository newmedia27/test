<?php
require_once ('Form.php');
require_once ('File.php');
require_once ('EchoDate.php');

$form = new Form($_POST);
$name = $form->getName();
$userName = $form->getUserName();
$email = $form->getEmail();
$text = $form->getText();

$file = new File($_FILES);

$type = $file->typeFile($_FILES['userFile']['name']);
$filePut = $file->getPut($file->name($type));

$db = new PDO('mysql:host=localhost;dbname=test_work', 'root', '');

if (isset($_POST['submit'])) {
    if ($form->userValidation($form->getName()) && $form->userValidation($form->getUserName()) && $form->mailValidation()) {
        move_uploaded_file($_FILES['userFile']['tmp_name'], 'upload/' . $file->name($type));
        $sql = "INSERT INTO test(`name`,`user_name`,`email`,`text`,`file`)VALUES ('$name','$userName', '$email', '$text','$filePut')";
        $query = $db->query($sql);
        unset($_POST['name']);
        unset($_POST['userName']);
        unset($_POST['mail']);

    } else {
        $err = 'Недопустимый ввод';
    }
}

/**
 * task 2
 */
$echoDate = new EchoDate($_POST);

$from = $echoDate->getFrom();
$to = $echoDate->getTo();

if (isset($_POST['btn'])) {
    $sql = "SELECT * FROM test WHERE `date` BETWEEN '$from' AND '$to'";
    $query = $db->query($sql);
    function table($query)
    {
        while ($result = $query->FETCH(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            foreach ($result as $value) {
                echo '<td>';
                echo $value;
                echo '</td>';
            }
            echo '</tr>';
        }
    }
}