<!--- values preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Dlaczego warto</div>
			<span class="acf-preview__slug">acf/values</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_values['label']))
		<p class="text-h6">{{ $g_values['label'] }}</p>
		@endif
		@if (!empty($g_values['header']))
		<p class="text-h5">{{ $g_values['header'] }}</p>
		@endif
		@if (!empty($g_values['text']))
		<div>{!! $g_values['text'] !!}</div>
		@endif
		@if (!empty($values))
		<div class="acf-preview__grid grid grid-cols-2 sm:grid-cols-4">
			@foreach (array_slice((array) $values, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['icon']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['icon']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@endif
				@if (!empty($item['header']))
				<p class="text-h6">{{ $item['header'] }}</p>
				@endif
				@if (!empty($item['opis']))
				<p class="acf-preview__txt">{{ $item['opis'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $values) > 4)
		<p>+ {{ count((array) $values) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
