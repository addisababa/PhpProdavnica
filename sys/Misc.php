<?php
final class Misc{
    public static function redirect($link){
        ob_clean();
        header("Location: " . Configuration::BASE_URL . $link);
        exit;
    }
}