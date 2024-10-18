<footer style="--footer-bg: #111">
	<div class="main-container">
		<div class="row">
			<div class="col-md-6">
				<div class="flex flex-column">
					<span class="brand-title">Madashop</span>
					<small class="text-muted block mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ipsam quos nostrum voluptatem officia quam.</small>
				</div>
				<div class="footer-contain">
					<div class="flex items-center mt-4">
						<a href="" class="footer-link link-icon">
							<i class="bx bxl-facebook"></i>
						</a>
						<a href="" class="footer-link link-icon">
							<i class="bx bxl-linkedin"></i>
						</a>
						<a href="" class="footer-link link-icon">
							<i class="bx bxl-google"></i>
						</a>
						<a href="" class="footer-link link-icon">
							<i class="bx bx-search"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 my-4 my-md-0">
				<div class="footer-header">
					<span class="title">Links rápidos</span>
				</div>
				<div class="footer-contain">
					<a href="<?= url('contacts') ?>" class="footer-link">Call center</a>
					<a href="<?= url('cart') ?>" class="footer-link">Artigos adicionados</a>
					<a href="<?= url('checkout') ?>" class="footer-link">Finalizar compras</a>
					<a href="#" class="footer-link">Minha conta</a>
				</div>
			</div>

			<div class="col-md-3">
				<div class="footer-header">
					<span class="title">Site</span>
				</div>
				<div class="footer-contain">
					<a href="#" class="footer-link">Termos de uso</a>
					<a href="#" class="footer-link">Politicas & Segurança</a>
				</div>
			</div>
		</div>
	</div>
	<span class="h-separator" style="margin: 4rem 0"></span>
	<div class="main-container">
		<div class="row">
			<div class="col-md-6">
				<small class="block text-white">
					Copyright &copy; <?= date('Y') ?> Patenteado por <a href="" class="text-underline">Mayongi Lda</a> | Madacris
				</small>
				<small class="text-muted">Design Feito com <i class="bx bx-heart"></i> por : <a href="" class="text-muted text-underline">sienekib</a></small>
			</div>
		</div>
	</div>
</footer>

<?= view_component('script') ?>
<script>
	$('[name="openAuthLogin"]').click(function(e) {
		e.preventDefault();
		addOverlayAndMuteBody();
		$(authLogin).addClass('push');
	});
	$(document).ready(function() {
		let valor = window.localStorage.getItem('callLogin') ?? 0;
		if (valor == 1) {
			window.localStorage.removeItem('callLogin');
			$('[name="openAuthLogin"]').click();
		}

		const val = checkSession();

		if (val == 0) {
			$(userLogin).removeClass('invisible');
			$(userLetter).addClass('invisible');
			$(checkoutLoginInfo).removeClass('invisible');
			$(hideCheck).removeClass('invisible');
			$(showCheck).addClass('invisible');
		} else {
			$(userLetter).text("");
			$(userLetter).text(val.data[0].nome[0]);
			userLetter.dataset.id = val.data[0].id;
			
			$(userLogin).addClass('invisible');
			$(userLetter).removeClass('invisible');
			$(checkoutLoginInfo).addClass('invisible');
			$(hideCheck).addClass('invisible');
			$(showCheck).removeClass('invisible');
		}

		$(btnEndSession).click(function(e) {
			e.preventDefault();
			sessionStorage.removeItem('loggedIn');
			window.location.reload();
		});

	});
</script>