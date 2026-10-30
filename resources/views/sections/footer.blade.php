<div id="privacy-modal" class="privacy-modal">
    <div class="privacy-modal-content">
        <button type="button" class="privacy-modal-close">&times;</button>
        <iframe
            src="https://flr.com.pl/polityka-prywatnosci/"
            title="Polityka prywatności"
            loading="lazy">
        </iframe>
    </div>
</div>

<style>
.privacy-modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.8);
    z-index: 999999;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.privacy-modal.active {
    display: flex;
}

.privacy-modal-content {
    position: relative;
    background: #fff;
    width: 100%;
    max-width: 900px;
    height: 80vh;
    border-radius: 12px;
    overflow: hidden;
}

.privacy-modal-content iframe {
    width: 100%;
    height: 100%;
    border: none;
}

.privacy-modal-close {
    position: absolute;
    top: 10px;
    right: 15px;
    z-index: 10;
    background: #111;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    font-size: 26px;
    cursor: pointer;
}
</style>

<script>
document.addEventListener('click', function(e) {
    const trigger = e.target.closest('.privacy-popup-trigger');
    const modal = document.getElementById('privacy-modal');

    if (!modal) return;

    if (trigger) {
        e.preventDefault();
        modal.classList.add('active');
    }

    if (
        e.target.closest('.privacy-modal-close') ||
        e.target === modal
    ) {
        modal.classList.remove('active');
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.getElementById('privacy-modal')?.classList.remove('active');
    }
});
</script>

<footer class="footer">
	<div class="__wrap bg-dark">
		<div class="__wrapper c-main">
			<div class="__widgets grid gap-1 md:gap-6 pt-0 pb-30 md:py-36">
				@for ($i = 1; $i <= 4; $i++)
					@if (is_active_sidebar('sidebar-footer-' . $i))
					<div>@php(dynamic_sidebar('sidebar-footer-' . $i))</div>
			@endif
			@endfor
		</div>
	</div>
	</div>

	<div class="c-main footer-bottom text-white flex flex-col md:flex-row justify-between gap-6 py-10 ">
		<p class="">Copyright ©2025 <?php echo get_bloginfo('name'); ?>. All Rights Reserved</p>
		<p class="flex gap-2">Designed &amp; Developed by
			<a target="_blank" href="https://www.ohsofresh.pl" title="OhSoFresh"><img class="oh" src="/wp-content/themes/flr/resources/images/ohsofresh.svg"></a>
		</p>
	</div>
	</div>
</footer>