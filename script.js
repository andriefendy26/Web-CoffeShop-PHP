const btnNav = document.getElementById("ham-menu");

btnNav.addEventListener('click', function() {
    const navbar = document.querySelector('.navbar-nav');
    if (navbar.style.display === 'flex') {
        navbar.style.display = 'none'; // Change to the desired style when hidden
    } else {
        navbar.style.display = 'flex';
    }
})


/* Fungsi Bagian Menu */
document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll(".kategori .kategori-nav .btn");
    const slides = document.querySelectorAll(".swiper-container");
  
    navItems.forEach((item) => {
        item.addEventListener("click", () => {
            const slideNumber = item.getAttribute("data-slide");
            showSlide(slideNumber);
        });
    });
  
    function showSlide(slideNumber) {
        slides.forEach((slide) => {
            slide.style.display = "none";
        });
  
        const selectedSlide = document.querySelector(`.swiper-container[data-slide="${slideNumber}"]`);
        selectedSlide.style.display = "flex";
    }
  
    // Menampilkan slide pertama saat halaman dimuat
    showSlide(6);
  });

//home//


//parallax//
$(window).scroll(function() {
    var wScroll = $(this).scrollTop();
    if (wScroll > $('.swiper-container').offset().top - 350) {
        $('.swiper-container').addClass('muncul');
    }
});

//home slide// 
document.getElementById('next').onclick = function(){
    let lists = document.querySelectorAll('.item');
    document.getElementById('slide').appendChild(lists[0]);
}

document.getElementById('prev').onclick = function(){
    let lists = document.querySelectorAll('.item');
    document.getElementById('slide').prepend(lists[lists.length - 1]);
}

// untuk ke wa

document.querySelector('#submit').addEventListener('click', () => {
    const nama = document.getElementById('input-nama').value;
    const telp = document.getElementById('input-telp').value;
    const person = document.querySelector('.input-field.select').value;
    const tgl = document.querySelector('#calender').value;
    const jam = document.querySelector('.input-field.select.input-waktu').value;
    const pesan = document.querySelector('#pesan').value;

    if (nama === '' || telp === '' || person === '' || jam === '' || pesan === '') {
        alert ('from harus di isi semua');
    } else {
        // Create a WhatsApp link with pre-filled message
        const message = `Saya ingin Reservasi \nName: ${nama}\nTelp: ${telp}\norang: ${person}\ntgl: ${tgl}\njam : ${jam}\npesan: ${pesan}`;
        const whatsappLink = `https://wa.me/+6282255187877?text=${encodeURIComponent(message)}`;
    
        // Redirect to the WhatsApp link
        window.location.href = whatsappLink;
    }
})
  