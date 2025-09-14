<?php 
$pageTitle = 'Contact - GAB & GAB Integrated Concept Ltd';
require_once 'includes/header.php'; 

$messageSent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['token'])) {
    if ($_POST['token'] === $_SESSION['token']) {
        $name = filter_var($_POST['name'] ?? '', FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['phone'] ?? '', FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_STRING);
        
        if ($name && $email && $message) {
            $to = 'gab.gabintegrated.com@gmail.com';
            $subject = 'Website Contact: ' . $name;
            $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
            $headers = "From: $email";
            
            if (mail($to, $subject, $body, $headers)) {
                $messageSent = true;
            }
        }
    }
}
?>

<section class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Let's Build Together</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if ($messageSent): ?>
        <div class="alert success">Thank you for contacting us. We'll respond shortly.</div>
        <?php endif; ?>
        
        <div class="contact-layout">
            <div class="contact-form">
                <h2>Get In Touch</h2>
                <form method="POST" action="">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="cta-button">Send Message</button>
                </form>
            </div>
            
            <div class="contact-info-section">
                <h2>Contact Information</h2>
                
                <div class="info-item">
                    <h3>Head Office</h3>
                    <p>Suite 13, LSDPC Shopping Complex Phase 3<br>
                    Oba Ogunji Road, Ogba, Lagos</p>
                </div>
                
                <div class="info-item">
                    <h3>Phone</h3>
                    <p>+234-8032341477</p>
                </div>
                
                <div class="info-item">
                    <h3>Email</h3>
                    <p>gab.gabintegrated.com@gmail.com<br>
                    greatsae@gmail.com</p>
                </div>
                
                <div class="info-item">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM<br>
                    Saturday: 9:00 AM - 2:00 PM</p>
                </div>
                
                <div class="info-item">
                    <h3>Banking Partners</h3>
                    <p>Eco Bank Plc - 48 Adeniyi Jones Avenue, Ikeja<br>
                    Keystone Bank - 25 Kudirat Abiola Way, Oregun</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>