<!--- logos preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Logotypy partnerów</div>
			<span class="acf-preview__slug">acf/logos</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_logos['header']))
		<p class="text-h5">{{ $g_logos['header'] }}</p>
		@endif
		@if (!empty($g_logos['gallery']))
		<div class="acf-preview__grid grid grid-cols-3 sm:grid-cols-6">
			@foreach (array_slice($g_logos['gallery'], 0, 6) as $image)
			<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($image['ID'], 'thumbnail', false, ['class' => 'h-12 w-full object-contain']) !!}</figure>
			@endforeach
		</div>
		@if (count($g_logos['gallery']) > 6)
		<p>+ {{ count($g_logos['gallery']) - 6 }} kolejnych logotypów</p>
		@endif
		@endif
		<p>Logotypy z opcji motywu „Logotypy partnerów”</p>
	</div>
</div>
