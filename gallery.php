<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Unique Wire Netting</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .filter-btn {
            background: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 8px 16px;
            margin: 0 5px 10px;
            cursor: pointer;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary-color);
            color: white;
        }

        .gallery-item {
            display: none;
            /* Hidden by default for filtering logic, handled by JS */
        }

        .gallery-item.show {
            display: block;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/header.html'; ?>

    <div class="page-header" style="background: #f4f4f4; padding: 60px 0; text-align: center;">
        <div class="container">
            <h1>Project Gallery</h1>
            <p>Explore our mesh solutions in action across various industries.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <!-- Filters -->
            <div style="text-align: center; margin-bottom: 40px;">
                <button class="filter-btn active" onclick="filterGallery('all')">All</button>
                <button class="filter-btn" onclick="filterGallery('industrial')">Industrial</button>
                <button class="filter-btn" onclick="filterGallery('architectural')">Architectural</button>
                <button class="filter-btn" onclick="filterGallery('security')">Security</button>
                <button class="filter-btn" onclick="filterGallery('zoo')">Zoo / Animal</button>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
                <!-- Industrial Items -->
                <div class="gallery-item show industrial">
                    <img src="images/gallery-ind-1.jpg" alt="Industrial Mesh Application"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="gallery-item show industrial">
                    <img src="images/gallery-ind-2.jpg" alt="Industrial Mesh"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 4px;">
                </div>

                <!-- Architectural Items -->
                <div class="gallery-item show architectural">
                    <img src="images/gallery-arch-1.jpg" alt="Architectural Facade"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="gallery-item show architectural">
                    <img src="images/gallery-arch-2.jpg" alt="Balustrade Mesh"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 4px;">
                </div>

                <!-- Security Items -->
                <div class="gallery-item show security">
                    <img src="images/gallery-sec-1.jpg" alt="Security Fencing"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 4px;">
                </div>

                <!-- Zoo Items -->
                <div class="gallery-item show zoo">
                    <img src="images/gallery-zoo-1.jpg" alt="Tiger Enclosure"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="gallery-item show zoo">
                    <img src="images/gallery-zoo-2.jpg" alt="Aviary Mesh"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 4px;">
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.html'; ?>

    <script>
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('.filter-btn');

            // Toggle active button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            items.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.classList.add('show');
                } else {
                    item.classList.remove('show');
                }
            });
        }
    </script>
    <script src="js/main.js"></script>
</body>

</html>