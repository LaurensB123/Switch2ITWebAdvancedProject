<html>
<head>
    <title>Insert Update Delete Data using Codeigniter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <h3>Contacten Lijst</h3><br />
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            <?php
            if($fetch_data->num_rows() > 0)
            {
                foreach($fetch_data->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $row->ID; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->name; ?></td>

                    </tr>
                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                    <td colspan="5">No Data Found</td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>