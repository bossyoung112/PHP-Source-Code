<!doctype html>
<html lang="en">
    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action="WelcomeGET.php" method="get">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control"
                    name="email"
                    id=""
                    aria-describedby="emailHelpId"
                    placeholder="abc@mail.com"
                />
                <small id="emailHelpId" class="form-text text-muted"
                    >Help text</small
                >
            </div>

            <div
                class="btn-group"
                role="group"
                aria-label="Basic checkbox toggle button group"
            >
                <input
                    type="radio"
                    class="btn-check"
                    name="firstone"
                    id="btncheck1"
                    autocomplete="off"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck1"
                    >First One</label
                >
            
                <input
                    type="radio"
                    class="btn-check"
                    name="secondone"
                    id="btncheck2"
                    autocomplete="off"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck2"
                    >Second One</label
                >
            
                <input
                    type="radio"
                    class="btn-check"
                    name="btnradio"
                    id="btncheck3"
                    autocomplete="off"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck3"
                    >Third One</label
                >
            </div>
            

            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
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
