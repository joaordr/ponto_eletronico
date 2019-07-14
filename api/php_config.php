<?php
header('Content-type: application/json; charset=UTF-8');
date_default_timezone_set('America/Sao_Paulo');
if ( ! isset($_SESSION)) {
    session_start();
}