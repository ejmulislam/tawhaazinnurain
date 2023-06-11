<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

    </head>
    <body class="antialiased">

        <!-- Hero Start -->
        <div class="relative max-w-7xl mx-auto min-h-[786px] bg-center overflow-hidden">
            <img src="/images/Taw Haa Zin Nurain Hero Image.jpg" alt="" class="hero-image">
            <div class="container mx-auto">
                <div class="flex items-center justify-between md:px-6 ">

                    <a href="">
                        <img src="/images/Taw Haa Zin Nurain Logo.png" alt="Taw Haa Zin Nurain Logo"  class="w-5xl" >
                    </a>

                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="navbar-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="navbar-link">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="navbar-link">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
            <div class="max-w-7xl mx-auto p-6 lg:p-6">
                <div class="mt-24 container mx-auto">
                    <div class="hero">

                        <!-- Content -->
                        <h1 class="hero-heading-primary">
                            কুরআন শিখুন
                            <br>
                            <span class="text-primary-0"> সহজ </span> পদ্ধতিতে
                        </h1>
                        <span class="hero-heading-primary-span">
                            কুরআনের জ্ঞানের খোজে,
                            <br>
                            ত্ব-হা যিন নূরাঈনের আঙিনায় স্বাগতম
                        </span>
                        <br>
                        <a href=""
                            class="primary-button">
                            কোর্স সমূহ
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Start -->

        <!-- All Course Start -->
        <div class="default-container">
            <div class="all-course">
                <div class="all-course-text">
                    <div class="all-course-text-border"></div>
                    <h2 class="all-course-text-heading">অভিজ্ঞ উস্তাদদের সান্যিদ্ধে <span class="all-course-text-span"> কুরআন, হাসিদের </span> আলোকে
                        ইসলামিক বেসিক বিষয়গুলো শিখুন</h2>
                </div>
                <div class="flex items-center justify-center">
                    <button class="all-course-btn">সকল কোর্স</button>
                </div>
            </div>
            <button></button>
        </div>
        <!-- All Course End -->

        <!-- All Course Semester Start -->
        <div class="default-container">
            <div class="course-semester">
                <a href="#" class="space-y-8">
                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester One
                                <br>
                                The Essentials
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester Two
                                <br>
                                Foundations
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester Three
                                <br>
                                Intermediate
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester Four
                                <br>
                                Advanced
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- All Course Semester End -->

        <!-- All Course Start -->
        <div class="default-container">
            <div class="all-course">
                <div class="all-course-text">
                    <div class="all-course-text-border"></div>
                    <h2 class="all-course-text-heading">গঠনমূলক সিলেবাসের মাধ্যমে ধাপে ধাপে
                        <span class="all-course-text-span">
                            ইসলামের খুটিনাটি
                        </span> বিষয়ে
                        <br>
                        জ্ঞান অর্জন করুন
                    </h2>
                </div>
                <div class="flex items-center justify-center">
                    <button class="all-course-btn">সকল কোর্স</button>
                </div>
            </div>
            <button></button>
        </div>
        <!-- All Course End -->

        <!-- Akida Coruse Start Start -->
        <div class="default-container">
            <div class="course-akida-responsive">

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <!-- Akida Coruse Start End -->

        <!-- About Islam Start -->
        <div class="default-container">
           <div class="about-responsive">

                <div class="about-box">
                    <img
                        class="about-icon"
                        src="/icons/about-icon.png"
                        alt="Taw Haa Zin Nurain Islamic School About Icon">
                    <span
                        class="about-span">
                        শেষ জামানায় টিকে থাকতে হলে ইসলামিক জ্ঞান অর্জন খুবই জরুরী
                    </span>
                    <h3 class="about-title">
                        কেন ইসলামিক জ্ঞান অর্জন করব?
                    </h3>
                    <p class="about-description">
                        ইসলামে জ্ঞান চর্চার গুরুত্ব অপরিসীম। এ গুরুত্বের কারণেই আল্লাহ তা‘আলা প্রথম মানুষ আদি পিতা আদম (আঃ)-কে সর্বপ্রথম শিক্ষাদান করেন। পবিত্র কুরআনে বলা হয়েছে,وَعَلَّمَ آدَمَ الْأَسْمَاءَ كُلَّهَا ثُمَّ عَرَضَهُمْ عَلَى الْمَلاَئِكَةِ فَقَالَ أَنْبِئُوْنِيْ بِأَسْمَاءِ هَـؤُلاَءِ إِنْ كُنْتُمْ صَادِقِيْنَ- ‘আর আল্লাহ আদমকে সকল বস্ত্তর নাম শিক্ষা দোন। তারপর সেসমস্ত বস্ত্ত ফেরেশতাদের সামনে উপস্থাপন করা হয়। অতঃপর আল্লাহ বলেন, আমাকে তোমরা এগুলোর নাম বলে দাও, যদি তোমরা সত্যবাদী হয়ে থাক’ (বাক্বারাহ ৩১ )। ........
                    </p>
                    <a href="#"
                        class="about-btn">
                        সম্পূর্ণ পড়ুন
                    </a>
                </div>

                <div class="about-image">
                    <img src="/images/about-image.png" alt="Taw Haa Zin Nurain Islamic School About Image">
                </div>

           </div>
        </div>
        <!-- About Islam End -->

        <!-- Islami Akida Coruse Start -->
        <div class="course-islamicAkida">

            <a href="#">
                <div class="course-islamicAkida-card">
                    <div class="course-islamicAkida-card-box">
                        <img src="" alt="" class="course-islamicAkida-card-box-image">
                        <div class="course-islamicAkida-card-box-span">
                            islamicAkida One
                            <br>
                            The Essentials
                        </div>
                    </div>

                    <div class="course-islamicAkida-card-counter">
                        <div class="course-islamicAkida-card-counter-courses">
                            <span>100</span>
                            <span>Courses</span>
                        </div>
                        <div class="course-islamicAkida-card-counter-videos">
                            <span>700+</span>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="course-islamicAkida-card">
                    <div class="course-islamicAkida-card-box">
                        <img src="" alt="" class="course-islamicAkida-card-box-image">
                        <div class="course-islamicAkida-card-box-span">
                            islamicAkida One
                            <br>
                            The Essentials
                        </div>
                    </div>

                    <div class="course-islamicAkida-card-counter">
                        <div class="course-islamicAkida-card-counter-courses">
                            <span>100</span>
                            <span>Courses</span>
                        </div>
                        <div class="course-islamicAkida-card-counter-videos">
                            <span>700+</span>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="course-islamicAkida-card">
                    <div class="course-islamicAkida-card-box">
                        <img src="" alt="" class="course-islamicAkida-card-box-image">
                        <div class="course-islamicAkida-card-box-span">
                            islamicAkida One
                            <br>
                            The Essentials
                        </div>
                    </div>

                    <div class="course-islamicAkida-card-counter">
                        <div class="course-islamicAkida-card-counter-courses">
                            <span>100</span>
                            <span>Courses</span>
                        </div>
                        <div class="course-islamicAkida-card-counter-videos">
                            <span>700+</span>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="course-islamicAkida-card">
                    <div class="course-islamicAkida-card-box">
                        <img src="" alt="" class="course-islamicAkida-card-box-image">
                        <div class="course-islamicAkida-card-box-span">
                            islamicAkida One
                            <br>
                            The Essentials
                        </div>
                    </div>

                    <div class="course-islamicAkida-card-counter">
                        <div class="course-islamicAkida-card-counter-courses">
                            <span>100</span>
                            <span>Courses</span>
                        </div>
                        <div class="course-islamicAkida-card-counter-videos">
                            <span>700+</span>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="course-islamicAkida-card">
                    <div class="course-islamicAkida-card-box">
                        <img src="" alt="" class="course-islamicAkida-card-box-image">
                        <div class="course-islamicAkida-card-box-span">
                            islamicAkida One
                            <br>
                            The Essentials
                        </div>
                    </div>

                    <div class="course-islamicAkida-card-counter">
                        <div class="course-islamicAkida-card-counter-courses">
                            <span>100</span>
                            <span>Courses</span>
                        </div>
                        <div class="course-islamicAkida-card-counter-videos">
                            <span>700+</span>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </a>

        </div>
         <!-- Islami Akida Coruse End -->
         <x-slider :images="['/images/Taw Haa Zin Nurain Hero Image.jpg', 'image2.jpg', '/images/Taw Haa Zin Nurain Hero Image.jpg', 'image2.jpg']" />


    </body>
</html>
