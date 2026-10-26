<!--- cards preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Kafelki</div>
			<span class="acf-preview__slug">acf/cards</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_cards['subtitle']))
		<p class="text-h6">{{ wp_strip_all_tags($g_cards['subtitle']) }}</p>
		@endif
		@if (!empty($g_cards['header']))
		<p class="text-h5">{{ $g_cards['header'] }}</p>
		@endif
		@if (!empty($g_cards['text']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_cards['text']), 24) }}</p>
		@endif
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) ($g_cards['r_cards'] ?? []), 0, 3) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
				@endif
				@if (!empty($item['header']))
				<p class="text-h5">{{ $item['header'] }}</p>
				@endif
				@if (!empty($item['text']))
				<p>{{ wp_trim_words(wp_strip_all_tags($item['text']), 24) }}</p>
				@endif
				@if (!empty($item['button']['title']))
				<div class="acf-preview-actions"><span class="acf-preview-button">{{ $item['button']['title'] }}</span></div>
				@endif
			</div>
			@endforeach
		</div>
	</div>
</div>
