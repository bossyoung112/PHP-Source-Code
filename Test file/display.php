<!doctype html>
<html lang="en">
    <head>
        <title>Learner Manager</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form>
            <div class="table-responsive">
                <table class="table table-primary">
                <thead>
            <tr>
                <th class=\"text-center\">ID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Class Name</th>
                <th class=\"text-center\">Mark 1</th>
                <th class=\"text-center\">Mark 2</th>
                <th class=\"text-center\">Average Mark</th>
            </tr>
                </thead>
        </thead>
    </table>
</div>
        <?php
        require_once("LearnerProcess.php");
        $ln->getCon("db_learner");
        $ln->getList_tbLearner();
        ?>

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
