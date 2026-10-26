<!--- product preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Produkt</div>
			<span class="acf-preview__slug">acf/product</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_product['gallery']))
		<div class="acf-preview__grid grid grid-cols-4">
			@foreach (array_slice($g_product['gallery'], 0, 4) as $image)
			<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($image['ID'], 'thumbnail', false, ['class' => 'h-20 w-full object-cover']) !!}</figure>
			@endforeach
		</div>
		@endif
		@if (!empty($g_product['header']))
		<p class="text-h5">{{ $g_product['header'] }}</p>
		@endif
		@if (!empty($g_product['text']))
		<div>{!! $g_product['text'] !!}</div>
		@endif
		@if (!empty($g_product['title']))
		<p class="text-h6">{{ $g_product['title'] }}</p>
		@endif
		@if (!empty($g_product['list']))
		<div>{!! $g_product['list'] !!}</div>
		@endif
		@if (!empty($g_product['button1']['title']) || !empty($g_product['button2']['title']))
		<div class="acf-preview-actions">
			@if (!empty($g_product['button1']['title']))
			<span class="acf-preview-button">{{ $g_product['button1']['title'] }}</span>
			@endif
			@if (!empty($g_product['button2']['title']))
			<span class="acf-preview-button">{{ $g_product['button2']['title'] }}</span>
			@endif
		</div>
		@endif
		@if (!empty($g_product['file']['filename']))
		<p>Plik: {{ $g_product['file']['filename'] }}</p>
		@endif
	</div>
</div>
