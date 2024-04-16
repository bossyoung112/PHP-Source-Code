<!doctype html>
<html lang="en">
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <label style="text-align: center;">
            <h1>
                PHP VALIDATING
            </h1>
        </label>
        <main>
            
            <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" > 
            <?php
            $nameErr = $emailErr = $websiteErr = $comment = $genderErr = "";
            $name = $email = $gender = $comment = $website = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty ($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                }

                if (empty ($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                }

                if (empty ($_POST["website"])) {
                    $websiteErr = "";
                } else {
                    $websiteErr = test_input($_POST["website"]);
                }

                if (empty ($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }

                if (empty ($_POST["gender"])) {
                    $genderErr = "Gender is required";
                } else {
                    $genderErr = test_input($_POST["gender"]);
                }
            }
            ?>
            <div class="mb-3">
                <label for="" class="form-label" require>Name</label>
                <input
                    type="name"
                    class="form-control"
                    name="name"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                <span class="error">* <?php echo $nameErr;?> </span> <br></br>
            </div>

            <div class="mb-3">
                <label for="" class="form-label" require>Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id=""
                    aria-describedby="emailHelpId"
                    placeholder="@gmail.com"
                />
                <span class="error">* <?php echo $emailErr; ?></span> <br></br>
                
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Website</label>
                <input
                    type="text"
                    class="form-control"
                    name="website"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                <span class="error">* <?php echo $websiteErr; ?></span> <br></br>
            </div> <br></br>
            
            <label>Comments</label>
            <textarea name="comment" id="" cols="30" rows="10"></textarea>  <br></br>

            <div
                class="btn-group"
                role="group"
                aria-label="Basic checkbox toggle button group"
                require
                <label>Gender:</label>
                <input
                    type="radio"
                    class="btn-check"
                    name="gender"
                    id="btncheck1"
                    autocomplete="off"
                    value="Female"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck1"
                    >Female</label
                >
            
                <input
                    type="radio"
                    class="btn-check"
                    name="gender"
                    id="btncheck2"
                    autocomplete="off"
                    value="Male"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck2"
                    >Male</label
                >
            
                <input
                    type="radio"
                    class="btn-check"
                    name="gender"
                    id="btncheck3"
                    autocomplete="off"
                    value="Other"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck3"
                    >Other</label
                >
                <span class="error">* <?php echo $genderErr; ?></span> <br></br>
            </div> <br></br>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            </form>
            <?php
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
             }
            
             
            echo $name . "<br>";
            echo $email . "<br>";;
            echo $website . "<br>";;
            echo $comment . "<br>";;
            echo $gender . "<br>";;
            //
            ?>
        </main>
    </body>
</html>
