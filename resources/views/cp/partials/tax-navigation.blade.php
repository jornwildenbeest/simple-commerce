<div class="border-b px-2 text-sm flex">
    <a class="block data-list-filter-link @if(str_contains(Route::currentRouteName(), 'simple-commerce.tax-rates.index')) active @endif" href="{{ cp_route('simple-commerce.tax-rates.index') }}">Tax Rates</a>
    <a class="block data-list-filter-link @if(str_contains(Route::currentRouteName(), 'simple-commerce.tax-categories.index')) active @endif" href="{{ cp_route('simple-commerce.tax-categories.index') }}">
        Tax Categories
    </a>
    <a class="block data-list-filter-link @if(str_contains(Route::currentRouteName(), 'simple-commerce.tax-zones.index')) active @endif" href="{{ cp_route('simple-commerce.tax-zones.index') }}">
        Tax Zones
    </a>
</div>
