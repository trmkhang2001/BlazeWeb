@extends('layouts.app')
@section('title','Home')
@section('content')
<main>
    <section class="w-full overflow-hidden">
        <div class="featured-carousel glide group mx-auto my-4 w-full max-w-lg max-w-xl px-4 pb-4 xl:max-w-xl glide--ltr glide--carousel cursor-auto">
            <div class="glide__track" data-glide-el="track" style="overflow: visible">
                <div class="glide__slides">
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--clone" style="width: 1248px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/v1749216776.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/size_660x360.v1749216776.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    RetailMeNot Exclusive! 15% Off Sitewide
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at Academy Sports + Outdoors
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Reveal Code
                                </p>
                            </div>
                        </div>
                        <div class=" top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #ffffff">
                            <img src="/images/banner/040rhHxzTl3TRQcxijH2G9K.fit_limit.quality_80.size_86x86.v1749066117.png.webp" alt="Academy Sports + Outdoors" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--clone" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-secondary-image.fit_limit.quality_80.size_330x360.v1748882023.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-primary-image.fit_limit.quality_80.size_660x360.v1748882023.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">

                                <p class="mb-3 mt-auto text-xs uppercase leading-tight tracking-wide md:mb-5 md:tracking-widest">
                                    Your summer has arrived
                                </p>

                                <h2 class=" tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    Find deals to check off your summer goals
                                </h2>

                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Shop up to 60% off
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--active shadow-xl" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jx339gr5h498508yczv3kfzd-secondary-image.fit_limit.quality_80.size_330x360.v1749229552.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jx339gr5h498508yczv3kfzd-primary-image.fit_limit.quality_80.size_660x360.v1749229552.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    Buy 1 Get 1 Free Select Frames
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at EyeBuyDirect
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Shop Now
                                </p>
                            </div>
                        </div>
                        <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #cd9249">
                            <img src="/images/banner/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_86x86.v1749062866.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_86x86.v1749062866.png.webp 1x, https://www.retailmenot.com/imagery/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_172x172.v1749062866.png.webp 2x" type="image/webp" alt="EyeBuyDirect" class="aspect-square h-auto w-full object-contain" loading="auto" width="86" height="86">
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-secondary-image.fit_limit.quality_80.size_330x360.v1749229909.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-primary-image.fit_limit.quality_80.size_660x360.v1749229909.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    15% Cash Back on Amazon Devices
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at Amazon
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Shop Now
                                </p>
                            </div>
                        </div>
                        <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #121821">
                            <img src="/images/banner/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_86x86.v1749054405.png.webp" alt="Amazon" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jx33yk40c1x4vgjcjnrsgxfb-secondary-image.fit_limit.quality_80.size_330x360.v1749246093.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jx33yk40c1x4vgjcjnrsgxfb-primary-image.fit_limit.quality_80.size_660x360.v1749246093.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    Up to 70% Off Sitewide + Extra 20% Off
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at The Children's Place
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Reveal Code
                                </p>
                            </div>
                        </div>
                        <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #4bade9">
                            <img src="/images/banner/006vZQIsJ4eQobAo0d8bipO-color.fit_limit.quality_80.size_86x86.v1749065330.png.webp" alt="The Children's Place" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jx33d8w2ggg7th9sbgabnxpe-secondary-image.fit_limit.quality_80.size_330x360.v1749229675.webp" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jx33d8w2ggg7th9sbgabnxpe-primary-image.fit_limit.quality_80.size_660x360.v1749229675.webp" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    4th of July Early Access Sale! Up to $450 Off Sitewide with Email Sign Up
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at Castlery
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Shop Now
                                </p>
                            </div>
                        </div>
                        <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #a45b37">
                            <img src="/images/banner/00bLq3FRYXOttJsuMjsF7Ik-color.fit_limit.quality_80.size_86x86.v1749061868.png.webp" alt="Castlery" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jx2q3mm9pz3wpceg8kp5mfp9-secondary-image.fit_limit.quality_80.size_330x360.v1749216776.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jx2q3mm9pz3wpceg8kp5mfp9-primary-image.fit_limit.quality_80.size_660x360.v1749216776.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    RetailMeNot Exclusive! 15% Off Sitewide
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at Academy Sports + Outdoors
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Reveal Code
                                </p>
                            </div>
                        </div>
                        <div class=" top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #ffffff">
                            <img src="/images/banner/040rhHxzTl3TRQcxijH2G9K.fit_limit.quality_80.size_86x86.v1749066117.png.webp" alt="Academy Sports + Outdoors" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-secondary-image.fit_limit.quality_80.size_330x360.v1748882023.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jwrqvsgv657nws7tgar6xw8h-primary-image.fit_limit.quality_80.size_660x360.v1748882023.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">

                                <p class="mb-3 mt-auto text-xs uppercase leading-tight tracking-wide md:mb-5 md:tracking-widest">
                                    Your summer has arrived
                                </p>

                                <h2 class=" tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    Find deals to check off your summer goals
                                </h2>

                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Shop up to 60% off
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="glide__slide relative mr-6 rounded-2xl md:rounded-4xl glide__slide--clone" style="width: 1248px; margin-left: 13px; margin-right: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jx339gr5h498508yczv3kfzd-secondary-image.fit_limit.quality_80.size_330x360.v1749229552.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jx339gr5h498508yczv3kfzd-primary-image.fit_limit.quality_80.size_660x360.v1749229552.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    Buy 1 Get 1 Free Select Frames
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at EyeBuyDirect
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Shop Now
                                </p>
                            </div>
                        </div>
                        <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #cd9249">
                            <img src="/images/banner/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_86x86.v1749062866.png.webp" alt="EyeBuyDirect" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                        </div>
                    </a><a href="" style="width: 1248px; margin-left: 13px;">
                        <div class="relative h-[400px] overflow-hidden rounded-2xl md:h-[360px] md:rounded-4xl">
                            <div class="flex h-full w-full justify-between">
                                <img src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-secondary-image.fit_limit.quality_80.size_330x360.v1749229909.jpg.webp" alt="" class="flex hidden min-h-full w-auto md:block md:w-1/3 md:max-w-[330px]" width="330" height="360">
                                <picture class="primary-image flex min-h-full w-full md:w-2/3 md:max-w-[660px]">
                                    <img class="object-cover min-w-full min-h-full max-w-none" src="/images/banner/01jx33mdnb73q8m80kk92kb2bf-primary-image.fit_limit.quality_80.size_660x360.v1749229909.jpg.webp" alt="" width="660" height="360">
                                </picture>
                            </div>

                            <div class="text-white md:bg-black absolute bottom-0 left-0 right-0 z-10 flex w-full flex-col bg-gradient-to-t from-gray-900 px-6 py-2.5 font-bold md:left-[25%] md:h-[360px] md:w-72 md:bg-none">


                                <h2 class="mt-auto tracking-none mb-3 text-lg font-semibold md:text-xl md:font-normal md:tracking-normal">
                                    15% Cash Back on Amazon Devices
                                </h2>

                                <p class="mb-3 text-sm font-medium">
                                    at Amazon
                                </p>
                                <p class="mb-auto mt-4 hidden text-xs uppercase tracking-widest underline underline-offset-4 md:block">
                                    Shop Now
                                </p>
                            </div>
                        </div>
                        <div class="border-dynamic top-1/2 absolute left-4 z-20 h-24 w-24 md:-bottom-6 md:left-8 md:top-auto md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #121821">
                            <img src="/images/banner/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_86x86.v1749054405.png.webp" alt="Amazon" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                        </div>
                    </a>
                </div>
            </div>

            <div data-glide-el="controls">
                <button class="absolute left-4 top-1/2 z-[2] grid hidden h-11 w-11 -translate-y-1/2 cursor-pointer place-items-center rounded-full bg-black group-focus-within:block group-hover:md:block" data-glide-dir="&lt;" aria-label="previous">
                    <svg class="absolute left-1/2 top-1/2 inline-block h-3 w-3 -translate-x-1/2 -translate-y-1/2 rotate-180 text-white ease-out" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M443.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 240H16c-8.8 0-16 7.2-16 16s7.2 16 16 16h377.4L244.7 420.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"></path>
                    </svg> </button>
                <button class="absolute right-4 top-1/2 z-[2] grid hidden h-11 w-11 -translate-y-1/2 cursor-pointer place-items-center rounded-full bg-black group-focus-within:block group-hover:md:block" data-glide-dir="&gt;" aria-label="next">
                    <svg class="absolute left-1/2 top-1/2 inline-block h-3 w-3 -translate-x-1/2 -translate-y-1/2 text-white ease-out" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M443.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 240H16c-8.8 0-16 7.2-16 16s7.2 16 16 16h377.4L244.7 420.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z"></path>
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
    </section>

    <div class="mx-auto w-full max-w-xl px-4">
        <p class="mb-12 mt-2 text-center text-xs">
            When you buy through links on RetailMeNot <a class="underline" href="" target="_blank">we may earn a commission.</a>
        </p>

        <section class="mb-16 md:mb-20">
            <h1 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">The Best Coupons, Promo Codes &amp; Cash Back Offers</h1>
            <div class="-mb-8 -ml-8 -mr-4 flex items-center gap-4 overflow-x-auto px-8 pb-8 font-bold scrollbar-hide">
                <a href="" class="brand-theme-white flex h-[170px] w-full min-w-80 justify-between rounded-xl shadow-lg transition-shadow duration-300 ease-out hover:shadow-xl lg:w-1/3 lg:min-w-0">
                    <div class="flex flex-col pl-5 pr-4">
                        <img src="/images/banner/01zQqjgqtTJjwG7WCM1guyc.fit_limit.quality_80.size_125x40.v1749062307.png.webp" alt="Crocs" class="mt-3" width="125" height="40">
                        <p class="my-4 text-sm font-semibold leading-tight">Up to 50% Off Footwear &amp; Jibbitz + Extra 25% Off</p>
                        <p class="text-xs uppercase tracking-widest underline underline-offset-4">Shop Now</p>
                    </div>
                    <img src="/images/banner/01jx31fw1cc22jn3717r874eqq-image.fit_limit.quality_80.size_160x170.v1749227663.webp" alt="" class="flex h-full shrink-0 justify-end overflow-hidden rounded-xl" width="160" height="170">
                </a>
                <a href="" class="brand-theme-white flex h-[170px] w-full min-w-80 justify-between rounded-xl shadow-lg transition-shadow duration-300 ease-out hover:shadow-xl lg:w-1/3 lg:min-w-0">
                    <div class="flex flex-col pl-5 pr-4">
                        <img src="/images/banner/00EjUdKayH3nnmm3OtHBUZd.fit_limit.quality_80.size_98x40.v1749066126.jpg.webp" alt="Old Navy" class="mt-3" width="98" height="40">
                        <p class="my-4 text-sm font-semibold leading-tight">6% Cash Back for Purchases Sitewide</p>
                        <p class="text-xs uppercase tracking-widest underline underline-offset-4">Shop Now</p>
                    </div>
                    <img src="/images/banner/01jx324h610s51mgtbdfbrwz0p-image.fit_limit.quality_80.size_160x170.v1749228340.webp" alt="" class="flex h-full shrink-0 justify-end overflow-hidden rounded-xl" width="160" height="170">
                </a>
                <a href="" class="brand-theme-peony flex h-[170px] w-full min-w-80 justify-between rounded-xl shadow-lg transition-shadow duration-300 ease-out hover:shadow-xl lg:w-1/3 lg:min-w-0" style="--backgroundColor:brand-theme-peony;--textColor:brand-theme-peony;">
                    <div class="flex flex-col pl-5 pr-4">
                        <svg class="mt-2 text-purple-700" alt="RetailMeNot" width="32" height="40" fill="currentColor" viewBox="0 0 30 31">
                            <path fill-rule="evenodd" d="M16.594 13.646a590 590 0 0 0 3.704-10.357c3.302-.375 4.996.637 4.996 3.094 0 2.395-2.058 4.765-6.421 6.418-.82.31-1.589.594-2.279.845M8.8 22.182c-1.927 3.94-3.116 5.6-4.631 5.833-.686.105-1.22-.212-1.22-1.21 0-1.094 1.172-5.145 7.446-8.394-.637 1.614-1.197 2.954-1.595 3.771m18.51 2.83c-.78.24-2.15.435-3.191-.006-.982-.418-1.594-1.428-2.35-3.335-.648-1.637-1.625-4.445-2.299-6.518C26.639 12.595 30 9.341 30 5.693 30 2.299 27.206.062 21.005.84c-2.742.345-4.75.72-6.875 1.13C6.19 3.501 3.211 6.905 3.211 10.406c0 2.37 2.096 4.012 4.522 4.012 1.654 0 1.814-.913 1.324-1.276-1.03-.767-1.646-1.533-1.646-2.846 0-2.059 1.56-4.692 7.296-5.955l.97-.215c-.952 2.666-2.64 7.37-4.176 11.42C2.74 19.028 0 23.795 0 27.105 0 29.577 1.96 31 4.278 31c3.529 0 6.305-2.347 8.53-7.623.858-2.04 1.803-4.453 2.739-6.926.657 2.135 1.542 4.848 2.17 6.498.639 1.672 1.217 2.873 2.084 3.731 1.049 1.04 2.332 1.557 4.003 1.557 2.151 0 3.63-1.057 4.279-2.206.416-.734-.093-1.23-.772-1.02"></path>
                        </svg>
                        <p class="my-4 text-sm font-semibold leading-tight">Shop 60% Off Summer Steals</p>
                        <p class="text-xs uppercase tracking-widest underline underline-offset-4">Discover Deals</p>
                    </div>
                    <img src="/images/banner/01jwrrrsv2zj4tv4d01nk8w37q-image.fit_limit.quality_80.size_160x170.v1748882974.png.webp" alt="" class="flex h-full shrink-0 justify-end overflow-hidden rounded-xl" width="160" height="170">
                </a>
            </div>
        </section>

        <section class="mb-16 md:mb-20">
            <div class="text-sm font-bold uppercase tracking-widest">cha-ching</div>
            <div class="mb-6 flex flex-wrap justify-between lg:mb-0">
                <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">
                    <a href="">Cash Back at Stores We Love</a>
                </h2>
                <a class="block text-xs font-semibold uppercase tracking-widest underline underline-offset-4" href="">All Cash Back</a>
            </div>
            <div class="grid grid-cols-3 place-items-center gap-x-6 gap-y-8 md:grid-cols-4 lg:grid-cols-8" data-component-name="cash-back">
                <a href="" class="group mb-auto">
                    <div class="border-black mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #ffffff">
                        <img src="/images/banner/04dAc7n7dh6y2pzuUkF1aye-color.fit_limit.quality_80.size_86x86.v1749064663.png.webp" alt="CVS" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">25%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
                <a href="" class="group mb-auto">
                    <div class="border-dynamic mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #000000">
                        <img src="/images/banner/07n04aV91uxtKAbVE1y7GYL-color.fit_limit.quality_80.size_86x86.v1749055320.png.webp" alt="Net-A-Porter" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">5%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
                <a href="" class="group mb-auto">
                    <div class="border-black mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #ffffff">
                        <img src="/images/banner/04ZBKo5V9qhNJGgM4czj8dG-color.fit_limit.quality_80.size_86x86.v1749064238.jpg.webp" alt="PrettyLittleThing" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">16%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
                <a href="" class="group mb-auto">
                    <div class="border-dynamic mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #003b95">
                        <img src="/images/banner/01e7y9VXYRuSvUuOaPXUCOG.fit_limit.quality_80.size_86x86.v1749064243.png.webp" alt="Booking.com" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">16%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
                <a href="" class="group mb-auto">
                    <div class="border-dynamic mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #cc0000">
                        <img src="/images/banner/00ebVEnjbokXgtzpToBWfNz-color.fit_limit.quality_80.size_86x86.v1749062060.png.webp" alt="Target" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">2%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
                <a href="" class="group mb-auto">
                    <div class="border-dynamic mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #121821">
                        <img src="/images/banner/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_86x86.v1749054405.png.webp" alt="Amazon" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">15%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
                <a href="" class="group mb-auto">
                    <div class="border-dynamic mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #e31837">
                        <img src="/images/banner/06G4S7x8qfUqc6F8eChJj9b-color.fit_limit.quality_80.size_86x86.v1749061933.png.webp" alt="GNC" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">5%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
                <a href="" class="group mb-auto">
                    <div class="border-black mb-3 transition-shadow duration-300 ease-out group-hover:shadow-xl md:h-32 md:w-32 p-4 md:p-5 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #ffffff">
                        <img src="/images/banner/05exxGj3D7XT5VhRxpiPZJI.fit_limit.quality_80.size_86x86.v1749053908.png.webp" alt="VistaPrint" class="aspect-square h-auto w-full object-contain" width="86" height="86">
                    </div>
                    <div class="mx-auto max-w-28 text-center text-xs leading-tight group-hover:underline group-hover:underline-offset-4 lg:text-sm">
                        <img class="-mr-1 mb-1 inline-block h-4 w-4 group-hover:animate-bounce" src="/svg/images/cashback-bolt.svg" alt="" width="16" height="16">
                        <strong class="lg:mr-2">12%</strong>
                        Cash&nbsp;Back
                    </div>
                </a>
            </div>
        </section>

        <section class="mb-12 flex flex-col md:mb-20 md:flex-row md:border md:border-gray-200 md:shadow-md" data-component-class="video_spotlight_module" data-discoverable="" data-content-uuid="01jwyfmx938dn582e2kf0rt8tx" data-content-datastore="video_spotlight" x-data="{ openVideoModal() { return window.dispatchEvent(new CustomEvent('load-modal', { detail: { type: 'video-spotlight-modal', uuid: '01jwyfmx938dn582e2kf0rt8tx' } })) } }">
            <div class="aspect-video w-full bg-gray-200 drop-shadow md:w-2/3 md:drop-shadow-none">
                <iframe class="h-full w-full" src="https://embed.mindstamp.com/e/OOyWdjYgpVcL" title="Video Spotlight" allowfullscreen="" allow="encrypted-media; geolocation" scrolling="no" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="order-first w-full md:order-none md:mx-6 md:flex md:w-1/3 md:flex-col md:place-content-center md:py-1">
                <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:mb-0 md:text-2xl md:leading-normal">Top Summer Travel Deals for the Trip of a Lifetime</h2>
                <p class="mt-2.5 hidden md:block">Get away for a while in style — without breaking the bank. Watch our interactive video for our exclusive, limited-time savings.</p>
            </div>
        </section>

        <div class="mb-16 md:mb-20">
            <a class="brand-theme-yellow-light flex items-center justify-between gap-8 overflow-x-scroll rounded px-8 shadow-md scrollbar-hide" href="">
                <img src="https://www.retailmenot.com/imagery/dream-bars/01jwrxz2stqwt5b46kmnt9t17d-desktop-image.fit_limit.quality_80.size_2400x160.v1748888423.png.webp" srcset="https://www.retailmenot.com/imagery/dream-bars/01jwrxz2stqwt5b46kmnt9t17d-desktop-image.fit_limit.quality_80.size_2400x160.v1748888423.png.webp 1x, https://www.retailmenot.com/imagery/dream-bars/01jwrxz2stqwt5b46kmnt9t17d-desktop-image.fit_limit.quality_80.size_4800x320.v1748888423.png.webp 2x" type="image/webp" alt="dream bar" class="hidden sm:block" width="2400" height="160">
                <img src="https://www.retailmenot.com/imagery/dream-bars/01jwrxz2stqwt5b46kmnt9t17d-mobile-image.fit_limit.quality_80.size_840x560.v1748888423.png.webp" srcset="https://www.retailmenot.com/imagery/dream-bars/01jwrxz2stqwt5b46kmnt9t17d-mobile-image.fit_limit.quality_80.size_840x560.v1748888423.png.webp 1x, https://www.retailmenot.com/imagery/dream-bars/01jwrxz2stqwt5b46kmnt9t17d-mobile-image.fit_limit.quality_80.size_1680x1120.v1748888423.png.webp 2x" type="image/webp" alt="dream bar" class="block sm:hidden" width="840" height="560">
            </a>
        </div>

        <section class="mb-8 max-w-xl pt-4 md:mb-10" id="summer-checklist">
            <div class="mb-6 flex flex-wrap items-center justify-between lg:mb-0">
                <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">
                    <a class="block pt-12" href="">Summer Checklist</a>
                </h2>
                <a class="block text-sm text-xs font-semibold uppercase tracking-widest underline underline-offset-4" href="">Summer Checklist Deals</a>
            </div>
            <ul class="grid grid-cols-1 gap-4 md:grid-cols-4 lg:grid-cols-5">
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="imagery/merchants/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_300x130.v1749054405.png.webp"
                            alt="Amazon 15% Cash Back on Amazon Devices"
                            class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8"
                            style="--dynamic:#121821" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Amazon</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">15% Cash Back on Amazon Devices</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Cash Back</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-mb-1 -ml-1 h-4 w-4" src="/svg/images/cashback-bolt.svg" alt="" role="presentation" width="16" height="16">

                            +15% Back
                        </p>
                    </a>
                    <div class="hidden shrink-0 px-2 pt-1 text-[10px] font-medium uppercase tracking-widest text-gray-500 md:block">
                        Sponsored
                    </div>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="/imagery/merchants/07pdpFTo6O6qbTtqGNW07Rx-color.fit_limit.quality_80.size_300x130.v1749255537.png.webp" alt="Talbots 40% Off Sitewide + Free Shipping" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#000000" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Talbots</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Summer CYBER MONDAY! 40% off + FREE shipping!</p>
                            </div>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            40% Off
                        </p>
                    </a>
                    <div class="hidden shrink-0 px-2 pt-1 text-[10px] font-medium uppercase tracking-widest text-gray-500 md:block">
                        Sponsored
                    </div>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="">
                        <img src="/imagery/merchants/01XRnUl7OSueaApseZ3TYDs-color.fit_limit.quality_80.size_300x130.v1749162508.png.webp" type="image/webp" alt="SHEIN 30% Off Orders $29+ Sitewide for RetailMeNot Shoppers" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#000000" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">SHEIN</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">30% Off Orders $29+ Sitewide for RetailMeNot Shoppers</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            30% Off
                        </p>
                    </a>
                    <div class="hidden shrink-0 px-2 pt-1 text-[10px] font-medium uppercase tracking-widest text-gray-500 md:block">
                        Sponsored
                    </div>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="/imagery/merchants/07BICzigEou6yFZs2obVYnd-color.fit_limit.quality_80.size_300x130.v1749055051.png.webp" alt="Vrbo 5% Cash Back for Purchases Sitewide" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#245abc" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Vrbo</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">5% Cash Back for Purchases Sitewide</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Cash Back</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-mb-1 -ml-1 h-4 w-4" src="/svg/images/cashback-bolt.svg" alt="" role="presentation" width="16" height="16">

                            +5% Back
                        </p>
                    </a>
                    <div class="hidden shrink-0 px-2 pt-1 text-[10px] font-medium uppercase tracking-widest text-gray-500 md:block">
                        Sponsored
                    </div>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="/imagery/merchants/05d8BQK2kXXFeZMEsCYyBRK.fit_limit.quality_80.size_300x130.v1749126741.png.webp" alt="Chewy.com $20 Off $49+ orders" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#ffffff" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div class="absolute top-0 mx-auto hidden w-3/4 self-center border-b border-gray-200 md:block"></div>
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Chewy.com</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">$20 Off $49+ orders</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            $20 Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="/imagery/merchants/02iAE2HnrEV7uKUT6fWrKXq-color.fit_limit.quality_80.size_300x130.v1749062367.png.webp" alt="Papa John's Up to 30% Off Sitewide" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#ffffff" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div class="absolute top-0 mx-auto hidden w-3/4 self-center border-b border-gray-200 md:block"></div>
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Papa John's</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Up to 30% Off Sitewide</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            30% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="/imagery/merchants/00ebVEnjbokXgtzpToBWfNz-color.fit_limit.quality_80.size_300x130.v1749062060.png.webp" alt="Target June Target Top Deals! Up to 60% Off" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#cc0000" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Target</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">June Target Top Deals! Up to 60% Off</p>
                            </div>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            60% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="/imagery/merchants/02IBCOV7nxvxAlFU4oGi3LQ-color.fit_limit.quality_80.size_300x130.v1749061641.png.webp" alt="Walgreens Photo 50% Off Prints, Posters &amp; Enlargements" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#00a397" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Walgreens Photo</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">50% Off Prints, Posters &amp; Enlargements</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            50% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col" >
                        <img src="/imagery/merchants/02goalC5qwNuNuTLheya0KS-color.fit_limit.quality_80.size_300x130.v1749066133.png.webp" alt="Nike Extra 20% Off Select Styles" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#000000" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Nike</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Extra 20% Off Select Styles</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            20% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col">
                        <img src="/imagery/merchants/02RGwAdnXnoxI2rPZTySLqq-color.fit_limit.quality_80.size_300x130.v1749066124.png.webp" alt="Macy's Friends &amp; Family Sale! Extra 30% Off + 15% Off Beauty" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#e11a2a" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Macy's</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Friends &amp; Family Sale! Extra 30% Off + 15% Off Beauty</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            15% Off
                        </p>
                    </a>
                </li>
            </ul>
        </section>
        <div class="lg:space-x-2 flex flex-col bg-dynamic lg:flex-row lg:flex-wrap" style="--dynamic:#36C1D214">
            <div class="w-full text-center">
                <a class="mx-auto inline-block" href=""><img class="mx-auto my-4 w-full" src="/svg/images/realdeal-logo.svg" alt="The real deal by RetailMeNot" width="280" height="80"></a>
            </div>


            <div class="relative p-4 lg:w-2/3">
                <a href="" x-data="" @click="window.Alpine.store('googleEvents').sendClickEvent({'template':'home','module':'spotlight','element':'card','position':'1','object_type':'spotlight','object_uuid':'01jftwajdz6vvxvmjj3x3ne24d','destination_url':'https:\/\/www.retailmenot.com\/blog\/summer-checklist'})">
                    <div class="mb-4 relative">
                        <img src="https://www.retailmenot.com/imagery/spotlights/01jftwajdz6vvxvmjj3x3ne24d.fit_limit.quality_80.size_1363x700.v1749130530.jpg.webp" srcset="https://www.retailmenot.com/imagery/spotlights/01jftwajdz6vvxvmjj3x3ne24d.fit_limit.quality_80.size_1363x700.v1749130530.jpg.webp 1x, https://www.retailmenot.com/imagery/spotlights/01jftwajdz6vvxvmjj3x3ne24d.fit_limit.quality_80.size_2726x1400.v1749130530.jpg.webp 2x" type="image/webp" alt="Summer Checklist" class="block h-auto w-full rounded-2xl md:rounded-4xl" width="1363" height="700">

                    </div>
                    <div class="px-4">
                        <div class="mb-1 text-sm font-semibold uppercase">Summer Checklist</div>
                        <h2 class="mb-2 text-xl font-bold">Backyard Bliss or Epic Adventure?</h2>
                        <p class="text-gray-600">Use this planning guide to make the most of your summer</p>
                    </div>
                </a>
            </div>
            <div class="p-4 lg:w-1/3">
                <a href="" x-data="" @click="window.Alpine.store('googleEvents').sendClickEvent({'template':'home','module':'spotlight','element':'card','position':'2','object_type':'spotlight','object_uuid':'01jvz6djq8k39vkbw13ew9srs3','destination_url':'https:\/\/www.retailmenot.com\/blog\/25-best-fathers-day-gifts'})">
                    <div class="mb-4 flex items-center">
                        <img src="https://www.retailmenot.com/imagery/spotlights/01jvz6djq8k39vkbw13ew9srs3.fit_limit.quality_80.size_250x128.v1748921080.jpg.webp" srcset="https://www.retailmenot.com/imagery/spotlights/01jvz6djq8k39vkbw13ew9srs3.fit_limit.quality_80.size_250x128.v1748921080.jpg.webp 1x, https://www.retailmenot.com/imagery/spotlights/01jvz6djq8k39vkbw13ew9srs3.fit_limit.quality_80.size_500x256.v1748921080.jpg.webp 2x" type="image/webp" alt="25 Best Picks" class="h-32 w-36 rounded-2xl object-cover" width="250" height="128">
                        <div class="p-4">
                            <p class="mb-1 text-sm font-semibold uppercase">25 Best Picks</p>
                            <h2 class="text-gray-600">Father's Day Gifts</h2>
                        </div>

                    </div>
                </a>
                <a href="" x-data="" @click="window.Alpine.store('googleEvents').sendClickEvent({'template':'home','module':'spotlight','element':'card','position':'3','object_type':'spotlight','object_uuid':'01jftvv4mkrae4z3ced1kz9344','destination_url':'https:\/\/www.retailmenot.com\/blog\/made-in-america-our-favorite-brands.html'})">
                    <div class="mb-4 flex items-center">
                        <img src="https://www.retailmenot.com/imagery/spotlights/01jftvv4mkrae4z3ced1kz9344.fit_limit.quality_80.size_250x128.v1749130868.jpg.webp" srcset="https://www.retailmenot.com/imagery/spotlights/01jftvv4mkrae4z3ced1kz9344.fit_limit.quality_80.size_250x128.v1749130868.jpg.webp 1x, https://www.retailmenot.com/imagery/spotlights/01jftvv4mkrae4z3ced1kz9344.fit_limit.quality_80.size_500x256.v1749130868.jpg.webp 2x" type="image/webp" alt="Shop Now" class="h-32 w-36 rounded-2xl object-cover" width="250" height="128">
                        <div class="p-4">
                            <p class="mb-1 text-sm font-semibold uppercase">Shop Now</p>
                            <h2 class="text-gray-600">Exceptional American-Made Brands</h2>
                        </div>

                    </div>
                </a>
                <a href="" x-data="" @click="window.Alpine.store('googleEvents').sendClickEvent({'template':'home','module':'spotlight','element':'card','position':'4','object_type':'spotlight','object_uuid':'01jtv0t588x0baygbvr70665sc','destination_url':'https:\/\/www.retailmenot.com\/blog\/tag\/local-gem'})">
                    <div class="mb-4 flex items-center">
                        <img src="https://www.retailmenot.com/imagery/spotlights/01jtv0t588x0baygbvr70665sc.fit_limit.quality_80.size_250x128.v1748024662.jpg.webp" srcset="https://www.retailmenot.com/imagery/spotlights/01jtv0t588x0baygbvr70665sc.fit_limit.quality_80.size_250x128.v1748024662.jpg.webp 1x, https://www.retailmenot.com/imagery/spotlights/01jtv0t588x0baygbvr70665sc.fit_limit.quality_80.size_500x256.v1748024662.jpg.webp 2x" type="image/webp" alt="Local Gem" class="h-32 w-36 rounded-2xl object-cover" width="250" height="128">
                        <div class="p-4">
                            <p class="mb-1 text-sm font-semibold uppercase">Local Gem</p>
                            <h2 class="text-gray-600">Discover the Best Indie Shops Across the Country</h2>
                        </div>

                    </div>
                </a>
            </div>
        </div>

        <div class="mt-12">
            <div class="mx-auto max-w-xl overflow-hidden">
                <div class="group relative glide--ltr glide--carousel cursor-auto">
                    <div class="relative mb-6 flex gap-x-4">
                        <a href="" target="_blank" title="(opens in new tab)">
                            <div class="border-dynamic h-24 w-24 border-gray-200 p-2 overflow-hidden rounded-full border bg-dynamic" style="--dynamic: #121821">
                                <img src="https://www.retailmenot.com/imagery/merchants/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_86x86.v1749054405.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_86x86.v1749054405.png.webp 1x, https://www.retailmenot.com/imagery/merchants/05kie42h3YvHwjr4G1w80Qq-color.fit_limit.quality_80.size_172x172.v1749054405.png.webp 2x" type="image/webp" alt="Amazon" class="aspect-square h-auto w-full object-contain" loading="auto" width="86" height="86">
                            </div>
                        </a>
                        <div>
                            <p class="text-xl font-bold xs:text-2xl">Today's Top Deals</p>
                            <p class="text-xs font-semibold uppercase tracking-wider">Presented by Amazon</p>
                            <a href="" target="_blank" title="(opens in new tab)" class="mt-3 flex items-center text-xs font-bold uppercase tracking-wider" data-component-name="product_deal.cbo_link" opensnewtab="true" x-data="outclickHandler({'siteLink': '?u=Y3HARKE6XZGVBDWGWGGJYL7MNY&amp;outclicked=true&amp;element=product_deals', 'offerType': 'REWARD', 'requestSlug': 'amazon.com', 'offerUuid': 'Y3HARKE6XZGVBDWGWGGJYL7MNY'})" @click="window.Alpine.store('googleEvents').sendClickEvent({ 'template': 'home', 'module': 'product_deals', 'element': 'product_deals', 'item': 'cbo_link' }); juggleTabs($event);"><img class="h-5 w-5" src="/svg/images/cashback-bolt.svg" alt="" role="presentation" width="20" height="20">
                                <span class="underline underline-offset-2">
                                    15% Cash Back on Amazon Devices
                                </span>
                                <svg class="ml-1 h-5 w-5" fill="none" viewBox="0 0 20 12">
                                    <path fill="currentColor" d="M13.363.161c.172-.215.516-.215.73 0l4.985 4.985a.494.494 0 0 1 0 .73l-4.984 4.984c-.215.215-.559.215-.73 0l-.344-.3a.58.58 0 0 1 0-.73l3.609-3.61H.516A.496.496 0 0 1 0 5.704v-.43c0-.257.215-.515.516-.515h16.113l-3.61-3.567a.58.58 0 0 1 0-.73z"></path>
                                </svg></a>
                        </div>
                        <a href="" target="_blank" title="(opens in new tab)" class="absolute bottom-3 right-0.5 hidden h-11 items-center whitespace-nowrap rounded-full border border-black bg-white px-4 py-1.5 text-xs font-bold text-black lg:flex" data-component-name="product_deal.view_more_deals" x-data="" @click="window.blizzard?.trackClickEvent({type: 'click', event: $event, element: $el}); window.Alpine.store('googleEvents').sendClickEvent({ 'template': 'home', 'module': 'product_deals', 'element': 'product_deals', 'item': 'view_more_deals' });">View more deals</a>
                    </div>
                    <div class="glide-amazon">

                        <div class="glide h-52">
                            <div class="glide__track" data-glide-el="track" style="overflow: visible;">
                                <div class="glide__slides" style="overflow: visible; transition: transform cubic-bezier(0.165, 0.84, 0.44, 1); width: 4230px; transform: translate3d(-1410px, 0px, 0px);" x-ref="slider">
                                    <a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="06u5YV6VOC0Xcws1V0TPB6Z" data-position="1" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_125x125.v1749465028.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_125x125.v1749465028.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_250x250.v1749465028.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">43% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Amazon Fire TV Stick HD 1080p</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="0714KZFAn38Ue0zNbEdJNkf" data-position="2" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_125x125.v1749465030.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_125x125.v1749465030.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_250x250.v1749465030.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">33% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Stanley All Day Slim Bottle 20oz with Leakproof Twist on Lid (Lilac)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="04pnzu5LQZlmVuuomfRbpHO" data-position="3" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">32% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Apple AirPods Pro (2nd Gen) with MagSafe Charging Case (USB-C)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="041Lk0Ca2olnivls1LsSaE3" data-position="4" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">23% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Bkppm 70oz 6-Preset Self-Clean Slushie Machine</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="04a7LYaROQJPMJ7Uv51eQUe" data-position="5" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">20% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Dyson Supersonic Nural Limited Edition Hair Dryer (Jasper Plum)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--active" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="06u5YV6VOC0Xcws1V0TPB6Z" data-position="1" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="0" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_125x125.v1749465028.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_125x125.v1749465028.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_250x250.v1749465028.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">43% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Amazon Fire TV Stick HD 1080p</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="0714KZFAn38Ue0zNbEdJNkf" data-position="2" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="0" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_125x125.v1749465030.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_125x125.v1749465030.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_250x250.v1749465030.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">33% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Stanley All Day Slim Bottle 20oz with Leakproof Twist on Lid (Lilac)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="04pnzu5LQZlmVuuomfRbpHO" data-position="3" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="0" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">32% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Apple AirPods Pro (2nd Gen) with MagSafe Charging Case (USB-C)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="041Lk0Ca2olnivls1LsSaE3" data-position="4" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="0" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">23% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Bkppm 70oz 6-Preset Self-Clean Slushie Machine</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="04a7LYaROQJPMJ7Uv51eQUe" data-position="5" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">20% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Dyson Supersonic Nural Limited Edition Hair Dryer (Jasper Plum)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="06u5YV6VOC0Xcws1V0TPB6Z" data-position="1" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_125x125.v1749465028.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_125x125.v1749465028.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3f0475kcwy0g4y71v0pgpy.fit_limit.quality_80.size_250x250.v1749465028.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">43% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Amazon Fire TV Stick HD 1080p</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="0714KZFAn38Ue0zNbEdJNkf" data-position="2" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_125x125.v1749465030.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_125x125.v1749465030.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3m6k8ydhg7d0jxbk97fza7.fit_limit.quality_80.size_250x250.v1749465030.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">33% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Stanley All Day Slim Bottle 20oz with Leakproof Twist on Lid (Lilac)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="04pnzu5LQZlmVuuomfRbpHO" data-position="3" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jx3jdzx1k5yksdjt9bxw3h00.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">32% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Apple AirPods Pro (2nd Gen) with MagSafe Charging Case (USB-C)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="041Lk0Ca2olnivls1LsSaE3" data-position="4" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px; margin-right: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jwxy7tggrwg6bxbth3spd9j8.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">23% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Bkppm 70oz 6-Preset Self-Clean Slushie Machine</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a href="" target="_blank" title="(opens in new tab)" class="glide__slide overflow-hidden rounded-md border-l border-t border-[#F7F7F7] shadow-lg lg:hover:shadow-xl glide__slide--clone" data-component-class="product_deal.tile" data-content-datastore="blender.offer" data-content-uuid="04a7LYaROQJPMJ7Uv51eQUe" data-position="5" x-data="" @click="window.blizzard.trackClickEvent({type: 'outclick', event: $event, element: $el})" tabindex="-1" style="width: 270px; margin-left: 6px;">
                                        <div class="grid h-36 grid-cols-9">
                                            <div class="col-span-4 flex h-full items-center justify-center p-1">
                                                <img src="https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp" srcset="https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_125x125.v1749465029.jpg.webp 1x, https://www.retailmenot.com/imagery/product_offers/01jvswnz6kd7mq2q0f6qfr3xpe.fit_limit.quality_80.size_250x250.v1749465029.jpg.webp 2x" type="image/webp" alt="" class="primary-image" width="125" height="125">
                                            </div>
                                            <div class="col-span-5 flex h-36 flex-col gap-y-2 bg-[#F7F7F7] p-3">
                                                <div class="inline-flex">
                                                    <span class="inline-flex h-6 items-center rounded-md border border-[#E0E0E0] bg-white py-1 pr-1 text-xs font-semibold uppercase leading-none tracking-widest">
                                                        <img class="h-6 w-6" src="/svg/images/flame.svg" alt="" role="presentation" width="24" height="24">
                                                        <span class="pt-px">20% Off</span>
                                                    </span>
                                                </div>
                                                <div class="flex grow flex-col justify-between">
                                                    <p class="line-clamp-3 text-xs font-medium">Dyson Supersonic Nural Limited Edition Hair Dryer (Jasper Plum)</p>
                                                    <div class="flex items-center justify-center gap-x-1 sm:justify-normal">
                                                        <button class="whitespace-nowrap rounded-full bg-gray-200 px-2.5 py-2 text-xs font-bold text-black sm:px-4" tabindex="-1">Check price</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-glide-el="controls">
                            <button class="absolute left-4 top-1/2 z-[2] mt-4 grid hidden h-8 w-8 -translate-y-1/2 cursor-pointer place-items-center rounded-full bg-white group-focus-within:block group-hover:md:block" data-glide-dir="&lt;" aria-label="previous">
                                <svg class="absolute left-1/2 top-1/2 -ml-px inline-block h-4 w-4 -translate-x-1/2 -translate-y-1/2 text-black ease-out" fill="none" viewBox="0 0 11 17">
                                    <path fill="currentColor" d="m.548 7.67 6.64-6.64a1.167 1.167 0 0 1 1.656 0l1.103 1.103a1.167 1.167 0 0 1 0 1.655L5.245 8.5l4.707 4.707a1.167 1.167 0 0 1 0 1.655L8.85 15.971a1.167 1.167 0 0 1-1.656 0L.553 9.33a1.17 1.17 0 0 1-.005-1.66"></path>
                                </svg> </button>
                            <button class="absolute right-4 top-1/2 z-[2] mt-4 grid hidden h-8 w-8 -translate-y-1/2 cursor-pointer place-items-center rounded-full bg-white group-focus-within:block group-hover:md:block" data-glide-dir="&gt;" aria-label="next">
                                <svg class="absolute left-1/2 top-1/2 ml-px inline-block h-4 w-4 -translate-x-1/2 -translate-y-1/2 rotate-180 text-black ease-out" fill="none" viewBox="0 0 11 17">
                                    <path fill="currentColor" d="m.548 7.67 6.64-6.64a1.167 1.167 0 0 1 1.656 0l1.103 1.103a1.167 1.167 0 0 1 0 1.655L5.245 8.5l4.707 4.707a1.167 1.167 0 0 1 0 1.655L8.85 15.971a1.167 1.167 0 0 1-1.656 0L.553 9.33a1.17 1.17 0 0 1-.005-1.66"></path>
                                </svg> </button>
                        </div>
                        <div class="relative bottom-11 left-1/2 z-[2] inline-flex -translate-x-1/2 gap-x-2" data-glide-el="controls[nav]">
                            <button class="h-[3px] w-11 cursor-pointer rounded bg-gray-200" data-glide-dir="=0" aria-label="Go to slide 1"></button>
                            <button class="h-[3px] w-11 cursor-pointer rounded bg-gray-200" data-glide-dir="=1" aria-label="Go to slide 2"></button>
                            <button class="h-[3px] w-11 cursor-pointer rounded bg-gray-200" data-glide-dir="=2" aria-label="Go to slide 3"></button>
                            <button class="h-[3px] w-11 cursor-pointer rounded bg-gray-200" data-glide-dir="=3" aria-label="Go to slide 4"></button>
                            <button class="h-[3px] w-11 cursor-pointer rounded bg-gray-200" data-glide-dir="=4" aria-label="Go to slide 5"></button>
                        </div>
                    </div>
                    <div class="relative bottom-11 mt-8 flex items-center justify-center lg:hidden">
                        <a href="" target="_blank" title="(opens in new tab)" class="h-11 whitespace-nowrap rounded-full border border-black bg-white px-4 py-1.5 text-xs font-bold leading-8 text-black" data-component-name="product_deal.view_more_deals" x-data="" @click="window.blizzard?.trackClickEvent({type: 'click', event: $event, element: $el}); window.Alpine.store('googleEvents').sendClickEvent({ 'template': 'home', 'module': 'product_deals', 'element': 'product_deals', 'item': 'view_more_deals' });">View more deals</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="mb-8 max-w-xl pt-4 md:mb-10" id="top-deals">
            <div class="mb-6 flex flex-wrap items-center justify-between lg:mb-0">
                <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">
                    <a class="block pt-12" href="">Top Deals</a>
                </h2>
            </div>
            <ul class="grid grid-cols-1 gap-4 md:grid-cols-4 lg:grid-cols-5">
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="5XQGGYQ7XRG4LJJLSEJOKES2FE" data-position="1" x-data="outclickHandler({'siteLink': '?u=5XQGGYQ7XRG4LJJLSEJOKES2FE&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'vitaminshoppe.com', 'offerUuid': '5XQGGYQ7XRG4LJJLSEJOKES2FE'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/06Sy6cqjpu7oDIYTZEU6Nsv.fit_limit.quality_80.size_300x130.v1749061747.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/06Sy6cqjpu7oDIYTZEU6Nsv.fit_limit.quality_80.size_300x130.v1749061747.png.webp 1x, https://www.retailmenot.com/imagery/merchants/06Sy6cqjpu7oDIYTZEU6Nsv.fit_limit.quality_80.size_600x260.v1749061747.png.webp 2x" type="image/webp" alt="The Vitamin Shoppe Up to $20 Off with Minimum Spend + Free Shipping" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#f7f7f7" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">The Vitamin Shoppe</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Up to $20 Off with Minimum Spend + Free Shipping</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            $20 Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="UBLNECL3DVEWDH3K37PWKGP3X4" data-position="2" x-data="outclickHandler({'siteLink': '?u=UBLNECL3DVEWDH3K37PWKGP3X4&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'walgreens.com', 'offerUuid': 'UBLNECL3DVEWDH3K37PWKGP3X4'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/036AtPTSfEi6mICq0oPedW7-color.fit_limit.quality_80.size_300x130.v1749059013.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/036AtPTSfEi6mICq0oPedW7-color.fit_limit.quality_80.size_300x130.v1749059013.png.webp 1x, https://www.retailmenot.com/imagery/merchants/036AtPTSfEi6mICq0oPedW7-color.fit_limit.quality_80.size_600x260.v1749059013.png.webp 2x" type="image/webp" alt="Walgreens Extra 15% Off $35+ Sitewide" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#e51837" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Walgreens</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Extra 15% Off $35+ Sitewide</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            15% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="MR74YMEOTZEPND6G4FVB7QTXC4" data-position="3" x-data="outclickHandler({'siteLink': '?u=MR74YMEOTZEPND6G4FVB7QTXC4&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'vitacost.com', 'offerUuid': 'MR74YMEOTZEPND6G4FVB7QTXC4'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/02VzMxiMUYD7g9kkr7whoAD.fit_limit.quality_80.size_300x130.v1749056097.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/02VzMxiMUYD7g9kkr7whoAD.fit_limit.quality_80.size_300x130.v1749056097.png.webp 1x, https://www.retailmenot.com/imagery/merchants/02VzMxiMUYD7g9kkr7whoAD.fit_limit.quality_80.size_600x260.v1749056097.png.webp 2x" type="image/webp" alt="Vitacost 15% Off Your Eligible Order" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#f7f7f7" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Vitacost</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">15% Off Your Eligible Order</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            15% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="JJ2ORQ4JPBCA3B2WWD72ZUFPLE" data-position="4" x-data="outclickHandler({'siteLink': '?u=JJ2ORQ4JPBCA3B2WWD72ZUFPLE&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': '1800contacts.com', 'offerUuid': 'JJ2ORQ4JPBCA3B2WWD72ZUFPLE'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/06awWdi3wAXJNMHq8GN4IHN-color.fit_limit.quality_80.size_300x130.v1749064288.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/06awWdi3wAXJNMHq8GN4IHN-color.fit_limit.quality_80.size_300x130.v1749064288.png.webp 1x, https://www.retailmenot.com/imagery/merchants/06awWdi3wAXJNMHq8GN4IHN-color.fit_limit.quality_80.size_600x260.v1749064288.png.webp 2x" type="image/webp" alt="1-800 Contacts 1-800 Contacts Coupons, Promotions &amp; Deals" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#001c9b" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">1-800 Contacts</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">1-800 Contacts Coupons, Promotions &amp; Deals</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="TWSHN54PDJEX3LDC3DEAVRNKFM" data-position="5" x-data="outclickHandler({'siteLink': '?u=TWSHN54PDJEX3LDC3DEAVRNKFM&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'ray-ban.com', 'offerUuid': 'TWSHN54PDJEX3LDC3DEAVRNKFM'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/06q2m6u7S33UiLVyBrWVxiP.fit_limit.quality_80.size_300x130.v1749062364.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/06q2m6u7S33UiLVyBrWVxiP.fit_limit.quality_80.size_300x130.v1749062364.png.webp 1x, https://www.retailmenot.com/imagery/merchants/06q2m6u7S33UiLVyBrWVxiP.fit_limit.quality_80.size_600x260.v1749062364.png.webp 2x" type="image/webp" alt="Ray-Ban 15% Off Sitewide" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#ffffff" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div class="absolute top-0 mx-auto hidden w-3/4 self-center border-b border-gray-200 md:block"></div>
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Ray-Ban</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">15% Off Sitewide</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            15% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="26J7WAQ4PBGTFERXQBCULOLRE4"  x-data="outclickHandler({'siteLink': '?u=26J7WAQ4PBGTFERXQBCULOLRE4&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'zennioptical.com', 'offerUuid': '26J7WAQ4PBGTFERXQBCULOLRE4'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/03ApmIZK1X36IDdfB6yygvI-color.fit_limit.quality_80.size_300x130.v1749055785.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/03ApmIZK1X36IDdfB6yygvI-color.fit_limit.quality_80.size_300x130.v1749055785.png.webp 1x, https://www.retailmenot.com/imagery/merchants/03ApmIZK1X36IDdfB6yygvI-color.fit_limit.quality_80.size_600x260.v1749055785.png.webp 2x" type="image/webp" alt="Zenni Optical 10% Off Your Order" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#0098ad" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Zenni Optical</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">10% Off Your Order</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            10% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="ZARK6RL2KFHORKH2NSZH2YH7PU" data-position="7" x-data="outclickHandler({'siteLink': '?u=ZARK6RL2KFHORKH2NSZH2YH7PU&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'nutrafol.com', 'offerUuid': 'ZARK6RL2KFHORKH2NSZH2YH7PU'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/03hZZattNz0F7lqEmn21ZNH.fit_limit.quality_80.size_300x130.v1749054338.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/03hZZattNz0F7lqEmn21ZNH.fit_limit.quality_80.size_300x130.v1749054338.png.webp 1x, https://www.retailmenot.com/imagery/merchants/03hZZattNz0F7lqEmn21ZNH.fit_limit.quality_80.size_600x260.v1749054338.png.webp 2x" type="image/webp" alt="Nutrafol $50 Off Your Purchase" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#ffffff" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div class="absolute top-0 mx-auto hidden w-3/4 self-center border-b border-gray-200 md:block"></div>
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Nutrafol</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">$50 Off Your Purchase</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            $50 Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="AJTQDHJ7TZFTRLDE36GX4GNKCA" data-position="8" x-data="outclickHandler({'siteLink': '?u=AJTQDHJ7TZFTRLDE36GX4GNKCA&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'sunglasshut.com', 'offerUuid': 'AJTQDHJ7TZFTRLDE36GX4GNKCA'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/06lUVK0L0aIAb8swITO4Wip-color.fit_limit.quality_80.size_300x130.v1749055054.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/06lUVK0L0aIAb8swITO4Wip-color.fit_limit.quality_80.size_300x130.v1749055054.png.webp 1x, https://www.retailmenot.com/imagery/merchants/06lUVK0L0aIAb8swITO4Wip-color.fit_limit.quality_80.size_600x260.v1749055054.png.webp 2x" type="image/webp" alt="Sunglass Hut Up to $75 Off Sitewide" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#000000" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Sunglass Hut</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Up to $75 Off Sitewide</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            $75 Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="JYMDW5BWURETNI5CGMBYEB7B7Y" data-position="9" x-data="outclickHandler({'siteLink': '?u=JYMDW5BWURETNI5CGMBYEB7B7Y&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'eyebuydirect.com', 'offerUuid': 'JYMDW5BWURETNI5CGMBYEB7B7Y'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_300x130.v1749062866.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_300x130.v1749062866.png.webp 1x, https://www.retailmenot.com/imagery/merchants/02oJOICoQ0AnLAgz2QobaIF-color.fit_limit.quality_80.size_600x260.v1749062866.png.webp 2x" type="image/webp" alt="EyeBuyDirect 35% Off $80 at EyeBuyDirect" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#cd9249" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">EyeBuyDirect</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">35% Off $80 at EyeBuyDirect</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            35% Off
                        </p>
                    </a>
                </li>
                <li class="relative flex h-32 flex-col md:h-auto">
                    <a href="" class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"    data-content-uuid="ZIKX5EZOHVGP5CBCAX3I34B23A" data-position="10" x-data="outclickHandler({'siteLink': '?u=ZIKX5EZOHVGP5CBCAX3I34B23A&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'swansonvitamins.com', 'offerUuid': 'ZIKX5EZOHVGP5CBCAX3I34B23A'})" @click="juggleTabs"><img src="https://www.retailmenot.com/imagery/merchants/04fsbg0CPTdAdjOVJe5kLzG-color.fit_limit.quality_80.size_300x130.v1749061750.png.webp" srcset="https://www.retailmenot.com/imagery/merchants/04fsbg0CPTdAdjOVJe5kLzG-color.fit_limit.quality_80.size_300x130.v1749061750.png.webp 1x, https://www.retailmenot.com/imagery/merchants/04fsbg0CPTdAdjOVJe5kLzG-color.fit_limit.quality_80.size_600x260.v1749061750.png.webp 2x" type="image/webp" alt="Swanson Up to 40% Off Sitewide + Free Shipping $29+" class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8" style="--dynamic:#fcfeff" width="300" height="130">
                        <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                            <div>
                                <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">Swanson</h3>
                                <p class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">Up to 40% Off Sitewide + Free Shipping $29+</p>
                            </div>
                            <p class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">Coupon code</p>
                        </div>
                        <p class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">

                            <img class="-my-[7px] -ml-2.5 h-7 w-7" src="/svg/images/flame.svg" alt="" role="presentation" width="28" height="28">

                            40% Off
                        </p>
                    </a>
                </li>
            </ul>
        </section>


        <details class="group mb-8 border-b border-gray-200 pb-8 md:mt-20">
            <summary class="flex cursor-pointer justify-center text-2xl">
                <span class="w-4/5 text-base font-extrabold uppercase leading-tight tracking-wider md:w-2/3 md:leading-normal">Popular Categories</span>
                <div class="relative right-auto flex w-1/5 justify-end md:w-1/3">
                    <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16"></path>
                    </svg> <svg class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16"></path>
                    </svg>
                </div>
            </summary>
            <div class="grid grid-cols-2 justify-center overflow-auto py-2 md:grid-cols-5">
                <a class="justify-left my-1 flex" href="">Baby</a>
                <a class="justify-left my-1 flex" href="">Beauty</a>
                <a class="justify-left my-1 flex" href="">Books</a>
                <a class="justify-left my-1 flex" href="">Car Rentals</a>
                <a class="justify-left my-1 flex" href="">Cell Phones</a>
                <a class="justify-left my-1 flex" href="">Clothing</a>
                <a class="justify-left my-1 flex" href="">Cosmetics</a>
                <a class="justify-left my-1 flex" href="">Electronics</a>
                <a class="justify-left my-1 flex" href="">Fast Food</a>
                <a class="justify-left my-1 flex" href="">Flights</a>
                <a class="justify-left my-1 flex" href="">Flowers</a>
                <a class="justify-left my-1 flex" href="">Food Delivery</a>
                <a class="justify-left my-1 flex" href="">Furniture</a>
                <a class="justify-left my-1 flex" href="">Home Improvement</a>
                <a class="justify-left my-1 flex" href="">Hotels</a>
                <a class="justify-left my-1 flex" href="">Jewelry</a>
                <a class="justify-left my-1 flex" href="">Movie Theaters</a>
                <a class="justify-left my-1 flex" href="">Pets</a>
                <a class="justify-left my-1 flex" href="">Photo</a>
                <a class="justify-left my-1 flex" href="">Photo Prints</a>
                <a class="justify-left my-1 flex" href="">Pizza</a>
                <a class="justify-left my-1 flex" href="">Restaurants</a>
                <a class="justify-left my-1 flex" href="">Shoes</a>
                <a class="justify-left my-1 flex" href="">Toys</a>
                <a class="justify-left my-1 flex" href="">Travel</a>
                <a class="justify-left my-1 flex" href="">TV &amp; Home Theater</a>
                <a class="justify-left my-1 flex" href="">Video Games</a>
            </div>
        </details>

        <details class="group mb-16 border-b border-gray-200 pb-8 md:mb-20">
            <summary class="flex cursor-pointer justify-center text-2xl">
                <span class="w-4/5 text-base font-extrabold uppercase leading-tight tracking-wider md:w-2/3 md:leading-normal">Popular Stores</span>
                <div class="relative flex w-1/5 justify-end md:w-1/3">
                    <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16"></path>
                    </svg> <svg class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100" fill="currentColor" viewBox="0 0 448 512">
                        <path d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16"></path>
                    </svg>
                </div>
            </summary>
            <div class="grid grid-cols-2 overflow-auto py-2 md:grid-cols-5">
                <a class="justify-left my-1 flex" href="/view/kohls.com">Kohl's</a>
                <a class="justify-left my-1 flex" href="/view/macys.com">Macy's</a>
                <a class="justify-left my-1 flex" href="/view/target.com">Target</a>
                <a class="justify-left my-1 flex" href="/view/bedbathandbeyond.com">Bed Bath &amp; Beyond</a>
                <a class="justify-left my-1 flex" href="/view/papajohns.com">Papa John's</a>
                <a class="justify-left my-1 flex" href="/view/amazon.com">Amazon</a>
                <a class="justify-left my-1 flex" href="/view/shein.com">Shein</a>
                <a class="justify-left my-1 flex" href="/view/bathandbodyworks.com">Bath &amp; Body Works</a>
                <a class="justify-left my-1 flex" href="/view/ulta.com">Ulta</a>
                <a class="justify-left my-1 flex" href="/view/ediblearrangements.com">Edible Arrangements</a>
                <a class="justify-left my-1 flex" href="/view/ae.com">American Eagle</a>
                <a class="justify-left my-1 flex" href="/view/vistaprint.com">Vistaprint</a>
                <a class="justify-left my-1 flex" href="/view/happiestbaby.com">Happiest Baby</a>
                <a class="justify-left my-1 flex" href="/view/homedepot.com">The Home Depot</a>
                <a class="justify-left my-1 flex" href="/view/us.asos.com">ASOS</a>
                <a class="justify-left my-1 flex" href="/view/sephora.com">Sephora</a>
                <a class="justify-left my-1 flex" href="/view/shutterfly.com">Shutterfly</a>
                <a class="justify-left my-1 flex" href="/view/express.com">Express</a>
                <a class="justify-left my-1 flex" href="/view/priceline.com">Priceline</a>
                <a class="justify-left my-1 flex" href="/view/staples.com">Staples</a>
                <a class="justify-left my-1 flex" href="/view/turbotax.intuit.com">Turbo Tax</a>
                <a class="justify-left my-1 flex" href="/view/officedepot.com">Office Depot</a>
                <a class="justify-left my-1 flex" href="/view/lowes.com">Lowe's</a>
                <a class="justify-left my-1 flex" href="/view/carters.com">Carter's</a>
                <a class="justify-left my-1 flex" href="/view/bloomingdales.com">Bloomingdale's</a>
                <a class="justify-left my-1 flex" href="/view/vitacost.com">Vitacost</a>
                <a class="justify-left my-1 flex" href="/view/booking.com">Booking.com</a>
                <a class="justify-left my-1 flex" href="/view/saksfifthavenue.com">Saks Fifth Avenue</a>
                <a class="justify-left my-1 flex" href="/view/hotels.com">Hotels.com</a>
                <a class="justify-left my-1 flex" href="/view/expedia.com">Expedia</a>
                <a class="justify-left my-1 flex" href="/view/prettylittlething.us">Pretty Little Thing</a>
                <a class="justify-left my-1 flex" href="/view/saksoff5th.com">Saks Off Fifth</a>
                <a class="justify-left my-1 flex" href="/view/coachoutlet.com">Coach Outlet</a>
                <a class="justify-left my-1 flex" href="/view/jcrew.com">J. Crew</a>
                <a class="justify-left my-1 flex" href="/view/journeys.com">Journey's</a>
                <a class="justify-left my-1 flex" href="/view/build.com">Build.com</a>
                <a class="justify-left my-1 flex" href="/view/orbitz.com">Orbitz</a>
                <a class="justify-left my-1 flex" href="/view/nyandcompany.com">NY &amp; Company</a>
                <a class="justify-left my-1 flex" href="/view/hokaoneone.com">Hoka One One</a>
                <a class="justify-left my-1 flex" href="/view/stubhub.com">StubHub</a>
                <a class="justify-left my-1 flex" href="/view/aeropostale.com">Aeropostale</a>
                <a class="justify-left my-1 flex" href="/view/samsung.com">Samsung</a>
                <a class="justify-left my-1 flex" href="/view/travelocity.com">Travelocity</a>
                <a class="justify-left my-1 flex" href="/view/dell.com">Dell</a>
                <a class="justify-left my-1 flex" href="/view/zales.com">Zales</a>
                <a class="justify-left my-1 flex" href="/view/ancestry.com">Ancestry.com</a>
                <a class="justify-left my-1 flex" href="/view/menswearhouse.com">Men's Wearhouse</a>
                <a class="justify-left my-1 flex" href="/view/zoro.com">Zoro</a>
                <a class="justify-left my-1 flex" href="/view/lenovo.com">Lenovo</a>
                <a class="justify-left my-1 flex" href="/view/att.com">AT&amp;T Wireless</a>
                <a class="justify-left my-1 flex" href="/view/net-a-porter.com">Net-A-Porter</a>
            </div>
        </details>

        <section class="mb-16 md:mb-20">
            <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">3 Ways to Save With RetailMeNot</h2>
            <ul class="flex gap-x-6 overflow-x-auto scrollbar-hide">
                <li class="flex min-w-60 flex-col gap-y-6 lg:flex-row">
                    <img class="mr-5 h-20 w-20 shrink-0" src="/svg/images/explainer-cashback.svg" alt="" role="presentation" width="80" height="80">
                    <div class="flex h-full flex-col uppercase tracking-widest lg:block">
                        <div class="text-sm font-bold">Cha-ching</div>
                        <div class="mb-4 text-sm normal-case tracking-normal">Cash back users earn up to 10% cash back per order</div>
                        <a class="mr-auto text-xs font-semibold uppercase tracking-widest underline decoration-gray-400 underline-offset-2" href="/cashback">Browse Cash Back</a>
                    </div>
                </li>
                <li class="flex min-w-60 flex-col gap-y-6 lg:flex-row" x-data="{}">
                    <img class="mr-5 h-20 w-20 shrink-0" src="/svg/images/explainer-app.svg" alt="" role="presentation" width="80" height="80">
                    <div class="flex h-full flex-col uppercase tracking-widest lg:block">
                        <div class="text-sm font-bold">Save on the go</div>
                        <div class="mb-4 text-sm normal-case tracking-normal">Get app-only offers and the best of RetailMeNot</div>
                        <div class="flex">
                            <a class="mb-2 border-r border-r-black pr-4 text-xs font-semibold uppercase tracking-widest underline decoration-gray-400 underline-offset-2" href="https://retailmenot.onelink.me/LeIP/eyooiv46" x-show="$store.browser.isIOS || (!$store.browser.isIOS &amp;&amp; !$store.browser.isAndroid)">iOS</a>
                            <a class="mb-2 ml-4 mr-auto text-xs font-semibold uppercase tracking-widest underline decoration-gray-400 underline-offset-2" href="https://retailmenot.onelink.me/LeIP/eyooiv46" x-show="$store.browser.isAndroid || (!$store.browser.isIOS &amp;&amp; !$store.browser.isAndroid)">Android</a>
                        </div>
                    </div>
                </li>
                <li class="flex min-w-60 flex-col gap-y-6 lg:flex-row">
                    <img class="mr-5 h-20 w-20 shrink-0" src="/svg/images/explainer-extension.svg" alt="" role="presentation" width="80" height="80">
                    <div class="flex h-full flex-col uppercase tracking-widest lg:block">
                        <div class="text-sm font-bold">Save like magic</div>
                        <div class="mb-4 text-sm normal-case tracking-normal">Automatically apply codes + cash back when you shop online</div>
                        <a class="mr-auto text-xs font-semibold uppercase tracking-widest underline decoration-gray-400 underline-offset-2" href="https://www.retailmenot.com/extension">RetailMeNot Extension</a>
                    </div>
                </li>
            </ul>
        </section>

        <section class=" mb-16 md:mb-20" id="">
            <h2 class="normal mb-4 border-gray-200 pt-9 text-xl font-bold capitalize leading-tight tracking-wider md:leading-normal">
                Frequently Asked Questions
            </h2>
            <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                    <span class="text-md w-4/5 md:w-2/3">How can RetailMeNot save me money when shopping online?</span>
                    <div class="relative flex w-1/5 justify-end md:w-1/3">
                        <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16"></path>
                        </svg> <svg class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16"></path>
                        </svg>
                    </div>
                </summary>
                <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                    <p>RetailMeNot offers several ways for shoppers to save while shopping. We feature up-to-date coupon codes, free shipping offers, sales and promo codes for thousands of stores and restaurants. Plus, our <a href="/cashback">cash back</a> offers pay you to shop! Activate a cash back offer, shop, check out, and we'll pay you back a percentage of what you spent.</p>
                </div>
            </details>
            <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                    <span class="text-md w-4/5 md:w-2/3">How many online stores does RetailMeNot have coupons &amp; promo codes for?</span>
                    <div class="relative flex w-1/5 justify-end md:w-1/3">
                        <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16"></path>
                        </svg> <svg class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16"></path>
                        </svg>
                    </div>
                </summary>
                <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                    <p>RetailMeNot has coupons and promo codes for nearly 20,000 stores, brands and restaurants. Our team is constantly verifying the offers on our site to ensure you save money on every purchase.</p>
                </div>
            </details>
            <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                    <span class="text-md w-4/5 md:w-2/3">Does RetailMeNot provide cash back for online purchases?</span>
                    <div class="relative flex w-1/5 justify-end md:w-1/3">
                        <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16"></path>
                        </svg> <svg class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16"></path>
                        </svg>
                    </div>
                </summary>
                <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                    <p>Yes. RetailMeNot has <a href="/cashback">cash back</a> offers for nearly 3,800 stores. You can access these cash back offers on our site, <a href="/mobile">via our app</a> or through our <a href="/dealfinder">free browser extension</a>. Simply sign up for a RetailMeNot account, activate the cash back offers you want to use, shop and check out as normal – we'll give you a percentage of what you spent back in your RetailMeNot wallet. From there, you can redeem your cash back through Venmo or PayPal and use it on … whatever you want. And yes - our cash back offers stack with promo codes, too.</p>
                    <p>Note: A minimum approved balance of $5.01 is required for a redemption.</p>
                </div>
            </details>
            <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                    <span class="text-md w-4/5 md:w-2/3">Does RetailMeNot have a browser extension?</span>
                    <div class="relative flex w-1/5 justify-end md:w-1/3">
                        <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16"></path>
                        </svg> <svg class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16"></path>
                        </svg>
                    </div>
                </summary>
                <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                    <p>Yes. <a href="/extension">Install our free RetailMeNot browser extension</a>, on your preferred browser (including top browsers like Chrome, Firefox, Safari and Microsoft Edge), to make sure you never miss out on the best promo code for your purchase. <a href="/extension">RetailMeNot's Browser Extension</a> sources and automatically applies coupons and promo codes in real time while you shop online, which streamlines your online shopping and lets you skip the step of hunting for coupons before checking out. The extension also sources <a href="/cashback">cash back</a> offers for you, so you can stack your savings.</p>
                </div>
            </details>
            <details class="my-9 pb-9 border-b group mt-9 border-gray-200">
                <summary class="text-md mt-9 flex cursor-pointer font-semibold">
                    <span class="text-md w-4/5 md:w-2/3">Does RetailMeNot have an app I can use on my smartphone?</span>
                    <div class="relative flex w-1/5 justify-end md:w-1/3">
                        <svg class="fill-current absolute top-0 mx-7 h-5 w-5 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16"></path>
                        </svg> <svg class="fill-current absolute top-0 mx-7 h-5 w-5 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16"></path>
                        </svg>
                    </div>
                </summary>
                <div class="prose mt-9 w-4/5 text-sm md:w-2/3">
                    <p>Yes. The <a href="/mobile">RetailMeNot app</a> helps you find and use promo codes when you're shopping on your phone. It also sends you notifications about great sales and offers, so that you never miss out on a chance to save. You can also find and activate <a href="/cashback">cash back</a> offers via the app and redeem your cash back balance.</p>
                </div>
            </details>
        </section>

        <p class="prose mb-16 text-sm md:mb-20 md:w-2/3">
            RetailMeNot helps you save money while shopping online and in-store at your favorite retailers. Whether you're looking for a promo code, a coupon, a free shipping offer or the latest sales, we're constantly verifying and updating our best offers and deals. Plus, we provide
            you with
            <a class="" href="/cashback">cash back</a> offers to get a percentage of what you spend back in your pocket. For an even easier way to save,
            <a class="" href="https://www.retailmenot.com/extension">our browser extension</a> finds and automatically applies promo codes to your online shopping carts. Don't forget to check out our
            <a class="" href="/blog">blog</a> for our editors' pro shopping tips, the hottest sales, and the best products to buy.
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