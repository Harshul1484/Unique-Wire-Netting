<?php
require_once 'includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Contact Information
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $location = strip_tags(trim($_POST["location"]));

    // 2. Product Selection
    $products_array = isset($_POST["product"]) ? $_POST["product"] : [];
    $products = implode(", ", array_map('strip_tags', $products_array));

    // 3. Technical Specifications
    $material = strip_tags(trim($_POST["material"]));
    $diameter = strip_tags(trim($_POST["diameter"]));
    $aperture = strip_tags(trim($_POST["aperture"]));
    $dimensions = strip_tags(trim($_POST["dimensions"]));

    // 4. Application Details
    $application = strip_tags(trim($_POST["application"]));

    // Validate main required fields
    if (empty($name) || empty($email) || empty($phone) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the required contact information fields.";
        exit;
    }

    // Save to Database
    $stmt = $conn->prepare("INSERT INTO inquiries (name, email, phone, location, products, material, diameter, aperture, dimensions, application) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $name, $email, $phone, $location, $products, $material, $diameter, $aperture, $dimensions, $application);

    $db_success = $stmt->execute();
    $stmt->close();

    // Recipient email
    $recipient = "sbj7860@gmail.com";
    $subject = "New Precise Inquiry: $name - " . (empty($products) ? "General" : $products);

    // Email content
    $email_content = "NEW QUOTATION REQUEST RECEIVED\n";
    $email_content .= "============================\n\n";
    $email_content .= "1. CONTACT DETAILS\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Location: $location\n\n";

    $email_content .= "2. PRODUCTS INTERESTED\n";
    $email_content .= "$products\n\n";

    $email_content .= "3. TECHNICAL SPECS\n";
    $email_content .= "Material Grade: $material\n";
    $email_content .= "Wire Diameter: $diameter\n";
    $email_content .= "Aperture/Mesh: $aperture\n";
    $email_content .= "Dimensions: $dimensions\n\n";

    $email_content .= "4. APPLICATION\n";
    $email_content .= "$application\n";

    // Email headers
    $email_headers = "From: $name <$email>";

    // Send email and return status
    if ($db_success) {
        // Attempt to send email but prioritize DB success status
        // Use @ to suppress warning if mail server is not configured (common in local XAMPP)
        @mail($recipient, $subject, $email_content, $email_headers);

        http_response_code(200);
        echo "Thank You! Your inquiry has been received and saved successfully to our database.";
    } else {
        http_response_code(500);
        echo "Oops! We encountered an error saving your request. Please try again later.";
    }

    $conn->close();

} else {
    http_response_code(403);
    echo "Access Denied.";
}
?>