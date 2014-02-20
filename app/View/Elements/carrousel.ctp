<script>
$(function() {
    $("#carousel_pub").jCarouselLite({
        btnNext: ".next_pub",
        btnPrev: ".previous_pub",
		autoCSS: true
    });
});
$(function() {
    $("#carousel_restaurant").jCarouselLite({
        btnNext: ".next_restaurant",
        btnPrev: ".previous_restaurant",
		autoCSS: true
    });
});
$(".default .jCarouselLite").jCarouselLite({
    btnNext: ".default .next",
    btnPrev: ".default .prev"
});
$( document ).ready(function() {
$(".carousel_photo").mouseover(function(){
  $(this).css("opacity",0.5);
});

$(".carousel_photo").mouseout(function(){
  $(this).css("opacity",1);
});
});
</script>
<div class = "wrap">
<div class = "carousel">
<span>Pub<br></span>
<a class="previous previous_pub"></a>
<div id="carousel_pub">
    <ul>
        <li style="padding:4px;" ><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/1.jpg',array('width' => '130px','height' => '140px'))?></div></li>
        <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/2.jpg',array('width' => '130px','height' => '140px'))?></li>
        <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/3.jpg',array('width' => '130px','height' => '140px'))?></li>
        <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/4.jpg',array('width' => '130px','height' => '140px'))?></li>
		 <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/6.jpg',array('width' => '130px','height' => '140px'))?></li>
		 <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/7.jpg',array('width' => '130px','height' => '140px'))?></li>
		 <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/16.jpg',array('width' => '130px','height' => '140px'))?></li>
		  <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/17.jpg',array('width' => '130px','height' => '140px'))?></li>
    </ul>
	
</div>
<a class="next next_pub"></a>
</div>
<div class = "carousel">
<span>Restaurants<br></span>
<a class="previous previous_restaurant"></a>
<div id="carousel_restaurant">
    <ul>
        <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/9.jpg',array('width' => '130px','height' => '140px'))?></div></li>
        <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/10.jpg',array('width' => '130px','height' => '140px'))?></li>
        <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/11.jpg',array('width' => '130px','height' => '140px'))?></li>
        <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/12.jpg',array('width' => '130px','height' => '140px'))?></li>
		 <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/13.jpg',array('width' => '130px','height' => '140px'))?></li>
		 <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/14.jpg',array('width' => '130px','height' => '140px'))?></li>
		 <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/15.jpg',array('width' => '130px','height' => '140px'))?></li>
		  <li style="padding:4px;"><div style="background:#841B78; padding:10px;" class="carousel_photo"><?php echo $this->Html->image('images/16.jpg',array('width' => '130px','height' => '140px'))?></li>
    </ul>	
</div>
<a class="next next_restaurant"></a>
</div>
</div>