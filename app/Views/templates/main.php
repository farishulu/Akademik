<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php echo $this->include('templates/header'); ?>

    <div class="container-fluid main-content">
        <div class="row">
            <div id="sidebar" class="col-md-2 d-md-block bg-light">
                <?php echo $this->include('templates/sidebar'); ?>
            </div>

            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>

    <?php echo $this->include('templates/footer'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>