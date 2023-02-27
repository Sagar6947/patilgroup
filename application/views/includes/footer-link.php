<script src="<?= base_url() ?>assets/js/jquery-3.0.0.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins.js"></script>

<script src="<?= base_url() ?>assets/js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg&amp;callback=initMap">
</script>
<!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


<script>
  $(window).on("load", function() {

    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
      counter.innerText = "0";
      const updateCounter = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = target / 200;
        if (count < target) {
          counter.innerText = `${Math.ceil(count + increment)}`;
          setTimeout(updateCounter, 1);
        } else counter.innerText = target;
      };
      updateCounter();
    });
  });
</script>

<script>
  const gridImages = document.querySelectorAll(".grid > img");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");

  gridImages.forEach((img) => {
    img.addEventListener("click", () => {
      // To open lightbox
      lightbox.classList.add("active");
      // set the image clicked as the image of the lightbox
      lightboxImg.src = img.src;
    });
  });

  // To close lightbox
  lightbox.addEventListener("click", (e) => {
    // if the clicked element is not the dark overlay don't close it
    if (e.target !== e.currentTarget) return;
    // if it was the overlay it will close it
    lightbox.classList.remove("active");
  });

  var string = $website[0]['company_contact'];
  var phone = [string.slice(0, 3), " ", string.slice(3, 7), " ", string.slice(7)].join('');
  console.log(phone);
</script>

<script src="<?= base_url() ?>assets/js/lightbox.js"></script>