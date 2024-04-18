@extends('layouts.app')

@section('title', 'Contacto')

@section('seo')
    {{--    og Title and description--}}
    <meta property="og:title" content="Contacto - Sodesa Soluciones y Deesarrollos S.A"/>
    <meta property="og:description"
          content="Soluciones y Desarrollo SA, agilidad y transparencia, cumplimiento de las normativas aduaneras y tributarias, aportando seguridad, eficiencia y puntualidad."/>
@endsection


@section('content')
    <!-- Start Page Header -->
    <section class="cs_page_header position-relative background-filled d-flex align-items-center justify-content-between" data-src="{{ asset('img/bg-contact.webp') }}">
        <div class="container position-relative z-index-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-white cs_fs_18 cs_mb_5">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                            {{__('Home') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{__('Contact') }}
                    </li>
                </ol>
            </nav>
            <h1 class="cs_fs_48 cs_fs_lg_36 text-white m-0">
                {{__('Contact Us') }}
            </h1>
        </div>
        <div class="position-absolute end-0 bottom-0">
            <svg width="660" height="497" viewBox="0 0 660 497" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M240 0H660L430 497H0L240 0Z" fill="url(#paint0_linear_81_9510)"/>
                <defs>
                    <linearGradient id="paint0_linear_81_9510" x1="330" y1="78.2497" x2="375.052" y2="780.743" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" stop-opacity="0" offset="none"/>
                        <stop offset="0.9999" stop-color="#D9D9D9" stop-opacity="0.35"/>
                        <stop offset="1" stop-color="#222121" stop-opacity="0"/>
                        <stop offset="1" stop-color="#222121" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- End Page Header -->
    <!-- Start Contact Section -->
    <section class="cs_pt_133 cs_pt_lg_75 cs_pb_133 cs_pb_lg_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_30">
                        <div class="cs_section_heading_in">
                            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                {{ __('Have Any Question?') }}
                            </h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">
                                {{ __('Write a message') }}
                            </h2>
                        </div>
                    </div>
                    <form class="row">
                        <div class="col-lg-6">
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="{{ __('Your Name') }}">
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="{{ __('Email') }}">
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="{{ __('Phone') }}">
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-gray" type="text" placeholder="{{ __('Subject') }}">
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_40 bg-gray" placeholder="{{ __('Write a message') }}" cols="35" rows="7"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden">
                                <span>
                                    {{ __('Send Message') }}
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="cs_pl_60 cs_pl_lg_0 cs_pt_lg_60">
                        <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_40">
                            <div class="cs_section_heading_in">
                                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10">
                                    {{ __('Contact Information') }}
                                </h3>
                                <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">
                                    {{ __('Get in Touch with Us') }}
                                </h2>
                                <p class="m-0">
                                    {{ __('We are here to help you. If you have any questions or need assistance, feel free to contact us.') }}
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center cs_mb_30">
                            <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.6128 24.7786C30.7939 23.9259 29.8062 23.47 28.7593 23.47C27.7209 23.47 26.7247 23.9175 25.8721 24.7701L23.2043 27.4295C22.9848 27.3113 22.7653 27.2015 22.5543 27.0918C22.2503 26.9398 21.9633 26.7963 21.7185 26.6443C19.2196 25.0572 16.9486 22.9888 14.7705 20.3126C13.7152 18.9787 13.006 17.8559 12.4911 16.7162C13.1833 16.083 13.8249 15.4245 14.4497 14.7914C14.6861 14.555 14.9224 14.3102 15.1588 14.0738C16.9317 12.3009 16.9317 10.0046 15.1588 8.23172L12.8541 5.92698C12.5924 5.66527 12.3222 5.39512 12.0689 5.12497C11.5624 4.60155 11.0305 4.06124 10.4818 3.5547C9.6629 2.74425 8.6836 2.31369 7.65364 2.31369C6.62368 2.31369 5.62749 2.74425 4.78327 3.5547C4.77482 3.56315 4.77482 3.56315 4.76638 3.57159L1.89601 6.46729C0.815398 7.5479 0.199112 8.86489 0.0640356 10.3929C-0.138579 12.8581 0.587457 15.1544 1.14465 16.6571C2.5123 20.3464 4.55533 23.7655 7.60299 27.4295C11.3007 31.8448 15.7498 35.3314 20.832 37.7881C22.7738 38.7083 25.3655 39.7974 28.2612 39.9831C28.4385 39.9916 28.6242 40 28.7931 40C30.7433 40 32.3811 39.2993 33.6643 37.9063C33.6727 37.8894 33.6896 37.881 33.6981 37.8641C34.1371 37.3322 34.6436 36.851 35.1755 36.3361C35.5385 35.9899 35.9099 35.6269 36.2729 35.247C37.1087 34.3774 37.5477 33.3644 37.5477 32.326C37.5477 31.2791 37.1003 30.2745 36.2476 29.4303L31.6128 24.7786ZM34.6351 33.6683C34.6267 33.6683 34.6267 33.6767 34.6351 33.6683C34.3059 34.0229 33.9682 34.3437 33.6052 34.6983C33.0564 35.2217 32.4993 35.7704 31.9758 36.3867C31.1232 37.2985 30.1185 37.729 28.8015 37.729C28.6749 37.729 28.5398 37.729 28.4132 37.7206C25.9058 37.5602 23.5758 36.5809 21.8282 35.7451C17.0499 33.4319 12.8541 30.1479 9.36742 25.9858C6.48861 22.5161 4.56377 19.308 3.28898 15.8635C2.50385 13.7614 2.21682 12.1236 2.34345 10.5787C2.42787 9.59093 2.80777 8.77203 3.50848 8.07132L6.3873 5.19251C6.80097 4.80416 7.23997 4.5931 7.67052 4.5931C8.20239 4.5931 8.63294 4.91391 8.9031 5.18406C8.91154 5.19251 8.91998 5.20095 8.92842 5.20939C9.4434 5.6906 9.93305 6.18869 10.448 6.72056C10.7097 6.99071 10.9799 7.26086 11.25 7.53946L13.5548 9.8442C14.4497 10.7391 14.4497 11.5664 13.5548 12.4613C13.31 12.7061 13.0736 12.951 12.8288 13.1873C12.1196 13.9134 11.4442 14.5888 10.7097 15.2473C10.6929 15.2641 10.676 15.2726 10.6675 15.2895C9.9415 16.0155 10.0766 16.7247 10.2285 17.2059C10.237 17.2312 10.2454 17.2565 10.2539 17.2818C10.8533 18.7339 11.6975 20.1016 12.9807 21.7309L12.9892 21.7394C15.3192 24.6097 17.7759 26.8469 20.4859 28.5607C20.832 28.7802 21.1866 28.9575 21.5243 29.1264C21.8282 29.2783 22.1153 29.4218 22.3601 29.5738C22.3938 29.5907 22.4276 29.616 22.4614 29.6329C22.7484 29.7764 23.0186 29.8439 23.2972 29.8439C23.9979 29.8439 24.4369 29.4049 24.5804 29.2614L27.4677 26.3742C27.7547 26.0871 28.2106 25.741 28.7424 25.741C29.2659 25.741 29.6964 26.0702 29.9581 26.3573C29.9666 26.3657 29.9666 26.3657 29.975 26.3742L34.6267 31.0259C35.4963 31.887 35.4963 32.7734 34.6351 33.6683Z" fill="white"/>
                                    <path d="M21.6168 9.51496C23.8287 9.88642 25.838 10.9333 27.442 12.5373C29.046 14.1413 30.0844 16.1506 30.4643 18.3625C30.5572 18.9197 31.0384 19.308 31.5872 19.308C31.6547 19.308 31.7138 19.2996 31.7813 19.2911C32.4061 19.1898 32.8197 18.5989 32.7184 17.9741C32.2625 15.2979 30.9962 12.8581 29.0629 10.9248C27.1296 8.99154 24.6898 7.7252 22.0136 7.26932C21.3889 7.16801 20.8064 7.58168 20.6966 8.19797C20.5869 8.81425 20.9921 9.41365 21.6168 9.51496Z" fill="white"/>
                                    <path d="M39.9542 17.6449C39.2028 13.238 37.126 9.22793 33.9349 6.03675C30.7437 2.84557 26.7336 0.768768 22.3267 0.017406C21.7104 -0.0923436 21.1279 0.32977 21.0182 0.946056C20.9169 1.57078 21.3305 2.1533 21.9553 2.26305C25.8894 2.92999 29.4773 4.79573 32.3308 7.64078C35.1843 10.4943 37.0416 14.0822 37.7086 18.0163C37.8014 18.5735 38.2826 18.9619 38.8314 18.9619C38.8989 18.9619 38.958 18.9534 39.0256 18.945C39.6418 18.8521 40.0639 18.2612 39.9542 17.6449Z" fill="white"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-accent cs_mb_7">
                                    {{ __('Call Us') }}
                                </p>
                                <h2 class="m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">
                                    (+506) 8477 8876
                                </h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center cs_mb_30">
                            <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.1388 5H5.86125C4.63868 5.00132 3.46656 5.48758 2.60207 6.35207C1.73758 7.21656 1.25132 8.38868 1.25 9.61125V30.3888C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3888V9.61125C38.7487 8.38868 38.2624 7.21656 37.3979 6.35207C36.5334 5.48758 35.3613 5.00132 34.1388 5ZM5.86125 7.5H34.1388C34.6985 7.50066 35.2351 7.72331 35.6309 8.1191C36.0267 8.51489 36.2493 9.05151 36.25 9.61125V10.5675L20 21.0138L3.75 10.5675V9.61125C3.75066 9.05151 3.97331 8.51489 4.3691 8.1191C4.76489 7.72331 5.30151 7.50066 5.86125 7.5ZM34.1388 32.5H5.86125C5.30151 32.4993 4.76489 32.2767 4.3691 31.8809C3.97331 31.4851 3.75066 30.9485 3.75 30.3888V13.54L19.3237 23.5512C19.5254 23.681 19.7602 23.75 20 23.75C20.2398 23.75 20.4746 23.681 20.6763 23.5512L36.25 13.54V30.3888C36.2493 30.9485 36.0267 31.4851 35.6309 31.8809C35.2351 32.2767 34.6985 32.4993 34.1388 32.5Z" fill="white"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-accent cs_mb_7">
                                    {{ __('Email') }}
                                </p>
                                <h2 class="m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">
                                    vc.gerencia@sodesalogistic.com
                                </h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0002 0C12.0123 0 5.51367 6.49859 5.51367 14.4864C5.51367 24.3995 18.4777 38.9526 19.0296 39.5673C19.548 40.1447 20.4532 40.1437 20.9707 39.5673C21.5227 38.9526 34.4866 24.3995 34.4866 14.4864C34.4865 6.49859 27.988 0 20.0002 0ZM20.0002 36.6976C15.6371 31.5149 8.12242 21.29 8.12242 14.4866C8.12242 7.93703 13.4507 2.60875 20.0002 2.60875C26.5496 2.60875 31.8779 7.93703 31.8779 14.4865C31.8778 21.2902 24.3643 31.5133 20.0002 36.6976Z" fill="white"/>
                                    <path d="M20.0004 7.19797C15.9814 7.19797 12.7119 10.4676 12.7119 14.4865C12.7119 18.5054 15.9815 21.775 20.0004 21.775C24.0192 21.775 27.2887 18.5054 27.2887 14.4865C27.2887 10.4676 24.0192 7.19797 20.0004 7.19797ZM20.0004 19.1662C17.4199 19.1662 15.3207 17.067 15.3207 14.4865C15.3207 11.906 17.42 9.80672 20.0004 9.80672C22.5807 9.80672 24.68 11.906 24.68 14.4865C24.68 17.067 22.5807 19.1662 20.0004 19.1662Z" fill="white"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-accent cs_mb_7">
                                    {{ __('Address') }}
                                </p>
                                <h2 class="m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">
                                    Residencial Casa Real - Calle Cuatro , Lote 2E-03
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection
