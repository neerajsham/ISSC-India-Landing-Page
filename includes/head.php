<head>
    <?php
    include_once __DIR__ . '/../config.php';

    /* Default title */
    $page_title = $page_title ?? 'ISSC Landing Pages';

    /* Default description */
    $page_description = $page_description ?? 'ISSC India provides advanced industrial machinery and solutions.';
    ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- FontAwsome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/header.css"> -->
    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css?v=' . time()); ?>">

    <!-- Favicon -->
    <link rel="icon" href="/assets/img/LOGO-Fav2.ico" type="image/x-icon">

</head>