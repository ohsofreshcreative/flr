<!--- products preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Produkty</div>
			<span class="acf-preview__slug">acf/products</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($offer_children))
		<div class="acf-preview__grid grid grid-cols-2 sm:grid-cols-4">
			@foreach (array_slice((array) $offer_children, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['image_url']))
				<figure class="acf-preview__media m-0"><img src="{{ $item['image_url'] }}" alt="{{ $item['image_alt'] }}" class="h-16 w-full object-cover"></figure>
				@endif
				@if (!empty($item['title']))
				<p class="text-h6">{{ $item['title'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $offer_children) > 4)
		<p>+ {{ count((array) $offer_children) - 4 }} kolejnych produktów</p>
		@endif
		@endif
		@if (empty($offer_children))
		<p>Brak podstron oferty przypisanych do tej strony</p>
		@endif
	</div>
</div>
