<!doctype html>
<html lang="en">
    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action = "WelcomeLogin.php" method="post">
                <h1 style="text-align: center;">
                    Novell Services Login
                </h1>
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input
                    type="text"
                    class="form-control"
                    name="username"
                    id=""
                    aria-describedby="helpId"
                    placeholder="..."
                />
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id=""
                    aria-describedby=""
                    placeholder="..."
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">City of</label>
                <input
                    type="text"
                    class="form-control"
                    name="city"
                    id=""
                    aria-describedby=""
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="websv" class="form-label">Web Server</label>
                <select
                    class="form-select form-select-lg"
                    name="ws"
                    id=""
                >
                    <option value="Viettel">Viettel</option>
                    <option value="FPT">FPT</option>
                    <option value="VNPT">VNPT</option>
                </select>
            </div>

            <div
                class="btn-group"
                role="group"
                aria-label= "Select"
            > <label>Please specify your role</label>
                <input
                    type="radio"
                    class="btn-check"
                    name="role"
                    id="btncheck1"
                    autocomplete="off"
                    value = "Admin"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck1"
                    >Admin</label
                >
            
                <input
                    type="radio"
                    class="btn-check"
                    name="role"
                    id="btncheck2"
                    autocomplete="off"
                    value="Engineer"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck2"
                    >Engineer</label
                >
            
                <input
                    type="radio"
                    class="btn-check"
                    name="role"
                    id="btncheck3"
                    autocomplete="off"
                    value="Manager"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck3"
                    >Manager</label
                >

                <input
                    type="radio"
                    class="btn-check"
                    name="role"
                    id="btncheck4"
                    autocomplete="off"
                    value="Guest"
                />
                <label
                    class="btn btn-outline-primary"
                    for="btncheck4"
                    >Guest</label
                >
            </div>

            <div class="list-group">
                <label>Single Sign-on to the following</label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="Mail" />
                    Mail
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="Payroll" />
                    Payroll
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="Self Services" />
                    Self Services
                </label>
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
