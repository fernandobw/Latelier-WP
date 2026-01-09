
document.addEventListener("DOMContentLoaded", () => {

    const images = document.querySelectorAll('.img-lazy[data-src]');

    // Crea el observer
    const imgObserver = new IntersectionObserver((entries, imgObserver) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
                imgObserver.unobserve(img);
            }
        });
    }, {
        rootMargin: '0px 0px 50px 0px',
        threshold: 0.1
    });

    // Asocia el observer a cada imagen con la clase `img-lazy`
    images.forEach(img => imgObserver.observe(img));


    const swiperGaleria = new Swiper(".swiper-galeria", {
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,
        effect: "fade",
        lazy: true,
        autoplay: false, // inicia apagado
    });

    // Activar autoplay cuando sea visible
    const sliderOb = document.querySelector(".swiper-galeria");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    swiperGaleria.params.autoplay = {
                        delay: 7500,
                        disableOnInteraction: false,
                    };
                    swiperGaleria.autoplay.start();
                    observer.disconnect(); // deja de observar si solo quieres que arranque 1 vez
                }
            });
        },
        { threshold: 0.3 } // 30% visible para considerarlo "visto"
    );

    observer.observe(sliderOb);
})