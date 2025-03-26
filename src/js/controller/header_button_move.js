export function header_button_move() {
    document.querySelectorAll('a[href^="#tosection"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default jump behavior
            const targetId = this.getAttribute(anchor);
            console.log(this)
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                // Smooth scroll
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start' // Aligns to top of section
                });
                
                // Update URL (optional)
                history.pushState(null, null, targetId);
            }
        });
    });
}