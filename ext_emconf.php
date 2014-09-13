<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FPDI Library',
	'description' => 'Provides FPDI Library (www.setasign.com/products/fpdi/ / v.1.5.2) for TYPO3 > 6.1',
	'category' => 'misc',
	'author' => 'Heiko Hardt',
	'author_email' => 'heiko.hardt@pixelpark.com',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.1.0-6.2.99',
			'hhdev_fpdf' => '0.1'
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);