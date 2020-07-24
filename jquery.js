// Expand Div Function
$('.expand').click(function()
{
   $(this).find('.collapsed').slideDown('slow');
   $(this).find('.starter').fadeOut('slow');
});
$('.expandToggle').click(function()
{
   $(this).find('.collapsed').slideToggle('slow');
});
// Auto Scroll Function
$('.navbar a').on('click',function(e)
{
   if (this.hash !== '') 
   {
      e.preventDefault();
      const hash = this.hash;

      $('html, body').animate({
         scrollTop: $(hash).offset().top
      }, 800
      );
   }
});
 

