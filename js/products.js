console.log("shake and bake");
let swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

document.innerHTML += "wewe"