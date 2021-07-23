<?php require_once "inc/header.php" ?>


<div class="container-fluid pt-5">

    <h2 class="text-center">Data Table | <a href="#" class="btn btn-primary m-2">Create More</a></h2>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-hover ">

            <thead>
                <tr>
                    <th scope="col">SL. No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM posts";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {

                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                        <tr class="table-success ">
                            <th scope="row"><?php echo "$row[id]"; ?></th>
                            <td><?php echo "$row[title]"; ?></td>
                            <td><?php echo "$row[description]"; ?></td>
                            <td><?php echo "$row[category]"; ?></td>
                            <td>

                                <a href=inc/view.php?id=<?php echo "$row[id]"; ?> class="btn btn-info btn-sm" role="button">view</a>
                                <a href=inc/update.php?id=<?php echo "$row[id]"; ?> class="btn btn-warning btn-sm" role="button">Update</a>
                                <a href=inc/delete.php?id=<?php echo "$row[id]"; ?> class="btn btn-danger btn-sm" role="button">Delete</a>

                            </td>
                        </tr>
                <?php
                    }
                }

                ?>



            </tbody>
        </table>
    </div>
</div>

<?php require_once 'inc/header.php'; ?>