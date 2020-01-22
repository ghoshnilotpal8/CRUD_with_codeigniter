<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>
<body>
    <table>
        <?php
            foreach($data as $row){
                ?>
                <tr>
                <td><?php echo $row->candidate_name; ?></td>
                <td><?php echo $row->father_name; ?></td>
                <td><?php echo $row->mother_name; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->district; ?></td>
                <td><?php echo $row->pin; ?></td>
                <td><?php echo $row->mobile_no; ?></td>
                <td><a href="delete/?id=<?php echo $row->id; ?>">Delete</a>
                <a href="edit/?id=<?php echo $row->id; ?>">Edit</a></td>
                </tr>
            <?php    
            }
            ?>
    </table>
</body>
</html>