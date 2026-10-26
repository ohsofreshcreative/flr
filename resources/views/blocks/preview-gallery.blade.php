<!--- gallery preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Galeria</div>
			<span class="acf-preview__slug">acf/gallery</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_gallery['title']))
		<p class="text-h5">{{ $g_gallery['title'] }}</p>
		@endif
		@if (!empty($g_gallery['gallery']))
		<div class="acf-preview__logo-list flex flex-wrap items-center">
			@foreach (array_slice((array) $g_gallery['gallery'], 0, 6) as $img)
			{!! wp_get_attachment_image($img['ID'] ?? $img, 'thumbnail', false, ['class' => 'h-12 w-20 object-contain']) !!}
			@endforeach
		</div>
		@endif
	</div>
</div>
