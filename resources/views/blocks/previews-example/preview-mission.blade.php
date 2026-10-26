<!--- mission preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Nasza misja</div>
			<span class="acf-preview__slug">acf/mission</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_mission['label']))
		<p class="text-h6">{{ $g_mission['label'] }}</p>
		@endif
		@if (!empty($g_mission['header']))
		<p class="text-h5">{{ $g_mission['header'] }}</p>
		@endif
		@if (!empty($g_mission['txt']))
		<div>{!! $g_mission['txt'] !!}</div>
		@endif
		<div class="acf-preview__grid grid grid-cols-3">
			@foreach (['image', 'image2', 'image3'] as $key)
			@if (!empty($g_mission[$key]['ID']))
			<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_mission[$key]['ID'], 'thumbnail', false, ['class' => 'h-20 w-full object-cover']) !!}</figure>
			@endif
			@endforeach
		</div>
	</div>
</div>
