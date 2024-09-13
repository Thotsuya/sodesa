@extends('layouts.app')

@section('seo')
    <meta property="og:title" content="Inicio - Sodesa Logística Aduanera"/>
    <meta property="og:description" content="Soluciones y Desarrollo SA, agilidad y transparencia, cumplimiento de las normativas aduaneras y tributarias, aportando seguridad, eficiencia y puntualidad."/>
@endsection

@section('content')
    <!-- Start Hero -->
    <section
        class="cs_hero cs_style_2 d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden cs_ripple_version">
        <video autoplay muted loop id="sodesa-bg-video">
            <source src="{{ asset('assets/img/sodesa-bg.webm') }}" type="video/webm">
        </video>
        <div class="container">
            <div class="cs_hero_text position-relative cs_zindex_3 text-center wow fadeInUp" data-wow-duration="0.8s"
                 data-wow-delay="0.2s">
                <h1 class="text-white cs_mb_45 cs_fs_60 cs_fs_lg_46 text-uppercase">
                    {!! __('Customs <br> Agency') !!}
                    <span class="text-brand-300 position-relative d-inline-block">
                      SODESA
                    </span>
                </h1>
                <a href="https://wa.link/vfod66" target="_blank"
                   class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden">
                <span>
                   {{ __('Contact Us') }}
                </span>
                </a>
            </div>
        </div>
        <div class="bg-primary opacity-75 position-absolute w-100 h-100 start-0 top-0"></div>
    </section>
    <!-- End Hero -->

    <!-- Start About Section -->
    <section class="cs_pb_140 cs_pt_140 cs_pb_lg_80 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <img src="{{ asset('img/edificio-sodesa.jpeg') }}" alt="">
                </div>
                <div class="col-xl-5">
                    <div class="cs_about-1-spacing">
                        <div class="cs_about cs_style_1">
                            <div class="cs_section_heading cs_style_1 cs_mb_25">
                                <div class="cs_section_heading_in">
                                    <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft"
                                        data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        {{ __('Who we are') }}
                                    </h3>
                                    <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        Soluciones y Desarrollos <span
                                            class="text-accent">S.A</span></h2>
                                    <p class="m-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        {{ __('Soluciones y Desarrollo S,A was founded in 2018 in Managua, Nicaragua. We are a 100% Nicaraguan company. This agency is characterized by its agility and transparency, compliance with customs and tax regulations, always providing personalized attention to its clients, providing security, efficiency, and punctuality to respond to the demands of a sector in constant development.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Service Section -->
    <section class="position-relative cs_iconbox_2_wrap cs_pt_135 cs_pt_lg_75 cs_pb_100 cs_pb_lg_40 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="position-relative cs_zindex_3">
                        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
                            <div class="cs_section_heading_in">
                                <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 text-white wow fadeInUp" data-wow-duration="0.8s">
                                    {{ __('Central America Commercial Allies') }}
                                </h2>
                                <p class="text-white m-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    {{ __('We offer coverage at national and international level, operating in all ports and airports with collaboration agreements that reflect responsibility, likewise we have technological tools for the processing of documents, we have a highly trained and committed human team in everything through honest and effective work.') }}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40 wow fadeInUp"
                                     data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div>
                                        <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">
                                            Centro Comercial del Mercado - El Salvador
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40 wow fadeInUp"
                                     data-wow-duration="0.8s" data-wow-delay="0.4s">
                                    <div>
                                        <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">
                                            Alimentos Empacados de Centroamérica
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="cs_iconbox cs_style_1 d-flex align-items-center cs_mb_40 wow fadeInUp"
                                     data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <div>
                                        <h2 class="text-white m-0 cs_fs_20 cs_fs_lg_18 cs_lh_base">Agroindustrias Albay S.A de C.V</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6"></div>
            </div>
        </div>
        <div class="cs_iconbox_left-img position-absolute bottom-0 start-0 h-100 background-filled" data-src="assets/img/why_choose_us_left_img.jpeg"></div>
        <div class="cs_iconbox_right-img position-absolute cs_zindex_1 bottom-0 end-0 background-filled" data-src="{{ asset('assets/img/14.jpg') }}"></div>
        <div class="cs_iconbox_logo position-absolute semi_rotate">
            <svg width="191" height="197" viewBox="0 0 191 197" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100.397 107.26C113.305 117.648 127.237 124.564 139.602 126.736C139.678 126.749 139.75 126.756 139.825 126.77L155.856 32.5327C156.421 29.2004 153.306 26.3917 150.454 27.6622L68.5886 64.126C72.5569 77.7763 84.1472 94.1815 100.397 107.26Z" fill="#888888" fill-opacity="0.2"/>
                <path d="M134.283 136.497C121.573 133.528 107.766 126.385 95.0023 116.124C77.395 101.968 65.2019 84.7963 60.4863 69.405L19.093 87.8249C15.8591 89.2634 16.1251 94.3774 19.5029 95.6938L80.2458 119.392C83.8188 120.786 86.8631 123.528 88.8105 127.109L121.922 187.961C123.762 191.345 128.37 190.622 129.013 186.848L137.475 137.15C136.42 136.96 135.357 136.747 134.283 136.497Z" fill="#888888" fill-opacity="0.2"/>
                <path d="M135.873 127.406C123.172 124.44 109.376 117.306 96.6244 107.06C66.6205 82.949 52.3161 50.0723 64.0597 32.2106C75.8041 14.3519 108.507 19.2476 138.51 43.3581C148.326 51.2452 156.884 60.5001 163.258 70.1219C164.637 72.2018 164.251 75.0376 162.4 76.4586C160.549 77.878 157.932 77.3443 156.556 75.2663C150.711 66.4452 142.82 57.9237 133.733 50.622C108.446 30.3012 79.6787 24.3911 70.9164 37.7191C62.1543 51.0456 76.1154 79.4713 101.404 99.7925C114.23 110.099 128.065 116.965 140.36 119.115C151.717 121.106 160.191 118.825 164.221 112.695C168.424 106.304 166.766 97.4981 164.635 91.2345C163.822 88.8441 164.914 86.2656 167.073 85.4735C169.232 84.6816 171.642 85.9765 172.455 88.3683C176.466 100.157 175.977 110.755 171.077 118.207C165.196 127.151 153.932 130.671 139.362 128.118C138.21 127.918 137.045 127.679 135.873 127.406Z" fill="#888888" fill-opacity="0.2"/>
            </svg>
        </div>
    </section>
    <!-- End Service Section -->



    <!-- Start Team Section -->
    <section class="cs_pt_80 cs_pt_lg_75 cs_pb_112 cs_pb_lg_112">
        <div class="container">
            <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
                <div class="cs_section_heading_in">
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0 wow fadeInUp" data-wow-duration="0.8s">
                        {{ __('Our Services') }}
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50 wow fadeInUp"
                         data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="cs_team_member position-relative cs_rounded_50">
                            <img class="w-100 cs_rounded_50" src="{{ asset('assets/img/Terrestre.webp') }}" alt="Member">
                        </div>
                        <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                            <h2 class="text-white m-0 cs_fs_26 cs_mb_3">
                                {{ __('Land') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50 wow fadeInUp"
                         data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <div class="cs_team_member position-relative cs_rounded_50">
                            <img class="w-100 cs_rounded_50" src="{{ asset('assets/img/maritimo.webp') }}" alt="Member">
                        </div>
                        <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                            <h2 class="text-white m-0 cs_fs_26 cs_mb_3">
                                {{ __('Sea') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden cs_rounded_50 wow fadeInUp"
                         data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="cs_team_member position-relative cs_rounded_50">
                            <img class="w-100 cs_rounded_50" src="{{ asset('assets/img/aereo.webp') }}" alt="Member">
                        </div>
                        <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                            <h2 class="text-white m-0 cs_fs_26 cs_mb_3">
                                {{ __('Air') }}
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Start Team Section -->
    <section class="cs_pt_80 cs_pt_lg_75 cs_pb_112 cs_pb_lg_112">
        <div class="container">
            <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
                <div class="cs_section_heading_in">
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0 wow fadeInUp" data-wow-duration="0.8s">
                        {{ __('Borders') }}
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <img class="w-100 wow fadeInUp" data-wow-duration="0.8s"
                         src="{{ asset('assets/img/puntos.png') }}" alt="Member">
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Start Contact Section  -->
    <section class="background-filled cs_pt_80 cs_pt_lg_75 cs_pb_110 cs_pb_lg_80" data-src="assets/img/contact_bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="cs_section_heading cs_style_1 cs_mb_40">
                        <div class="cs_section_heading_in">
                            <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft" data-wow-duration="0.8s"
                                data-wow-delay="0.2s">
                                {{ __('Contact Us') }}
                            </h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">
                                {{ __('Have Any Question?') }}
                            </h2>
                            <p class="m-0">
                                {{ __('We are here to help you. If you have any questions or need assistance, feel free to contact us.') }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center cs_mb_30">
                                <div
                                    class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31.6128 24.7786C30.7939 23.9259 29.8062 23.47 28.7593 23.47C27.7209 23.47 26.7247 23.9175 25.8721 24.7701L23.2043 27.4295C22.9848 27.3113 22.7653 27.2015 22.5543 27.0918C22.2503 26.9398 21.9633 26.7963 21.7185 26.6443C19.2196 25.0572 16.9486 22.9888 14.7705 20.3126C13.7152 18.9787 13.006 17.8559 12.4911 16.7162C13.1833 16.083 13.8249 15.4245 14.4497 14.7914C14.6861 14.555 14.9224 14.3102 15.1588 14.0738C16.9317 12.3009 16.9317 10.0046 15.1588 8.23172L12.8541 5.92698C12.5924 5.66527 12.3222 5.39512 12.0689 5.12497C11.5624 4.60155 11.0305 4.06124 10.4818 3.5547C9.6629 2.74425 8.6836 2.31369 7.65364 2.31369C6.62368 2.31369 5.62749 2.74425 4.78327 3.5547C4.77482 3.56315 4.77482 3.56315 4.76638 3.57159L1.89601 6.46729C0.815398 7.5479 0.199112 8.86489 0.0640356 10.3929C-0.138579 12.8581 0.587457 15.1544 1.14465 16.6571C2.5123 20.3464 4.55533 23.7655 7.60299 27.4295C11.3007 31.8448 15.7498 35.3314 20.832 37.7881C22.7738 38.7083 25.3655 39.7974 28.2612 39.9831C28.4385 39.9916 28.6242 40 28.7931 40C30.7433 40 32.3811 39.2993 33.6643 37.9063C33.6727 37.8894 33.6896 37.881 33.6981 37.8641C34.1371 37.3322 34.6436 36.851 35.1755 36.3361C35.5385 35.9899 35.9099 35.6269 36.2729 35.247C37.1087 34.3774 37.5477 33.3644 37.5477 32.326C37.5477 31.2791 37.1003 30.2745 36.2476 29.4303L31.6128 24.7786ZM34.6351 33.6683C34.6267 33.6683 34.6267 33.6767 34.6351 33.6683C34.3059 34.0229 33.9682 34.3437 33.6052 34.6983C33.0564 35.2217 32.4993 35.7704 31.9758 36.3867C31.1232 37.2985 30.1185 37.729 28.8015 37.729C28.6749 37.729 28.5398 37.729 28.4132 37.7206C25.9058 37.5602 23.5758 36.5809 21.8282 35.7451C17.0499 33.4319 12.8541 30.1479 9.36742 25.9858C6.48861 22.5161 4.56377 19.308 3.28898 15.8635C2.50385 13.7614 2.21682 12.1236 2.34345 10.5787C2.42787 9.59093 2.80777 8.77203 3.50848 8.07132L6.3873 5.19251C6.80097 4.80416 7.23997 4.5931 7.67052 4.5931C8.20239 4.5931 8.63294 4.91391 8.9031 5.18406C8.91154 5.19251 8.91998 5.20095 8.92842 5.20939C9.4434 5.6906 9.93305 6.18869 10.448 6.72056C10.7097 6.99071 10.9799 7.26086 11.25 7.53946L13.5548 9.8442C14.4497 10.7391 14.4497 11.5664 13.5548 12.4613C13.31 12.7061 13.0736 12.951 12.8288 13.1873C12.1196 13.9134 11.4442 14.5888 10.7097 15.2473C10.6929 15.2641 10.676 15.2726 10.6675 15.2895C9.9415 16.0155 10.0766 16.7247 10.2285 17.2059C10.237 17.2312 10.2454 17.2565 10.2539 17.2818C10.8533 18.7339 11.6975 20.1016 12.9807 21.7309L12.9892 21.7394C15.3192 24.6097 17.7759 26.8469 20.4859 28.5607C20.832 28.7802 21.1866 28.9575 21.5243 29.1264C21.8282 29.2783 22.1153 29.4218 22.3601 29.5738C22.3938 29.5907 22.4276 29.616 22.4614 29.6329C22.7484 29.7764 23.0186 29.8439 23.2972 29.8439C23.9979 29.8439 24.4369 29.4049 24.5804 29.2614L27.4677 26.3742C27.7547 26.0871 28.2106 25.741 28.7424 25.741C29.2659 25.741 29.6964 26.0702 29.9581 26.3573C29.9666 26.3657 29.9666 26.3657 29.975 26.3742L34.6267 31.0259C35.4963 31.887 35.4963 32.7734 34.6351 33.6683Z"
                                            fill="white"/>
                                        <path
                                            d="M21.6168 9.51496C23.8287 9.88642 25.838 10.9333 27.442 12.5373C29.046 14.1413 30.0844 16.1506 30.4643 18.3625C30.5572 18.9197 31.0384 19.308 31.5872 19.308C31.6547 19.308 31.7138 19.2996 31.7813 19.2911C32.4061 19.1898 32.8197 18.5989 32.7184 17.9741C32.2625 15.2979 30.9962 12.8581 29.0629 10.9248C27.1296 8.99154 24.6898 7.7252 22.0136 7.26932C21.3889 7.16801 20.8064 7.58168 20.6966 8.19797C20.5869 8.81425 20.9921 9.41365 21.6168 9.51496Z"
                                            fill="white"/>
                                        <path
                                            d="M39.9542 17.6449C39.2028 13.238 37.126 9.22793 33.9349 6.03675C30.7437 2.84557 26.7336 0.768768 22.3267 0.017406C21.7104 -0.0923436 21.1279 0.32977 21.0182 0.946056C20.9169 1.57078 21.3305 2.1533 21.9553 2.26305C25.8894 2.92999 29.4773 4.79573 32.3308 7.64078C35.1843 10.4943 37.0416 14.0822 37.7086 18.0163C37.8014 18.5735 38.2826 18.9619 38.8314 18.9619C38.8989 18.9619 38.958 18.9534 39.0256 18.945C39.6418 18.8521 40.0639 18.2612 39.9542 17.6449Z"
                                            fill="white"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-accent cs_mb_10">
                                        {{ __('Call Us') }}
                                    </p>
                                    <h2 class="m-0 fw-medium cs_fs_16 cs_lh_base">
                                        (+505) 2291 1357<br/>
                                        (+505) 8477 8876<br/>
                                        (+505) 8181 4369
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center cs_mb_30">
                                <div
                                    class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M34.1388 5H5.86125C4.63868 5.00132 3.46656 5.48758 2.60207 6.35207C1.73758 7.21656 1.25132 8.38868 1.25 9.61125V30.3888C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3888V9.61125C38.7487 8.38868 38.2624 7.21656 37.3979 6.35207C36.5334 5.48758 35.3613 5.00132 34.1388 5ZM5.86125 7.5H34.1388C34.6985 7.50066 35.2351 7.72331 35.6309 8.1191C36.0267 8.51489 36.2493 9.05151 36.25 9.61125V10.5675L20 21.0138L3.75 10.5675V9.61125C3.75066 9.05151 3.97331 8.51489 4.3691 8.1191C4.76489 7.72331 5.30151 7.50066 5.86125 7.5ZM34.1388 32.5H5.86125C5.30151 32.4993 4.76489 32.2767 4.3691 31.8809C3.97331 31.4851 3.75066 30.9485 3.75 30.3888V13.54L19.3237 23.5512C19.5254 23.681 19.7602 23.75 20 23.75C20.2398 23.75 20.4746 23.681 20.6763 23.5512L36.25 13.54V30.3888C36.2493 30.9485 36.0267 31.4851 35.6309 31.8809C35.2351 32.2767 34.6985 32.4993 34.1388 32.5Z"
                                            fill="white"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-accent cs_mb_10">
                                        {{ __('Email Us') }}
                                    </p>
                                    <h2 class="m-0 fw-medium cs_fs_16 cs_lh_base">
                                        vc.gerencia@sodesalogistic.com<br/>
                                        admin@sodesalogistic.com
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1">
                    <div class="cs_contact_wrap cs_type_1 position-relative">
                        <form action="#"
                              class="cs_contact_form bg-white cs_pt_64 cs_pl_80 cs_pr_80 cs_pb_80 cs_pl_lg_30 cs_pr_lg_30 position-relative cs_rounded_20 filter-lg"
                              data-src="assets/img/contact_bg_pattern.svg">
                            <div class="cs_section_heading cs_style_1 text-center cs_mb_30">
                                <div class="cs_section_heading_in">
                                    <h2 class="cs_fs_36 m-0">
                                        {{ __('Get in Touch with Us') }}
                                    </h2>
                                </div>
                            </div>
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15" type="text"
                                   placeholder="{{ __('Your Name') }}">
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15" type="email"
                                   placeholder="{{ __('Email') }}">
                            <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_30"
                                      placeholder="{{ __('Message') }}" cols="30" rows="4"></textarea>
                            <button
                                class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden">
                                <span>
                                    {{ __('Send Message') }}
                                </span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section  -->
@endsection
