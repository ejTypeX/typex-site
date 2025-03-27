export function scroll_header() {
    let lastScroll = 0;
    const header = document.getElementById('header');
    const headerHeight = header.offsetHeight; // Altura do header
    const scrollThreshold = 100; // Quantidade de scroll antes de esconder
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY || window.pageYOffset;
       
        // Caso especial: topo da página
        if (currentScroll <= 0) {
            header.classList.remove('hidden');
            header.classList.remove('scrolled');
            lastScroll = currentScroll;
            return;
        }
        
        // Rolar para baixo além do threshold
        if (currentScroll > lastScroll && currentScroll > scrollThreshold) {
            // Só esconde se já não estiver escondido
            if (!header.classList.contains('hidden')) {
                header.classList.add('hidden');
            }
        } 
        // Rolar para cima ou perto do topo
        else {
            // Mostra header se estiver escondido
            if (header.classList.contains('hidden')) {
                header.classList.remove('hidden');
            }
            // Adiciona classe para estilo de scroll
            if (currentScroll > headerHeight) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        lastScroll = currentScroll;
    });
}