<?php
class read{
    public function all_rows($conn)
    {
        if($conn)
        {
            $records = array();
            $read_query = "SELECT * FROM `department_details`;";
            $rows = mysqli_query( $conn, $read_query );
            if (mysqli_num_rows( $rows ) >= 0) {
                while( $a_row = mysqli_fetch_assoc( $rows ) ) {
                    $records[] = $a_row;
                }
            }
            else{
                die("NO Record found");
            }
            return $records;
        }
        else{
            die("Connection not established");
        }
    }

}

$conn = mysqli_connect("localhost", "root", "", "employee");
$read = new read();
$records = $read->all_rows($conn);