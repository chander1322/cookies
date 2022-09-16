<script data-ad-client="ca-pub-5865443510077079" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>

  <footer class="floatLeft">  
  
  <?php if(is_page('home')) :?>
  <div class="projectManageBox floatLeft">
    <div class="centerCon">
      <h2>Choose what you want to do</h2>
      <a href="http://securewebtechnologies.com/training/" class="learnBtn blue-big-btn textUppercase">Learn with us</a> <a href="http://securewebtechnologies.com/caught-your-project/" class="startProject green-big-btn textUppercase marginL60">Start Your Project</a> </div>
  </div>
  <?php endif ;?>  
  
  <div class="bootomFooter alignCenter floatLeft">
    <div class="centerCon">
      <h4>For latest updates follow us using these social channels.</h4>
      <div class="socialIcon"> <a class="twitter_icon" href="#"></a> <a class="facebook_icon" href="#"></a> <a class="googlePlus_icon" href="#"></a> </div>
      <div class="footerMenu">
        <ul>
          <li><a href="http://securewebtechnologies.com">Home</a></li>
          <li><a href="http://securewebtechnologies.com/about">About</a></li>          
          <li><a href="http://securewebtechnologies.com/contact">Contact</a></li>
        </ul>
      </div>
      <p>2016 <cite>Secure Web Technologies</cite>. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($) {

$(document)[0].oncontextmenu = function() { return false;}

        $(document).mousedown(function(e){
          if( e.button == 2 ) {
             //alert('Sorry, this functionality is disabled!');
              return false;
           } else {
             return true;
            }

        });  
  
  document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)){
            alert('Not allowed');
            return false;
        } else {
            return true;
        }
    
};
  
});

</script>

</body>
</html>