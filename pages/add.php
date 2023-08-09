<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/8053d09693.js" crossorigin="anonymous"></script>
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
    <section class="zenOldMincho admin_panel_main">
        <div class="row h-100 g-0">
            <div class="col-2 bg_main">
                <p class="text-center mt-2">Admin panel</p>
                <ul>
                    <li>
                        <a class="text-decoration-none d-inline-block py-2 ps-3 shadow rounded admin_panel__menu_item"
                            href="#">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <div class="px-5 pt-3">
                    <a class="d-inline-block text-decoration-none text-dark bg_btn rounded py-2 px-5 text-white"
                        href="#">新規追加 <i class="fas fa-solid fa-plus"></i></a>
                </div>
                <div>
                    <form action="admin/record/new" method="post">
                        <input type="text" name="img"><br>
                        <input type="text" name="title"><br>
                        <input type="text" name="text">
                        <button type="submit">追加</button>
                    </form>

                </div>

            </div>
        </div>
    </section>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js "
        integrity=" sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm " crossorigin=" anonymous ">
    </script>
</body>

</html>
