<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

	<meta property="og:url" content="<?= $this->url() ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
	<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
	<meta name="twitter:site" content="<?= $this->url() ?>" />
	<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
	<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

	<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

	<link rel="stylesheet" rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
	<script type="text/javascript" src="<?= $Wcms->asset('js/affi.js') ?>"></script>

	<?= $Wcms->css() ?>

</head>

<body>
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>
	<div id="body">
		<div id="w1k">
			
			<div id="header">
				<div id="topmenu" role="navigation">
					<a id="logo" href="<?= $Wcms->url() ?>" ><img src="./images/logo-elecsnet2.png" alt="Карты Элекснет" border="0" /></a>
					<div class="topmenu">
						<?= $Wcms->menu() ?>
					</div>
				</div>
			</div>
			
			<div id="topmenu-border"></div>
			
			<div id="main" role="main">
				<div id="content1">
					<a id="logo-elecsnet" href="https://elecsnet.ru" ><img src="./images/logo-elecsnet.png" alt="перейти на сайт Элекснет"  width="190" height="60" border="0" /></a>
					<?= $Wcms->block('subside') ?>
				</div>
				<div id="content2">
					<?= $Wcms->page('content') ?>
				</div>
			</div>
		</div>	
	</div>

	<div id="footer" role="navigation">
		<div id="b1k">
			<div class="bottom_menu1">
				<?= $Wcms->footer() ?>
			</div>
			<div class="bottom_menu2">
				<?= $Wcms->menu() ?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?= $Wcms->asset('js/jquery.js') ?>"></script>
	<!--[if IE 6]>
	  <script type="text/javascript" src="<?= $Wcms->asset('js/DD_belatedPNG.js') ?>"></script>
	  <script type="text/javascript">DD_belatedPNG.fix('.png, #logo img, div.topmenu span, #logo-elecsnet img, #b1k div.bottom_menu1');</script>
	<![endif]-->

	<script type="text/javascript">
	$(window).bind('resize load', function() {
		if($(window).width() < 1000)
			$(document.body).width(1000)
		else 
			$(document.body).width('auto');
	})
	</script>
	<?= $Wcms->js() ?>
	<div style="text-align:center; margin:10px 0px;">
	<!-- SpyLOG f:0211 -->
	<script language="javascript"><!--
	Mu="u1677.56.spylog.com";Md=document;Mnv=navigator;Mp=0;
	Md.cookie="b=b";Mc=0;if(Md.cookie)Mc=1;Mrn=Math.random();
	Mn=(Mnv.appName.substring(0,2)=="Mi")?0:1;Mt=(new Date()).getTimezoneOffset();
	Mz="p="+Mp+"&rn="+Mrn+"&c="+Mc+"&t="+Mt;
	if(self!=top){Mfr=1;}else{Mfr=0;}Msl="1.0";
	//--></script><script language="javascript1.1"><!--
	Mpl="";Msl="1.1";Mj = (Mnv.javaEnabled()?"Y":"N");Mz+='&j='+Mj;
	//--></script><script language="javascript1.2"><!-- 
	Msl="1.2";Ms=screen;Mpx=(Mn==0)?Ms.colorDepth:Ms.pixelDepth;
	Mz+="&wh="+Ms.width+'x'+Ms.height+"&px="+Mpx;
	//--></script><script language="javascript1.3"><!--
	Msl="1.3";//--></script><script language="javascript"><!--
	My="";My+="<a href='https://"+Mu+"/cnt?cid=167756&f=3&p="+Mp+"&rn="+Mrn+"' target='_blank'>";
	My+="<img src='https://"+Mu+"/cnt?cid=167756&"+Mz+"&sl="+Msl+"&r="+escape(Md.referrer)+"&fr="+Mfr+"&pg="+escape(window.location.href);
	My+="' border=0 width=88 height=31 alt='SpyLOG'>";
	My+="</a>";Md.write(My);//--></script><noscript>
	<a href="https://u1677.56.spylog.com/cnt?cid=167756&f=3&p=0" target="_blank"><img src="https://u1677.56.spylog.com/cnt?cid=167756&p=0" alt='SpyLOG' border='0' width=88 height=31 /></a></noscript>
	<!-- SpyLOG -->

	<!--Rating@Mail.ru COUNTER--><script language="JavaScript" type="text/javascript"><!--
	d=document;var a='';a+=';r='+escape(d.referrer)
	js=10//--></script><script language="JavaScript1.1" type="text/javascript"><!--
	a+=';j='+navigator.javaEnabled()
	js=11//--></script><script language="JavaScript1.2" type="text/javascript"><!--
	s=screen;a+=';s='+s.width+'*'+s.height
	a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth)
	js=12//--></script><script language="JavaScript1.3" type="text/javascript"><!--
	js=13//--></script><script language="JavaScript" type="text/javascript"><!--
	d.write('<a href="https://top.mail.ru/jump?from=209186"'+' target=_top><img src="https://top.list.ru/counter'+'?id=209186;t=232;js='+js+a+';rand='+Math.random()+'" alt="Рейтинг@Mail.ru"'+' border=0 height=31 width=88/><\/a>')
	if(11<js)d.write('<'+'!-- ')//--></script><noscript><a target=_top href="https://top.mail.ru/jump?from=209186"><img src="https://top.list.ru/counter?js=na;id=209186;t=232" border=0 height=31 width=88 alt="Рейтинг@Mail.ru"/></a></noscript><script language="JavaScript" type="text/javascript"><!--
	if(11<js)d.write('--'+'>')//--></script><!--/COUNTER-->





	<!--begin of Rambler's Top100 code --><a href="https://top100.rambler.ru/top100/"><img src="https://counter.rambler.ru/top100.cnt?242135" alt="" width=1 height=1 border=0></a><!--end of Top100 code-->
	<!--begin of Top100 logo--><a href="https://top100.rambler.ru/top100/"><img src="https://top100-images.rambler.ru/top100/banner-88x31-rambler-blue3.gif" alt="Rambler's Top100" width=88 height=31 border=0></a><!--end of Top100 logo -->
	<!-- Yandex.Metrika informer -->
	<a href="https://metrika.yandex.ru/stat/?id=25426223&amp;from=informer"
	target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/25426223/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
	style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:25426223,lang:'ru'});return false}catch(e){}"/></a>
	<!-- /Yandex.Metrika informer -->
	</div>

	<div><!--google counter-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-39653423-2', 'auto');
	  ga('send', 'pageview');
	</script>
	</div>
	<div><!--yandex counter-->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	(function (d, w, c) {
	    (w[c] = w[c] || []).push(function() {
	        try {
	            w.yaCounter25426223 = new Ya.Metrika({id:25426223,
	                    webvisor:true,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true});
	        } catch(e) { }
	    });

	    var n = d.getElementsByTagName("script")[0],
	        s = d.createElement("script"),
	        f = function () { n.parentNode.insertBefore(s, n); };
	    s.type = "text/javascript";
	    s.async = true;
	    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

	    if (w.opera == "[object Opera]") {
	        d.addEventListener("DOMContentLoaded", f, false);
	    } else { f(); }
	})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/25426223" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	</div>

</body>
</html>
