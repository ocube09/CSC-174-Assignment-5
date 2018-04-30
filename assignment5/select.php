<?php  
require_once 'config.php';
 $output = '';  
 $sql = "SELECT * FROM survey ORDER BY id DESC";  
 $result = mysqli_query($link, $sql);  
 $output .= '  
      <div class="table-responsive">
        <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="16%">Name</th>  
                     <th width="16%"> Email </th>
                     <th width="16%">Phone Number</th> 
                     <th width="16%">Pet</th> 
                     <th width="16%">Duration</th> 
                     <th width="16%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="email" data-id2="'.$row["id"].'" contenteditable>'.$row["email"].'</td>  
                     <td class="phone" data-id3="'.$row["id"].'" contenteditable>'.$row["phone"].'</td>  
                     <td class="pet" data-id4="'.$row["id"].'" contenteditable>'.$row["pet"].'</td>
                     <td class="year" data-id5="'.$row["id"].'" contenteditable>'.$row["year"].'</td>  
                     <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="email" contenteditable></td> 
                <td id="phone" contenteditable></td> 
                <td id="pet" contenteditable></td> 
                <td id="year" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="name" contenteditable></td>  
          <td id="email" contenteditable></td>  
					<td id="phone" contenteditable></td>
          <td id="pet" contenteditable></td> 
          <td id="year" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>