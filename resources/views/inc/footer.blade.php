<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
  $(".hizmet-carousel").owlCarousel({
      loop:true,
      margin:20,
      nav:true,
      dots:false,
      responsive:{
          0:{ items:1 },
          600:{ items:2 },
          1000:{ items:4 }
      }
  });
});
</script>
