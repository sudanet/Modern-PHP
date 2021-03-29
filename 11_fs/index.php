<?php
// Magic constants
// echo __DIR__;
// echo '<br/>';
// echo __FILE__;
// echo '<br/>';
// echo __LINE__;
// Create directory
// mkdir('abdalla');
// Rename directory
// rename('test', 'abda');
// Delete directory
// rmdir('abda');
// Read files and folders inside directory
echo "<pre>";
print_r(scandir('../'));
echo "</pre>";
// echo file_get_contents('lorem.txt');

// file_get_contents, file_put_contents
file_put_contents('Some.txt', 'abdalla');
// file_get_contents from URL
$fileJson =  file_get_contents('https://jsonplaceholder.typicode.com/users');
echo "<pre>";
var_dump(json_decode($fileJson, true));
echo "</pre>";
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file