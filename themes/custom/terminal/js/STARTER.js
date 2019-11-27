/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {

  $(document).ready(function(){
    const slider = document.querySelector('.overflow-list');
    if(slider !== null){
      let isDown = false;
      let startX;
      let scrollLeft;

      slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
      });
      slider.addEventListener('mouseleave', (e) => {
        isDown = false;
        slider.classList.remove('active');
      });
      slider.addEventListener('mouseup', (e) => {
        isDown = false;
        slider.classList.remove('active');
      });
      slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
      });
    }
  })

  /**
   * Use this behavior as a template for custom Javascript.
   */
  Drupal.behaviors.terminal = {
    attach: function (context, settings) {
      if (Foundation.MediaQuery.is('medium up')) {
        let equalizer_elements = new Foundation.Equalizer($('.equalize', context).once('terminal'))
      }            
    }
  };

})(jQuery, Drupal);
