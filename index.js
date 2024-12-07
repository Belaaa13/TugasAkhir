// Navbar
$(window).scroll(function() {
	var wScroll = $(this).scrollTop();
	if ( wScroll > $('.about').offset().top -660 ) {
		$('nav').css({
			backgroundColor : 'black',
			boxShadow : '0px 1px 15px rgba(1,1,1,.5)'
		});
		$('nav a').css('color', '#FE2154');
	} else {
		$('nav').css({
			background: 'transparent',
			boxShadow : 'none'
		}); 	
		$('nav a').css('color', 'white');
		$('nav a:hover').css('color', '#454D7A');
	}
});

// Pengaktifan Fitur Pesan Notifkasi
const scriptURL = 'https://script.google.com/macros/s/AKfycbyKFY7x-nCTt5sDvJ1VgkCe4J-q9x0PvQixkATPUgIlYfx6yEe-WEaa8_mY_Mtygu8D/exec';
const form = document.forms['pesan-masuk-web-mbc'];
const tombolKirim = document.querySelector('.tombol-kirim');
const tombolLoading = document.querySelector('.tombol-loading');
const notifikasi = document.querySelector('.alert');

form.addEventListener('submit', e => {
    e.preventDefault()
	tombolLoading.classList.toggle('d-none');
	tombolKirim.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
		tombolLoading.classList.toggle('d-none');
		tombolKirim.classList.toggle('d-none');
		notifikasi.classList.toggle('d-none');
		form.reset();
		console.log('Success!', response)})
    .catch(error => console.error('Error!', error.message))
})