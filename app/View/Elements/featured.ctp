<div class = "wrap">

				<!-- The GRID System -->
				<div class="megafolio-container noborder norounded dark-bg-entries">

						<!-- A GALLERY ENTRY -->
						<div class="mega-entry cat-two cat-all" id="mega-entry-1" data-src="img/images/pub.jpg" data-width="780" data-height="585" data-lowsize="">

							<div class="mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-red">
							<!-- The Content Part with Hidden Overflow Container -->

								<div class="mega-title">
									<?php echo $this->Html->image('images/icons/grid.png', array('class' => 'icon')); ?>
									<!-- <img src="images/icons/grid.png" alt="" style="float: left; padding-right: 15px;"/> -->
									A Multi-Purpose Grid Plugin
								</div>
								<div class="mega-date">With a certain twist</div>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla, sed diam voluptua...<br/><br/><a href="#">Read the whole story</a></p>

							</div>

							<!-- The Link Buttons -->
							<div class="mega-coverbuttons">
								<div class="mega-link mega-red"></div>
								<a class="fancybox" rel="group" href="images/image1.jpg" title="A Multi-Purpose Grid Plugin"><div class="mega-view mega-red"></div></a>
							</div>

						</div>




						<!-- A GALLERY ENTRY -->
						<div class="mega-entry cat-one cat-all"  id="mega-entry-2"  data-src="img/images/live.jpg" data-width="780" data-height="385" data-lowsize="">

							<div class="mega-covercaption mega-square-bottom mega-landscape-left mega-portrait-bottom mega-orange mega-white ">

								<div class="mega-title">Snowboard Mania</div>
								<div class="mega-date">With a cool subline</div>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna...</p>
							</div>

							<!-- The Link Buttons -->
							<div class="mega-coverbuttons">
								<div class="mega-link mega-orange"></div>
								<a class="fancybox" rel="group" href="images/image2.jpg" title="Snowboard Mania"><div class="mega-view mega-orange"></div></a>
							</div>

						</div>




						<!-- A GALLERY ENTRY -->
						<div class="mega-entry cat-three cat-all"  id="mega-entry-3" data-src="img/images/salads.jpg" data-width="780" data-height="485">

							<div class="mega-covercaption mega-square-bottom mega-landscape-bottom mega-portrait-bottom mega-turquoise ">
								<div class="mega-title">
									<?php echo $this->Html->image('images/icons/flexible.png', array('class' => 'icon')); ?>
									<!-- <img src="images/icons/flexible.png" alt="" style="float: left; padding-right: 15px;"/>Flexibility -->
								</div>
								<div class="mega-date">Never seen before</div>
							</div>

							<!-- The Link Buttons -->
							<div class="mega-coverbuttons">
								<div class="mega-link mega-turquoise"></div>
								<a class="fancybox" rel="group" href="images/image3.jpg" title="Flexibility never seen before"><div class="mega-view mega-turquoise"></div></a>
							</div>

						</div>



						<!-- A GALLERY ENTRY -->
						<div class="mega-entry cat-four cat-all"  id="mega-entry-4" data-src="img/images/pub.jpg" data-width="680" data-height="685">

							<div class="mega-covercaption mega-square-bottom mega-landscape-bottom mega-portrait-bottom mega-black ">
								<div class="mega-title">This Dog Approves</div>
								<div class="mega-date">And so should you</div>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
							</div>

							<!-- The Link Buttons -->
							<div class="mega-coverbuttons">
								<div class="mega-link mega-black"></div>
								<a class="fancybox" rel="group" href="images/image4.jpg" title="This Dog Approves and so should you"><div class="mega-view mega-black"></div></a>
							</div>

						</div>



						<!-- A GALLERY ENTRY -->
						<div class="mega-entry cat-one cat-all"  id="mega-entry-5" data-src="img/images/beer.jpg" data-width="780" data-height="585">

							<div class="mega-covercaption mega-square-bottom mega-landscape-bottom mega-portrait-bottom mega-violet ">
								<div class="mega-title">
									<?php echo $this->Html->image('images/icons/light.png', array('class' => 'icon')); ?>
									<!-- <img src="images/icons/light.png" alt="" style="float: left; padding-right: 15px;"/> --> Creative Ideas
								</div>
								<div class="mega-date">Suited for your needs</div>
							</div>

							<!-- The Link Buttons -->
							<div class="mega-coverbuttons ">
								<a class="fancybox" rel="group" href="images/image5.jpg" title="Creative Ideas suited for your needs"><div class="mega-view mega-violet"></div></a>
							</div>

						</div>



						<!-- A GALLERY ENTRY -->
						<div class="mega-entry cat-two cat-all"  id="mega-entry-6" data-src="img/images/nightlife.jpg" data-width="580" data-height="435">

							<div class="mega-covercaption mega-square-bottom mega-landscape-left mega-portrait-bottom mega-green ">
								<div class="mega-title">
									<?php echo $this->Html->image('images/icons/nike.png', array('class' => 'icon')); ?>Girl Doing Sports
									</div>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum....</p>
							</div>

							<!-- The Link Buttons -->
							<div class="mega-coverbuttons">
								<div class="mega-link mega-green"></div>
								<a class="fancybox" rel="group" href="images/image6.jpg" title="Girl Doing Sports"><div class="mega-view mega-green"></div></a>
							</div>

						</div>
				</div>
	</div>


			<div class="divide90"></div>






			<!--
			##############################
			 - ACTIVATE THE BANNER HERE -
			##############################
			-->
			<script type="text/javascript">


				jQuery(document).ready(function() {




					var api=jQuery('.megafolio-container').megafoliopro(
						{
							filterChangeAnimation:"pagebottom",			// fade, rotate, scale, rotatescale, pagetop, pagebottom,pagemiddle
							filterChangeSpeed:400,					// Speed of Transition
							filterChangeRotate:99,					// If you ue scalerotate or rotate you can set the rotation (99 = random !!)
							filterChangeScale:0.6,					// Scale Animation Endparameter
							delay:20,
							defaultWidth:980,
							paddingHorizontal:10,
							paddingVertical:10,
							layoutarray:[7,11,5,7,12,4,6,13]		// Defines the Layout Types which can be used in the Gallery. 2-9 or "random". You can define more than one, like {5,2,6,4} where the first items will be orderd in layout 5, the next comming items in layout 2, the next comming items in layout 6 etc... You can use also simple {9} then all item ordered in Layout 9 type. 
							// layoutarray:[9,11,5,3,7,12,4,6,13] original
						});

					// FANCY BOX ( LIVE BOX) WITH MEDIA SUPPORT
					jQuery(".fancybox").fancybox();

					// THE FILTER FUNCTION
					jQuery('.filter').click(function() {
						jQuery('.filter').each(function() { jQuery(this).removeClass("selected")});
						api.megafilter(jQuery(this).data('category'));
						jQuery(this).addClass("selected");
					});


				});

			</script>