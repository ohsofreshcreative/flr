<!--- benefit preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Treść oraz zdjęcie + lista korzyści</div>
			<span class="acf-preview__slug">acf/benefit</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_benefit['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_benefit['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
		@endif
		@if (!empty($g_benefit['subtitle']))
		<p class="text-h6">{{ wp_strip_all_tags($g_benefit['subtitle']) }}</p>
		@endif
		@if (!empty($g_benefit['top']))
		<p class="text-h6">{{ wp_strip_all_tags($g_benefit['top']) }}</p>
		@endif
		@if (!empty($g_benefit['title']))
		<p class="text-h5">{{ $g_benefit['title'] }}</p>
		@endif
		@if (!empty($g_benefit['txt']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_benefit['txt']), 24) }}</p>
		@endif
		@if (!empty($g_benefit['button']['title']))
		<div class="acf-preview-actions"><span class="acf-preview-button">{{ $g_benefit['button']['title'] }}</span></div>
		@endif
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) ($r_benefit ?? []), 0, 3) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['title']))
				<p class="text-h5">{{ $item['title'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
	</div>
</div>
