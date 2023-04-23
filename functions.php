<?php 
function delete() {
    $json_data = file_get_contents('data/users.json');
    $users = json_decode($json_data, true);
    unset($users[$_GET['key']]);

    $json_data = json_encode($users);
    $fp = fopen('data/users.json', 'w');
    fwrite($fp, $json_data);
    fclose($fp);

    ob_start();
    include('template-parts/ajax/users-content.php');
    return;
}

function saveEdit() {
    $json_data = file_get_contents('data/users.json');
    $users = json_decode($json_data, true);

    $users[$_GET['key']]['name'] = $_GET['userData']['name'];
    $users[$_GET['key']]['username'] = $_GET['userData']['username'];
    $users[$_GET['key']]['email'] = $_GET['userData']['email'];
    $users[$_GET['key']]['street'] = $_GET['userData']['street'];
    $users[$_GET['key']]['suite'] = $_GET['userData']['suite'];
    $users[$_GET['key']]['city'] = $_GET['userData']['city'];
    $users[$_GET['key']]['zipcode'] = $_GET['userData']['zipcode'];
    $users[$_GET['key']]['lat'] = $_GET['userData']['lat'];
    $users[$_GET['key']]['lng'] = $_GET['userData']['lng'];
    $users[$_GET['key']]['phone'] = $_GET['userData']['phone'];
    $users[$_GET['key']]['website'] = $_GET['userData']['website'];
    $users[$_GET['key']]['company-name'] = $_GET['userData']['company-name'];
    $users[$_GET['key']]['catch-phrase'] = $_GET['userData']['catch-phrase'];
    $users[$_GET['key']]['bs'] = $_GET['userData']['bs'];

    $json_data = json_encode($users);
    $fp = fopen('data/users.json', 'w');
    fwrite($fp, $json_data);
    fclose($fp);

    ob_start();
    include('template-parts/ajax/users-content.php');
    return;
}

if(isset($_GET['function'])) {
    if($_GET['function'] == 'delete') {
        delete();
    } elseif($_GET['function'] == 'save-edit') {
        saveEdit();
    }
}
?>
