@extends('layouts.app')
@section('title', 'Coupon On Top - The Best Coupons, Promo Codes & Cash Back Offers')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')
    <main>
        {{-- <section class="w-full overflow-hidden">
            <div
                class="featured-carousel glide group mx-auto my-4 w-full max-w-lg max-w-xl px-4 pb-4 xl:max-w-xl glide--ltr glide--carousel cursor-auto">
                <div class="glide__track" data-glide-el="track" style="overflow: visible">
                    <div class="glide__slides">
                        <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--clone"
                            style="width: 1248px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/v1749216776.jpg.webp" alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/size_660x360.v1749216776.jpg.webp" alt=""
                                            width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        CouponOnTop Exclusive! 15% Off Sitewide
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at Academy Sports + Outdoors
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Reveal Code
                                    </p>
                                </div>
                            </div>
                            <div class=" top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #ffffff">
                                <img src="/images/banner/040rhHxzTl3TRQcxijH2G9K.fit_limit.quality_80.size_86x86.v1749066117.png.webp"
                                    alt="Academy Sports + Outdoors" class="aspect-square h-auto w-full object-contain"
                                    width="86" height="86">
                            </div>
                        </a>
                        <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--clone"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-secondary-image.fit_limit.quality_80.size_330x360.v1748882023.jpg.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-primary-image.fit_limit.quality_80.size_660x360.v1748882023.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">

                                    <p
                                        class="mb-3 mt-auto text-xs uppercase leading-tight tracking-wide md:mb-5 md:tracking-widest">
                                        Your summer has arrived
                                    </p>

                                    <h2
                                        class=" tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        Find deals to check off your summer goals
                                    </h2>

                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Shop up to 60% off
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href=""
                            class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--active shadow-xl"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jx339gr5h498508yczv3kfzd-secondary-image.fit_limit.quality_80.size_330x360.v1749229552.jpg.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jx339gr5h498508yczv3kfzd-primary-image.fit_limit.quality_80.size_660x360.v1749229552.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        Buy 1 Get 1 Free Select Frames
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at EyeBuyDirect
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Shop Now
                                    </p>
                                </div>
                            </div>
                            <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #cd9249">
                                <img src="/images/banner/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_86x86.v1749062866.png.webp"
                                    srcset="https://www.CouponOnTop.com/imagery/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_86x86.v1749062866.png.webp 1x, https://www.CouponOnTop.com/imagery/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_172x172.v1749062866.png.webp 2x"
                                    type="image/webp" alt="EyeBuyDirect" class="aspect-square h-auto w-full object-contain"
                                    loading="auto" width="86" height="86">
                            </div>
                        </a>
                        <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-secondary-image.fit_limit.quality_80.size_330x360.v1749229909.jpg.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-primary-image.fit_limit.quality_80.size_660x360.v1749229909.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        15% Cash Back on Amazon Devices
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at Amazon
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Shop Now
                                    </p>
                                </div>
                            </div>
                            <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #121821">
                                <img src="/images/banner/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_86x86.v1749054405.png.webp"
                                    alt="Amazon" class="aspect-square h-auto w-full object-contain" width="86"
                                    height="86">
                            </div>
                        </a>
                        <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jx33yk40c1x4vgjcjnrsgxfb-secondary-image.fit_limit.quality_80.size_330x360.v1749246093.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jx33yk40c1x4vgjcjnrsgxfb-primary-image.fit_limit.quality_80.size_660x360.v1749246093.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        Up to 70% Off Sitewide + Extra 20% Off
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at The Children's Place
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Reveal Code
                                    </p>
                                </div>
                            </div>
                            <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #4bade9">
                                <img src="/images/banner/006vZQIsJ4eQobAo0d8bipO-color.fit_limit.quality_80.size_86x86.v1749065330.png.webp"
                                    alt="The Children's Place" class="aspect-square h-auto w-full object-contain"
                                    width="86" height="86">
                            </div>
                        </a>
                        <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jx33d8w2ggg7th9sbgabnxpe-secondary-image.fit_limit.quality_80.size_330x360.v1749229675.webp"
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jx33d8w2ggg7th9sbgabnxpe-primary-image.fit_limit.quality_80.size_660x360.v1749229675.webp"
                                            width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        4th of July Early Access Sale! Up to $450 Off Sitewide with Email Sign Up
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at Castlery
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Shop Now
                                    </p>
                                </div>
                            </div>
                            <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #a45b37">
                                <img src="/images/banner/00bLq3FRYXOttJsuMjsF7Ik-color.fit_limit.quality_80.size_86x86.v1749061868.png.webp"
                                    alt="Castlery" class="aspect-square h-auto w-full object-contain" width="86"
                                    height="86">
                            </div>
                        </a>
                        <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jx2q3mm9pz3wpceg8kp5mfp9-secondary-image.fit_limit.quality_80.size_330x360.v1749216776.jpg.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jx2q3mm9pz3wpceg8kp5mfp9-primary-image.fit_limit.quality_80.size_660x360.v1749216776.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        CouponOnTop Exclusive! 15% Off Sitewide
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at Academy Sports + Outdoors
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Reveal Code
                                    </p>
                                </div>
                            </div>
                            <div class=" top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #ffffff">
                                <img src="/images/banner/040rhHxzTl3TRQcxijH2G9K.fit_limit.quality_80.size_86x86.v1749066117.png.webp"
                                    alt="Academy Sports + Outdoors" class="aspect-square h-auto w-full object-contain"
                                    width="86" height="86">
                            </div>
                        </a>
                        <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-secondary-image.fit_limit.quality_80.size_330x360.v1748882023.jpg.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-primary-image.fit_limit.quality_80.size_660x360.v1748882023.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">

                                    <p
                                        class="mb-3 mt-auto text-xs uppercase leading-tight tracking-wide md:mb-5 md:tracking-widest">
                                        Your summer has arrived
                                    </p>

                                    <h2
                                        class=" tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        Find deals to check off your summer goals
                                    </h2>

                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Shop up to 60% off
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href=""
                            class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--clone"
                            style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jx339gr5h498508yczv3kfzd-secondary-image.fit_limit.quality_80.size_330x360.v1749229552.jpg.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jx339gr5h498508yczv3kfzd-primary-image.fit_limit.quality_80.size_660x360.v1749229552.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        Buy 1 Get 1 Free Select Frames
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at EyeBuyDirect
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Shop Now
                                    </p>
                                </div>
                            </div>
                            <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #cd9249">
                                <img src="/images/banner/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_86x86.v1749062866.png.webp"
                                    alt="EyeBuyDirect" class="aspect-square h-auto w-full object-contain" width="86"
                                    height="86">
                            </div>
                        </a><a href="" style="width: 1248px; margin-left: 13px;">
                            <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                                <div class="flex h-full w-full justify-between">
                                    <img src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-secondary-image.fit_limit.quality_80.size_330x360.v1749229909.jpg.webp"
                                        alt=""
                                        class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]"
                                        width="330" height="360">
                                    <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                        <img class="object-cover min-w-full min-h-full max-w-none"
                                            src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-primary-image.fit_limit.quality_80.size_660x360.v1749229909.jpg.webp"
                                            alt="" width="660" height="360">
                                    </picture>
                                </div>

                                <div
                                    class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                    <h2
                                        class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                        15% Cash Back on Amazon Devices
                                    </h2>

                                    <p class="mb-3 text-sm font-medium">
                                        at Amazon
                                    </p>
                                    <p
                                        class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                        Shop Now
                                    </p>
                                </div>
                            </div>
                            <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic"
                                style="--dynamic: #121821">
                                <img src="/images/banner/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_86x86.v1749054405.png.webp"
                                    alt="Amazon" class="aspect-square h-auto w-full object-contain" width="86"
                                    height="86">
                            </div>
                        </a>
                    </div>
                </div>

                <div data-glide-el="controls">
                    <button
                        class="absolute left-4 top-1/2 z-[2] grid hidden h-11 w-11 -translate-y-1/2 cursor-pointer place-items-center rounded-full bg-black group-focus-within:block group-hover:md:block"
                        data-glide-dir="&lt;" aria-label="previous">
                        <svg class="absolute left-1/2 top-1/2 inline-block h-3 w-3 -translate-x-1/2 -translate-y-1/2 rotate-180 text-white ease-out"
                            fill="currentColor" viewBox="0 0 448 512">
                            <path
                                d="M443.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 240H16c-8.8 0-16 7.2-16 16s7.2 16 16 16h377.4L244.7 420.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z">
                            </path>
                        </svg> </button>
                    <button
                        class="absolute right-4 top-1/2 z-[2] grid hidden h-11 w-11 -translate-y-1/2 cursor-pointer place-items-center rounded-full bg-black group-focus-within:block group-hover:md:block"
                        data-glide-dir="&gt;" aria-label="next">
                        <svg class="absolute left-1/2 top-1/2 inline-block h-3 w-3 -translate-x-1/2 -translate-y-1/2 text-white ease-out"
                            fill="currentColor" viewBox="0 0 448 512">
                            <path
                                d="M443.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 240H16c-8.8 0-16 7.2-16 16s7.2 16 16 16h377.4L244.7 420.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z">
                            </path>
                        </svg> </button>
                </div>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                    <button class="glide__bullet" data-glide-dir="=4"></button>
                    <button class="glide__bullet" data-glide-dir="=5"></button>
                </div>
            </div>
        </section> --}}

        <div class="mx-auto w-full max-w-xl px-4">
            {{-- <section class="mb-16 md:mb-20">
                <h1 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">The Best Coupons, Promo Codes
                    &amp; Cash Back Offers</h1>
                <div class="-mb-8 -ml-8 -mr-4 flex items-center gap-4 overflow-x-auto px-8 pb-8 font-bold scrollbar-hide">
                    <a href=""
                        class="brand-theme-white flex h-[170px] w-full min-w-80 justify-between rounded-xl shadow-lg transition-shadow duration-300 ease-out hover:shadow-xl lg:w-1/3 lg:min-w-0">
                        <div class="flex flex-col pl-5 pr-4">
                            <img src="/images/banner/01zQqjgqtTJjwG7WCM1guyc.fit_limit.quality_80.size_125x40.v1749062307.png.webp"
                                alt="Crocs" class="mt-3" width="125" height="40">
                            <p class="my-4 text-sm font-semibold leading-tight">Up to 50% Off Footwear &amp; Jibbitz +
                                Extra 25% Off</p>
                            <p class="text-xs uppercase tracking-widest underline underline-offset-4">Shop Now</p>
                        </div>
                        <img src="/images/banner/01jx31fw1cc22jn3717r874eqq-image.fit_limit.quality_80.size_160x170.v1749227663.webp"
                            alt="" class="flex h-full shrink-0 justify-end overflow-hidden rounded-xl"
                            width="160" height="170">
                    </a>
                    <a href=""
                        class="brand-theme-white flex h-[170px] w-full min-w-80 justify-between rounded-xl shadow-lg transition-shadow duration-300 ease-out hover:shadow-xl lg:w-1/3 lg:min-w-0">
                        <div class="flex flex-col pl-5 pr-4">
                            <img src="/images/banner/00EjUdKayH3nnmm3OtHBUZd.fit_limit.quality_80.size_98x40.v1749066126.jpg.webp"
                                alt="Old Navy" class="mt-3" width="98" height="40">
                            <p class="my-4 text-sm font-semibold leading-tight">6% Cash Back for Purchases Sitewide</p>
                            <p class="text-xs uppercase tracking-widest underline underline-offset-4">Shop Now</p>
                        </div>
                        <img src="/images/banner/01jx324h610s51mgtbdfbrwz0p-image.fit_limit.quality_80.size_160x170.v1749228340.webp"
                            alt="" class="flex h-full shrink-0 justify-end overflow-hidden rounded-xl"
                            width="160" height="170">
                    </a>
                    <a href=""
                        class="brand-theme-peony flex h-[170px] w-full min-w-80 justify-between rounded-xl shadow-lg transition-shadow duration-300 ease-out hover:shadow-xl lg:w-1/3 lg:min-w-0"
                        style="--backgroundColor:brand-theme-peony;--textColor:brand-theme-peony;">
                        <div class="flex flex-col pl-5 pr-4">
                            <svg class="mt-2 text-purple-700" alt="CouponOnTop" width="32" height="40"
                                fill="currentColor" viewBox="0 0 30 31">
                                <path fill-rule="evenodd"
                                    d="M16.594 13.646a590 590 0 0 0 3.704-10.357c3.302-.375 4.996.637 4.996 3.094 0 2.395-2.058 4.765-6.421 6.418-.82.31-1.589.594-2.279.845M8.8 22.182c-1.927 3.94-3.116 5.6-4.631 5.833-.686.105-1.22-.212-1.22-1.21 0-1.094 1.172-5.145 7.446-8.394-.637 1.614-1.197 2.954-1.595 3.771m18.51 2.83c-.78.24-2.15.435-3.191-.006-.982-.418-1.594-1.428-2.35-3.335-.648-1.637-1.625-4.445-2.299-6.518C26.639 12.595 30 9.341 30 5.693 30 2.299 27.206.062 21.005.84c-2.742.345-4.75.72-6.875 1.13C6.19 3.501 3.211 6.905 3.211 10.406c0 2.37 2.096 4.012 4.522 4.012 1.654 0 1.814-.913 1.324-1.276-1.03-.767-1.646-1.533-1.646-2.846 0-2.059 1.56-4.692 7.296-5.955l.97-.215c-.952 2.666-2.64 7.37-4.176 11.42C2.74 19.028 0 23.795 0 27.105 0 29.577 1.96 31 4.278 31c3.529 0 6.305-2.347 8.53-7.623.858-2.04 1.803-4.453 2.739-6.926.657 2.135 1.542 4.848 2.17 6.498.639 1.672 1.217 2.873 2.084 3.731 1.049 1.04 2.332 1.557 4.003 1.557 2.151 0 3.63-1.057 4.279-2.206.416-.734-.093-1.23-.772-1.02">
                                </path>
                            </svg>
                            <p class="my-4 text-sm font-semibold leading-tight">Shop 60% Off Summer Steals</p>
                            <p class="text-xs uppercase tracking-widest underline underline-offset-4">Discover Deals</p>
                        </div>
                        <img src="/images/banner/01jwrrrsv2zj4tv4d01nk8w37q-image.fit_limit.quality_80.size_160x170.v1748882974.png.webp"
                            alt="" class="flex h-full shrink-0 justify-end overflow-hidden rounded-xl"
                            width="160" height="170">
                    </a>
                </div>
            </section> --}}

            <section class="mb-16 md:mb-20">
                <div class="mb-6 flex flex-wrap justify-between lg:mb-0">
                    <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">
                        <a href="">Top Store new</a>
                    </h2>
                </div>
                <div class="grid grid-cols-3 place-items-center gap-x-6 gap-y-8 md:grid-cols-4 lg:grid-cols-8"
                    data-component-name="cash-back">
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-8">
                        @foreach ($latestStores as $store)
                            <a href="{{ route('view.index', ['slug' => $store->slug]) }}" class="group mb-auto block"
                                aria-label="{{ $store->name }}">
                                <div class="border-black mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic mx-auto"
                                    style="--dynamic: {{ $store->brand_color ?? '#ffffff' }}">
                                    <img src="{{ asset('storage/' . $store->image) }}" alt="{{ $store->name }}"
                                        class="aspect-square h-auto w-full object-contain" width="86" height="86"
                                        onerror="this.src='{{ asset('images/placeholder-store.png') }}';">
                                </div>
                                <div
                                    class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                                    <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce"
                                        src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                                    <strong>{{ $store->name }}</strong>
                                </div>
                            </a>
                        @endforeach
                    </div>
            </section>

            <section class="mb-8 max-w-xl pt-4 md:mb-10" id="summer-checklist">
                <div class="mb-6 flex flex-wrap items-center justify-between lg:mb-0">
                    <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">
                        <a class="block pt-12" href="">Summer Checklist</a>
                    </h2>
                </div>
                <ul class="grid grid-cols-1 gap-4 md:grid-cols-4 lg:grid-cols-5">
                    @foreach ($latestOffers as $offer)
                        @php
                            $store = $offer->store;
                            $storeSlug = $store->slug ?? null;
                            $storeName = $store->name ?? 'Store';
                            $storeImg =
                                $store && $store->image
                                    ? asset('storage/' . $store->image)
                                    : asset('images/placeholder-store.png');
                            $offerText = $offer->offer ?: $offer->code ?: 'Offer';
                            $offerDesc = $offer->description ?: $offerText;
                        @endphp

                        <li class="relative flex h-32 flex-col md:h-auto">
                            <a href="{{ $storeSlug ? route('view.index', ['slug' => $storeSlug]) : '#' }}"
                                class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"
                                aria-label="{{ $storeName }} {{ $offerText }}">
                                <img src="{{ $storeImg }}" alt="{{ $storeName }} {{ $offerText }}"
                                    class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8"
                                    style="--dynamic:#121821" width="300" height="130" loading="lazy"
                                    onerror="this.src='{{ asset('images/placeholder-store.png') }}'">
                                <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                                    <div>
                                        <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">{{ $storeName }}
                                        </h3>
                                        <p
                                            class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">
                                            {{ Str::limit($offerDesc, 80) }}
                                        </p>
                                    </div>
                                    <p
                                        class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">
                                        {{ Str::limit($offerText, 24) }}
                                    </p>
                                </div>
                                <p
                                    class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">
                                    <img class="-mb-1 -ml-1 h-4 w-4" src="/svg/images/cashback-bolt.svg" alt=""
                                        role="presentation" width="16" height="16">
                                    {{ Str::limit($offerText, 20) }}
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>

            <section class=" mb-16 md:mb-20" id="">
                <h2
                    class="normal mb-4 border-gray-200 pt-9 text-xl font-bold capitalize leading-tight tracking-wider md:leading-normal">
                    Frequently Asked Questions
                </h2>
                <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                    <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                        <span class="text-md w-4/5 md:w-2/3">How can CouponOnTop save me money when shopping
                            online?</span>
                        <div class="relative flex w-1/5 justify-end md:w-1/3">
                            <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                </path>
                            </svg> <svg
                                class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                </path>
                            </svg>
                        </div>
                    </summary>
                    <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                        <p>CouponOnTop offers several ways for shoppers to save while shopping. We feature up-to-date coupon
                            codes, free shipping offers, sales and promo codes for thousands of stores and restaurants.
                            Plus, our <a href="">cash back</a> offers pay you to shop! Activate a cash back
                            offer, shop, check out, and we'll pay you back a percentage of what you spent.</p>
                    </div>
                </details>
                <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                    <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                        <span class="text-md w-4/5 md:w-2/3">How many online stores does CouponOnTop have coupons &amp;
                            promo codes for?</span>
                        <div class="relative flex w-1/5 justify-end md:w-1/3">
                            <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                </path>
                            </svg> <svg
                                class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                </path>
                            </svg>
                        </div>
                    </summary>
                    <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                        <p>CouponOnTop has coupons and promo codes for nearly 20,000 stores, brands and restaurants. Our
                            team is constantly verifying the offers on our site to ensure you save money on every purchase.
                        </p>
                    </div>
                </details>
                <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                    <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                        <span class="text-md w-4/5 md:w-2/3">Does CouponOnTop provide cash back for online
                            purchases?</span>
                        <div class="relative flex w-1/5 justify-end md:w-1/3">
                            <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                </path>
                            </svg> <svg
                                class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                </path>
                            </svg>
                        </div>
                    </summary>
                    <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                        <p>Yes. CouponOnTop has <a href="">cash back</a> offers for nearly 3,800 stores. You can
                            access these cash back offers on our site, <a href="">via our app</a> or through our <a
                                href="">free browser extension</a>. Simply sign up for a CouponOnTop account,
                            activate the cash back offers you want to use, shop and check out as normal – we'll give you a
                            percentage of what you spent back in your CouponOnTop wallet. From there, you can redeem your
                            cash back through Venmo or PayPal and use it on … whatever you want. And yes - our cash back
                            offers stack with promo codes, too.</p>
                        <p>Note: A minimum approved balance of $5.01 is required for a redemption.</p>
                    </div>
                </details>
                <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                    <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                        <span class="text-md w-4/5 md:w-2/3">Does CouponOnTop have a browser extension?</span>
                        <div class="relative flex w-1/5 justify-end md:w-1/3">
                            <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                </path>
                            </svg> <svg
                                class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                </path>
                            </svg>
                        </div>
                    </summary>
                    <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                        <p>Yes. <a href="/extension">Install our free CouponOnTop browser extension</a>, on your preferred
                            browser (including top browsers like Chrome, Firefox, Safari and Microsoft Edge), to make sure
                            you never miss out on the best promo code for your purchase. <a href="/extension">CouponOnTop's
                                Browser Extension</a> sources and automatically applies
                            coupons and promo codes in real time while you shop online, which streamlines your online
                            shopping and lets you skip the step of hunting for coupons before checking out. The extension
                            also sources <a href="/cashback">cash back</a> offers for you, so you can stack your savings.
                        </p>
                    </div>
                </details>
                <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                    <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                        <span class="text-md w-4/5 md:w-2/3">Does CouponOnTop have an app I can use on my
                            smartphone?</span>
                        <div class="relative flex w-1/5 justify-end md:w-1/3">
                            <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                </path>
                            </svg> <svg
                                class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                fill="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                </path>
                            </svg>
                        </div>
                    </summary>
                    <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                        <p>Yes. The <a href="/mobile">CouponOnTop app</a> helps you find and use promo codes when you're
                            shopping on your phone. It also sends you notifications about great sales and offers, so that
                            you never miss out on a chance to save. You can also find and activate <a href="/cashback">cash
                                back</a> offers via the app and redeem your cash back balance.</p>
                    </div>
                </details>
            </section>

            <p class="prose mb-16 text-sm md:mb-20 md:w-2/3">
                CouponOnTop helps you save money while shopping online and in-store at your favorite retailers. Whether
                you're looking for a promo code, a coupon, a free shipping offer or the latest sales, we're constantly
                verifying and updating our best offers and deals. Plus, we provide
                you with
                <a class="" href="/cashback">cash back</a> offers to get a percentage of what you spend back in
                your pocket. For an even easier way to save,
                <a class="" href="https://www.CouponOnTop.com/extension">our browser extension</a> finds and
                automatically applies promo codes to your online shopping carts. Don't forget to check out our
                <a class="" href="/blog">blog</a> for our editors' pro shopping tips, the hottest sales, and the
                best products to buy.
            </p>
        </div>
    </main>
@endsection
@section('styles')
    <style>
        a:hover {
            color: inherit !important;
        }

        button:focus:not(:focus-visible) {
            outline: 2px solid #741fa2;
        }

        .glide__bullets {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            margin-top: 1rem;
            display: inline-flex;
        }

        .glide__bullet {
            width: 8px;
            height: 8px;
            margin: 0 4px;
            border-radius: 50%;
            background-color: #e2e8f0;
            /* bg-gray-200 */
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .glide__bullet--active {
            background-color: #000;
            /* !bg-black */
        }
    </style>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css"> -->

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Glide('.glide', {
                type: 'carousel',
                startAt: 0,
                perView: 1,
                autoplay: 3000,
                hoverpause: true,
                gap: 30
            }).mount();
        });
        new Glide('.glide-amazon', {
            type: 'carousel',
            startAt: 0,
            perView: 4, // Hiển thị 3 slide cùng lúc
            focusAt: 'center', // Tập trung vào slide giữa
            gap: 12, // Khoảng cách giữa các slide
            peek: {
                before: 0,
                after: 0
            },
            animationDuration: 600, // Thời gian chuyển động
            rewindDuration: 800, // Thời gian khi quay lại slide đầu
            breakpoints: {
                1024: {
                    perView: 2
                },
                768: {
                    perView: 1
                }
            }
        }).mount();
    </script>
@endsection
