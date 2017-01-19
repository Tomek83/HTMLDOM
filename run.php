#!/usr/bin/php
<?php

require_once 'lib/simple_html_dom.inc.php';
require_once 'config.inc.php';

$__p_html=file_get_contents('source_html.txt') or die();

$__html=str_get_html($__p_html);

if (!$__html) die();

$__art=array_shift($__html->find('div#art'));

if ($__art) {
	foreach($__art->find('table,script,li') as $__p) {
		$__p->remove();
	}
	print $__art->innertext;
}

$__html->clear();

unset($__html);

?>
