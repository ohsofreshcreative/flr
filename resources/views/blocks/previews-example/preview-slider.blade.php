<!--- slider preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Slider - Oferta</div>
			<span class="acf-preview__slug">acf/slider</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($slider_title))
		<p class="text-h5">{{ $slider_title }}</p>
		@endif
		@if (!empty($slides))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) $slides, 0, 3) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['image_url']))
				<figure class="acf-preview__media m-0"><img src="{{ $item['image_url'] }}" alt="{{ $item['image_alt'] }}" class="h-16 w-full object-cover"></figure>
				@endif
				@if (!empty($item['title']))
				<p class="text-h6">{{ $item['title'] }}</p>
				@endif
				@if (!empty($item['excerpt']))
				<p class="acf-preview__txt">{{ $item['excerpt'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $slides) > 3)
		<p>+ {{ count((array) $slides) - 3 }} kolejnych slajdów</p>
		@endif
		@endif
	</div>
</div>
