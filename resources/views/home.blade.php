@extends('layouts.app')
@section('title', 'Coupon On Top - The Best Coupons, Promo Codes & Cash Back Offers')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')
    <main>


        <div class="mx-auto w-full max-w-xl px-4">

            <section class="mb-16 md:mb-20">
                <div class="mb-6 flex flex-wrap justify-between lg:mb-0">
                    <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">
                        <a href="">Top Store new</a>
                    </h2>
                </div>
                <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8">
                    @foreach ($latestStores as $store)
                        <a href="{{ route('view.index', ['slug' => $store->slug]) }}"
                            class="group flex flex-col items-center text-center" aria-label="{{ $store->name }}">
                            <div class="mb-3 overflow-hidden rounded-full border transition-shadow duration-300 ease-out group-hover:shadow-xl
                            p-0 md:h-32 md:w-32
                            bg-dynamic flex items-center justify-center"
                                style="--dynamic: {{ $store->brand_color ?? '#ffffff' }};">
                                <img src="{{ asset('storage/' . $store->image) }}" alt="{{ $store->name }}"
                                    class="md-h-w-full object-cover" width="86" height="86" loading="lazy"
                                    onerror="this.src='{{ asset('images/placeholder-store.png') }}';">
                            </div>


                            <div
                                class="max-w-28 text-xs leading-tight lg:text-sm group-hover:underline group-hover:underline-offset-4">
                                <strong class="block truncate">{{ $store->name }}</strong>
                            </div>
                        </a>
                    @endforeach
                </div>

            </section>

            <section class="mb-8 max-w-xl pt-4 md:mb-10" id="summer-checklist">
                <div class="mb-6 flex flex-wrap items-center justify-between lg:mb-0">
                    <h2 class="mb-4 text-xl font-bold capitalize leading-tight md:leading-normal">
                        <a class="block pt-12" href="">Best Offers Today</a>
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
                            $offerColor = $offer->color ?: '#FFFFFF';
                        @endphp

                        <li class="relative flex h-32 flex-col md:h-auto">
                            <a href="{{ $storeSlug ? route('view.index', ['slug' => $storeSlug]) : '#' }}"
                                class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"
                                aria-label="{{ $storeName }} {{ $offerText }}">
                                <img src="{{ $storeImg }}" alt="{{ $storeName }} {{ $offerText }}"
                                    class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8"
                                    style="--dynamic:{{ $offerColor }}" width="300" height="130" loading="lazy"
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
                <ul class="grid grid-cols-1 gap-4 md:grid-cols-4 lg:grid-cols-5">
                    @foreach ($latestDeals as $deal)
                        @php
                            $store = $deal->store;
                            $dealSlug = $store->slug ?? null;
                            var_dump($dealSlug);
                            $dealName = $store->name ?? 'Store';
                            $dealImg =
                                $deal && $deal->image
                                    ? asset('storage/' . $deal->image)
                                    : asset('images/placeholder-store.png');
                            $dealText = $deal->name ?: 'Deal';
                            $dealDesc = $deal->short_description;
                            $dealColor = $deal->color ?: '#FFFFFF';
                        @endphp
                        <li class="relative flex h-32 flex-col md:h-auto">
                            <a href="{{ $dealSlug ? route('view.index', ['slug' => $dealSlug]) : '#' }}"
                                class="relative mb-5 block flex h-full cursor-pointer overflow-hidden bg-white md:h-auto md:min-h-[278px] md:flex-col md:rounded-xl md:border lg:h-32 lg:flex-col"
                                aria-label="{{ $dealName }}">
                                <img src="{{ $dealImg }}" alt="{{ $offerText }}"
                                    class="relative flex flex aspect-video max-h-full max-w-36 shrink-0 flex-col items-center justify-center overflow-hidden rounded-xl border border-gray-200 bg-dynamic object-contain px-4 capitalize md:max-w-full md:rounded-none md:border-0 md:px-8"
                                    style="--dynamic:{{ $dealColor }}" width="300" height="130" loading="lazy"
                                    onerror="this.src='{{ asset('images/placeholder-store.png') }}'">
                                <div class="relative flex h-full flex-col justify-between px-2 py-0 md:py-2">
                                    <div>
                                        <h3 class="text-xs font-bold uppercase tracking-wide md:mt-2">{{ $dealText }}
                                        </h3>
                                        {{-- <p
                                            class="my-2 line-clamp-2 font-proxima text-base capitalize leading-5 md:mb-auto md:line-clamp-3">
                                            
                                        </p> --}}
                                        {!! Str::limit(strip_tags($dealDesc), 80) !!}
                                    </div>
                                    <p
                                        class="mt-2 self-start rounded-full bg-gray-100 px-4 py-1.5 text-xs font-bold lg:mb-1">
                                        {{ Str::limit($dealName, 24) }}
                                    </p>
                                </div>
                                <p
                                    class="absolute left-2 top-2 flex rounded border border-solid border-[#E0E0E0] bg-white px-2 py-[3px] text-xs font-bold">
                                    <img class="-mb-1 -ml-1 h-4 w-4" src="/svg/images/cashback-bolt.svg" alt=""
                                        role="presentation" width="16" height="16">
                                    Deal
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
