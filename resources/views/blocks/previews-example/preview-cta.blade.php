<!--- cta preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Wezwanie do działania</div>
			<span class="acf-preview__slug">acf/cta</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_octa['header']))
		<p class="text-h5">{{ wp_strip_all_tags(str_replace('<br>', ' ', $g_octa['header'])) }}</p>
		@endif
		@if (!empty($g_octa['txt']))
		<div>{!! $g_octa['txt'] !!}</div>
		@endif
		@if (!empty($g_octa['button1']['title']) || !empty($g_octa['button2']['title']))
		<div class="acf-preview-actions">
			@if (!empty($g_octa['button1']['title']))
			<span class="acf-preview-button">{{ $g_octa['button1']['title'] }}</span>
			@endif
			@if (!empty($g_octa['button2']['title']))
			<span class="acf-preview-button">{{ $g_octa['button2']['title'] }}</span>
			@endif
		</div>
		@endif
		@if ($form)
		<p>Formularz: {{ $g_octa['title'] ?? '' }}</p>
		@endif
		<p>Treść z opcji motywu „Wezwanie do działania”</p>
	</div>
</div>
