<!--- process preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Jak to działa</div>
			<span class="acf-preview__slug">acf/process</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_process['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_process['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_process['label']))
		<p class="text-h6">{{ $g_process['label'] }}</p>
		@endif
		@if (!empty($g_process['header']))
		<p class="text-h5">{{ $g_process['header'] }}</p>
		@endif
		@if (!empty($steps))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2">
			@foreach (array_slice((array) $steps, 0, 4) as $item)
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
		@if (count((array) $steps) > 4)
		<p>+ {{ count((array) $steps) - 4 }} kolejnych kroków</p>
		@endif
		@endif
	</div>
</div>
