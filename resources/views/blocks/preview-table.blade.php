<!--- table preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Tabela</div>
			<span class="acf-preview__slug">acf/table</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_table['header']))
		<p class="text-h5">{{ $g_table['header'] }}</p>
		@endif
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) ($g_table['r_table'] ?? []), 0, 3) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['col1']))
				<p>{{ wp_strip_all_tags($item['col1']) }}</p>
				@endif
				@if (!empty($item['col2']))
				<p>{{ wp_strip_all_tags($item['col2']) }}</p>
				@endif
				@if (!empty($item['col3']))
				<p>{{ wp_strip_all_tags($item['col3']) }}</p>
				@endif
			</div>
			@endforeach
		</div>
	</div>
</div>
