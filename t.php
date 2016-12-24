<!DOCTYPE html>
<head>
<title>One Page Scroll</title>
<script type="text/javascript" src="http://localhost/wp/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript">
jQuery(function() {
$storeht = jQuery(window).height();
jQuery("#home,#about,#inventory,#press").height($storeht);

$storenavht = 30 + jQuery("section").height();
jQuery(".row").css('margin-top',$storenavht);

$finalht = $storeht - $storenavht - 47.5;

jQuery("#eighty img:eq(0)").height($finalht*75/100);
jQuery("#eighty img:eq(1)").height($finalht*25/100);

jQuery("#forty img:eq(0)").height($finalht*35/100);
jQuery("#forty img:eq(1)").height($finalht*65/100);

jQuery("#fifty img").height($finalht/2);

jQuery("#fifteen img:eq(0)").height($finalht*13.2/100);
jQuery("#fifteen img:eq(1)").height($finalht*86.8/100);

jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
</script>

<link rel="stylesheet" href="http://localhost/wp/wp-content/themes/twentyseventeen/skeleton.css">
<style>
section {padding: 1em 0; text-align: center; position: fixed; background: rgba(255, 255, 255, 0.25); width: 100%; z-index: 10;}

section a {margin-right: 0.75em; color: #fff; text-decoration: none; font-weight: bold;}

#home:nth-of-type(1) {background: gold;}

#about:nth-of-type(2) {background: cornflowerblue;}

#inventory:nth-of-type(3) {background: #4caf50;}

#press:nth-of-type(4) {background: darkorange;}

.three img {width: 100%; opacity: 0.25}
</style>
</head>

<body>

<section>
<a href="#home">Home</a>
<a href="#about">About</a>
<a href="#inventory">Inventory</a>
<a href="#press">Press</a>
</section>

<div id="home">
1
<div class="row u-full-width u-cf">
<div id="eighty" class="three columns">
<img src="https://placehold.it/350x550/ffffff/cccccc" />
<br>
<img src="https://placehold.it/350x175/ffffff/cccccc" />
</div>
<div id="forty" class="three columns">
<img src="https://placehold.it/350x300/ffffff/cccccc" />
<br>
<img src="https://placehold.it/350x450/ffffff/cccccc" />
</div>
<div id="fifty" class="three columns">
<img src="https://placehold.it/350x450/ffffff/cccccc" />
<br>
<img src="https://placehold.it/350x450/ffffff/cccccc" />
</div>
<div id="fifteen" class="three columns">
<img src="https://placehold.it/350x125/ffffff/cccccc" />
<br>
<img src="https://placehold.it/350x600/ffffff/cccccc" />
</div>
</div>
</div>

<div id="about">2</div>

<div id="inventory">3</div>

<div id="press">4</div>

</body>
</html>