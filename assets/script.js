document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".btn-menu");
  const sidebar = document.querySelector(".sidebar");

  const dropdowns = document.querySelectorAll(".sidebar .has-submenu");
  dropdowns.forEach((dropdown) => {
    const link = dropdown.querySelector(".nav-link-dropdown");
    if (link) {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        dropdown.classList.toggle("active");
      });
    }
  });

  const faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach((item) => {
    const questionButton = item.querySelector(".faq-question");
    if (questionButton) {
      questionButton.addEventListener("click", () => {
        item.classList.toggle("active");
      });
    }
  });

  // --- Logika untuk Slider ---
  if (document.querySelector(".showcase-slider")) {
    const showcaseSwiper = new Swiper(".showcase-slider", {
      loop: true,
      effect: "fade",
      autoplay: { delay: 5000, disableOnInteraction: false },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: { el: ".swiper-pagination", clickable: true },
    });
    function handleVideoPlayback() {
      document.querySelectorAll(".showcase-slider video").forEach((video) => {
        video.pause();
      });
      const activeSlide = showcaseSwiper.slides[showcaseSwiper.activeIndex];
      const videoInActiveSlide = activeSlide
        ? activeSlide.querySelector("video")
        : null;
      if (videoInActiveSlide) {
        videoInActiveSlide.currentTime = 0;
        videoInActiveSlide.play().catch((error) => {
          console.error("Gagal memutar video:", error);
        });
      }
    }
    handleVideoPlayback();
    showcaseSwiper.on("slideChangeTransitionEnd", handleVideoPlayback);
  }
});
