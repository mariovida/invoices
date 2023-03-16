<?php
session_start();
include 'db_connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
    <title>Clients | Company</title>
</head>
<body>
    <?php
        include('elements/sidebar.php');
    ?>
    <div class="wrapper">
        <div class="wrapper_content">
            <h1>Clients</h1>

            <div class="clients_table_search">
                <input type="text" placeholder="Search by client name..." id="searchInput">
                <button class="add-client-btn">Add New Client</button>
            </div>

            <div class="clients_table">
                <table id="clientTable">
                    <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>VAT Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $result = mysqli_query($dbc, "SELECT * FROM clients");

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['country']."</td>";
                                echo "<td>".$row['vat_number']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("searchInput").addEventListener("keyup", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("clientTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script>
</body>
</html>