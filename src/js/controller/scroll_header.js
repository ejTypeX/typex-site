export function scroll_header() {
    let lastScroll = 0;
    const header = document.getElementById('header');
    const headerHeight = header.offsetHeight;
    const scrollThreshold = 100;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY || window.pageYOffset;
       
        if (currentScroll <= 0) {
            header.classList.remove('hidden');
            header.classList.remove('scrolled');
            lastScroll = currentScroll;
            return;
        }
        
        if (currentScroll > lastScroll && currentScroll > scrollThreshold) {
            if (!header.classList.contains('hidden')) {
                header.classList.add('hidden');
            }
        } 
        else {
            if (header.classList.contains('hidden')) {
                header.classList.remove('hidden');
            }
            if (currentScroll > headerHeight) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        lastScroll = currentScroll;
    });
}