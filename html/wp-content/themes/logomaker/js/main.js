// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function () {

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (this.getAttribute('href') !== '#') {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    window.addEventListener('scroll', function () {
        const menu = document.querySelector('header');
        if (window.scrollY > 0) {
            menu.classList.add('scrolled');
        } else {
            menu.classList.remove('scrolled');
        }
    });

    var firstRow = document.getElementById('first-row');
    var secondRow = document.getElementById('second-row');
    var autoFillTicker = new tickerBar(firstRow, { autoFill: true, direction: 'right', pxPerSec: 10 });
    var autoFillTicker = new tickerBar(secondRow, { autoFill: true, pxPerSec: 10 });
});