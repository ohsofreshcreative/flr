<!--- logos preview --->

@php
$g_logos = $g_logos ?? get_field('g_logos');
@endphp

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Logotypy</div>
			<span class="acf-preview__slug">acf/logos</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_logos['title']))
		<p class="text-h5">{{ $g_logos['title'] }}</p>
		@endif
		@if (!empty($g_logos['txt']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_logos['txt']), 24) }}</p>
		@endif
		@if (!empty($g_logos['logos_gallery']))
		<div class="acf-preview__logo-list flex flex-wrap items-center">
			@foreach (array_slice((array) $g_logos['logos_gallery'], 0, 6) as $img)
			{!! wp_get_attachment_image($img['ID'] ?? $img, 'thumbnail', false, ['class' => 'h-12 w-20 object-contain']) !!}
			@endforeach
		</div>
		@endif
	</div>
</div>
