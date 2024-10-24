<footer style="--footer-bg: #111">
	<div class="main-container">
		<div class="row">
			<div class="col-md-6">
				<div class="flex flex-column">
					<span class="brand-title">Madashop</span>
					<small class="text-muted block mt-2">Uma plataforma de comércio eletrônico moderna e criativa, proporcionando uma variedade diversificada de vestidos exclusivos para os seus clientes. <br /><br /> Transforme cada ocasião em um momento especial.</small>
				</div>
				<div class="footer-contain mt-5">
					<div class="flex items-center mt-4">
						<a href="javascript:;" class="footer-link link-icon">
							<i class="bx bxl-facebook"></i>
						</a>
						<a href="javascript:;" class="footer-link link-icon">
							<i class="bx bxl-linkedin"></i>
						</a>
						<a href="javascript:;" class="footer-link link-icon">
							<i class="bx bxl-google"></i>
						</a>
						<a href="javascript:;" class="footer-link link-icon">
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
					<a href="<?= url('cart') ?>" class="footer-link">Artigos adicionados</a>
					<a href="<?= url('checkout') ?>" class="footer-link">Finalizar compras</a>
					<a href="#" id="openMinhaConta" class="footer-link">Minha conta</a>
				</div>
			</div>

			<div class="col-md-3">
				<div class="footer-header">
					<span class="title">Site</span>
				</div>
				<div class="footer-contain">
					<a href="<?= url('contacts') ?>" class="footer-link">Call center</a>
					<a href="<?= url('terms') ?>" class="footer-link">Termos de uso</a>
					<!-- <a href="#" class="footer-link">Politicas & Segurança</a> -->
					<a href="<?= url('faqs') ?>" class="footer-link">FAQs</a>
				</div>
			</div>
		</div>
	</div>
	<span class="h-separator" style="margin: 4rem 0"></span>
	<div class="main-container">
		<div class="row">
			<div class="col-md-6">
				<small class="block text-white">
					Copyright &copy; <?= date('Y') ?> Madacris | Patenteado por <a href="https://mayongi-ao.com/" target="_blank" class="text-underline">Mayongi Lda</a>
				</small>
				<small class="text-muted">Design Feito com <i class="bx bx-heart"></i> por : <a href="javascript:;" class="text-muted">team mayongi</a></small>
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

	$('[name="openSideComentario"]').click(function() {
		$(popupComment).addClass('push');
		$(platformOverlay).addClass('show');
		$('body').css('overflow', 'hidden');
	});

	$(openMinhaConta).click(function(e) {
		e.preventDefault();
		workspace();
	});

	$(openWorkspace).click(function(e) {
		e.preventDefault();
		workspace();
	});

	function workspace() {
		val = checkSession();
		window.location.href = base_url.value + '/workspace/' + val.data[0].id + '/pedidos';
	}

	$(btnEndSession).click(function(e) {
		e.preventDefault();
		$.ajax({
			url: base_url.value + '/logout',
			method: 'POST',
			contentType: false,
			processData: false,
			success: function(d) {
				sessionStorage.removeItem('loggedIn');
				window.location.reload();
			},
			error: function(ee) {
				// console.log()
			}
		});
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

	});


	const modalTrigger = document.querySelectorAll('[data-modal]');
	modalTrigger.forEach(btn => {
		btn.addEventListener('click', function(e) {
			e.preventDefault();
			$('body').css('overflow', 'hidden');
			document.querySelector(this.dataset.modal).classList.add('active');
			const listItem = findParent(this, 'list-card-item');
			imgArtigo.src = listItem.dataset.img;
			nomeArtigo.textContent = listItem.dataset.name;
			categoriaArtigo.textContent = listItem.dataset.category;
			precoArtigo.textContent = listItem.dataset.price;
			altPreco.style.display = "none";
			descArtigo.textContent = listItem.dataset.desc;
		});
	});

	function findParent(item, name) {
		const parent = item.parentNode;
		if (parent.classList.contains(name)) {
			return parent;
		}
		return findParent(item.parentNode, name);
	}
	const closeModal = document.querySelectorAll('[data-close]');
	closeModal.forEach(btn => {
		btn.addEventListener('click', function(e) {
			e.preventDefault();
			$('body').css('overflow', 'auto');
			document.querySelector('.modal-preview').classList.remove('active');
		});
	});
</script>