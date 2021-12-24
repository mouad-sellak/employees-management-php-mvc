<?php
if (isset($_COOKIE['success'])) {
    echo '<div class="alert alert-success col-md-6 mx-auto mt-4">' . $_COOKIE['success'] . '</div>';
}
if (isset($_COOKIE['error'])) {
    echo '<div class="alert alert-danger col-md-6 mx-auto mt-4">' . $_COOKIE['error'] . '</div>';
}
if (isset($_COOKIE['info'])) {
    echo '<div class="alert alert-info col-md-6 mx-auto mt-4">' . $_COOKIE['info '] . '</div>';
}
