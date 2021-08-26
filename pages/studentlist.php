<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('../include/mata.php');
    ?>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "smarxieu_admin";
    $password = ",Sh.9(co6pDN";
    $dbname = "smarxieu_agent_portal";
    $tablename = 'students';
    $data;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $conn->query("SELECT * FROM $tablename")->fetchAll();

        $conn = null;
    } catch (PDOException $e) {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        $conn = null;
        exit(json_encode(array('code' => 1337, "message" => $sql . "<br>" . $e->getMessage())));
    }

    ?>

    <section class="student-table">
        <div class="table-heading">
            <h3 class='heading__h3'>Student List</h3>
            <a href="/pages/studentinfo.php" class='btn btn-info'>Go to Form</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Courses</th>
                    <th scope="col">Institute</th>
                    <th scope="col">Targeted City</th>
                    <th scope="col">App Status</th>
                    <th scope="col">Offer Received</th>
                    <th scope="col">COE Received</th>
                    <th scope="col">Tutionfees </th>
                    <th scope="col">Deposited</th>
                </tr>
            </thead>
            <tbody>


                <?php

                foreach ($data as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['_id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['courses'] . '</td>';
                    echo '<td>' . $row['institute'] . '</td>';
                    echo '<td>' . $row['targeted_city'] . '</td>';
                    echo '<td>' . $row['app_status'] . '</td>';
                    echo '<td>' . ($row['offer_received'] ? 'Yes' : 'No') . '</td>';
                    echo '<td>' . ($row['coe_received'] ? 'Yes' : 'No') . '</td>';
                    echo '<td>' . $row['tut_amount'] . $row['tut_currency'] . '</td>';
                    echo '<td>' . $row['dep_amount'] . $row['dep_currency'] . '</td>';
                    echo '</tr>';
                }
                ?>

            </tbody>
        </table>

    </section>


    <button class="btn__top"><i class="fas fa-chevron-up"></i></button>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/index.js"></script>
    <script>

    </script>

</body>

</html>