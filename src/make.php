<?php

require_once __DIR__ . '/../vendor/autoload.php';

const DOC_DIR = __DIR__ . '/../docs';
const MARKDOWN_FILE = DOC_DIR . '/hello.md';
const HEAD_FILE = DOC_DIR . '/head.html';

use League\CommonMark\CommonMarkConverter;
$converter = new CommonMarkConverter([
    'html_input' => 'strip',
    'allow_unsafe_links' => false,
]);
$head = file_get_contents(HEAD_FILE);
$markdown = file_get_contents(MARKDOWN_FILE);


echo $head;
echo $converter->convert($markdown);
echo "<body></html>";