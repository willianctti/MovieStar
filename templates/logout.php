<?php

    require_once("header.php");

    if($userDao) {
        $userDao->destroyToken();
    }