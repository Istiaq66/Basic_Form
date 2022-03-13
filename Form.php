<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="book.png" />
    <link rel="stylesheet" href="Style.css">
    <script src="sweetalert.min.js"></script>
    <title>Scholarship</title>

</head>

<body class="background">

    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>


    <div class="container mt-5">
        <h2 class="mx-5 px-5 text-center"><b>Scholarship Available ( Android + Flutter + Monetization ) Phase -5</b></h2>
        <form class="row g-3 mt-3" action="save.php" method="post">

            <div class="form-group col-md-6">
                <label for="Fname"><b>First Name <sup class="star text-danger">*</sup></b></label>
                <input type="Text" class="form-control Border" id="Fname" name="Fname" placeholder="Enter First Name" required>
            </div>

            <div class="form-group col-md-6">
                <label for="Lname"><b>Last Name <sup class="star text-danger">*</sup></b></label>
                <input type="Text" class="form-control Border" id="Lname" name="Lname" placeholder="Enter Last Name" required>
            </div>

            <div class="form-group col-md-12">
                <label><b>Gender <sup class="star text-danger">*</sup></b></label> <br>
                <label>Male</label>
                <input type="radio" class="form-check-input" name="gender" value="Male" required>
                <label>Female</label>
                <input type="radio" class="form-check-input" name="gender" value="Female">
            </div>

            <div class="form-group col-md-6">
                <label for="University"><b>University or Institute Name <sup class="star text-danger">*</sup></b> </label>
                <input type="Text" class="form-control Border" id="University" name="university" placeholder="University or Institute Name " required>
            </div>
            <div class="form-group col-md-6">
                <label for="Department"><b>Department or Subject <sup class="star text-danger">*</sup></b></label>
                <input type="Text" class="form-control Border" id="Department" name="subject" placeholder="Example: CSE" required>
            </div>

            <div class="form-group col-md-6">
                <label for="Semester"><b>Year & Semester <sup class="star text-danger">*</sup></b></label>
                <input type="Text" class="form-control Border" id="Semester" name="year" placeholder="Example: 3rd year & 6th semster" required>
            </div>



            <div class="form-group col-md-6">
                <label for="Phone Number"><b>Phone Number<sup class="star text-danger">*</sup></b></label>
                <input type="Text" class="form-control Border" id="Phone Number" name="phone" placeholder="Phone Number" required>
            </div>

            <div class="form-group col-md-12">

                <label for="Package"><b>Choose Package (Can Select any one) <sup class="star text-danger">*</sup></b></label> <br>
                <input type="radio" class="form-check-input" id="Package" name="Package" value="Package - A,(Android+Flutter+Monetization) Visit link to know details" required>

                <label for="Package">Package - A,(Android+Flutter+Monetization) Visit link to know details </label>
                <a href="<a> http://stamasoft.com/lmem_package.html</a>"> http://stamasoft.com/lmem_package.html</a>
                <br>

                <input type="radio" class="form-check-input" id="Package" name="Package" value="Package - B , (Android+Monetization) Visit link to know details">
                <label for="Package">Package - B , (Android+Monetization) Visit link to know details </label>
                <a href="<a> http://stamasoft.com/lmem_package.html</a>"> http://stamasoft.com/lmem_package.html</a>

            </div>
            <div class="form-group col-md-12">
                <label><b>Do you have personal Laptop ? <sup class="star text-danger">*</sup></b></label><br>
                <label for="Laptop">Yes</label>
                <input type="radio" class="form-check-input" id="Laptop" name="Laptop" value="Yes" required>
                <label for="Laptop">No</label>
                <input type="radio" class="form-check-input" id="Laptop" name="Laptop" value="No">
                 <br>
            </div>

            <div class="form-group col-md-12">
                <label><b>Have you completed or participate any Government project before ? <sup class="star text-danger">*</sup></b></label><br>
                <label for="Laptop">Yes</label>
                <input type="radio" class="form-check-input" id="project" name="project" value="Yes" required>
                  <label for="Laptop">No</label>
                <input type="radio" class="form-check-input" id="project" name="project" value="No">
            </div>

            <div class="form-group col-md-12">
                <label><b>Your suitable Time zone (Select Any Two)<sup class="star text-danger">*</sup></b></label> <br>
            </div>
            <div class=" form-group col-md-6 ">
                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Saturday 10 AM - 1 PM</label><br>

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Saturday 3 PM - 6 PM (No seat Available)</label><br>

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Sunday 10 AM - 1 PM</label><br>

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Sunday 3 PM - 6 PM</label><br>

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Monday 10 AM - 1 PM</label><br>

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Monday 3 PM - 6 PM</label><br>


                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Tuesday 10 AM - 1 PM</label><br>

            </div>
            <div class=" form-group col-md-6">

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Tuesday 3 PM - 6 PM</label><br>


                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Wednesday 10 AM - 1 PM</label><br>


                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Wednesday 3 PM - 6 PM</label><br>


                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Thursday 10 AM - 1 PM(No seat Available)</label><br>


                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Thursday 3 PM - 6 PM(No seat Available)</label><br>

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Friday 10 AM - 1 PM(No seat Available)</label><br>

                <input type="checkbox" class="form-check-input" id="time" name="time[]" value="Saturday 10 AM -1PM">
                <label>Friday 3 PM - 6 PM(No seat Available) </label><br>
            </div>


            <div class="form-group col-md-6">
                <label><b>Which project you participated?<sup class="star text-danger">*</sup></b></label> <br>

                <input type="checkbox" class="form-check-input" id="Learning & Earning" name="Participation[]" value="Learning & Earning">
                <label>Learning & Earning</label><br>

                <input type="checkbox" class="form-check-input" id="Freelancer to Entrepreneur" name="Participation[]" value="Freelancer to Entrepreneur">
                <label>Freelancer to Entrepreneur</label><br>

                <input type="checkbox" class="form-check-input" id="LICT (Android,java,web)" name="Participation[]" value="LICT (Android,java,web)">
                <label>LICT (Android,java,web)</label><br>

                <input type="checkbox" class="form-check-input" id="Mobile Apps & Games" name="Participation[]" value="Mobile Apps & Games">
                <label>Mobile Apps & Games</label><br>

                <input type="checkbox" class="form-check-input" id="Apps Monetization, Management and Marketing" name="Participation[]" value="Apps Monetization, Management and Marketing">
                <label>Apps Monetization, Management and Marketing</label><br>

                <input type="checkbox" class="form-check-input" id="UI/UX" name="Participation[]" value="UI/UX">
                <label>UI/UX</label><br>

                <input type="checkbox" class="form-check-input" id="SEIP" name="Participation[]" value="SEIP">
                <label>SEIP</label><br>

                <input type="checkbox" class="form-check-input" id="HI-TECH Park" name="Participation[]" value="HI-TECH Park">
                <label>HI-TECH Park</label><br>

                <input type="checkbox" class="form-check-input" id="Learning & Earning" name="Participation[]" value="Learning & Earning">
                <label>Learning & Earning</label><br>

                <input type="checkbox" class="form-check-input" id="She Power" name="Participation[]" value="She Power">
                <label>She Power</label><br>

                <input type="checkbox" class="form-check-input" id="Sheikh Kamal IT Training & Incubation" name="Participation[]" value="Sheikh Kamal IT Training & Incubation">
                <label>Sheikh Kamal IT Training & Incubation</label><br>

                <input type="checkbox" class="form-check-input" id="Learning & Earning" name="Participation[]" value="None of Above">
                <label>None of Above</label><br>
            </div>

            <div class="form-group col-md-6">
                <label><b>After achieved scholarship which RND area you Interested to join? <sup class="star text-danger">*</sup></b></label> <br>

                <input type="checkbox" class="form-check-input" id="IoT" name="rnd[]" value="IoT">
                <label>IoT</label><br>

                <input type="checkbox" class="form-check-input" id="Mobile Apps" name="rnd[]" value="Mobile Apps">
                <label>Mobile Apps</label><br>

                <input type="checkbox" class="form-check-input" id="BlockChain" name="rnd[]" value="BlockChain">
                <label>BlockChain</label><br>

                <input type="checkbox" class="form-check-input" id="IoT" name="rnd[]" value="Robotics">
                <label>Robotics</label><br>

                <input type="checkbox" class="form-check-input" id="Machine Learning" name="rnd[]" value="Machine Learning">
                <label>Machine Learning</label><br>

                <input type="checkbox" class="form-check-input" id="Other" name="rnd[]" value="Other">
                <label>Other</label><br>
            </div>
            <div class="form-group col-md-5"></div>
            <div class="col-md-2 text-center mb-5">
                <button type="submit" value="Save" name="submit" class="btn btn-primary btn-lg btn-block login">Submit</button>
            </div>



            <?php
            if (isset($_SESSION['status']) && $_SESSION['status'] != '') { ?>

                <script>
                    swal({
                        title: "Good job!",
                        text: "<?php echo $_SESSION['status']; ?>",
                        icon: "success",
                        button: "Close",
                    });
                </script>
            <?php
                unset($_SESSION['status']);
            } else {
            ?>

                <script>
                    swal({
                        title: "OOPS!",
                        text: "<?php echo $_SESSION['status']; ?>",
                        icon: "warning",
                        button: "Close",
                    });
                </script>
            <?php
                unset($_SESSION['status']);
            }
            ?>



        </form>
    </div>



    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 text-light bg-dark">
            © 2021 Copyright:
            <a class="text-light" href="https://stamasoft.com/">stamasoft.com</a>
            <a href="contact.php">Contact us</a>
        </div>
        <!-- Copyright -->
    </footer>







    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>









</body>

</html>