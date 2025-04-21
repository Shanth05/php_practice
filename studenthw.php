<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    tr {
      text-align: center;
    }
  </style>

</head>

<body>

  <?php
  $no = 1;
  $fname = "Anil";
  $name = "Kunchu";
  $grade = 12;
  $markMaths = 90;
  $markScience = 68;
  $markEnglish = 40;
  $markTamil = 75;
  $img="images/anil.png";
  $im="images/students/anil.png";

  function mark($marks)
  {

    
    if ($marks >= 75) {

      echo "A";
    } elseif ($marks >= 65 && $marks <=75) {
      echo "B";
    }
    elseif ($marks >=45 && $marks <=55){
      echo"C";
    }
    elseif($marks >=35 && $marks <=45){
      echo "D";
    }
    else{
      echo "W";
    }
  }
  ?>

  <table border="1" height="500px" width="500px" >

    <tr>
      <th colspan="3">Company</th>

    </tr>

    <tr>

      <td rowspan="4"><img src=<?php echo $img ?> alt="" height="180px" width="180px">  </td>
      <td rowspan="4"><img src=<?php echo $im ?> alt="" height="180px" width="180px">  </td>
      <td>student No</td>
      <td><?php echo "$no" ?></td>

    </tr>

    <tr>

      <td>Father name</td>
      <td><?php echo "$fname"; ?></td>
    </tr>

    <tr>

      <td>student Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>

    <tr>

      <td>Grade</td>
      <td><?php echo "$grade"; ?></td>
    </tr>

    <tr>
      <th colspan="3">MARKS</th>
    </tr>
    <tr>
      <th>Subject</th>
      <th>Mark</th>
      <th>Results</th>
    </tr>

    <tr>
      <td>Maths</td>
      <td><?php echo "$markMaths"; ?></td>
      <td><?php  mark($markMaths) ?></td>
    </tr>

    <tr>
      <td>Science</td>
      <td><?php echo "$markScience"; ?></td>
      <td><?php mark($markScience) ?></td>
    </tr>

    <tr>
      <td>English</td>
      <td><?php echo "$markEnglish"; ?></td>
      <td><?php mark($markEnglish)  ?></td>
    </tr>

    <tr>
      <td>Tamil</td>
      <td><?php echo "$markTamil"; ?></td>
      <td><?php mark($markTamil) ?></td>
    </tr>


  </table>
 
 
</body>

</html>