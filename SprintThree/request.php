<?php

/* confirmation.php

 * Gets data from apply.php

 * 10/26/2020

 */



// Turn on error reporting

ini_set('display_errors', 1);

error_reporting(E_ALL);


//var_dump($cnxn);
include ('head.html');
include ('dbcreds.php');
?>

<body>

<div class="container" id="main">
    <h5 id="text"> <a href="index.html"> Home</a> </h5>
    <h3>Request Summary</h3>
    <br>
    <table id="request-table" class="display table-responsive" style="width: 100%">
        <thead>
        <tr>
            <td>Request ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Needs</td>
            <td>TimeStamp</td>
        </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM `request` ORDER BY `request_date` DESC";
        $result = mysqli_query($cnxn, $sql);

        foreach ($result as $row) {
            //var_dump($row);
            $request_id = $row['request_id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $needs = $row['needs'];
            $request_date = date("M d, Y g:i a", strtotime($row ['request_date']));
            echo "<tr>";
            echo "<td> $request_id </td>";
            echo "<td> $name </td>";
            echo "<td> $email </td>";
            echo "<td> $phone </td>";
            echo "<td> $needs </td>";
            echo "<td> $request_date </td>";
            echo "</tr>";
        }

        ?>
        </tbody>
    </table>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<script>

 //  ordering table desc

     $('#request-table').DataTable( {
         "order": [[ 5, "desc" ]]


     } );

</script>

</body>

</html>