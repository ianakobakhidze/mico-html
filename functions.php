<?php

// link item (header contact links)
function linkItem($link, $icon, $text) {
    echo "<a href='{$link}'>
            <i class='{$icon}'></i>
            <span>{$text}</span>
          </a>";
}

// navigation item
function navItem($title, $link) {
    echo "<li class='nav-item'>
            <a class='nav-link'  href='{$link}' target='_blank'>{$title}</a>
          </li>";
}

// image item
function imageItem($src) {
    echo "<img src='{$src}' alt=''>";
}

function renderTitle($title) {
    echo $title;
}

function renderInput($input) {
    $class = isset($input['class']) ? $input['class'] : '';

    echo "<input 
            type='{$input['type']}' 
            placeholder='{$input['placeholder']}' 
            class='$class'
            required
          />";
}

function renderButton($text) {
    echo $text;
}

function renderImage($src, $alt = '') {
    echo "<img src='$src' alt='$alt'>";
}

function renderText($text) {
    echo $text;
}

function renderLink($href, $text) {
    echo "<a href='$href'>$text</a>";
}

?>
