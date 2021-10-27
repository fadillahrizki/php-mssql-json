<?php

require_once 'functions.php';

if(isset($_GET['table'])){
    print_r(getAllData($_GET['table']));
}