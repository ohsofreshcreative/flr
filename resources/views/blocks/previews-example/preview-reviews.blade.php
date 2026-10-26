<!--- reviews preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Slider - Opinie</div>
			<span class="acf-preview__slug">acf/reviews</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($header))
		<p class="text-h5">{{ $header }}</p>
		@endif
		@if (!empty($r_reviews))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) $r_reviews, 0, 3) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['header']))
				<p class="text-h6">{{ $item['header'] }}</p>
				@endif
				@if (!empty($item['txt']))
				<p class="acf-preview__txt">{{ $item['txt'] }}</p>
				@endif
				@if (!empty($item['name']))
				<p class="acf-preview__txt">{{ $item['name'] }}</p>
				@endif
				@if (!empty($item['position']))
				<p class="acf-preview__txt">{{ $item['position'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $r_reviews) > 3)
		<p>+ {{ count((array) $r_reviews) - 3 }} kolejnych opinii</p>
		@endif
		@endif
		<p>Opinie z opcji motywu „Opinie”</p>
	</div>
</div>
