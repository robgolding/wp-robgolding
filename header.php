<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
			<?php
				$post_obj = $wp_query->get_queried_object();
				$slug = $post_obj->post_name;
				if ($slug == "home" || $slug == "cv" || $slug == "projects")
				{
					$page_id = $slug;
				}
				else
				{
					$page_id = "blog";
				}
			?>
			<?php if (is_home() || $page_id == "home") { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />

		<meta name="Author" content="Rob Golding" />
		<meta name="Copyright" content="Copyright (c) 2010 Rob Golding" />
		
		<meta name="Robots" content="all" />
		<meta http-equiv="imagetoolbar" content="false" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		
		<!--<link rel="icon" type="image/gif" href="/img/favicon.gif" />-->
		<!--<link rel="apple-touch-icon" href="/img/apple-touch-icon.png" />-->
		
		<link rel="stylesheet" type="text/css" media="screen, projection" href="reset.css" />

		<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>
		
	</head>
	
	<body id="<?php echo $page_id; ?>">
		<div id="wrap">
			<div id="wrap-inner" class="clearfix">
				<div id="header" class="clearfix">
					<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					<!-- <p><?php bloginfo('description'); ?></p> -->
					
					<?php if ($page_id == "blog"): ?>
						<div class="right">
							<div id="feeds">
								<ul>
									<li title="RSS Feed" class="rss"><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
								</ul>
							</div>
							<div id="search"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
						</div>
					<?php endif; ?>
					
					<div id="navigation" class="clearfix">
						<ul class="menu clearfix">
							<li class="home"><a href="/">Home</a></li>
							<li class="cv"><a href="/cv/">Curriculum Vitae</a></li>
							<li class="projects"><a href="/projects/">Projects</a></li>
							<li class="blog"><a href="/blog/">Blog</a></li>
						</ul>
						<ul class="contact clearfix">
							<li class="contact"><a id="noscript" class="disabled" title="Javascript required to view email address">Contact</a>
								<script language="JavaScript" type="text/JavaScript"> 
									var noJava=eval('document.getElementById(\'noscript\')')
									noJava.style.display = 'none';
								</script> 
								<script type="text/javascript">
									//<![CDATA[
									<!--
									var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
									"harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
									"\\\\,l=x.length;for(i=0;i<l;i++){y%=127;o+=String.fromCharCode(x.charCodeAt" +
									"(i)^(y++));}return o;}f(\\\"\\\\+?2'>1;\\\\\\\\\\\"\\\\y/+3/910wB]\\\\\\\\0" +
									"03C\\\\\\\\014\\\\\\\\027\\\\\\\\003\\\\\\\\001U5H\\\\\\\\006\\\\\\\\r\\\\\\"+
									"\\004\\\\\\\\002\\\\\\\\033\\\\\\\\037K\\\\\\\\021\\\\\\\\034\\\\\\\\032\\\\"+
									"\\\\001\\\\\\\\027\\\\\\\\024\\\\\\\\0149\\\\\\\\010\\\\\\\\024\\\\\\\\036\\"+
									"\\\\\\032\\\\\\\\021lekmc+eheU(+xdzcu,N1Qxw~t9w~@? \\\\\\\\\\\\\\\\OOVBGQ\\" +
									"\\\\\\032\\\\\\\\010I\\\\\\\\027\\\\\\\\010\\\\\\\\002\\\\\\\\027\\\\\\\\03" +
									"5\\\\\\\\025\\\"\\\\,79)\\\"(f};)lo,0(rtsbus.o nruter};)i(tArahc.x=+o{)--i;" +
									"0=>i;1-l=i(rof}}{)e(hctac};l=+l;x=+x{yrt{)29=!)31/l(tAedoCrahc.x(elihw;lo=l" +
									",htgnel.x=lo,\\\"\\\"=o,i rav{)x(f noitcnuf\")"                              ;
									while(x=eval(x));
									//-->
									//]]>
								</script>
							</li>
						</ul>
					</div>
				</div>
				
				<div id="content" class="clearfix">
					<div id="content-inner" class="clearfix">
					
