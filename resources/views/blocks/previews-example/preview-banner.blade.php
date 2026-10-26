<!--- banner preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Hero - Podstrona</div>
			<span class="acf-preview__slug">acf/banner</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_banner['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_banner['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_banner['title']))
		<p class="text-h5">{{ wp_strip_all_tags(str_replace('<br>', ' ', $g_banner['title'])) }}</p>
		@endif
		@if (!empty($g_banner['text']))
		<div>{!! $g_banner['text'] !!}</div>
		@endif
		@if (!empty($g_banner['button1']['title']) || !empty($g_banner['button2']['title']))
		<div class="acf-preview-actions">
			@if (!empty($g_banner['button1']['title']))
			<span class="acf-preview-button">{{ $g_banner['button1']['title'] }}</span>
			@endif
			@if (!empty($g_banner['button2']['title']))
			<span class="acf-preview-button">{{ $g_banner['button2']['title'] }}</span>
			@endif
		</div>
		@endif
		<p>+ okruszki (dane dynamiczne)</p>
	</div>
</div>
