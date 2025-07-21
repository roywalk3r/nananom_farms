<header>
    <nav>
        <div class="logo">
            <a href="/index.php"><img src="/frontend/assets/images/logo.png" alt="Logo"></a>
        </div>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Service Booking</a></li>
            <li><a href="contact.php">General Enquiries</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
        </ul>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('show');
            menuToggle.classList.toggle('active');
        });

        // Close menu when clicking on a nav link
        const navLinks = document.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('show');
                menuToggle.classList.remove('active');
            });
        });
    }
});
</script>