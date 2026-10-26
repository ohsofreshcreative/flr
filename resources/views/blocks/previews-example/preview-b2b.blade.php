<!--- b2b preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Dla firm</div>
			<span class="acf-preview__slug">acf/b2b</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_b2b['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_b2b['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_b2b['label']))
		<p class="text-h6">{{ $g_b2b['label'] }}</p>
		@endif
		@if (!empty($g_b2b['header']))
		<p class="text-h5">{{ $g_b2b['header'] }}</p>
		@endif
		@if (!empty($g_b2b['text']))
		<div>{!! $g_b2b['text'] !!}</div>
		@endif
		@if (!empty($g_b2b['button']['title']))
		<div class="acf-preview-actions">
			@if (!empty($g_b2b['button']['title']))
			<span class="acf-preview-button">{{ $g_b2b['button']['title'] }}</span>
			@endif
		</div>
		@endif
	</div>
</div>
