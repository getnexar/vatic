<?php
    switch($_POST['action'])
    {
        case 'doLabels':
		ini_set('display_errors',1);
		ini_set('display_startup_errors',1);
		error_reporting(-1);
		$result = exec('cd ../..; turkic dump currentvideo --matlab -o /root/vatic/data/output.mat 2>&1; mysqldump -u root --all-databases > data/db.mysql');
		echo $result;
                exit();
      
    }
?>
