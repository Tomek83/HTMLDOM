#!/usr/bin/php
<?php

require_once 'lib/simple_html_dom.php';
require_once 'config.php';

$__p_html = file_get_contents('source_html.txt') or die();

$__html = str_get_html($__p_html);

if (!$__html) die();

$__art = array_shift($__html->find('div#art'));

if ($__art) {

    foreach ($__art->find('table,script,li') as $tag) {
        $tag->remove();
    }

    print $__art->innertext . "\n";
}

$__html->clear();

unset($__html);