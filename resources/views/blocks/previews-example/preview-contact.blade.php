<!--- contact preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Kontakt</div>
			<span class="acf-preview__slug">acf/contact</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_contact['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_contact['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_contact['header']))
		<p class="text-h5">{{ $g_contact['header'] }}</p>
		@endif
		@if (!empty($g_contact['phone']))
		<p class="acf-preview__txt">{{ $g_contact['phone'] }}</p>
		@endif
		@if (!empty($g_contact['mail']))
		<p class="acf-preview__txt">{{ $g_contact['mail'] }}</p>
		@endif
		@if (!empty($g_contact['r_hours']))
		<p>{!! wp_kses(implode(' / ', array_column($g_contact['r_hours'], 'text')), ['br' => []]) !!}</p>
		@endif
		@if (!empty($g_contact['company']))
		<p>{!! wp_kses($g_contact['company'], ['br' => []]) !!}</p>
		@endif
	</div>
</div>
