<?php

session_start();

session_unset();
session_destroy();

heder('location: index.php');

