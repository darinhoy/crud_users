<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- <a class="navbar-brand" href="/">App</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/users">Users</a>
                </li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link active" active href="/users/logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="/users/login">Login</a>
                    </li>
                <?php endif; ?>

                <div class="navbar-nav ms-auto">
                <?php session_start();?>
                <?php if (isset($_SESSION['user_role'])) : ?>
                    <span class="navbar-text text-white">
                        <?= ucfirst(htmlspecialchars($_SESSION['user_role'])) ?>
                    </span>
                <?php endif; ?>
            </div>

            </ul>
        </div>
    </div>
</nav>
