<?php
//	$fileElementName = $_REQUEST['id_file'];
//	$destino = $_REQUEST['destino'];	
//
//	if(!empty($_FILES[$fileElementName]['tmp_name']) || $_FILES[$fileElementName]['tmp_name'] != 'none'){
//		if(move_uploaded_file ($_FILES[$fileElementName]['tmp_name'], $destino))
//		{
//			echo 1;
//		}
//		else
//		{
//			echo 0;
//		}
//        }else{
//            echo 11;
//        }
$fileElementName = $_REQUEST['id_file'];
	$destino = $_REQUEST['destino'];	

	if(!empty($_FILES[$fileElementName]['error']))
	{
		switch($_FILES[$fileElementName]['error'])
		{

			case '1':
				echo 21;
				//echo 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
				break;
			case '2':
				echo 1;
				//echo 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
				break;
			case '3':
				echo 1;
				//echo 'The uploaded file was only partially uploaded';
				break;
			case '4':
				echo 4;
				//echo 'No file was uploaded.';
				break;

			case '6':
				echo 6;
				//echo 'Missing a temporary folder';
				break;
			case '7':
				echo 7;
				//echo 'Failed to write file to disk';
				break;
			case '8':
				echo 8;
				//echo 'File upload stopped by extension';
				break;
			case '999':
			default:
				echo 10;
				//echo 'No error code avaiable';
		}
	}
	elseif(empty($_FILES[$fileElementName]['tmp_name']) || $_FILES[$fileElementName]['tmp_name'] == 'none')
	{
		echo $_FILES[$fileElementName]['tmp_name'];
		//echo 'No file was uploaded..';
	}
	else 
	{
		if(move_uploaded_file ($_FILES[$fileElementName]['tmp_name'], $destino))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
?>
