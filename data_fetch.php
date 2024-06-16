<?php
include ('dbcon.php');

$limit = 6 ;

$pageNo = '';
if(isset($_POST['page_no'])) {
    $pageNo = $_POST['page_no'];
}else{
    $pageNo = 1;
}

$offset = ($pageNo-1) * $limit;


$query = "SELECT * FROM `get_users_data` LIMIT $offset,$limit ";
$result = mysqli_query($conn,$query);

$output = '';

$totalRecord = mysqli_num_rows($result);

if($totalRecord > 0) {
    $output .= '<thead class="table-dark">
                        <tr id="trowHead">
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>';
                        
        while($row=mysqli_fetch_assoc($result)) {

            $output .="<tr id='trowData'>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                    </tr>";

        }
                
        $qry = "SELECT * FROM `get_users_data`";
        $res = mysqli_query($conn,$qry);
        $totalNumberRecord = mysqli_num_rows($res);
        $totalPages = ceil($totalNumberRecord/$limit);


        $output .='<tr id="loadPageno">
                            <td colspan=3>';
                            for($i=1; $i<= $totalPages;$i++) {
                                if($i == $pageNo) {
                                    $class= "active";
                                }else {
                                    $class= "";
                                }
                                $output .='<a id="'.$i.'" class="btn btn-primary mx-1 '.$class.'" href="">'.$i.'</a>';
                            }
        $output .='</td>
                </tr>
            </tbody>';
}

echo $output;


?>