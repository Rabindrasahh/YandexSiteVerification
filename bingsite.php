<?php

// url for token   https://oauth.yandex.ru/authorize?response_type=token&client_id=<application ID>

//get user-id----------------------------------------------------------------------------
// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, 'https://api.webmaster.yandex.net/v4/user');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


// $headers = array();
// $headers[] = 'Authorization: OAuth AQAAAABb8Im-AAeYLlyOf6DNgUejp92eu2AReBo';
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// $result = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }
// echo ($result);
// curl_close($ch);
// userid = 1542490558


//get host-id  https://api.webmaster.yandex.net/v4/user/{user-id}/hosts-------------------------------------


// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, 'https://api.webmaster.yandex.net/v4/user/1542490558/hosts');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


// $headers = array();
// $headers[] = 'Authorization: OAuth AQAAAABb8Im-AAeYLlyOf6DNgUejp92eu2AReBo';
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// $result = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }
// curl_close($ch);

// // host-id  https:moduleszone.com:443
// // verification-    https://api.webmaster.yandex.net/v4/user/{user-id}/hosts/{host-id}/verification--------------------

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, 'https://api.webmaster.yandex.net/v4/user/1542490558/hosts/https:moduleszone.com:443/verification');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


// $headers = array();
// $headers[] = 'Authorization: OAuth AQAAAABb8Im-AAeYLlyOf6DNgUejp92eu2AReBo';
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// $result = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }
// curl_close($ch);

// print_r($result);
//  https://api.webmaster.yandex.net/v4/user/{user-id}/hosts/{host-id}/links/external/samples
//  ? [offset=<int32>]
//  & [limit=<int32>]


https: //api.webmaster.yandex.net/v4/user/12345678/hosts/https:example.com:443/turbo/uploadAddress?mode=PRODUCTION
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.webmaster.yandex.net/v4/user/1542490558/hosts/https:moduleszone.com:443/verification');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: OAuth AQAAAABb8Im-AAeYLlyOf6DNgUejp92eu2AReBo';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

print_r($result);




for ($count = 1; $count < 100; $count++) {
    $squared = $count * $count;
    print($count . " squared is" . "      " . $squared . "   " . "\n");
    echo "<br>";
}
function missing_number($num_list)
{
    // construct a new array
    $new_arr = range($num_list[0], max($num_list));
    // use array_diff to find the missing elements 
    return array_diff($new_arr, $num_list);
}
print_r(missing_number(array(1, 2, 3, 6, 7, 8)));
print_r(missing_number(array(10, 11, 12, 14, 15, 16, 17)));
?>
Array ( [3] => 4 [4] => 5 ) Array ( [3] => 13 ) ?>

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />

    <?php //echo $yendexMeta; 
    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="5ErBRSndu4KvcRXwlfR6Nq2G2n_Dcs52ldzmS6lDDwE" />
    <meta name="msvalidate.01" content="F3041BE9125149C5D69C5FBB20B947D5" />
    <link rel="icon" type="image/x-icon" href="assets/img/fav.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


</body>

</html>


<!-- https://api.webmaster.yandex.net/
API requests can contain two types of parameters:

Path parameters — Parameters that are part of the resource URL.
Query parameters — Parameters added to the resource URL after the ? character.

To get started with the Yandex.Webmaster API, the partner company must make an agreement with Yandex in the prescribed form and be assigned a client_id in the Yandex authorization system (oauth.yandex.com). The API can't be used without a client_id .

When registering a new partner account on the oauth.yandex.com server, you need the following data:

Application name — The name to show to users when they request access to their personal data.
Access to operations (these currently include adding the site and receiving information about the site).
Client application icon.
Client application link.
Callback URI — Link to the page to redirect the user to after they confirm access to their data. Available when the platform type is selected. -->

<!-- <script>
    var m = document.createElement('meta');
    m.name = 'description';
    m.content = 'This tutorial has some helpful information for you, if you want to track how many hits come from browsers where JavaScript has been disabled.';
    document.head.appendChild(m);
</script> -->