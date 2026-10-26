<!--- form preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Formularz kontaktowy</div>
			<span class="acf-preview__slug">acf/form</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_form['header']))
		<p class="text-h5">{{ $g_form['header'] }}</p>
		@endif
		@if (!empty($g_form['shortcode']))
		<p class="acf-preview__slug">{{ $g_form['shortcode'] }}</p>
		@endif
		@if (!empty($g_help['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_help['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_help['header']))
		<p class="text-h6">{{ $g_help['header'] }}</p>
		@endif
		@if (!empty($g_help['text']))
		<div>{!! $g_help['text'] !!}</div>
		@endif
		@if (!empty($g_help['button']['title']))
		<div class="acf-preview-actions">
			@if (!empty($g_help['button']['title']))
			<span class="acf-preview-button">{{ $g_help['button']['title'] }}</span>
			@endif
		</div>
		@endif
	</div>
</div>
