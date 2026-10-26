<!--- faq preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Najczęściej zadawane pytania</div>
			<span class="acf-preview__slug">acf/faq</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_faq['label']))
		<p>{{ $g_faq['label'] }}</p>
		@endif
		@if (!empty($g_faq['header']))
		<p class="text-h5">{{ $g_faq['header'] }}</p>
		@endif
		@if (!empty($r_faq))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) $r_faq, 0, 6) as $category)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($category['header']))
				<p class="text-h6">{{ $category['header'] }}</p>
				@endif
				<p>{{ count((array) ($category['r_questions'] ?? [])) }} pytań</p>
			</div>
			@endforeach
		</div>
		@if (count((array) $r_faq) > 6)
		<p>+ {{ count((array) $r_faq) - 6 }} kolejnych kategorii</p>
		@endif
		@endif
	</div>
</div>
