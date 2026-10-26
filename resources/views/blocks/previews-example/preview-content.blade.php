<!--- content preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Tekst oraz zdjęcie</div>
			<span class="acf-preview__slug">acf/content</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_content['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_content['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_content['label']))
		<p class="text-h6">{{ $g_content['label'] }}</p>
		@endif
		@if (!empty($g_content['header']))
		<p class="text-h5">{{ $g_content['header'] }}</p>
		@endif
		@if (!empty($g_content['text']))
		<div>{!! $g_content['text'] !!}</div>
		@endif
		@if (!empty($g_content['r_content']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2">
			@foreach (array_slice((array) $g_content['r_content'], 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['header']))
				<p class="text-h6">{{ $item['header'] }}</p>
				@endif
				@if (!empty($item['text']))
				<div>{!! $item['text'] !!}</div>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $g_content['r_content']) > 4)
		<p>+ {{ count((array) $g_content['r_content']) - 4 }} kolejnych punktów</p>
		@endif
		@endif
		@if (!empty($g_content['button1']['title']) || !empty($g_content['button2']['title']))
		<div class="acf-preview-actions">
			@if (!empty($g_content['button1']['title']))
			<span class="acf-preview-button">{{ $g_content['button1']['title'] }}</span>
			@endif
			@if (!empty($g_content['button2']['title']))
			<span class="acf-preview-button">{{ $g_content['button2']['title'] }}</span>
			@endif
		</div>
		@endif
	</div>
</div>
