<?php get_header(); ?>

<div class="part-residencias py-15">
    <div class="container mx-auto">

        <div class="grid grid-cols-[repeat(1,1fr)] lg:grid-cols-[repeat(2,1fr)] gap-12.5 mb-22.5 lg:mb-17.5">
            <div class="caption-area flex h-full items-center">

                <div>
                    <div class="section-head mb-8">
                        <h3 class="section-title text-[2.5em] font-bold leading-8.75">Residencias de lujo</h3>
                        <h4 class="subtitle font-light text-[2.05em]">1, 2 y 3 habitaciones</h4>
                    </div>

                    <ul class="features grid grid-cols-[repeat(1,1fr)] gap-y-7 color-dark">
                        <li>
                            <div class="title text-[1.7em] ff-cormorant font-semibold mb-3">Arquitectura
                                de autor</div>
                            <p class="font-light text-[1.2em]">Solo 30 unidades de 1 a 4 habitaciones, diseñadas por
                                las firmas galardonadas ALH Taller y Studio Modo.</p>
                        </li>
                        <li>
                            <div class="title text-[1.7em] ff-cormorant font-semibold mb-3">Diseño
                                neoclásico</div>
                            <p class="font-light text-[1.2em]">Estética contemporánea que combina armoniosamente con
                                el entorno tropical mediante el uso de mármol travertino, piedra coralina y maderas
                                nobles.</p>
                        </li>
                        <li>
                            <div class="title text-[1.7em] ff-cormorant font-semibold mb-3">Ubicación de
                                clase mundial</div>
                            <p class="font-light text-[1.2em]">Situado en Cap Cana, a solo 10 minutos del Aeropuerto
                                Internacional de Punta Cana.</p>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="image-area">
                <img class="img-lazy max-w-full w-full object-cover h-100 lg:h-162.5"
                    data-src="<?php echo get_template_directory_uri(); ?>/assets/tmp/rsz_11d87592793253dfe45c4e49a19d5d6ecaa5b52d.jpg" alt="">
            </div>

        </div>

        <div class="relative">

            <img class="img-lazy max-w-full w-full h-[75dvh] object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/tmp/residencias.jpg"
                alt="L'Atelier Cap Cana">

            <div
                class="caption-area absolute bg-cream py-10 px-11.75 top-12.5 lg:top-12.5 left-5 lg:left-12.5 right-5 lg:right-[inherit] max-w-full lg:w-[55%]">
                <h3 class="section-title text-[2.7em] font-semibold leading-10 mb-2">L'Atelier Cap Cana</h3>
                <p class="subtitle ff-cormorant text-[2.2em] mb-3">El destino más importante del Caribe</p>

                <p class="text-[1.13em] font-light">Exclusivas residencias de lujo en "The Falls", Cap Cana.
                    Disfrute de plusvalía garantizada e ingresos por rentas turísticas en dólares en el destino más
                    importante de la República Dominicana.</p>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/part-amenidades'); ?>

<div class="part-ciudad-destino py-15">
    <div class="container mx-auto">

        <div class="mb-20">

            <img class="img-lazy max-w-full w-75 mx-auto mb-9" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/capcana.png"
                alt="Logo Cap Cana">

            <div class="section-head text-center mb-22.25 sh-line sh-line-bottom w-fit mx-auto">
                <h3 class="section-title text-[2.5em] font-semibold leading-7.5">Cap Cana Ciudad Destino</h3>
            </div>

            <div
                class="amenities-list grid grid-cols-[repeat(1,1fr)] lg:grid-cols-[repeat(3,1fr)] gap-y-15 gap-x-6.25">
                <div class="item">
                    <div class="image-area mb-5">
                        <img class="img-lazy max-w-full w-full" data-src="<?php echo wp_get_attachment_image_url(6, '413x353', false); ?>"
                            alt="Golf">
                    </div>
                    <div class="caption-area color-dark">
                        <h5 class="title font-medium text-[2em] mb-2">Golf</h5>
                        <p class="font-light">Acceso a dos campos Jack Nicklaus Signature (Punta Espada #1 del
                            Caribe).</p>
                    </div>
                </div>

                <div class="item">
                    <div class="image-area mb-5">
                        <img class="img-lazy max-w-full w-full" data-src="<?php echo wp_get_attachment_image_url(8, '413x353', false); ?>"
                            alt="Golf">
                    </div>
                    <div class="caption-area color-dark">
                        <h5 class="title font-medium text-[2em] mb-2">Lifestyle</h5>
                        <p class="font-light">Playa Juanillo a 3 minutos, Centro ecuestre (Los Establos), Parques y
                            más de 40 restaurantes internacionales.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="image-area mb-5">
                        <img class="img-lazy max-w-full w-full" data-src="<?php echo wp_get_attachment_image_url(7, '413x353', false); ?>"
                            alt="Golf">
                    </div>
                    <div class="caption-area color-dark">
                        <h5 class="title font-medium text-[2em] mb-2">Marina</h5>
                        <p class="font-light">Puerto deportivo de vanguardia con más de 150 muelles.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mb-20">

            <div class="video-area w-full lg:w-[50%] lg:pr-13.75 order-2 lg:order-1">
                <video muted autoplay class="img-lazy h-100 lg:h-137.5 w-full object-cover"
                    data-src="<?php echo get_template_directory_uri(); ?>/assets/tmp/lago3.mp4"></video>
            </div>

            <div class="caption-area w-full lg:w-[50%] order-1 lg:order-2 mb-12.5 lg:mb-0">

                <div class="flex items-center h-full">
                    <div>
                        <div
                            class="section-head text-center mb-17.25 sh-line sh-line-bottom sh-line-right w-fit pr-5">
                            <h3 class="section-title text-[2.5em] font-medium leading-7.5 w-fit">
                                Beneficios
                            </h3>
                        </div>

                        <ul class="benefits grid grid-cols-[repeat(1,1fr)] gap-y-8.25">
                            <li class="bg-cream px-7.5 py-6.5">
                                <div class="title color-dark font-semibold text-[1.8em] ff-cormorant mb-2">Ley
                                    CONFOTUR</div>
                                <p class="font-light text-[1.2em]">Exención del 3% del impuesto de transferencia y
                                    15 años de exención de impuesto a la propiedad (IPI).</p>
                            </li>
                            <li class="bg-cream px-7.5 py-6.5">
                                <div class="title color-dark font-semibold text-[1.8em] ff-cormorant mb-2">Seguridad
                                </div>
                                <p class="font-light text-[1.2em]">Proyecto respaldado por nombre de desarrollo
                                    inmobiliario, con Grupo Actúa Properties como master broker exclusivo y con
                                    opciones de financiamiento disponible por Banco López de Haro.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="section-head text-center mb-0 underline-down">
            <h3 class="section-title text-[2.8em] font-medium mb-1">Invierta en Cap Cana <span
                    class="block lg:hidden"></span> con total flexibilidad</h3>
            <p class="text-[1.3em] font-light color-dark">Asegure su unidad en L'Atelier con sólo US$5,000</p>
        </div>

    </div>
</div>

<?php get_template_part('parts/part', 'solicite.plan'); ?>

<?php get_template_part('parts/part-map'); ?>

<div class="part-ubicacion-estrategica py-15">
    <div class="container mx-auto">

        <div class="section-head text-center mb-10 underline-down">
            <h3 class="section-title text-[2.8em] font-medium mb-3">Aliados estratégicos</h3>
        </div>

        <ul class="
                list-aliados flex flex-wrap justify-evenly
                [&_li]:flex [&_li]:w-full [&_li]:lg:w-[18%] [&_li]:mb-5 [&_li]:items-center [&_li]:justify-center
                [&_img]:max-w-full [&_img]:w-[50%] [&_img]:lg:w-auto [&_img]:lg:max-h-25">

            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/origin.png"
                    alt="Origin"></li>
            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/alh.jpg" alt="ALH">
            </li>
            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/modo.jpg" alt="MODO">
            </li>
            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/heco.svg" alt="HECO">
            </li>
            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/mc-arquitectos.jpg"
                    alt="MC"></li>
            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/grupo-actua.png"
                    alt="Grupo Actúa"></li>
            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/saps.png" alt="SAPS">
            </li>
            <li><img width="226" height="80" class="img-lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/lopez-de-haro.png"
                    alt="Banco Lopez de Haro"></li>
        </ul>

    </div>
</div>


<?php get_footer(); ?>