
<?php
include("connection4.php");


if(!empty($_POST['delete']) && !empty($_POST['customer_id'])){
    $query3 = "DELETE FROM customers WHERE customer_id='".$_POST['customer_id']."' ";
    if (mysqli_query($conn, $query3)) {
        echo "Record deleted successfully !";
    } else {
        // Display an error message if unable to delete the record
       echo "Error deleting record: " . $conn->error;
    }
}
?>