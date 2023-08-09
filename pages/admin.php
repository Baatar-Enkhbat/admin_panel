<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <section class="zenOldMincho admin_main">
        <div class="admin_main__box bg_main rounded position-absolute translate-middle top-50 start-50 shadow">
            <div class="admin_main__error mx-auto">
                <?php if (!empty($_SESSION['errors'])): ?>
                <ul>
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                    <li style="color:red"><?=$error?></li>
                    <?php endforeach;?>
                </ul>
                <?php unset($_SESSION['errors']);endif;?>
            </div>
            <div class="h-100 w-100 d-grid justify-content-center align-items-center">
                <form action="sign-in-do" method="post">
                    <div class="d-grid mb-2">
                        <label for="email" class="mb-1">Eメール</label>
                        <input type="email" name="email" class="admin_main__input rounded p-1">
                    </div>
                    <div class="d-grid">
                        <label for="pass" class="mb-1">パスワード</label>
                        <input type="text" name="userpassword" class="admin_main__input rounded p-1">
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="admin_main__btn py-1 px-5 rounded">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js "
        integrity=" sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm " crossorigin=" anonymous ">
    </script>
</body>

</html>