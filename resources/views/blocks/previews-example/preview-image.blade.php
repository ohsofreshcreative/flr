<!--- image preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Obraz</div>
			<span class="acf-preview__slug">acf/image</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_image['image']['ID']) || !empty($g_image['image2']['ID']))
		<div class="acf-preview__grid grid grid-cols-2">
			@foreach (['image', 'image2'] as $key)
			@if (!empty($g_image[$key]['ID']))
			<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_image[$key]['ID'], 'medium', false, ['class' => 'h-32 w-full object-cover']) !!}</figure>
			@endif
			@endforeach
		</div>
		@endif
	</div>
</div>
