<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicLabel - Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.html'; ?>

    <!-- Store Items -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Store</h2>
            <div class="row">
                <!-- Item 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/album1.jpg" class="card-img-top" alt="Album 1">
                        <div class="card-body">
                            <h5 class="card-title">Album 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec turpis et.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for more items -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.html'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
