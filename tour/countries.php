<?php
$countries = "US";
$page = "US.html";
$price = $_POST['price'];
$star = $_POST['star'];
// echo $_POST["formCountry"];
if (isset($_POST['formSubmit'])) {
    $countries = $_POST['formCountry'];
    switch ($countries) {
        case "US":$page = "US.php";
            break;
        case "UK":$page = "UK.php";
            break;
        case "France":$page = "France.html"; //немає html сторінки
            break;
        case "Mexico":$page = "Mexico.html";
            break;
        case "Russia":$page = "Russia.html";
            break;
        case "Japan":$page = "Japan.html";
            break;
        default:echo ("Error!");exit();
            break;
    }
    header("Location: $page?star=$star&price=$price");
    exit();
}