<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			
			<h2 class="hcard">hCard</h2> 
			<div class="section hcard"> 
				<div id="portrait"><img src="/wp-content/uploads/2010/03/portrait-ski.jpg" alt="" /></div> 
				<div id="hcard-robgolding" class="vcard"> 
					<div class="fn">Rob Golding</div> 
					<div class="email&quot;">
						<script type="text/javascript">// <![CDATA[
							var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" + "=96){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
							".substr(0,ol);}f(\")21,\\\"#'-<6-s>,ban,771\\\\em(`hl`omfb120\\\\710\\\\\\\\"+
							"\\\\710\\\\330\\\\Y410\\\\420\\\\720\\\\100\\\\230\\\\430\\\\120\\\\OR3t\\\\"+
							"300\\\\500\\\\710\\\\600\\\\600\\\\/G400\\\\n\\\\6C620\\\\200\\\\100\\\\+02" +
							"730\\\\y600\\\\d=;\\\"\\\\< spr\\\\= -c+%#-$(!'+1200\\\\5#^JSSX000\\\\VL[_T" +
							"Y120\\\\n410\\\\VJ\\\\\\\\E410\\\\J620\\\\310\\\\000\\\\IJ@P~db:g|t}zmbh\\\""+
							"(f};o nruter};))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y;i=+y)21=" +
							"=i(fi{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"       ; while(x=eval(x)); // // --&gt;
							// ]]&gt;
						</script>
					</div> 
					<div class="adr">
						<span class="locality">Nottingham</span>,
						<span class="region">Nottinghamshire</span>, <span class="country-name">England, UK</span>
					</div> 
					<div class="url"><a href="http://www.robgolding.com">www.robgolding.com</a></div> 
				</div> <!-- /hcard-robgolding -->
			</div> <!-- /hcard -->
			<div id="elsewhere" class="clearfix"> 
				<p><span>Elsewhere:</span></p> 
				<ul> 
				<li class="lastfm"><a title="Music on last.fm" href="http://www.last.fm/user/robgolding63/">last.fm</a></li> 
				<li class="facebook"><a title="Facebook" href="http://www.facebook.com/robgolding63/">Facebook</a></li> 
				<li class="flickr"><a title="Photos on Flickr" href="http://flickr.com/photos/robgolding63/">Flickr</a></li> 
				<li class="linkedin"><a title="LinkedIn" href="http://uk.linkedin.com/in/robgolding/">LinkedIn</a></li> 
				<li class="twitter"><a title="Twitter" href="http://www.twitter.com/robgolding63/">Twitter</a></li> 
				<li class="technorati"><a title="Technorati" href="http://technorati.com/people/robgolding63/">Technorati</a></li> 
				<li class="bitbucket"><a title="BitBucket" href="http://bitbucket.org/robgolding63/">BitBucket</a></li> 
				</ul> 
			</div> <!-- /elsewhere -->
			
			<?php the_content(); ?>
			
		<?php endwhile; ?>
		
	<?php endif; ?>
	
</div><!-- /content-inner -->
</div><!-- /content -->
</div><!-- /wrap-inner -->
</div><!-- /wrap -->

<?php get_footer(); ?>
