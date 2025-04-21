<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$no=1;
$fname="gunasingham";
$name="priyanghan";
$grade=12;
?>

<table border="1">
 
  <tr>
    <th colspan="2">Company</th>
  
  </tr>

  <tr>
    <td>student No</td>
     <td><?php echo"$no"?></td>
</tr>
 
 <tr>
    <td>Father name</td>
    <td><?php echo"$fname";?></td>
</tr>

 <tr>
    <td>student Name</td>
    <td><?php echo"$name";?></td>
  </tr>

 <tr>
  <td>Grade</td>
  <td><?php echo"$grade";?></td>
  </tr>
 
    
 </tr>

</table>

....................................


<?php
$no=1;
$fname="gunasingham";
$name="priyanghan";
$grade=12;
 
echo"<table border=\"1\">
 
  <tr>
    <th colspan=\"2\">Company</th>
  
  </tr>

  <tr>
    <td>student No</td>
     <td> $no </td>
</tr>
 
 <tr>
    <td>Father name</td>
    <td>$fname</td>
</tr>

 <tr>
    <td>student Name</td>
    <td> $name </td>
  </tr>

 <tr>
  <td>Grade</td>
  <td> $grade </td>
  </tr>
 
    
 </tr>

</table>"
?>


....................................

<?php
$no=1;
$fname="gunasingham";
$name="priyanghan";
$grade=12;
 
echo'<table border="1">
 
  <tr>
    <th colspan="2">Company</th>
  
  </tr>

  <tr>
    <td>student No</td>
     <td> '.$no.' </td>
</tr>
 
 <tr>
    <td>Father name</td>
    <td>'.$fname.'</td>
</tr>

 <tr>
    <td>student Name</td>
    <td> '.$name.' </td>
  </tr>

 <tr>
  <td>Grade</td>
  <td> '.$grade.' </td>
  </tr>
 
    
 </tr>

</table>'
?>
</body>
</html>