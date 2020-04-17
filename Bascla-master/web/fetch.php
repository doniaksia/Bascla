<?php

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=baskla', 'root', '');

$query = "
SELECT * FROM velovendre where verif='0' ORDER BY id DESC
";


$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $rating = count_rating($row['id'], $connect);
 $color = '';
 $output .= '
 <table  >

 <h3 class="text-primary">'.$row['marque'].'</h3>
 <ul class="list-inline" data-rating="'.$rating.'" title="Average Rating - '.$rating.'">
 ';
 
 for($count=1; $count<=5; $count++)
 {
  if($count <= $rating)
  {
   $color = 'color:#ffcc00;';
  }
  else
  {
   $color = 'color:#ccc;';
  }
  $output .= '<li title="'.$count.'" id="'.$row['id'].'-'.$count.'" data-index="'.$count.'"  data-business_id="'.$row['id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; '.$color.' font-size:16px;">&#9733;</li>';
 }
 $output .= '
 </ul>
 <tr>
 <td>
 <p>'.$row["prix"].'</p>
 <label style="text-danger">'.$row["description"].'</label>
</td>
<td>
&nbsp;&nbsp;
  <img src=images/'.$row["Path_photo"].' alt="" height="200" width="200"/></td>
 </tr>
 <hr />
 
 </table>
 <br>
 <br>
 <br>
 <br>
 <br>
 ';
}
echo $output;

function count_rating($business_id, $connect)
{
 $output = 0;
 $query = "SELECT AVG(rating) as rating FROM rating WHERE business_id = '".$business_id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output = round($row["rating"]);
  }
 }
 return $output;
}


?>