<!--- hero-offer preview --->

@php
$g_herooffer = $g_herooffer ?? get_field('g_herooffer');
$r_herooffer = $r_herooffer ?? get_field('r_herooffer');
@endphp

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Hero - Oferta</div>
			<span class="acf-preview__slug">acf/hero-offer</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_herooffer['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_herooffer['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
		@endif
		@if (!empty($g_herooffer['title']))
		<p class="text-h5">{{ $g_herooffer['title'] }}</p>
		@endif
		@if (!empty($g_herooffer['content']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_herooffer['content']), 24) }}</p>
		@endif
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
			@foreach (array_slice((array) ($r_herooffer ?? []), 0, 3) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['anchor']))
				<p>{{ wp_strip_all_tags($item['anchor']) }}</p>
				@endif
			</div>
			@endforeach
		</div>
	</div>
</div>
