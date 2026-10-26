<!--- tiles preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Tekst + Kafelki</div>
			<span class="acf-preview__slug">acf/tiles</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_tiles['title']))
		<p class="text-h6">{{ wp_strip_all_tags($g_tiles['title']) }}</p>
		@endif
		@if (!empty($g_tiles['header']))
		<p class="text-h5">{{ $g_tiles['header'] }}</p>
		@endif
		@if (!empty($g_tiles['text']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_tiles['text']), 24) }}</p>
		@endif
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) ($r_tiles ?? []), 0, 3) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['card_image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['card_image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
				@endif
				@if (!empty($item['card_title']))
				<p class="text-h5">{{ $item['card_title'] }}</p>
				@endif
				@if (!empty($item['card_txt']))
				<p>{{ wp_trim_words(wp_strip_all_tags($item['card_txt']), 24) }}</p>
				@endif
			</div>
			@endforeach
		</div>
	</div>
</div>
