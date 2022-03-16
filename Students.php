<?php

include 'Connection.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$num_per_page = 03;
$start_from = ($page - 1) * 03;

$query = "select * from student limit $start_from,$num_per_page";
$result = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="book.png" />
    <link rel="stylesheet" href="style.css">
    <script src="sweetalert.min.js"></script>
    <title>Students</title>
</head>

<body class="background">

    <div class="container-fluid mt-5 mb-5">

        <h2 class="text-center mb-3"><b>Applied Students</b></h2>

        <div class="table-responsive table-striped thead-dark table-bordered table-hover table-secondary text-center shadow">
            <table class="table">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">SL no</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">University or Institute Name</th>
                        <th scope="col">Department or Subject</th>
                        <th scope="col">Year & Semester</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Package</th>
                        <th scope="col">Laptop Status</th>
                        <th scope="col">Government Project Status</th>
                        <th scope="col">Time</th>
                        <th scope="col">Project</th>
                        <th scope="col">RND</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <?php
                $j=1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr scope="row">
                        <td><?php echo $j++; ?></td>
                        <td><?php echo $row['Fname']; ?></td>
                        <td><?php echo $row['Lname']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['university']; ?></td>
                        <td><?php echo $row['subj']; ?></td>
                        <td><?php echo $row['semster']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['package']; ?></td>
                        <td><?php echo $row['device']; ?></td>
                        <td><?php echo $row['Gproject']; ?></td>
                        <td><?php echo $row['classtime']; ?></td>
                        <td><?php echo $row['project']; ?></td>
                        <td><?php echo $row['rnd']; ?></td>

                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>">
                                Edit
                            </button>
                            <a onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};" class="btn btn-danger mt-3" href="form_delete.php? id=<?php echo $row['id'] ?>">Delete</a>
                        </td>




                        <!-- Button trigger modal -->
                        <div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">Edit</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="form_edit.php" method="post" enctype="multipart/form-data">
                                            <?php

                                            $id = $row['id'];
                                            $select_query = "SELECT * FROM student where id='$id'";
                                            $result_edit = mysqli_query($conn, $select_query);
                                            $result_edit_row = mysqli_fetch_row($result_edit);



                                            ?>
                                            <input id="id" type="hidden" name="id" value="<?php echo $result_edit_row[0] ?>">
                                            <div class="form-group">
                                                <label><b>First Name <sup class="star text-danger">*</sup></b></label>
                                                <input type="Text" class="form-control Border" id="Fname" name="Fname" placeholder="Enter First Name" value="<?php echo $result_edit_row[1] ?>" required>
                                                <br>


                                                <label for="Lname"><b>Last Name <sup class="star text-danger">*</sup></b></label>
                                                <input type="Text" class="form-control Border" id="Lname" name="Lname" placeholder="Enter Last Name" value="<?php echo $result_edit_row[2] ?>" required>
                                                <br>

                                                <label><b>Gender <sup class="star text-danger">*</sup></b></label>
                                                <input type="text" class="form-control Border" name="gender" value="<?php echo $result_edit_row[3] ?>" required>
                                                <br>

                                                <label for="University"><b>University or Institute Name <sup class="star text-danger">*</sup></b> </label>
                                                <input type="Text" class="form-control Border" id="University" name="university" placeholder="University or Institute Name" value="<?php echo $result_edit_row[4] ?>" required>
                                                <br>

                                                <label for="Department"><b>Department or Subject <sup class="star text-danger">*</sup></b></label>
                                                <input type="Text" class="form-control Border" id="Department" name="subject" placeholder="Example: CSE" value="<?php echo $result_edit_row[5] ?>" required>
                                                <br>

                                                <label for="Semester"><b>Year & Semester <sup class="star text-danger">*</sup></b></label>
                                                <input type="Text" class="form-control Border" id="Semester" name="year" placeholder="Example: 3rd year & 6th semster" value="<?php echo $result_edit_row[6] ?>" required>
                                                <br>

                                                <label for="Phone Number"><b>Phone Number<sup class="star text-danger">*</sup></b></label>
                                                <input type="Text" class="form-control Border" id="Phone Number" name="phone" placeholder="Phone Number" value="<?php echo $result_edit_row[7] ?>" required>
                                                <br>

                                                <label for="Package"><b>Choose Package (Can Select any one) <sup class="star text-danger">*</sup></b></label>
                                                <input type="text" class="form-control Border" id="Package" name="Package" value="<?php echo $result_edit_row[8] ?>" required>
                                                <br>

                                                <label><b>Do you have personal Laptop ? <sup class="star text-danger">*</sup></b></label><br>
                                                <input type="text" class="form-control Border" id="Laptop" name="Laptop" value="<?php echo $result_edit_row[9] ?>" required>
                                                 <br>



                                                <label><b>Have you completed or participate any Government project before ? <sup class="star text-danger">*</sup></b></label><br>
                                                <input type="text" class="form-control Border" id="project" name="project" value="<?php echo $result_edit_row[10] ?>" required>
                                                <br>


                                                <label><b>Your suitable Time zone (Select Any Two)<sup class="star text-danger">*</sup></b></label> <br>
                                                <input type="text" class="form-control Border" id="time" name="time" value="<?php echo $result_edit_row[11] ?>">
                                                <br>

                                                <label><b>Which project you participated?<sup class="star text-danger">*</sup></b></label> <br>
                                                <input type="text" class="form-control Border" id="Participation" name="Participation" value="<?php echo $result_edit_row[12] ?>">
                                                <br>

                                                <label><b>After achieved scholarship which RND area you Interested to join? <sup class="star text-danger">*</sup></b></label> <br>

                                                <input type="text" class="form-control Border" id="rnd" name="rnd" value="<?php echo $result_edit_row[13] ?>">

                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button onclick="confirm('Do you want to save changes?')" type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </tr>
                <?php
                }
                ?>
            </table>

            <?php

            $pr_query  = "select * from student";
            $pr_result = mysqli_query($conn, $pr_query);
            $total_record = mysqli_num_rows($pr_result);

            $total_pages = ceil($total_record / $num_per_page);


            if ($page > 1) {
                echo "<a href='Students.php?page=" . ($page - 1) . "' class='btn btn-danger mx-1 mb-5'>Previous</a>";
            }

            for ($i = 1; $i < $total_pages; $i++) {
                echo "<a href='Students.php?page=" . $i . "'class='btn btn-primary mx-1 mb-5'>" . $i . "</a>";
            }

            if ($i > $page) {
                echo "<a href='Students.php?page=" . ($page + 1) . "' class='btn btn-danger mx-1 mb-5'>Next</a>";
            }

            ?>
        </div>
    </div>




    <footer class="bg-light text-center text-lg">
        <!-- Copyright -->
        <div class="text-center p-3 text-light bg-dark">
            © 2021 Copyright:
            <a class="text-light" href="https://stamasoft.com/">stamasoft.com</a>
            <a href="contact.php">Contact us</a>
        </div>
        <!-- Copyright -->

        </div>

</body>

</html>