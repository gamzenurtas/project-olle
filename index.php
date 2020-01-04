<?php 
include "config.php";
?>
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jquery Türkçe Tarih</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<!--Datatable Linkleri-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/r-2.1.1/rg-1.0.0/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/r-2.1.1/rg-1.0.0/datatables.min.js"></script>

</head>
<body>


<table id="myTable" class="table table-responsive">
    <thead>
    <tr>
        <th>Player</th>
        <th>Team</th>
        <th>Date</th>
    </tr>
    </thead>

	
    <tbody>
		  <?php 
                 
        $emp_query = "SELECT * FROM player_stats ";

        $employeesRecords = mysqli_query($con,$emp_query);

        // Check records found or not
        if(mysqli_num_rows($employeesRecords) > 0){
          while($b = mysqli_fetch_assoc($employeesRecords)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $Player = $b['Player'];
                    $Team = $b['Tm'];
                    $Date = $b['match_Date'];
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "
				<tr>
                    <td>$Player</td>
                    <td>$Team</td>
                    <td>$Date</td>
                </tr>";
                     
                }
		}
                 
   ?>	
    </tbody>

</table>


</body>
 <script>
    $('#myTable').DataTable();
</script>
</html>