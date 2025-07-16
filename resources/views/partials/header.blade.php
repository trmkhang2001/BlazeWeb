<nav class=" container relative flex h-16 max-w-screen-xl items-center py-4">
    <a class="mr-1 lg:mr-4 order-1" href="/" aria-label="CouponOnTop home">
        <img src="/imagery/C2.png" fill="currentColor" alt="" class="h-32 w-auto md:inline-block">
    </a>
    <div class="order-4 text-base md:ml-0 lg:order-2 lg:text-sm" x-data="{ openMenu: null }">
        <div
            class="absolute left-0 z-[60] w-full overflow-y-scroll bg-white pb-96 text-black max-lg:top-0 lg:static lg:flex lg:items-center lg:justify-between lg:overflow-y-visible lg:bg-transparent lg:pb-0 lg:text-white lg:opacity-100 max-lg:pointer-events-none max-lg:opacity-0">

            <!-- CATEGORIES -->
            <!-- CATEGORIES -->
            <div class="relative z-40 lg:bg-transparent" @mouseenter="openMenu = 'categories'"
                @mouseleave="openMenu = null">
                <button
                    class="flex items-center whitespace-nowrap rounded-full px-4 py-3 hover:bg-white/10 lg:tracking-wider">
                    <span>Categories</span>
                    <svg class="ml-px h-4 w-4 transition-transform"
                        :class="openMenu === 'categories' ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="m8 8.478 2.954-2.517a.77.77 0 0 1 1.058 0l.014.015a.72.72 0 0 1-.009 1.052L8.53 10.04a.767.767 0 0 1-1.048.008L3.975 7.02a.72.72 0 0 1-.001-1.042l.015-.015a.767.767 0 0 1 1.048-.01z" />
                    </svg>
                </button>
                <div x-show="openMenu === 'categories'"
                    class="absolute left-0 mt-2 w-48 rounded bg-white p-2 shadow-lg text-black z-50" x-transition>
                    @foreach ($headerCategories as $cat)
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">
                            {{ $cat->name }}
                        </a>
                    @endforeach
                </div>
            </div>


            <!-- OFFERS -->
            <div class="relative z-40 lg:bg-transparent" @mouseenter="openMenu = 'offers'"
                @mouseleave="openMenu = null">
                <button
                    class="flex items-center whitespace-nowrap rounded-full px-4 py-3 hover:bg-white/10 lg:tracking-wider">
                    <span>Offers</span>
                    <svg class="ml-px h-4 w-4 transition-transform" :class="openMenu === 'offers' ? 'rotate-180' : ''"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="m8 8.478 2.954-2.517a.77.77 0 0 1 1.058 0l.014.015a.72.72 0 0 1-.009 1.052L8.53 10.04a.767.767 0 0 1-1.048.008L3.975 7.02a.72.72 0 0 1-.001-1.042l.015-.015a.767.767 0 0 1 1.048-.01z" />
                    </svg>
                </button>
                <div x-show="openMenu === 'offers'"
                    class="absolute left-0 mt-2 w-64 rounded bg-white p-2 shadow-lg text-black z-50" x-transition>
                    @foreach ($headerOffers as $o)
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">
                            {{ Str::limit($o->offer ?? $o->code, 32) }}
                        </a>
                    @endforeach
                </div>
            </div>


            <!-- STORES -->
            <div class="relative z-40 lg:bg-transparent" @mouseenter="openMenu = 'stores'"
                @mouseleave="openMenu = null">
                <button
                    class="flex items-center whitespace-nowrap rounded-full px-4 py-3 hover:bg-white/10 lg:tracking-wider">
                    <span>Stores</span>
                    <svg class="ml-px h-4 w-4 transition-transform" :class="openMenu === 'stores' ? 'rotate-180' : ''"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="m8 8.478 2.954-2.517a.77.77 0 0 1 1.058 0l.014.015a.72.72 0 0 1-.009 1.052L8.53 10.04a.767.767 0 0 1-1.048.008L3.975 7.02a.72.72 0 0 1-.001-1.042l.015-.015a.767.767 0 0 1 1.048-.01z" />
                    </svg>
                </button>
                <div x-show="openMenu === 'stores'"
                    class="absolute left-0 mt-2 w-64 rounded bg-white p-2 shadow-lg text-black z-50" x-transition>
                    @foreach ($headerStores as $s)
                        <a href="{{ route('view.index', ['slug' => $s->slug]) }}"
                            class="block px-4 py-2 hover:bg-gray-100">
                            {{ $s->name }}
                        </a>
                    @endforeach
                </div>
            </div>


        </div>
    </div>


    <div class="flex relative order-last items-center max-lg:order-3">
        <div class="order-last max-lg:order-3" x-data="wallet('home', '1')" ax-load="">
            <button
                class="group relative inline-block h-10 min-w-24 cursor-pointer whitespace-nowrap rounded-full bg-white text-black"
                data-component-name="wallet" x-ref="wallet" @click="handleWalletClicked()">
                <img class="absolute left-2 top-2 h-6 w-6 group-hover:animate-bounce"
                    src="/svg/images/cashback-bolt.svg" alt="" role="presentation" loading="lazy" width="24"
                    height="24" x-ref="bolt" @user-setup-loaded.window="animateWallet()">
                <p class="ml-2 inline" x-ref="rewards">$5.00</p>
            </button>
        </div>
    </div>
</nav>
<div class="h-10 w-full bg-gray-100 text-center align-middle text-xs font-semibold capitalize leading-10 text-black">
    <div class="relative m-auto max-w-full overflow-hidden lg:max-w-xl glide--ltr glide--carousel glide--swipeable">
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="me-2">
                            <img src="/svg/images/new-spirit-fingers.svg" alt="new" width="48" height="32"
                                loading="lazy">
                        </div>
                        <div>
                            <a href="" class="fw-bold text-decoration-underline">Personalized Offers</a>
                            Just For You
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="absolute left-5 top-3" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
                <svg class="h-3 w-3 text-black ease-out" fill="none" viewBox="0 0 8 12">
                    <path fill="currentColor"
                        d="M5.078 11.398.79 6.922A.64.64 0 0 1 .625 6.5c0-.117.047-.258.14-.375l4.29-4.477a.56.56 0 0 1 .797-.023c.234.21.234.563.023.797L1.961 6.5l3.937 4.125a.56.56 0 0 1-.023.797.56.56 0 0 1-.797-.024">
                    </path>
                </svg>
            </button>
            <button class="absolute right-2 top-3" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
                <svg class="h-3 w-3 rotate-180 text-black ease-out" fill="none" viewBox="0 0 8 12">
                    <path fill="currentColor"
                        d="M5.078 11.398.79 6.922A.64.64 0 0 1 .625 6.5c0-.117.047-.258.14-.375l4.29-4.477a.56.56 0 0 1 .797-.023c.234.21.234.563.023.797L1.961 6.5l3.937 4.125a.56.56 0 0 1-.023.797.56.56 0 0 1-.797-.024">
                    </path>
                </svg>
            </button>

        </div>
    </div>
</div>
