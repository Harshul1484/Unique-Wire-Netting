<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Unique Wire Netting</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <?php include 'includes/header.html'; ?>

    <div class="page-header" style="background: #f4f4f4; padding: 60px 0; text-align: center;">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch for quotes, inquiries, or technical support.</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div style="display: flex; gap: 50px; flex-wrap: wrap;">
                <!-- Contact Info -->
                <div style="flex: 1; min-width: 300px;">
                    <h2>Get In Touch</h2>
                    <p style="margin-bottom: 30px;">We are here to help you finding the right mesh solution for your
                        project.</p>

                    <div style="margin-bottom: 20px;">
                        <h4><i class="fas fa-map-marker-alt"
                                style="color: var(--secondary-color); margin-right: 10px;"></i> Address</h4>
                        <p>Unique Wire Netting<br>GF-09, Siddheshwar Hall Mark,<br>Sayaji Park, Near Ekta Nagar chaar
                            Rasta,<br>Ajwa Road, Vadodara -390019</p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <h4><i class="fas fa-phone" style="color: var(--secondary-color); margin-right: 10px;"></i>
                            Phone</h4>
                        <p>+91 9898376811</p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <h4><i class="fas fa-envelope" style="color: var(--secondary-color); margin-right: 10px;"></i>
                            Email</h4>
                        <p>sbj7860@gmail.com</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div style="flex: 1; min-width: 300px; background: #f9f9f9; padding: 40px; border-radius: 8px;">
                    <h3 style="margin-bottom: 20px;">Send us a specific Inquiry</h3>
                    <form action="send-mail.php" method="POST">
                        <div style="margin-bottom: 15px;">
                            <label style="display: block; margin-bottom: 5px;">Name *</label>
                            <input type="text" name="name" required
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label style="display: block; margin-bottom: 5px;">Company Name</label>
                            <input type="text" name="company"
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label style="display: block; margin-bottom: 5px;">Email *</label>
                            <input type="email" name="email" required
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label style="display: block; margin-bottom: 5px;">Phone *</label>
                            <input type="tel" name="phone" required
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label style="display: block; margin-bottom: 5px;">Message / Product Requirement *</label>
                            <textarea name="message" rows="5" required
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                        </div>
                        <button type="submit" class="btn" style="width: 100%;">Send Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Expert Table Section -->
    <section class="spec-table-section section-padding" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="section-title">
                <h2>Reach Out to the Experts</h2>
            </div>
            <div class="spec-table-container">
                <table class="spec-table">
                    <thead>
                        <tr>
                            <th>Department</th>
                            <th>Best For</th>
                            <th>Response Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sales Inquiry</td>
                            <td>Pricing, Bulk Orders, & Custom Dimensions</td>
                            <td>Within 2-4 Hours</td>
                        </tr>
                        <tr>
                            <td>Technical Support</td>
                            <td>Material Grades & Installation Advice</td>
                            <td>Same Business Day</td>
                        </tr>
                        <tr>
                            <td>Logistics</td>
                            <td>Tracking Shipments Across India.</td>
                            <td>Real-time Updates</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Map Embed (Placeholder) -->
    <section>
        <div
            style="background: #eee; height: 400px; width: 100%; display: flex; align-items: center; justify-content: center; color: #666;">
            <!-- Simple placeholder for Map -->
            <p>Google Map Embed Goes Here</p>
        </div>
    </section>

    <?php include 'includes/footer.html'; ?>

    <script src="js/main.js"></script>
</body>

</html>