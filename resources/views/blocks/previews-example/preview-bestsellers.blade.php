<!--- bestsellers preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Bestsellery</div>
			<span class="acf-preview__slug">acf/bestsellers</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_bestsellers['header']))
		<p class="text-h5">{{ $g_bestsellers['header'] }}</p>
		@endif
		@if (!empty($products))
		<div class="acf-preview__grid grid grid-cols-2 sm:grid-cols-4">
			@foreach (array_slice((array) $products, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['image_id']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['image_id'], 'thumbnail', false, ['class' => 'h-16 w-full object-cover']) !!}</figure>
				@endif
				@if (!empty($item['title']))
				<p class="text-h6">{{ $item['title'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $products) > 4)
		<p>+ {{ count((array) $products) - 4 }} kolejnych produktów</p>
		@endif
		@endif
		@if (empty($products))
		<p>Brak produktów WooCommerce do wyświetlenia</p>
		@endif
	</div>
</div>
