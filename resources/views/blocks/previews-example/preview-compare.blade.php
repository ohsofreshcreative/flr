<!--- compare preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Porównanie</div>
			<span class="acf-preview__slug">acf/compare</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_compare['label']))
		<p class="text-h6">{{ $g_compare['label'] }}</p>
		@endif
		@if (!empty($g_compare['header']))
		<p class="text-h5">{{ $g_compare['header'] }}</p>
		@endif
		@if (!empty($g_compare['col_default']) || !empty($g_compare['col_account']))
		<p>{{ $g_compare['col_default'] ?? '' }} / {{ $g_compare['col_account'] ?? '' }}</p>
		@endif
		@if (!empty($rows))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2">
			@foreach (array_slice((array) $rows, 0, 6) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['category']))
				<p class="text-h6">{{ $item['category'] }}</p>
				@endif
				@if (!empty($item['default']))
				<p class="acf-preview__txt">{{ $item['default'] }}</p>
				@endif
				@if (!empty($item['account']))
				<p class="acf-preview__txt">{{ $item['account'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $rows) > 6)
		<p>+ {{ count((array) $rows) - 6 }} kolejnych wierszy</p>
		@endif
		@endif
	</div>
</div>
