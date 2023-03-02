<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neka.am</title>
    <link rel="stylesheet" href="{{ asset('/styles/css/style.min.css') }}">
    <meta name="description" content="description">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
</head>

<body class="main__body">
<!-- Header -->

<!-- Main Page -->
<main>
    <!-- home -->
    <section class="home">
        <div class="wrapper home-wrapper">
            <div class="home-inner">
                <a href="{{ LaravelLocalization::getLocalizedURL(__('landing.non_current.locale_code'),'/') }}"
                   class="home-lang">
                    <span class="home-lang__img"><img src="@lang('landing.non_current.locale_image')" alt="uk"></span>
                    <span class="home-lang__text">@lang('landing.non_current.locale')</span>
                </a>
                <div class="home-header">
                    <div class="home-header__logo">
                        <img class="logo-desc" src="/img/logo.svg" alt="logo">
                        <img class="logo-mobile" src="/img/logo-mobile.svg" alt="logo">
                    </div>
                    <ul class="social">
                        <li class="social-item">
                            <a class="social-link" href="#" target="_blank" aria-label="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 10.0611C20 4.50451 15.5229 0 10 0C4.47715 0 0 4.50451 0 10.0611C0 15.0829 3.65686 19.2452 8.4375 20V12.9694H5.89844V10.0611H8.4375V7.84453C8.4375 5.32296 9.93043 3.93012 12.2147 3.93012C13.3087 3.93012 14.4531 4.12663 14.4531 4.12663V6.60261H13.1921C11.9499 6.60261 11.5625 7.37816 11.5625 8.17381V10.0611H14.3359L13.8926 12.9694H11.5625V20C16.3431 19.2452 20 15.0829 20 10.0611Z"
                                        fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#" target="_blank" aria-label="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10 0C7.28416 0 6.94362 0.0115116 5.87701 0.0601777C4.81263 0.108764 4.08569 0.277786 3.44958 0.525007C2.79199 0.780564 2.23432 1.1225 1.67839 1.67843C1.12246 2.23436 0.780524 2.79203 0.524967 3.44962C0.277746 4.08569 0.108725 4.81263 0.060138 5.87701C0.0114719 6.94362 0 7.28416 0 10C0 12.7158 0.0114719 13.0564 0.060138 14.123C0.108725 15.1874 0.277746 15.9143 0.524967 16.5504C0.780524 17.208 1.12246 17.7656 1.67839 18.3216C2.23432 18.8775 2.79199 19.2195 3.44958 19.475C4.08569 19.7222 4.81263 19.8913 5.87701 19.9398C6.94362 19.9885 7.28416 20 10 20C12.7158 20 13.0564 19.9885 14.123 19.9398C15.1874 19.8913 15.9143 19.7222 16.5504 19.475C17.208 19.2195 17.7656 18.8775 18.3216 18.3216C18.8775 17.7656 19.2195 17.208 19.475 16.5504C19.7222 15.9143 19.8913 15.1874 19.9398 14.123C19.9885 13.0564 20 12.7158 20 10C20 7.28416 19.9885 6.94362 19.9398 5.87701C19.8913 4.81263 19.7222 4.08569 19.475 3.44962C19.2195 2.79203 18.8775 2.23436 18.3216 1.67843C17.7656 1.1225 17.208 0.780564 16.5504 0.525007C15.9143 0.277786 15.1874 0.108764 14.123 0.0601777C13.0564 0.0115116 12.7158 0 10 0ZM10 1.80184C12.6701 1.80184 12.9864 1.812 14.0409 1.86011C15.0158 1.90461 15.5453 2.06752 15.8977 2.20443C16.3645 2.38583 16.6976 2.60257 17.0475 2.95248C17.3975 3.30239 17.6142 3.63555 17.7956 4.10229C17.9325 4.45466 18.0954 4.98415 18.1399 5.95914C18.188 7.0136 18.1982 7.32989 18.1982 10C18.1982 12.6701 18.188 12.9864 18.1399 14.0409C18.0954 15.0159 17.9325 15.5453 17.7956 15.8977C17.6142 16.3645 17.3975 16.6976 17.0475 17.0475C16.6976 17.3975 16.3645 17.6142 15.8977 17.7956C15.5453 17.9325 15.0158 18.0954 14.0409 18.1399C12.9866 18.188 12.6703 18.1982 10 18.1982C7.32969 18.1982 7.01348 18.188 5.95914 18.1399C4.98415 18.0954 4.45466 17.9325 4.10229 17.7956C3.63551 17.6142 3.30239 17.3975 2.95244 17.0475C2.60253 16.6976 2.38579 16.3645 2.20443 15.8977C2.06748 15.5453 1.90457 15.0159 1.86007 14.0409C1.81196 12.9864 1.8018 12.6701 1.8018 10C1.8018 7.32989 1.81196 7.0136 1.86007 5.95914C1.90457 4.98415 2.06748 4.45466 2.20443 4.10229C2.38579 3.63555 2.60253 3.30239 2.95244 2.95248C3.30239 2.60257 3.63551 2.38583 4.10229 2.20443C4.45466 2.06752 4.98415 1.90461 5.95914 1.86011C7.0136 1.812 7.32989 1.80184 10 1.80184ZM9.99963 13.334C8.15865 13.334 6.66627 11.8416 6.66627 10.0007C6.66627 8.15972 8.15865 6.66734 9.99963 6.66734C11.8406 6.66734 13.3329 8.15972 13.3329 10.0007C13.3329 11.8416 11.8406 13.334 9.99963 13.334ZM9.99963 4.86554C7.16353 4.86554 4.86447 7.1646 4.86447 10.0007C4.86447 12.8367 7.16353 15.1358 9.99963 15.1358C12.8357 15.1358 15.1347 12.8367 15.1347 10.0007C15.1347 7.1646 12.8357 4.86554 9.99963 4.86554ZM15.3376 5.86207C16.0003 5.86207 16.5376 5.32484 16.5376 4.66209C16.5376 3.99934 16.0003 3.46211 15.3376 3.46211C14.6749 3.46211 14.1376 3.99934 14.1376 4.66209C14.1376 5.32484 14.6749 5.86207 15.3376 5.86207Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#" target="_blank" aria-label="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99588 0C4.4673 0 0 4.47552 0 9.99588C0 14.2328 2.63266 17.8527 6.3513 19.3089C6.2608 18.5191 6.18676 17.3015 6.3842 16.4377C6.5652 15.6561 7.55244 11.4685 7.55244 11.4685C7.55244 11.4685 7.25628 10.868 7.25628 9.98766C7.25628 8.59728 8.06252 7.56068 9.06622 7.56068C9.92184 7.56068 10.3332 8.20238 10.3332 8.9675C10.3332 9.82312 9.7902 11.1065 9.50226 12.2995C9.26368 13.2949 10.0041 14.1094 10.9831 14.1094C12.7602 14.1094 14.1259 12.2336 14.1259 9.53518C14.1259 7.1411 12.4064 5.471 9.94652 5.471C7.09996 5.471 5.42986 7.6018 5.42986 9.80666C5.42986 10.6623 5.75894 11.5837 6.1703 12.0856C6.25258 12.1843 6.2608 12.2748 6.23612 12.3735C6.16208 12.6861 5.9893 13.369 5.9564 13.5088C5.91526 13.6898 5.8083 13.731 5.61908 13.6405C4.38502 13.0481 3.61168 11.2217 3.61168 9.7573C3.61168 6.60634 5.8988 3.7104 10.218 3.7104C13.6816 3.7104 16.3801 6.17852 16.3801 9.4858C16.3801 12.9329 14.2081 15.7055 11.197 15.7055C10.1851 15.7055 9.23076 15.1789 8.90992 14.5537C8.90992 14.5537 8.40806 16.4624 8.28466 16.9313C8.06252 17.8034 7.45372 18.8893 7.04236 19.5557C7.98026 19.8437 8.9675 20 10.0041 20C15.5245 20 20 15.5245 20 10.0041C19.9918 4.47552 15.5162 0 9.99588 0Z"
                                        fill="white"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="home-content">
                    <!-- Swiper -->
                    <div class="swiper mySwiper home-swiper">
                        <div class="swiper-wrapper">
                            @foreach($sliders as $slider)
                                <div class="swiper-slide">
                                    <div class="home-swiper__item">
                                        <div class="home-swiper__item-img">
                                            <img src="{{ asset('storage/'.$slider->image) }}" alt="slide">
                                        </div>
                                        <div class="home-swiper__item-content">
                                            <div class="home-swiper__item-content__inner">
                                                <div
                                                    class="home-swiper__item-content__project h3 bold">{{ $slider->short_description }}</div>
                                                <div
                                                    class="home-swiper__item-content__title bold h1">{!! $slider->title !!}
                                                </div>
                                                <p class="p home-swiper__item-content__desc">{{ $slider->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about -->
    <section class="about">
        <div class="wrapper about-wrapper">
            <div class="about-inner">
                <div class="about-left" data-aos="fade-up-right" data-aos-anchor-placement="center-bottom">
                    <h1 class="h1 about-left__title about-title">
                        {!! $about->title !!}
                    </h1>
                    <p class="about-left__text about-text p">
                        {{ $about->description }}
                    </p>
                </div>
                <div class="about-right" data-aos="fade-up-left" data-aos-anchor-placement="center-bottom">
                    <div class="about-right__img">
                        <img src="{{ asset('storage/'.$about->image) }}" alt="about-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statistic -->
    <section class="statistic" data-aos="fade-up">
        <div class="statistic-effects">
            <div class="statistic-effects__left">
                <svg width="171" height="205" viewBox="0 0 171 205" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_417_974)">
                        <path d="M171 0L0 0L0 17.4915L129.022 17.4915L0 147.262L0 172L171 0Z" fill="#FFD040"/>
                    </g>
                    <g clip-path="url(#clip1_417_974)">
                        <path d="M87 35L-84 35V52.4915L45.0223 52.4915L-84 182.262L-84 207L87 35Z" fill="#FFD040"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_417_974">
                            <rect width="172" height="171" fill="white" transform="matrix(0 -1 1 0 0 172)"/>
                        </clipPath>
                        <clipPath id="clip1_417_974">
                            <rect width="172" height="171" fill="white" transform="matrix(0 -1 1 0 -80 205)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="statistic-effects__right">
                <svg width="170" height="205" viewBox="0 0 170 205" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_205_938)">
                        <path d="M0 205L171 205V187.508L41.9777 187.508L171 57.7376V33L0 205Z" fill="#FFD040"/>
                    </g>
                    <g clip-path="url(#clip1_205_938)">
                        <path d="M84 170L255 170V152.508L125.978 152.508L255 22.7376V-2L84 170Z" fill="#FFD040"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_205_938">
                            <rect width="172" height="171" fill="white" transform="matrix(0 1 -1 0 171 33)"/>
                        </clipPath>
                        <clipPath id="clip1_205_938">
                            <rect width="172" height="171" fill="white" transform="matrix(0 1 -1 0 251 0)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="wrapper statistic-wrapper">
            <div class="statistic-inner">
                <div class="statistic-list">
                    @foreach($ratings as $rating)
                        <div class="statistic-item">
                            <div class="statistic-header">
                                <div class="statistic-number h1 bold">{{ $rating->score }}</div>
                                <div class="statistic-title bold h4">{{ $rating->title }}</div>
                            </div>
                            <p class="p statistic-text">
                                {{ $rating->description }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- projects -->
    <section class="projects" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="wrapper projects-wrapper">
            <div class="projects-header">
                <h1 class="h1 projects-title"> @lang('landing.our_projects')</h1>
            </div>
            <div class="projects-inner">
                <div class="swiper mySwiper projects-swiper">
                    <div class="swiper-wrapper projects-swiper__wrapper ">
                        @foreach($projects as $project)
                            <div class="swiper-slide projects-swiper__item">
                                <div class="projects-swiper__item-inner">
                                    <div class="projects-swiper__content">
                                        <div class="projects-swiper__img">
                                            <img src="{{ asset("storage/$project->image") }}" alt="project">
                                        </div>
                                        <div class="projects-swiper__content-inner">
                                            <div class="projects-swiper__content-title p">
                                                {{ $project->title }}
                                            </div>
                                            <p class="projects-swiper__content-desc">
                                                {{ $project->title_2 }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="projects-swiper__more">
                                        <div class="projects-swiper__more-header">
                                            <div class="projects-swiper__more-title">
                                                {{ $project->description_title }}
                                            </div>
                                        </div>
                                        <div class="projects-swiper__more-body">
                                            <p class="projects-swiper__more-desc">
                                                {{ $project->description }}
                                            </p>
                                        </div>
                                        <div class="projects-swiper__more-footer">
                                            <a href="#" class="btn modal__btn" data-modal="#project-{{ $project->id }}">
                                                @lang('landing.see_all_photos')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="swiper-slide projects-swiper__item"></div>
                    </div>
                    <div class="swiper-button-arrow swiper-button-next" data-text="View Next"></div>
                    <div class="swiper-button-arrow swiper-button-prev" data-text="View Previous"></div>
                </div>
            </div>
            <div class="projects-footer">
                <button class="btn btn-projects">See more</button>
            </div>
        </div>
    </section>
    <!-- clients -->
    <section class="clients" data-loop="{{ count($partners) > 5 ? 'true': 'false' }}" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="wrapper clients-wrapper">
            <div class="clients-header">
                <h1 class="h1 clients-title"> @lang('landing.out_partners') @endlang</h1>
            </div>
            <div class="clients-inner">
                <div class="swiper clients-list">
                    <div class="swiper-wrapper">
                        @foreach($partners as $partner)
                            <div class="swiper-slide">
                                <div class="clients-item">
                                    <a href="#" target="_blank" aria-label="clients"
                                       class="clients-item__link clients-link">
                                        <img src="{{ asset("storage/$partner->image") }}" alt="" class="clients-item__img clients-img">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- infos -->
    <section class="infos" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="infos-effects">
            <div class="infos-effects__left effect-1" data-depth="0.2">
                <svg width="98" height="196" viewBox="0 0 98 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_214_888)">
                        <path d="M97.5 97.5L0 0L0 19.48L78.02 97.5L0 175.53L0 195.01L97.5 97.5Z" fill="white"
                              fill-opacity="0.1"/>
                        <path d="M58.64 97.5001L0 38.8601L0 58.3401L39.16 97.5001L0 136.66L0 156.14L58.64 97.5001Z"
                              fill="#FFD040"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_214_888">
                            <rect width="97.5" height="195.01" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="infos-effects__left effect-2" data-origin-x="2" data-depth="0.3">
                <svg width="98" height="196" viewBox="0 0 98 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_214_882)">
                        <path d="M0 97.5098L97.5 195.01V175.53L19.48 97.5098L97.5 19.4798V-0.000228882L0 97.5098Z"
                              fill="white" fill-opacity="0.1"/>
                        <path d="M38.86 97.5097L97.5 156.15V136.67L58.34 97.5097L97.5 58.3497V38.8697L38.86 97.5097Z"
                              fill="#FFD040"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_214_882">
                            <rect width="97.5" height="195.01" fill="white"
                                  transform="matrix(-1 0 0 -1 97.5 195.01)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="infos-effects__right effect-1" data-depth="0.2">
                <svg width="98" height="196" viewBox="0 0 98 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_214_879)">
                        <path d="M97.5 97.5L0 0V19.48L78.02 97.5L0 175.53V195.01L97.5 97.5Z" fill="white"
                              fill-opacity="0.1"/>
                        <path d="M58.64 97.5001L0 38.8601V58.3401L39.16 97.5001L0 136.66V156.14L58.64 97.5001Z"
                              fill="#FFD040"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_214_879">
                            <rect width="97.5" height="195.01" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="infos-effects__right effect-2" data-depth="0.3">
                <svg width="95" height="196" viewBox="0 0 95 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_214_885)">
                        <path d="M0 97.5098L97.5 195.01V175.53L19.48 97.5098L97.5 19.4798V-0.000228882L0 97.5098Z"
                              fill="white" fill-opacity="0.1"/>
                        <path d="M38.86 97.5097L97.5 156.15V136.67L58.34 97.5097L97.5 58.3497V38.8697L38.86 97.5097Z"
                              fill="#FFD040"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_214_885">
                            <rect width="97.5" height="195.01" fill="white"
                                  transform="matrix(-1 0 0 -1 97.5 195.01)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="wrapper infos-wrapper">
            <div class="infos-inner">
                <div class="infos-inner__images">
                    <div class="infos-inner__images-big" data-depth="0.3">
                        <img src="{{ asset('/img/preview-big.svg') }}" alt="preview">
                    </div>
                    <div class="infos-inner__images-small" data-depth="0.3">
                        <img src="{{ asset('/img/preview-small.svg') }}" alt="preview">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@foreach($projects as $project)
    <!-- Modal -->
    <div class="modal__wrapper" id="project-{{ $project->id }}">
        <div class="modal__content">
            <div class="modal__close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.2997 5.70997C17.9097 5.31997 17.2797 5.31997 16.8897 5.70997L11.9997 10.59L7.10973 5.69997C6.71973 5.30997 6.08973 5.30997 5.69973 5.69997C5.30973 6.08997 5.30973 6.71997 5.69973 7.10997L10.5897 12L5.69973 16.89C5.30973 17.28 5.30973 17.91 5.69973 18.3C6.08973 18.69 6.71973 18.69 7.10973 18.3L11.9997 13.41L16.8897 18.3C17.2797 18.69 17.9097 18.69 18.2997 18.3C18.6897 17.91 18.6897 17.28 18.2997 16.89L13.4097 12L18.2997 7.10997C18.6797 6.72997 18.6797 6.08997 18.2997 5.70997Z"/>
                </svg>
            </div>
            <div class="modal__body">
                <div class="swiper gallery-top swiper-container slider-modal modal-projects__big mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach($project->gallery as $gallery)
                            <div class="swiper-slide">
                                <div class="modal-projects__img big">
                                    <img src="{{ asset("storage/$gallery") }}" alt="slide">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper gallery-thumbs swiper-container slider-modal modal-projects__small mySwiper1">
                    <div class="swiper-wrapper">
                        @foreach($project->gallery as $gallery)
                            <div class="swiper-slide">
                                <div class="modal-projects__img small">
                                    <img src="{{ asset("storage/$gallery") }}" alt="slide">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<footer class="footer">
    <div class="footer-inner">
        <div class="wrapper footer-wrapper">
            <nav class="footer-nav">
                <div class="footer-contacts">
                    <div class="footer-menu__title p2"> @lang('landing.Contact_Us')</div>
                    <div class="footer-contacts__list">
                        <div class="footer-contacts__item footer-contacts__address">
                            <a href="#" class="footer-contacts__link">
                                0089 Yerevan, Armenia, 4/5 Arin Berd lane 5, Erebuni</a>
                        </div>
                        <div class="footer-contacts__item">
                            @lang('landing.phone'): <a href="#" class="footer-contacts__link">+374 11-711-411</a>
                        </div>
                        <div class="footer-contacts__item">
                            @lang('landing.email'): <a href="#" class="footer-contacts__link"> info@neka.am</a>
                        </div>
                    </div>
                    <div class="footer-mobile__title p2">Follow Us</div>
                    <ul class="social">
                        <li class="social-item">
                            <a class="social-link" href="#" target="_blank" aria-label="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 10.0611C20 4.50451 15.5229 0 10 0C4.47715 0 0 4.50451 0 10.0611C0 15.0829 3.65686 19.2452 8.4375 20V12.9694H5.89844V10.0611H8.4375V7.84453C8.4375 5.32296 9.93043 3.93012 12.2147 3.93012C13.3087 3.93012 14.4531 4.12663 14.4531 4.12663V6.60261H13.1921C11.9499 6.60261 11.5625 7.37816 11.5625 8.17381V10.0611H14.3359L13.8926 12.9694H11.5625V20C16.3431 19.2452 20 15.0829 20 10.0611Z"
                                        fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#" target="_blank" aria-label="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10 0C7.28416 0 6.94362 0.0115116 5.87701 0.0601777C4.81263 0.108764 4.08569 0.277786 3.44958 0.525007C2.79199 0.780564 2.23432 1.1225 1.67839 1.67843C1.12246 2.23436 0.780524 2.79203 0.524967 3.44962C0.277746 4.08569 0.108725 4.81263 0.060138 5.87701C0.0114719 6.94362 0 7.28416 0 10C0 12.7158 0.0114719 13.0564 0.060138 14.123C0.108725 15.1874 0.277746 15.9143 0.524967 16.5504C0.780524 17.208 1.12246 17.7656 1.67839 18.3216C2.23432 18.8775 2.79199 19.2195 3.44958 19.475C4.08569 19.7222 4.81263 19.8913 5.87701 19.9398C6.94362 19.9885 7.28416 20 10 20C12.7158 20 13.0564 19.9885 14.123 19.9398C15.1874 19.8913 15.9143 19.7222 16.5504 19.475C17.208 19.2195 17.7656 18.8775 18.3216 18.3216C18.8775 17.7656 19.2195 17.208 19.475 16.5504C19.7222 15.9143 19.8913 15.1874 19.9398 14.123C19.9885 13.0564 20 12.7158 20 10C20 7.28416 19.9885 6.94362 19.9398 5.87701C19.8913 4.81263 19.7222 4.08569 19.475 3.44962C19.2195 2.79203 18.8775 2.23436 18.3216 1.67843C17.7656 1.1225 17.208 0.780564 16.5504 0.525007C15.9143 0.277786 15.1874 0.108764 14.123 0.0601777C13.0564 0.0115116 12.7158 0 10 0ZM10 1.80184C12.6701 1.80184 12.9864 1.812 14.0409 1.86011C15.0158 1.90461 15.5453 2.06752 15.8977 2.20443C16.3645 2.38583 16.6976 2.60257 17.0475 2.95248C17.3975 3.30239 17.6142 3.63555 17.7956 4.10229C17.9325 4.45466 18.0954 4.98415 18.1399 5.95914C18.188 7.0136 18.1982 7.32989 18.1982 10C18.1982 12.6701 18.188 12.9864 18.1399 14.0409C18.0954 15.0159 17.9325 15.5453 17.7956 15.8977C17.6142 16.3645 17.3975 16.6976 17.0475 17.0475C16.6976 17.3975 16.3645 17.6142 15.8977 17.7956C15.5453 17.9325 15.0158 18.0954 14.0409 18.1399C12.9866 18.188 12.6703 18.1982 10 18.1982C7.32969 18.1982 7.01348 18.188 5.95914 18.1399C4.98415 18.0954 4.45466 17.9325 4.10229 17.7956C3.63551 17.6142 3.30239 17.3975 2.95244 17.0475C2.60253 16.6976 2.38579 16.3645 2.20443 15.8977C2.06748 15.5453 1.90457 15.0159 1.86007 14.0409C1.81196 12.9864 1.8018 12.6701 1.8018 10C1.8018 7.32989 1.81196 7.0136 1.86007 5.95914C1.90457 4.98415 2.06748 4.45466 2.20443 4.10229C2.38579 3.63555 2.60253 3.30239 2.95244 2.95248C3.30239 2.60257 3.63551 2.38583 4.10229 2.20443C4.45466 2.06752 4.98415 1.90461 5.95914 1.86011C7.0136 1.812 7.32989 1.80184 10 1.80184ZM9.99963 13.334C8.15865 13.334 6.66627 11.8416 6.66627 10.0007C6.66627 8.15972 8.15865 6.66734 9.99963 6.66734C11.8406 6.66734 13.3329 8.15972 13.3329 10.0007C13.3329 11.8416 11.8406 13.334 9.99963 13.334ZM9.99963 4.86554C7.16353 4.86554 4.86447 7.1646 4.86447 10.0007C4.86447 12.8367 7.16353 15.1358 9.99963 15.1358C12.8357 15.1358 15.1347 12.8367 15.1347 10.0007C15.1347 7.1646 12.8357 4.86554 9.99963 4.86554ZM15.3376 5.86207C16.0003 5.86207 16.5376 5.32484 16.5376 4.66209C16.5376 3.99934 16.0003 3.46211 15.3376 3.46211C14.6749 3.46211 14.1376 3.99934 14.1376 4.66209C14.1376 5.32484 14.6749 5.86207 15.3376 5.86207Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#" target="_blank" aria-label="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99588 0C4.4673 0 0 4.47552 0 9.99588C0 14.2328 2.63266 17.8527 6.3513 19.3089C6.2608 18.5191 6.18676 17.3015 6.3842 16.4377C6.5652 15.6561 7.55244 11.4685 7.55244 11.4685C7.55244 11.4685 7.25628 10.868 7.25628 9.98766C7.25628 8.59728 8.06252 7.56068 9.06622 7.56068C9.92184 7.56068 10.3332 8.20238 10.3332 8.9675C10.3332 9.82312 9.7902 11.1065 9.50226 12.2995C9.26368 13.2949 10.0041 14.1094 10.9831 14.1094C12.7602 14.1094 14.1259 12.2336 14.1259 9.53518C14.1259 7.1411 12.4064 5.471 9.94652 5.471C7.09996 5.471 5.42986 7.6018 5.42986 9.80666C5.42986 10.6623 5.75894 11.5837 6.1703 12.0856C6.25258 12.1843 6.2608 12.2748 6.23612 12.3735C6.16208 12.6861 5.9893 13.369 5.9564 13.5088C5.91526 13.6898 5.8083 13.731 5.61908 13.6405C4.38502 13.0481 3.61168 11.2217 3.61168 9.7573C3.61168 6.60634 5.8988 3.7104 10.218 3.7104C13.6816 3.7104 16.3801 6.17852 16.3801 9.4858C16.3801 12.9329 14.2081 15.7055 11.197 15.7055C10.1851 15.7055 9.23076 15.1789 8.90992 14.5537C8.90992 14.5537 8.40806 16.4624 8.28466 16.9313C8.06252 17.8034 7.45372 18.8893 7.04236 19.5557C7.98026 19.8437 8.9675 20 10.0041 20C15.5245 20 20 15.5245 20 10.0041C19.9918 4.47552 15.5162 0 9.99588 0Z"
                                        fill="white"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="footer-copyright">
        <p class="p3"> @lang('landing.all_rights')</p>
                        <span class="footer-inner__copyright-text"> Website by </span>
                        <a href="https://intdevels.com" target="_blank" class="footer-inner__copyright-link">
                           IntDevels Team
                        </a>
    </div>
</footer>

</body>

<script src="{{ asset('/styles/js/scripts.js') }}"></script>

</html>
