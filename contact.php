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

    <section class="page-header contact-header"
        style="background: linear-gradient(rgba(10, 16, 29, 0.8), rgba(10, 16, 29, 0.8)), url('assets/product-banner/contact.jpg'); background-size: cover; background-position: center; color: var(--white);">
        <div class="container">
            <h4 class="hero-subtitle">Unique Wirenetting</h4>
            <h1 class="page-title">Request a Quotation</h1>
            <p class="page-subtitle">At Unique Wirenetting, we specialize in providing high-precision, durable wire mesh
                solutions for architectural, industrial, and security applications.</p>
        </div>
    </section>

    <section class="section contact-section">
        <div class="container">
            <!-- Introduction -->
            <div class="contact-intro">
                <p>
                    To receive a personalized quote for your project, please fill out the form below.
                    Our team, which has been supplying quality materials across India since 2008, will get back to you
                    within 24 hours.
                </p>
            </div>

            <div class="contact-form-box">
                <h3 class="form-title">Quotation Request Form</h3>

                <form action="send-mail.php" method="POST" class="quotation-form">
                    <!-- 1. Contact Information -->
                    <div class="quote-form-section">
                        <h4>1. Contact Information</h4>
                        <div class="form-grid">
                            <div class="form-group">
                                <label>Full Name / Company Name *</label>
                                <input type="text" name="name" required placeholder="Enter name or organization">
                            </div>
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input type="email" name="email" required placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label>Phone Number *</label>
                                <input type="tel" name="phone" required placeholder="Include area code">
                            </div>
                            <div class="form-group">
                                <label>Location (City/State) *</label>
                                <input type="text" name="location" required placeholder="We supply all over India">
                            </div>
                        </div>
                    </div>

                    <!-- 2. Product Selection -->
                    <div class="quote-form-section">
                        <h4>2. Product Selection</h4>
                        <p class="variety-info">Please select the product(s) you are interested in:</p>
                        <div class="checkbox-grid">
                            <label class="checkbox-item">
                                <input type="checkbox" name="product[]" value="SS Cable Wire Mesh (Ferrule Type)">
                                <div class="checkbox-label">
                                    <span>SS Cable Wire Mesh (Ferrule)</span>
                                    <small>High-strength architectural safety</small>
                                </div>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="product[]" value="SS Cable Wire Mesh (Hand-Woven)">
                                <div class="checkbox-label">
                                    <span>SS Cable Wire Mesh (Hand-Woven)</span>
                                    <small>Flexible zoo and aviary enclosures</small>
                                </div>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="product[]" value="MS/G.I. Welded Wire Mesh">
                                <div class="checkbox-label">
                                    <span>MS/G.I. Welded Wire Mesh</span>
                                    <small>Industrial guarding and reinforcement</small>
                                </div>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="product[]" value="G.I. Chainlink Fencing">
                                <div class="checkbox-label">
                                    <span>G.I. Chainlink Fencing</span>
                                    <small>Rugged perimeter security</small>
                                </div>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="product[]" value="Decorative Wiremesh">
                                <div class="checkbox-label">
                                    <span>Decorative Wiremesh</span>
                                    <small>Architectural grilles and interiors</small>
                                </div>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="product[]" value="Carbon Steel Wire Mesh">
                                <div class="checkbox-label">
                                    <span>Carbon Steel Wire Mesh</span>
                                    <small>Heavy-duty industrial sifting</small>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- 3. Technical Specifications -->
                    <div class="quote-form-section">
                        <h4>3. Technical Specifications</h4>
                        <div class="form-row triple">
                            <div class="form-group">
                                <label>Material Grade</label>
                                <input type="text" name="material" placeholder="e.g., SS304, SS316">
                            </div>
                            <div class="form-group">
                                <label>Wire Diameter (Gauge)</label>
                                <input type="text" name="diameter" placeholder="e.g., 1.5mm, 12 Gauge">
                            </div>
                            <div class="form-group">
                                <label>Aperture/Mesh Size</label>
                                <input type="text" name="aperture" placeholder="e.g., 2&quot; x 2&quot;, 50mm x 50mm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Dimensions</label>
                            <input type="text" name="dimensions"
                                placeholder="Total Height x Total Length or Square Meters">
                        </div>
                    </div>

                    <!-- 4. Application Details -->
                    <div class="quote-form-section">
                        <h4>4. Application Details</h4>
                        <div class="form-group">
                            <label>What is the primary use for this mesh?</label>
                            <textarea name="application" rows="3"
                                placeholder="e.g., &quot;Zoo enclosure,&quot; &quot;Security fencing,&quot; &quot;Building facade,&quot; etc."></textarea>
                        </div>
                    </div>

                    <!-- Form Footer -->
                    <div class="form-footer">
                        <button type="submit" class="btn btn-accent btn-submit">Submit Quote Request</button>
                        <p><i class="fas fa-clock"></i> We typically respond within 24 hours.</p>
                    </div>
                </form>
            </div>

            <!-- Restored Contact Table -->
            <div class="contact-table-wrapper">
                <div class="section-header">
                    <h2 class="section-title">Corporate Directory</h2>
                    <p>Direct contact information for our specialized departments and regional presence.</p>
                </div>
                <table class="contact-table">
                    <thead>
                        <tr>
                            <th>Department</th>
                            <th>Contact Person</th>
                            <th>Inquiry Type</th>
                            <th>Contact Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Sales & Estimating</strong></td>
                            <td>Mr. Harshul Jadav</td>
                            <td>Quotations & Tenders</td>
                            <td><i class="fas fa-phone"></i> +91 98983 76811</td>
                        </tr>
                        <tr>
                            <td><strong>Technical Support</strong></td>
                            <td>Engineering Team</td>
                            <td>Material Grade Analysis</td>
                            <td><i class="fas fa-envelope"></i> sales@uniquewirenetting.com</td>
                        </tr>
                        <tr>
                            <td><strong>Logistics Group</strong></td>
                            <td>Shipping Desk</td>
                            <td>National Delivery Tracking</td>
                            <td><i class="fas fa-truck"></i> Real-time Updates</td>
                        </tr>
                        <tr>
                            <td><strong>Headquarters</strong></td>
                            <td>Vadodara Office</td>
                            <td>General Administration</td>
                            <td><i class="fas fa-map-marker-alt"></i> GF-09, Siddheshwar Hallmark</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Why Choose Us -->
            <div class="why-choose-container">
                <div class="why-choose-header">
                    <h2>Why Choose Unique Wirenetting?</h2>
                    <p>Our commitment to precision engineering and customer success sets us apart.</p>
                </div>
                <div class="why-choose-grid">
                    <div class="why-choose-item">
                        <h4>Established Expertise</h4>
                        <p>Serving the industry with technical excellence since 2008.</p>
                    </div>
                    <div class="why-choose-item">
                        <h4>Precision Quality</h4>
                        <p>Advanced manufacturing techniques for a perfect, durable finish.</p>
                    </div>
                    <div class="why-choose-item">
                        <h4>National Delivery</h4>
                        <p>Reliable supply chain reaching every corner of India.</p>
                    </div>
                    <div class="why-choose-item">
                        <h4>Cost-Effective</h4>
                        <p>Premium high-grade materials offered at competitive rates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Location -->
    <section class="section map-section">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.312988456641!2d73.2389143!3d22.3040371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc576a47a1103%3A0xe1355466f272c695!2sSiddheshwar%20Hallmark!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                loading="lazy"></iframe>
        </div>
    </section>

    <?php include 'includes/footer.html'; ?>
    <script src="js/main.js"></script>
</body>

</html>