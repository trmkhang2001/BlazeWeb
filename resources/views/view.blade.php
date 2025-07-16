@extends('layouts.app')
@section('title', 'Coupon On Top - The Best Coupons, Promo Codes & Cash Back Offers')
@section('content')
    <!-- Global Offer Modal -->
    <div id="offerModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50" data-offer-modal>
        <div class="relative w-full max-w-sm rounded-lg bg-white p-5 text-center shadow-lg">
            <!-- Nút đóng -->
            <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-700" data-offer-close
                aria-label="Đóng">✕</button>

            <!-- Logo -->
            <div class="mx-auto mb-4 h-16 w-16 overflow-hidden rounded-full border p-1">
                <img id="offerModalLogo" src="" alt="" class="aspect-square h-auto w-full object-contain">
            </div>

            <!-- Tên store -->
            <h3 id="offerModalStore" class="mb-2 text-base font-semibold uppercase"></h3>

            <!-- Tên offer -->
            <h2 id="offerModalTitle" class="mb-3 text-lg font-bold"></h2>

            <!-- Code -->
            <div class="flex items-center justify-center gap-3">
                <div id="offerModalCodeWrap"
                    class="flex-1 rounded-full border border-black px-4 py-3 text-xl font-bold text-center">
                    <span id="offerModalCode"></span>
                </div>
                <button type="button" id="offerModalCopyBtn"
                    class="h-12 w-28 rounded-full bg-purple-700 text-xl font-bold uppercase text-white">
                    COPY
                </button>
            </div>

            <!-- Link -->
            <p class="mt-2 text-sm font-medium">
                Copy and paste this code at
                <a id="offerModalShopLink" href="#" target="_blank" rel="nofollow sponsored"
                    class="text-purple-700 underline"></a>
            </p>
        </div>
    </div>

    <main>
        <div class="overflow-clip" bis_skin_checked="1">
            <section
                class="lg:gap-x-none container mx-auto grid max-w-screen-xl grid-cols-[theme(spacing.20)_auto] gap-x-3 [grid-template-areas:'disclaimer_disclaimer'_'logo_heading'_'subheading_subheading'_'offers_offers'_'table_table'_'leftrail_leftrail'_'content_content'] lg:mt-4 lg:auto-rows-[auto_auto_100px_auto_auto_1fr]     lg:[grid-template-areas:'logo_heading'_'logo_subheading'_'logo_offers'_'disclaimer_offers'_'leftrail_offers'_'leftrail_table'_'leftrail_content']">

                {{-- <h1
                    class="mb-3 flex min-h-16 items-center self-center font-sans-bold text-xl font-extrabold leading-tight [grid-area:heading] lg:-mb-3 lg:mt-1 lg:items-center lg:self-start lg:pl-0 lg:text-4xl">
                    {{ strtoupper($deal->name) }} &amp; Promo Code &amp; Coupons {{ $deal->url }}
                </h1>
                <img src="{{ asset('storage/' . $deal->image) }}" alt="{{ $deal->name }}"
                    class="h-24 w-24 rounded-full object-contain bg-white ring-1 ring-gray-200 p-1" /> --}}
                <div class="flex items-center gap-4 [grid-area:heading] lg:mt-1 lg:-mb-3 mb-4">
                    <img src="{{ asset('storage/' . $deal->image) }}" alt="{{ $deal->name }}"
                        class="h-16 w-16 rounded-full object-contain bg-white ring-1 ring-gray-200 p-1 lg:h-24 lg:w-24" />
                    <h1 class="font-sans-bold text-xl font-extrabold leading-tight lg:text-4xl">
                        {{ strtoupper($deal->name) }} &amp; Promo Code &amp; Coupons {{ $deal->url }}
                    </h1>
                </div>

                <div class="mb-6 mt-2 min-w-0 [grid-area:offers]" bis_skin_checked="1">
                    <div data-component-name="top_offers" bis_skin_checked="1">
                        @forelse ($offers as $offer)
                            <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4 cursor-pointer"
                                data-offer-card data-offer-id="{{ $offer->id }}" data-offer-code="{{ $offer->code }}"
                                data-offer-name="{{ $offer->offer }}" data-offer-url="{{ $offer->url }}"
                                data-store-name="{{ $deal->name }}"
                                data-store-logo="{{ asset('storage/' . $deal->image) }}">
                                <div
                                    class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6">

                                    <div
                                        class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide">
                                        <p class="leading-none">
                                            {{ $offer->offer }}
                                        </p>
                                    </div>

                                    <div class="col-start-2 row-start-1 mt-auto [&>*:after]:text-gray-500">
                                        <span
                                            class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                            CODE
                                        </span>
                                    </div>

                                    <h3
                                        class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                        {{ $offer->offer }}
                                    </h3>

                                    {{-- CTA Show Code (click = mở tab + modal) --}}
                                    <div
                                        class="col-span-2 mt-3 flex justify-end md:col-start-3 md:row-span-3 md:row-start-1 md:my-auto md:mt-0 md:justify-end">
                                        @php
                                            $popupUrl = route('view.index', [
                                                'slug' => $deal->slug,
                                                'show' => $offer->id,
                                            ]);
                                        @endphp
                                        <a href="{{ $offer->url }}"
                                            class="relative mb-2 px-5 flex h-10 min-w-[120px] items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-sm font-bold leading-none tracking-wider text-white
                                                   md:h-12 md:text-base
                                                   before:absolute before:-right-5 before:-top-3 before:z-10 before:h-8 before:w-12 before:rotate-45 before:bg-gray-300
                                                   after:absolute after:-right-4 after:-top-4 after:h-12 after:w-12 after:rotate-45 after:rounded-full after:bg-gray-200/30"
                                            rel="nofollow sponsored noopener" data-offer-show
                                            data-offer-id="{{ $offer->id }}" data-offer-code="{{ $offer->code }}"
                                            data-offer-name="{{ $offer->offer }}" data-offer-url="{{ $offer->url }}"
                                            data-popup-url="{{ $popupUrl }}" data-store-name="{{ $deal->name }}"
                                            data-store-logo="{{ asset('storage/' . $deal->image) }}">
                                            Show Code
                                        </a>
                                    </div>

                                </div>

                                <details
                                    class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                    x-data="{ focusedTab: 1, detailsOpen: false }">
                                    <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                        data-content-datastore="offer" data-content-uuid="J2LQP2CQZZBRFKOXVJGGUDRTGE"
                                        data-component-class="see_details" data-position="1"
                                        x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                        <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                            <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See
                                                Details</span>
                                            <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                                <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                    fill="currentColor" viewBox="0 0 448 512">
                                                    <path
                                                        d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                    </path>
                                                </svg> <svg
                                                    class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                    fill="currentColor" viewBox="0 0 448 512">
                                                    <path
                                                        d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </summary>
                                    <template x-if="detailsOpen">
                                        <div>
                                            {{ $offer->description }}
                                        </div>
                                    </template>
                                </details>
                            </div>
                        @empty
                            <p>No offers available at the moment.</p>
                        @endforelse
                    </div>
                </div>
                <div class="[grid-area:content]" bis_skin_checked="1">
                    <div class="my-4 h-2 border-y lg:hidden" bis_skin_checked="1"></div>
                    <h2 class="my-6 text-2xl font-semibold">About</h2>

                    <div class="mb-14 lg:columns-2 lg:gap-x-12" bis_skin_checked="1">
                        {!! $deal->about_store !!}
                    </div>

                    <h2 class="my-4 text-xs font-bold uppercase">How To Apply</h2>
                    <div class="prose mb-14 text-sm" bis_skin_checked="1">
                        {!! $deal->how_to_apply !!}
                    </div>

                    <h3 class="mb-6 text-2xl font-semibold">FAQs</h3>
                    <div class="mb-14" bis_skin_checked="1">
                        {!! $deal->faqs !!}
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('[data-offer-modal]');
            const logoEl = document.getElementById('offerModalLogo');
            const storeEl = document.getElementById('offerModalStore');
            const titleEl = document.getElementById('offerModalTitle');
            const codeWrap = document.getElementById('offerModalCodeWrap');
            const codeEl = document.getElementById('offerModalCode');
            const copyBtn = document.getElementById('offerModalCopyBtn');
            const shopLink = document.getElementById('offerModalShopLink');
            const closeBtn = modal.querySelector('[data-offer-close]');

            let currentCode = '';

            function openModal(data) {
                logoEl.src = data.logo || '';
                storeEl.textContent = data.store || '';
                titleEl.textContent = data.offerName || '';
                codeEl.textContent = data.code || '';
                shopLink.href = data.url || '#';
                shopLink.textContent = data.store || 'Shop';
                currentCode = data.code || '';

                codeWrap.style.display = currentCode ? '' : 'none';

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            copyBtn.addEventListener('click', function() {
                if (!currentCode) return;
                navigator.clipboard.writeText(currentCode).then(() => {
                    const oldText = copyBtn.textContent;
                    copyBtn.textContent = 'COPIED';
                    setTimeout(() => (copyBtn.textContent = oldText), 2000);
                });
            });

            closeBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });

            // Desktop: Show Code <a> -- không preventDefault
            document.querySelectorAll('[data-offer-show]').forEach((el) => {
                el.addEventListener('click', function() {
                    const data = {
                        popupUrl: this.dataset.popupUrl,
                        store: this.dataset.storeName,
                        offerName: this.dataset.offerName,
                        code: this.dataset.offerCode,
                        url: this.dataset.offerUrl,
                        logo: this.dataset.storeLogo,
                        id: this.dataset.offerId,
                    };
                    window.open(data.popupUrl, '_blank', 'noopener');
                    // Không mở modal tại đây vì trang sẽ đi merchant
                    // Nếu bạn muốn vẫn mở modal ngay (có thể chớp rồi out) thì thêm: openModal(data);
                });
            });

            // Mobile: click card -> mở popup tab + chuyển sang merchant
            document.querySelectorAll('[data-offer-card]').forEach((card) => {
                card.addEventListener('click', function(e) {
                    if (window.innerWidth < 768) {
                        e.preventDefault();
                        const data = {
                            store: this.dataset.storeName,
                            offerName: this.dataset.offerName,
                            code: this.dataset.offerCode,
                            url: this.dataset.offerUrl,
                            logo: this.dataset.storeLogo,
                            id: this.dataset.offerId,
                            popupUrl: "{{ route('view.index', ['slug' => $deal->slug]) }}" +
                                '?show=' + this.dataset.offerId,
                        };
                        window.open(data.popupUrl, '_blank', 'noopener');
                        window.location = data.url; // đi merchant trong tab hiện tại
                    }
                });
            });

            // Auto mở modal khi trang được mở với ?show=id
            (function autoOpenFromQuery() {
                const params = new URLSearchParams(window.location.search);
                const id = params.get('show');
                if (!id) return;
                const trigger = document.querySelector('[data-offer-show][data-offer-id="' + id + '"]') ||
                    document.querySelector('[data-offer-card][data-offer-id="' + id + '"]');
                if (!trigger) return;
                const data = {
                    logo: trigger.dataset.storeLogo,
                    store: trigger.dataset.storeName,
                    offerName: trigger.dataset.offerName,
                    code: trigger.dataset.offerCode,
                    url: trigger.dataset.offerUrl,
                };
                setTimeout(() => openModal(data), 50);
            })();
        });
    </script>
@endsection
