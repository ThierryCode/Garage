<?php
require_once "library/Autoload.php";
\Autoload::register();

if (isset($_GET['action'])) {
    if ($_GET['action'] === "insert_pers") {
        $res = new \controller\Personne();
        $res->insert();
    } else if ($_GET['action'] === 'show_pers') {
        $res = new \controller\Personne();
        $res->show();
    } else if ($_GET['action'] === 'delete_pers') {
        $res = new \controller\Personne();
        $res->delete();
    } else if ($_GET['action'] === 'update_pers') {
        $res = new \controller\Personne();
        $res->update($edit);
    }
}
if (isset($_GET['action'])) {
    if ($_GET['action'] === "insert_cars") {
        $res = new \controller\Auto();
        $res->insert();
    } else if ($_GET['action'] === 'show_cars') {
        $res = new \controller\Auto();
        $res->show();
    }
}
