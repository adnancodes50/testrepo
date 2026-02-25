// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.nav');
    const navLinks = document.querySelectorAll('.nav-link');

    // Toggle mobile menu
    mobileToggle.addEventListener('click', function() {
        mobileToggle.classList.toggle('active');
        nav.classList.toggle('active');
        document.body.style.overflow = nav.classList.contains('active') ? 'hidden' : '';
    });

    // Close mobile menu when clicking on a link
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileToggle.classList.remove('active');
            nav.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!nav.contains(e.target) && !mobileToggle.contains(e.target)) {
            mobileToggle.classList.remove('active');
            nav.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(10, 10, 10, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = 'transparent';
            header.style.backdropFilter = 'none';
        }
    });

    // Show/hide search input on search icon click (all screens)
    const searchIcon = document.querySelector('.search');
    const searchInput = document.querySelector('.search-input');
    const searchClose = document.querySelector('.search-input-close');
    function showSearchInput() {
        searchInput.classList.add('active');
        searchClose.style.display = 'block';
        searchInput.style.display = 'block';
        searchInput.focus();
    }
    function hideSearchInput() {
        searchInput.classList.remove('active');
        searchClose.style.display = 'none';
        searchInput.style.display = 'none';
    }
    searchIcon.addEventListener('click', function(e) {
        e.stopPropagation();
        if (!searchInput.classList.contains('active')) {
            showSearchInput();
        } else {
            hideSearchInput();
        }
    });
    searchClose.addEventListener('click', function(e) {
        e.stopPropagation();
        hideSearchInput();
    });
    document.addEventListener('click', function(e) {
        if (searchInput.classList.contains('active') && !searchInput.contains(e.target) && !searchIcon.contains(e.target) && !searchClose.contains(e.target)) {
            hideSearchInput();
        }
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && searchInput.classList.contains('active')) {
            hideSearchInput();
        }
    });
});
