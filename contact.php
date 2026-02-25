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
    <style>
        .contact-page-section {
            padding: 80px 0;
            background: var(--bg-main);
        }

        .reach-out-section {
            margin-bottom: 60px;
        }

        .reach-out-section h2 {
            text-align: center;
            font-size: 1.8rem;
            color: var(--black);
            margin-bottom: 30px;
            font-weight: 700;
        }

        .contact-table-wrapper {
            max-width: 1000px;
            margin: 0 auto;
            overflow-x: auto;
        }

        .contact-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid var(--border);
        }

        .contact-table th,
        .contact-table td {
            border: 1px solid var(--border);
            padding: 18px 20px;
            text-align: center;
        }

        .contact-table th {
            background-color: var(--primary);
            /* Deep Navy matching other headers */
            color: var(--white);
            font-size: 1.1rem;
            font-weight: 600;
        }

        .contact-table td {
            font-size: 0.95rem;
            color: var(--text-main);
            background-color: var(--white);
        }

        .contact-table tbody tr:nth-child(even) {
            background-color: var(--bg-alt);
        }

        .contact-info-section {
            display: flex;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
            gap: 40px;
            align-items: stretch;
            background: var(--bg-alt);
            padding: 40px;
            border-radius: var(--radius);
        }

        .map-col {
            flex: 1;
            min-width: 300px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        .map-col iframe {
            width: 100%;
            height: 100%;
            min-height: 350px;
            border: 0;
            display: block;
        }

        .info-col {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 25px 0;
            border-bottom: 1px solid var(--border);
        }

        .info-item:first-child {
            padding-top: 0;
        }

        .info-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .info-item-icon {
            color: var(--accent);
            margin-top: 5px;
            font-size: 24px;
        }

        .info-item-content h4 {
            font-size: 1.2rem;
            color: var(--primary);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .info-item-content p {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.6;
            margin: 0;
        }

        .info-item-content a {
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
        }

        .info-item-content a:hover {
            color: var(--accent);
        }
    </style>
</head>

<body>

    <?php include 'includes/header.html'; ?>

    <section class="page-header contact-header"
        style="background: linear-gradient(rgba(10, 16, 29, 0.8), rgba(10, 16, 29, 0.8)), url('assets/product-banner/contact.jpg'); background-size: cover; background-position: center; color: var(--white);">
        <div class="container">
            <h4 class="hero-subtitle">Unique Wire netting</h4>
            <h1 class="page-title">Get in Touch</h1>
            <p class="page-subtitle">Ready to secure your project with the finest mesh in the industry? Whether you need
                a technical quote for Stainless Steel Ferrule Mesh or need to discuss bulk requirements for Welded
                Wiremesh, our team is standing by to assist.</p>
        </div>
    </section>

    <section class="section contact-page-section">
        <div class="container">

            <!-- Reach Out Table -->
            <div class="reach-out-section">
                <h2 style="color: var(--primary);">Reach Out to the Experts</h2>
                <div class="contact-table-wrapper">
                    <table class="contact-table">
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Best For</th>
                                <th>Response Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-chart-line" style="color: var(--accent); margin-right: 8px;"></i>
                                    Sales Inquiry</td>
                                <td>Pricing, Bulk Orders, & Custom Dimensions</td>
                                <td>Within 2-4 Hours</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-tools" style="color: var(--accent); margin-right: 8px;"></i>
                                    Technical Support</td>
                                <td>Material Grades & Installation Advice</td>
                                <td>Same Business Day</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-truck" style="color: var(--accent); margin-right: 8px;"></i>
                                    Logistics</td>
                                <td>Tracking Shipments Across India.</td>
                                <td>Real-time Updates</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Contact Information & Map -->
            <div class="contact-info-section">
                <!-- Map -->
                <div class="map-col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.6657960359056!2d73.22851911495529!3d22.32847008530348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcf4af8778f23%3A0x6bba52240974ad63!2sShree%20Siddheshwar%20Plaza%201%20%26%202!5e0!3m2!1sen!2sin!4v1684000000000!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Info -->
                <div class="info-col">
                    <div class="info-item">
                        <div class="info-item-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-item-content">
                            <h4>Corporate Office</h4>
                            <p>GF-09, Siddheshwar Hall Mark, Sayaji Park,<br>Near Ekta Nagar chaar Rasta,<br>Ajwa Road,
                                Vadodara - 390019</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-item-content">
                            <h4>Email Direct</h4>
                            <p><a href="mailto:sbj7860@gmail.com">sbj7860@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-item-content">
                            <h4>Phone Number</h4>
                            <p><a href="tel:+919898376811">+91 9274876811</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="container">
            <div class="cta-box">
                <h2 class="cta-title">Need a Detailed Quotation?</h2>
                <p class="cta-desc">Use our dedicated inquiry form to specify your product requirements, mesh sizes, and
                    dimensions for an accurate quote.</p>
                <div class="cta-actions">
                    <a href="inquiry.php" class="btn btn-accent">Go to Inquiry Form</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.html'; ?>
    <script src="js/main.js"></script>
</body>

</html>