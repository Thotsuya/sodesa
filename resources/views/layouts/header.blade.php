<!-- Start Header Section -->
<header class="cs_site_header cs_style_1 cs_type_1 cs_sticky_header cs_site_header_full_width">
    <div class="cs_top_header">
        <div class="container">
            <div class="cs_top_header_in">
                <div class="cs_top_header_left">
                    <ul class="cs_top_nav d-flex flex-wrap align-items-center cs_fs_12 text-white m-0 p-0">
                        <li><b class="fw-medium text-white">Dirección:</b> Residencial Casa Real - Calle Cuatro , Lote
                            2E-03
                        </li>
                        <li><a href="mailto:vc.gerencia@sodesalogistic.com">
                                vc.gerencia@sodesalogistic.com
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_main_header">
        <div class="container">
            <div class="cs_main_header_in">
                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/sodesa-logo.png') }}" alt="Logo">
                    </a>
                    <div class="cs_nav cs_primary_font fw-medium">
                        <ul class="cs_nav_list fw-medium text-uppercase">
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
                            <li class="menu-item-has-children">
                                <a href="#">
                                    {{ __('Languages') }}
                                </a>
                                <ul>
                                    <li><a href="{{ route('lang',['lang' => 'en']) }}">EN</a></li>
                                    <li><a href="{{ route('lang',['lang' => 'es']) }}">ES</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cs_main_header_right">
                    <div class="cs_toolbox">
                        <div class="cs_header_search_wrap position-relative">
                              <span class="cs_header_search_btn d-flex">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M24.7628 23.6399L18.3082 17.2884C19.9984 15.452 21.037 13.0234 21.037 10.3509C21.0362 4.63387 16.3273 0 10.5181 0C4.70891 0 0 4.63387 0 10.3509C0 16.0678 4.70891 20.7017 10.5181 20.7017C13.0281 20.7017 15.3301 19.8335 17.1384 18.3902L23.618 24.7667C23.9338 25.0777 24.4463 25.0777 24.7621 24.7667C25.0785 24.4557 25.0785 23.9509 24.7628 23.6399ZM10.5181 19.1092C5.60289 19.1092 1.61836 15.1879 1.61836 10.3509C1.61836 5.51376 5.60289 1.59254 10.5181 1.59254C15.4333 1.59254 19.4178 5.51376 19.4178 10.3509C19.4178 15.1879 15.4333 19.1092 10.5181 19.1092Z"
                                      fill="currentColor"/>
                                </svg>
                              </span>
                            <form
                                class="cs_header_search_form position-absolute bg-white cs_transition_3 cs_rounded_5 end-0 cs_pt_20 cs_pb_20 cs_pl_20 cs_pr_20">
                                <input type="text" placeholder="Type your keywork  ...">
                                <button class="cs_header_search_sumbit_btn">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.7628 23.6399L18.3082 17.2884C19.9984 15.452 21.037 13.0234 21.037 10.3509C21.0362 4.63387 16.3273 0 10.5181 0C4.70891 0 0 4.63387 0 10.3509C0 16.0678 4.70891 20.7017 10.5181 20.7017C13.0281 20.7017 15.3301 19.8335 17.1384 18.3902L23.618 24.7667C23.9338 25.0777 24.4463 25.0777 24.7621 24.7667C25.0785 24.4557 25.0785 23.9509 24.7628 23.6399ZM10.5181 19.1092C5.60289 19.1092 1.61836 15.1879 1.61836 10.3509C1.61836 5.51376 5.60289 1.59254 10.5181 1.59254C15.4333 1.59254 19.4178 5.51376 19.4178 10.3509C19.4178 15.1879 15.4333 19.1092 10.5181 19.1092Z"
                                            fill="currentColor"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="cs_header_contact">
                            <div class="cs_header_contact_icon text-accent">
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_81_254)">
                                        <path
                                            d="M18.1846 18.6831C18.1846 19.0607 17.8786 19.3667 17.501 19.3667C17.1234 19.3667 16.8174 19.0607 16.8174 18.6831C16.8174 18.3055 17.1234 17.9995 17.501 17.9995C17.8786 17.9995 18.1846 18.3055 18.1846 18.6831Z"
                                            fill="currentColor"/>
                                        <path
                                            d="M28.9669 19.1887C28.2043 18.4264 26.9696 18.425 26.2069 19.1885L23.9057 21.4892C23.4576 21.9378 22.7657 22.0294 22.2608 21.7065C21.5959 21.282 20.9029 20.7818 20.2015 20.2197C19.9067 19.9837 19.4765 20.0312 19.2404 20.3257C19.0044 20.6205 19.0519 21.0507 19.3467 21.2868C20.0861 21.879 20.8188 22.408 21.5246 22.8588C22.566 23.5242 23.9743 23.3549 24.8726 22.4558L27.1741 20.1551C27.3989 19.93 27.7672 19.9225 28.0022 20.1575L33.4626 25.5697C33.6904 25.7974 33.6901 26.1683 33.4626 26.3961L32.0615 27.7975C30.0521 29.8061 26.8756 30.3396 24.3361 29.0944C13.2881 23.6775 7.80304 13.9181 6.38512 11.0561C5.12742 8.51667 5.64999 5.44317 7.68555 3.40761L9.05487 2.03722C9.28292 1.80944 9.65382 1.80944 9.88159 2.03695L15.2964 7.45176C15.5244 7.6798 15.5247 8.04937 15.2964 8.27741L12.9954 10.5787C12.0963 11.4777 11.927 12.8858 12.5925 13.9267C13.212 14.8965 13.9687 15.9037 14.8414 16.9206C15.0873 17.2068 15.5188 17.24 15.8056 16.994C16.0919 16.7481 16.125 16.3166 15.8791 16.0298C15.0478 15.0615 14.3298 14.1064 13.7444 13.1902C13.4219 12.6858 13.5135 11.9942 13.9623 11.5453L16.2633 9.24432C17.0257 8.48195 17.0259 7.24748 16.2633 6.48511L10.8482 1.07004C10.088 0.310076 8.85006 0.309809 8.08823 1.07031L6.71837 2.44096C4.26812 4.89149 3.64167 8.59731 5.15999 11.6628C6.62625 14.6225 12.2995 24.7154 23.7342 30.322C24.8373 30.8627 26.0344 31.1383 27.2555 31.1383C27.2694 31.1383 27.2833 31.1375 27.2972 31.1372C27.0993 32.8214 25.6641 34.1325 23.9278 34.1325H19.5117C18.218 34.1325 17.0551 33.4136 16.4767 32.2563L15.5648 30.4333C15.4489 30.2015 15.2123 30.0555 14.9533 30.0555C14.6945 30.0555 14.4577 30.2018 14.342 30.4333L12.9148 33.2876L11.4878 30.4333C11.3719 30.2015 11.1353 30.0555 10.8763 30.0555C10.6175 30.0555 10.3807 30.2018 10.265 30.4333L8.83778 33.2876L7.41078 30.4333C7.29489 30.2015 7.0583 30.0555 6.79928 30.0555C6.54053 30.0555 6.30368 30.2018 6.18805 30.4333L4.76079 33.2876L3.33379 30.4333C3.21789 30.2015 2.98131 30.0555 2.72229 30.0555C2.46354 30.0555 2.22668 30.2018 2.11106 30.4333L0.072297 34.5106C-0.0964651 34.8481 0.0402536 35.2588 0.378045 35.4276C0.717171 35.5971 1.12706 35.4583 1.29529 35.1218L2.72229 32.2678L4.14929 35.1218C4.26518 35.3536 4.50177 35.4996 4.76079 35.4996C5.0198 35.4996 5.25639 35.3533 5.37228 35.1218L6.79928 32.2678L8.22628 35.1218C8.34217 35.3536 8.57876 35.4996 8.83778 35.4996C9.0968 35.4996 9.33339 35.3533 9.44928 35.1218L10.8763 32.2678L12.3033 35.1218C12.4192 35.3536 12.6558 35.4996 12.9148 35.4996C13.1738 35.4996 13.4104 35.3533 13.5263 35.1218L14.9535 32.2675L15.2537 32.8678C16.0649 34.4913 17.6965 35.4996 19.5117 35.4996H23.9278C26.4609 35.4996 28.5376 33.5111 28.6801 31.013C30.3435 30.7222 31.846 29.9457 33.0282 28.7641L34.4298 27.3622C35.19 26.6012 35.1898 25.3632 34.4274 24.6006L28.9669 19.1887Z"
                                            fill="currentColor"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_81_254">
                                            <rect width="35" height="35" fill="white" transform="translate(0 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="cs_header_contact_right">
                                <h3 class="text-white fw-normal cs_mb_6 cs_fs_13">
                                    {{ __('Contact Us') }}
                                </h3>
                                <h3 class="text-white m-0 cs_fs_13">(+506) 8477 8876</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Section -->
