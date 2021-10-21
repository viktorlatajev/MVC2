<?php
// $books = array(
//     array("bookname" => "HTML and CSS",
//             "author" => "Jon Duckett",
//             "price"  => "17.19$",
//             "descr"  => "Every day, more and more people want to learn some HTML and CSS. Joining the profess",
//             "image"  => "HTMLandCSS_Duckett.jpg"),
//     array("bookname" => "HTML5",
//             "author" => "Matthew MacDonalnd",
//             "price"  => "27.65$",
//             "descr"  => "HTML5 is more than markup language—it's a collection of several independent web st",
//             "image"  => "HTML5TheMissing_MacDonald.jpg"),
//     array("bookname" => "Head First HTML5 Programming",
//             "author" => "Eric Freeman, Elisabeth Robson",
//             "price"  => "35.35$",
//             "descr"  => "JF;jskjflkdjsl;kJhakHLKHSALkhklfgdshhjkfdshHFJKD fhdsf jkdshkljhfdljks hklfjhdklsfndk",
//             "image"  => "HeadFirstHTML5.jpg"),
//     array("bookname" => "Head First JavaScript Programming",
//             "author" => "Eric Freeman, Elisabeth Robson",
//             "price"  => "37.60$",
//             "descr"  => "LKDFhkldsfk djfd lkjslkfduitruhgfnd,v,cxjfkd xdjf dshjfkljds fdkjsfkjdsl. Fskfjdskljf",
//             "image"  => "HeadFirstJavaScript.jpg"),
//     array("bookname" => "jQuery in Action",
//             "author" => "Bear Bibealt, Yehuda Katz",
//             "price"  => "32.12$",
//             "descr"  => "JSAKL:dl;jd sajd lksaj jdsalkjkjkdjlksja djskjak dlsja djkjf ldskjflkfdl;smcfds cdmjsf",
//             "image"  => "JQueryInAction.jpg"));
// 
$mysqli = new mysqli("localhost", "root", "", "bookshop");

if(mysqli_connect_errno()) {
        print_f('Соединение не установлено');
        exit();
}
$mysqli->set_charset('utf8');

$query = "SELECT * FROM books";

$result = $mysqli->query($query);
// var_dump($result);die;
$books = [];
$books = $result->fetch_all(MYSQLI_ASSOC);
?>