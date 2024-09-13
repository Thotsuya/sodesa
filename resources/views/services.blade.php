@extends('layouts.app')

@section('title', 'Servicios')

@section('seo')
    {{--    og Title and description--}}
    <meta property="og:title" content="Servicios - Sodesa Logística Aduanera"/>
    <meta property="og:description"
          content="Soluciones y Desarrollo SA, agilidad y transparencia, cumplimiento de las normativas aduaneras y tributarias, aportando seguridad, eficiencia y puntualidad."/>
@endsection


@section('content')
    <!-- Start Page Header -->
    <section
        class="cs_page_header position-relative background-filled d-flex align-items-center justify-content-between"
        data-src="{{ asset('img/bg-services.webp') }}">
        <div class="container position-relative z-index-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-white cs_fs_18 cs_mb_5">
                    <li class="breadcrumb-item"><a href="index.html">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Services') }}</li>
                </ol>
            </nav>
            <h1 class="cs_fs_48 cs_fs_lg_36 text-white m-0">
                {{ __('Services') }}
            </h1>
        </div>
    </section>
    <!-- End Page Header -->
    <!-- Start Service Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_115 cs_pb_lg_55">
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center cs_mb_60 cs_mb_lg_40">
                <div class="cs_section_heading_in">
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">
                        {{ __('Services We Offer') }}
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div
                        class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                        <div class="d-flex flex-column align-items-start">
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px"
                                         viewBox="0 0 256 190" enable-background="new 0 0 256 190" xml:space="preserve"><g
                                            id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                           stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M48.12,27.903C48.12,13.564,59.592,2,74.023,2c14.339,0,25.903,11.564,25.903,25.903 C99.834,42.335,88.27,53.806,74.023,53.806C59.684,53.806,48.12,42.242,48.12,27.903z M191,139h-47V97c0-20.461-17.881-37-38-37H43 C20.912,60,1.99,79.14,2,98v77c-0.026,8.533,6.001,12.989,12,13c6.014,0.011,12-4.445,12-13v-75h8v88h78v-88h8l0.081,50.37 c-0.053,8.729,5.342,12.446,10.919,12.63h60C207.363,163,207.363,139,191,139z M252.209,94.097h0.292H254 c0,10.163-8.206,18.369-18.369,18.369s-18.369-8.247-18.369-18.369h1.749h0.292l12.662-41.861h-24.033v65.144h23.783v9.33h-3.041 h-23.534h-23.534h-3.041v-9.33h23.783V52.237h-24.033l12.662,41.861h0.292h1.749c0,10.163-8.206,18.369-18.369,18.369 s-18.369-8.247-18.369-18.369h1.499h0.292l13.412-44.61h30.614v-5.581c0-1.541,1.541-3.041,3.041-3.041 c1.541,0,3.041,1.541,3.041,3.041v5.54h30.614L252.209,94.097L252.209,94.097z M174.527,53.486L162.49,94.097h24.325L174.527,53.486 z M247.794,94.097l-12.038-40.611l-12.287,40.611H247.794z"></path>
                                        </g></svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 m-0">
                                    <a href="services-details.html" class="inline-block">
                                        {{ __('Legal Representation') }}
                                    </a>
                                </h2>
                            </div>
                            <p class="cs_mb_24">
{{--                                {{ __('Legal representation, Tariff classification of goods, Calculation and payment of taxes and expenses') }}--}}
                                - {{ __('Tariff classification of goods') }}<br/>
                                - {{ __('Calculation and payment of taxes and expenses') }}
                            </p>
                        </div>

                        <div class="cs_service_thumb position-relative cs_rounded_5">
                            <a href="services-details.html"
                               class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>
                            <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                 data-src="{{ asset('img/business-team-and-lawyers-discussing-contract-pape-2023-11-27-05-23-25-utc.webp') }}"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div
                        class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                        <div class="d-flex flex-column align-items-start">
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg fill="#ffffff" width="64px" height="64px" viewBox="0 -8 72 72" id="Layer_1"
                                         data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                           stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier"><title>truck-front</title>
                                            <path
                                                d="M55.81,44.35V36.41a3.09,3.09,0,0,0-3.09-3.09h-.81v-29a.8.8,0,0,0-.34-.65l-2-1.29A.77.77,0,0,0,48.41,3v9.32l-.59-1.58a5.42,5.42,0,0,0-5.07-3.53H29.24a5.43,5.43,0,0,0-5.09,3.56l-.56,1.55V3a.77.77,0,0,0-1.19-.64l-2,1.29a.8.8,0,0,0-.34.65v29h-.81a3.09,3.09,0,0,0-3.09,3.09v7.94H14.87a.77.77,0,0,0-.77.77V49.4a.77.77,0,0,0,.77.77H18.2v2a1.55,1.55,0,0,0,1.55,1.54h4.1a1.54,1.54,0,0,0,1.54-1.54v-2H46.61v2a1.54,1.54,0,0,0,1.54,1.54h4.1a1.55,1.55,0,0,0,1.55-1.54v-2h3.33a.77.77,0,0,0,.77-.77V45.12a.77.77,0,0,0-.77-.77ZM24.62,16.63H47.38v7.62H24.62Zm-.53,25.56H21.45A1.46,1.46,0,0,1,20,40.73v0a1.46,1.46,0,0,1,1.46-1.46h2.64a1.46,1.46,0,0,1,1.46,1.46v0A1.46,1.46,0,0,1,24.09,42.19Zm17.16.43H30.75a1.54,1.54,0,0,1-1.55-1.55V31.28a1.54,1.54,0,0,1,1.55-1.54h10.5a1.54,1.54,0,0,1,1.55,1.54v9.79A1.54,1.54,0,0,1,41.25,42.62Zm9.3-.43H47.91a1.46,1.46,0,0,1-1.46-1.46v0a1.46,1.46,0,0,1,1.46-1.46h2.64A1.46,1.46,0,0,1,52,40.69v0A1.46,1.46,0,0,1,50.55,42.19ZM41,35.39H31a.76.76,0,0,1-.77-.76v0a.76.76,0,0,1,.77-.76H41a.76.76,0,0,1,.76.76v0A.76.76,0,0,1,41,35.39Zm0-3.09H31a.76.76,0,0,1-.77-.76v0a.76.76,0,0,1,.77-.76H41a.76.76,0,0,1,.76.76v0A.76.76,0,0,1,41,32.3Zm0,9.27H31a.76.76,0,0,1-.77-.76v0A.76.76,0,0,1,31,40H41a.76.76,0,0,1,.76.76v0A.76.76,0,0,1,41,41.57Zm0-3.09H31a.76.76,0,0,1-.77-.76v0a.76.76,0,0,1,.77-.76H41a.76.76,0,0,1,.76.76v0A.76.76,0,0,1,41,38.48Z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 m-0"><a href="#"
                                                                       class="inline-block">
                                        {{ __('Transport of Goods') }}
                                    </a></h2>
                            </div>
                            <p class="cs_mb_24">
                                - {{ __('Receipt and exit of goods') }}<br/>
                                - {{ __('Storage of goods') }}<br/>
                                - {{ __('Maritime Transport') }}<br/>
                                - {{ __('Air Transport') }}<br/>
                                - {{ __('Land Transport') }}<br/>
                            </p>
                        </div>
                        <div class="cs_service_thumb position-relative cs_rounded_5">
                            <a href="services-details.html"
                               class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>
                            <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                 data-src="{{ asset('img/bg-about-1.webp') }}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div
                        class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                        <div class="d-flex flex-column align-items-start">
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                         xml:space="preserve" width="64px" height="64px" fill="#ffffff"><g
                                            id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                           stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <style type="text/css"> .st0 {
                                                    fill: none;
                                                    stroke: #ffffff;
                                                    stroke-width: 2;
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                    stroke-miterlimit: 10;
                                                } </style>
                                            <path class="st0"
                                                  d="M24,10.9c0,7-8,13.1-8,13.1s-8-6.1-8-13.1C8,6.5,11.6,3,16,3S24,6.5,24,10.9z"></path>
                                            <circle class="st0" cx="16" cy="11" r="2"></circle>
                                            <polyline class="st0"
                                                      points="19.2,21 25,21 29,29 3,29 7,21 12.8,21 "></polyline>
                                        </g></svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 m-0">
                                    <a href="services-details.html" class="inline-block">
                                        {{ __('Borders') }}
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="cs_mb_24">
                            - Las Manos<br/>
                            - El Espino<br/>
                            - Guasaule<br/>
                            - Peñas Blancas<br/>
                            - Corinto<br/>
                            - Tablillas<br/>
                            - El Rama<br/>
                            - Río San Juan
                        </p>
                        <div class="cs_service_thumb position-relative cs_rounded_5">
                            <a href="#"
                               class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>
                            <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                 data-src="{{ asset('img/bg-about-2.webp') }}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div
                        class="cs_service cs_style_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">

                        <div class="d-flex flex-column align-items-start">
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg fill="#ffffff" version="1.1" id="_x31_" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128"
                                         xml:space="preserve" width="64px" height="64px" stroke="#ffffff"><g
                                            id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                           stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <ellipse
                                                    transform="matrix(0.9659 -0.2588 0.2588 0.9659 -11.4851 7.6134)"
                                                    cx="23.2" cy="47.4" rx="7.8" ry="7.8"></ellipse>
                                                <path
                                                    d="M37.4,97.5h-9.5c0,0-0.5,0-0.9,0c-4.3-0.4-8-3.5-9.1-7.8l-6.5-24.2c-0.4-1.4-1.8-2.1-3-1.8c-1.4,0.4-2.1,1.8-1.8,3 l6.4,24.2c1.7,6.3,7,10.9,13.5,11.4c0.6,0.1,1.3,0.1,1.3,0.1h9.5c1.4,0,2.4-1.1,2.5-2.5C39.8,98.5,38.8,97.5,37.4,97.5z"></path>
                                                <path
                                                    d="M48.6,83.9h-13c-0.3-4.9-1.1-9.8-2.3-14.7c-0.1-0.4-0.4-1.4-0.4-1.5c-1.7-6.3-7.7-10.3-14-9.7c0,0-0.8,0.1-1,0.1 c-2.3,0.6-3.7,3-3.1,5.4l6.7,24.9c0.7,2.8,3.1,4.9,6.1,5.1h0.6h15.5v17.8c0,2.7,2.1,4.9,4.9,4.9c2.7,0,4.9-2.1,4.9-4.9V88.8 c0-1.3-0.5-2.5-1.5-3.4C51.1,84.4,49.8,83.9,48.6,83.9z"></path>
                                            </g>
                                            <g>
                                                <ellipse
                                                    transform="matrix(0.2588 -0.9659 0.9659 0.2588 31.5932 136.028)"
                                                    cx="104.4" cy="47.4" rx="7.8" ry="7.8"></ellipse>
                                                <path
                                                    d="M90.2,97.5h9.5c0,0,0.5,0,0.9,0c4.3-0.4,8-3.5,9.1-7.8l6.5-24.2c0.4-1.4,1.8-2.1,3-1.8c1.4,0.4,2.1,1.8,1.8,3l-6.4,24.2 c-1.7,6.3-7,10.9-13.5,11.4c-0.6,0.1-1.3,0.1-1.3,0.1h-9.5c-1.4,0-2.4-1.1-2.5-2.5C87.8,98.5,88.9,97.5,90.2,97.5z"></path>
                                                <path
                                                    d="M79,83.9h13c0.3-4.9,1.1-9.8,2.3-14.7c0.1-0.4,0.4-1.4,0.4-1.5c1.7-6.3,7.7-10.3,14-9.7c0,0,0.8,0.1,1,0.1 c2.3,0.6,3.7,3,3.1,5.4L106,88.4c-0.7,2.8-3.1,4.9-6.1,5.1h-0.6H83.9v17.8c0,2.7-2.1,4.9-4.9,4.9s-4.9-2.1-4.9-4.9V88.8 c0-1.3,0.5-2.5,1.5-3.4C76.5,84.4,77.8,83.9,79,83.9z"></path>
                                            </g>
                                            <rect x="38.8" y="70.8" width="50.6" height="6"></rect>
                                            <circle cx="64.1" cy="43.2" r="7.2"></circle>
                                            <path
                                                d="M52.5,67.9v-4.3h-0.1c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9v4.3h19.9v-4.3h-0.1c0-0.5,0.4-0.9,0.9-0.9 s0.9,0.4,0.9,0.9v4.3h6.2v-6.1c0-5-4-9-9-9h-18c-5,0-9,4-9,9v6.1H52.5z"></path>
                                        </g></svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 m-0">
                                    <a href="services-details.html" class="inline-block">
                                        {{ __('Customs Consulting') }}
                                    </a>
                                </h2>
                            </div>
                            <p class="cs_mb_24">
                                {{--                            Asesoría y resolución de problemas aduanales, Exportacion y Importación--}}
                                - {{ __('Advice and resolution of customs problems') }}<br/>
                                - {{ __('Export and Import') }}
                            </p>
                        </div>
                        <div class="cs_service_thumb position-relative cs_rounded_5">
                            <a href="#"
                               class="cs_service_btn d-flex align-items-center justify-content-center rounded-circle position-absolute text-white">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.8491 11.347C20.855 11.3381 20.8602 11.3289 20.8656 11.3198C20.8706 11.3114 20.8759 11.3032 20.8805 11.2946C20.8855 11.2853 20.8897 11.2757 20.8942 11.2663C20.8984 11.2573 20.9029 11.2484 20.9067 11.2392C20.9105 11.23 20.9136 11.2206 20.9169 11.2113C20.9205 11.2014 20.9243 11.1916 20.9274 11.1814C20.9302 11.1721 20.9322 11.1626 20.9346 11.1532C20.9372 11.1429 20.9401 11.1327 20.9422 11.1222C20.9444 11.1113 20.9456 11.1003 20.9472 11.0894C20.9485 11.0801 20.9503 11.0711 20.9512 11.0617C20.9532 11.0415 20.9543 11.0213 20.9543 11.001C20.9543 11.0007 20.9543 11.0004 20.9543 11.0001C20.9543 10.9998 20.9543 10.9994 20.9543 10.9991C20.9542 10.9789 20.9532 10.9586 20.9512 10.9384C20.9503 10.929 20.9485 10.92 20.9472 10.9108C20.9456 10.8998 20.9444 10.8888 20.9422 10.8779C20.9401 10.8674 20.9372 10.8572 20.9346 10.8469C20.9322 10.8375 20.9302 10.828 20.9274 10.8187C20.9243 10.8086 20.9205 10.7988 20.9169 10.7889C20.9136 10.7795 20.9105 10.7701 20.9067 10.7609C20.9029 10.7517 20.8984 10.7428 20.8941 10.7338C20.8897 10.7244 20.8855 10.7148 20.8805 10.7055C20.8759 10.6969 20.8706 10.6887 20.8656 10.6803C20.8602 10.6712 20.855 10.662 20.8491 10.6531C20.8428 10.6438 20.8359 10.635 20.8292 10.6261C20.8237 10.6187 20.8186 10.6112 20.8127 10.604C20.7996 10.588 20.7858 10.5727 20.7713 10.5581L15.026 4.81285C14.7819 4.56877 14.3862 4.56877 14.1421 4.81285C13.898 5.05692 13.898 5.45264 14.1421 5.69672L18.8204 10.375L0.88388 10.375C0.53871 10.375 0.258878 10.6548 0.258878 11C0.258878 11.3452 0.53871 11.625 0.88388 11.625L18.8204 11.625L14.1421 16.3033C13.8981 16.5474 13.8981 16.9431 14.1421 17.1872C14.3862 17.4312 14.7819 17.4313 15.026 17.1872L20.7713 11.442C20.7858 11.4274 20.7996 11.4121 20.8127 11.3962C20.8186 11.389 20.8237 11.3814 20.8292 11.374C20.8359 11.3651 20.8428 11.3563 20.8491 11.347Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>
                            <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                 data-src="{{ asset('img/consulting.jpg') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->
@endsection
