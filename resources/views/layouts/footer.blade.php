<!-- Start Footer -->
<footer class="cs_footer background-opacity text-white" data-src="{{ asset('img/bg-footer.webp') }}">
    <div class="container position-relative">
        <div
            class="cs_footer_top d-flex justify-content-between align-items-start align-items-md-center cs_pt_46 cs_pb_46 cs_column_gap_10 cs_row_gap_15 flex-md-row  flex-column">
            <div class="cs_footer_contact_info">
                <h3 class="text-white fw-normal cs_mb_4 cs_fs_14 cs_lh_lg">
                    {{ __('Contact Us') }}
                </h3>
                <h2 class="text-white fw-medium m-0 cs_fs_16">(+505) 8477 8876</h2>
            </div>
            <div class="cs_footer_logo wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><img
                    src="{{ asset('assets/img/sodesa-logo.png') }}" alt="Logo"></div>
            <div class="cs_footer_contact_info">
                <h3 class="text-white fw-normal cs_mb_4 cs_fs_16 cs_lh_lg">
                    {{ __('Email') }}
                </h3>
                <h2 class="text-white fw-medium m-0 cs_fs_16">
                    <a
                        href="mailto:vc.gerencia@sodesalogistic.com">vc.gerencia@sodesalogistic.com
                    </a><br/>
{{--                    admn@sodesalogistic.com--}}
                    <a href="mailto:admin@sodesalogistic.com">
                        admin@sodesalogistic.com
                    </a>
                </h2>
            </div>
        </div>
        <div class="cs_footer_main cs_pt_30 cs_pb_30">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cs_footer_item cs_pt_20 cs_pb_20">
                        <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5">
                            <a href="https://www.facebook.com/profile.php?id=61556356303338"
                               class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cs_footer_item cs_pt_20 cs_pb_20">
                        <h2 class="cs_widget_title text-white cs_fs_22 cs_mb_22">
                            {{ __('Discover') }}
                        </h2>
                        <ul class="cs_menu_widget text-uppercase">
                            <li>
                                <a href="{{ route('home') }}">
                                    {{ __('Home') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    {{ __('About') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">
                                    {{ __('Services') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    {{ __('Contact') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_copyright text-center cs_fs_124 cs_lh_lg cs_pt_36 cs_pb_36 position-relative">
        <div class="container">
            <p class="m-0">Copyright © {{ date('Y') }}
                <a href="https://www.sodesalogistic.com" class="text-white">Sodesa Logistic</a> All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
<!-- End Footer -->
