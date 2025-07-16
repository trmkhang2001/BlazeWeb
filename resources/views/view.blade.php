@extends('layouts.app')
@section('title', 'Coupon On Top - The Best Coupons, Promo Codes & Cash Back Offers')
@section('content')
    <main>
        <div class="overflow-clip" bis_skin_checked="1">
            <section
                class="lg:gap-x-none container mx-auto grid max-w-screen-xl grid-cols-[theme(spacing.20)_auto] gap-x-3 [grid-template-areas:'disclaimer_disclaimer'_'logo_heading'_'subheading_subheading'_'offers_offers'_'table_table'_'leftrail_leftrail'_'content_content'] lg:mt-4 lg:auto-rows-[auto_auto_100px_auto_auto_1fr]     lg:[grid-template-areas:'logo_heading'_'logo_subheading'_'logo_offers'_'disclaimer_offers'_'leftrail_offers'_'leftrail_table'_'leftrail_content']">
                <h1
                    class="mb-3 flex min-h-16 items-center self-center font-sans-bold text-xl font-extrabold leading-tight [grid-area:heading] lg:-mb-3 lg:mt-1 lg:items-center lg:self-start lg:pl-0 lg:text-4xl">
                    {{-- Abercrombie &amp; Fitch Promo Code &amp; Coupons --}}
                    {{ strtoupper($deal->name) }} &amp; Promo Code &amp; Coupons {{ $deal->url }}
                </h1>
                {{-- <img src="{{ asset('storage/' . $deal->image) }}" alt="{{ $deal->name }}" class="img-fluid"> --}}
                <div class="mb-6 mt-2 min-w-0 [grid-area:offers]" bis_skin_checked="1">
                    <div data-component-name="top_offers" bis_skin_checked="1">
                        @forelse ($offers as $offer)
                            <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                                bis_skin_checked="1">
                                <a href="{{ $offer->url }}" target="_blank" rel="nofollow sponsored"
                                    class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                    data-discoverable="data-discoverable" data-component-class="offer_strip"
                                    data-content-datastore="offer" data-content-uuid="J2LQP2CQZZBRFKOXVJGGUDRTGE"
                                    data-position="1" x-data="outclickHandler({ 'siteLink': '?u=J2LQP2CQZZBRFKOXVJGGUDRTGE&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'J2LQP2CQZZBRFKOXVJGGUDRTGE' })" @click="juggleTabs">
                                    <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                        bis_skin_checked="1">
                                        <p class="leading-none">
                                            {{ $offer->offer }}
                                        </p>
                                    </div>
                                    <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                        bis_skin_checked="1">
                                        <span
                                            class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                            {{ $offer->offer }}
                                        </span>
                                    </div>
                                    <h3
                                        class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                        {{ $offer->offer }}
                                    </h3>
                                    {{-- <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                        bis_skin_checked="1">
                                        <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                            bis_skin_checked="1">
                                            10 valid uses today
                                        </div>
                                        <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                            bis_skin_checked="1">
                                            User saved $63
                                        </div>
                                        <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                            bis_skin_checked="1">
                                            Limited time
                                        </div>
                                    </div> --}}
                                    <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                        bis_skin_checked="1">
                                        <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                            bis_skin_checked="1">
                                            {{ $offer->code }}
                                        </div>
                                    </div>
                                </a>
                                <details
                                    class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                    x-data="{ focusedTab: 1, detailsOpen: false }">
                                    <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                        data-content-datastore="offer" data-content-uuid="J2LQP2CQZZBRFKOXVJGGUDRTGE"
                                        data-component-class="see_details" data-position="1"
                                        x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                        <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                            <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
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
