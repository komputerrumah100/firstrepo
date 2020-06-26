<?php 
    $path = '/dir1/myfile.php';
    // Return Filename
    echo basename($path);

    // Return Filename without extencion
    echo basename($path,'.php');

    // Return the dir name from path
    echo dirname($path);

    // Check if file/folder exists
    echo file_exists('test.txt');

    // Get Absolute path
    echo realpath('database.json');

    // check to see if file
    echo is_file('test.txt');

    // check if writeable
    echo is_writable('database.json');

    // check if readable
    echo is_readable('database.json');

    // check file size
    echo filesize('database.json');

    // Create a directory (warning when folder already exists)
    // mkdir('coba');

    // Remove a directory if empty (warning when not empty)
    // rmdir('coba');

    // Copy file
    echo copy('test.txt','file2.txt');

    // Rename file
    echo rename('file2.txt','file1.txt');

    // Delete file
    echo unlink('file1.txt');

    // Write from file to string
    echo file_get_contents('test.txt');

    // Write string to file (Replaced)
    echo file_put_contents('test.txt', 'Goodbye bro');

    // Wreite strnig without replaced
    $current = file_get_contents('test.txt');
    $current .= ' Goodbye dude';
    file_put_contents('test.txt',$current);

    // Open File for reading
    $handle = fopen('test.txt','r');
    $data = fread($handle,filesize('test.txt'));
    echo $data . $data .$data;
    fclose($handle);

    // Open file for wriing (Replaced)
    $handle = fopen('test.txt','w');
    $txt = "Ronal L\n";
    fwrite($handle,$txt);
    $txt = "Vera\n";
    fwrite($handle,$txt);
    $txt = "Midah\n";
    fwrite($handle,$txt);
    fclose($handle);

?>


