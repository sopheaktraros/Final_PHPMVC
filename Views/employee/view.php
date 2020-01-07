<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php?action=add_form" class="btn btn-success">Add New</a>
        </div>
    </div>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Province</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        if (isset($data['employee_data'])) {
            $id = 1;
            foreach ($data['employee_data'] as $rows) {

        ?>
                <tbody>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $rows['emp_fname']." ".$rows['emp_lname']; ?></td>
                        <td><?php echo $rows['pro_name']; ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?php echo $rows['id']; ?>">EDIT</a> |
                            <a href="index.php?action=delete&id=<?php echo $rows['id']; ?>" onclick="return confirm('Are you sure you want to delete?');">DELETE</a>
                        </td>
                    </tr>
                </tbody>
        <?php
                $id++;
            }
        }
        ?>
    </table>
</div>