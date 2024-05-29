<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newAction = "";
        }
        else {
        $newAction = "displayProductsbyBand";
        }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form method="post" action="<?php echo $newAction;?>">
                <div>
                <label>
                    Select Band
                </label>
                <select class="form-select form-select-lg" name="selectBand" id="">
                    <option value="Fig">Fig</option>
                    <option value="Promethazine VC">Promethazine VC</option>
                    <option value="Stack">Stack</option>
                </select>
                <button
                        type="submit"
                        class="btn btn-primary"
                        name="btSearch"
                    >
                        Submit
                    </button>
                    <?php
                    if (isset($data["Products"])) {
                        echo "<table>";
                        echo "<tbody>";

                        echo "<thead>";
                        echo "<tr>";

                        $fieldNames = $data["Products"]->fetch_fields();
                        foreach ($fieldNames as $field) {
                            echo "<th class =\"text-center\">" . strtoupper($field->name) . "</th>";
                        }
                        echo "</tr>";
                        echo "</thead>";

                        while ($row = mysqli_fetch_array($data["Products"])) {
                            echo "<tr>";
                            echo "<td class=\"text-left\">" . $row["id"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["pid"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["pname"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["company"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["year"] . "</td>";
                            echo "<td class=\"text-left\">" . $row["band"] . "</td>";
                            echo "<td class=\"text-left\">" . '<img src="' . $row["pimage"] . '" alt = "Image">' . "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } 
                    ?>
                </div>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
