// Anti-cloning protection
document.addEventListener('contextmenu', e => e.preventDefault());
document.addEventListener('selectstart', e => e.preventDefault());
document.addEventListener('dragstart', e => e.preventDefault());

// Disable developer tools
document.onkeydown = function(e) {
    if(e.keyCode == 123 || 
       (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) ||
       (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) ||
       (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) {
        return false;
    }
};

// Console warning
console.log('%cSTOP!', 'color: red; font-size: 50px; font-weight: bold;');
console.log('%cThis is a browser feature intended for developers. Content is protected by copyright.', 'color: red; font-size: 16px;');

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if(mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }
    
    // Close mobile menu on link click
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
        });
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if(target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Form validation enhancement
const forms = document.querySelectorAll('form');
forms.forEach(form => {
    form.addEventListener('submit', function(e) {
        const inputs = form.querySelectorAll('[required]');
        let valid = true;
        
        inputs.forEach(input => {
            if(!input.value.trim()) {
                valid = false;
                input.style.borderColor = 'red';
            } else {
                input.style.borderColor = '#ddd';
            }
        });
        
        if(!valid) {
            e.preventDefault();
            alert('Please fill all required fields');
        }
    });
});

// Disable print
window.addEventListener('beforeprint', function(e) {
    alert('Printing is disabled');
    return false;
});

// Detect and block automation tools
if(window.Cypress || window.__SELENIUM_WEB_DRIVER_EXECUTOR_MANAGER || window.Puppeteer) {
    document.body.innerHTML = 'Access Denied';
    window.location.href = 'about:blank';
}