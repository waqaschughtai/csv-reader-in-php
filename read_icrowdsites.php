<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style>
    td div input {

        width: 100%;

        height: 20px;

    }

    .table .thead-light th {

        color: #fff !important;

        background-color: #867bbf !important;
    }
    td{
        padding-left: 20px;
    }

    

   
</style>


</head>
<body>


<?php
// $file = fopen("3cols_content_marketting.csv","r");
$csv = array_map('str_getcsv', file('websites_list.csv'));

?>
<table>
 <tbody>

 <?php
  // $j = 1; 
  // 	while(! feof($file))
  // {
  	
   
   foreach ($csv as $value)
   {	
 
 ?>
    <tr>
        <td>
            <div class="form-check">

                <input class="form-check-input position-static" name="websites[]" type="checkbox" autocomplete='off' id="blankCheckbox" value="<?php echo $value[0]; ?>" aria-label="...">

            </div>
        </td>
        <?php 
		$str = preg_replace('#^http(s)?://#', '', rtrim($value[0],'/'));
		 // www.google.com <!-- remove http:// and https://  and trim / at the last-->
		?>
        <td><a href="<?php echo $value[0];?>"><?php echo $str;?></a></td> 

        <td><?php  if(isset($value[1]) && $value[1] != '') { echo $value[1]; } ?></td>

        <td><?php if (isset($value[2]) && $value[2] != '') { echo $value[2]; };?></td>

    </tr>

<?php

   } 
   	
  
 // } ?>
</tbody>
 </table>   

<?php
// fclose($file);
?>

</body>
</html>
