<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br" xml:lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sanca Hub - Ponto de conexão das startups de São Carlos</title>
		<meta name="description" content="Conecte-se com empreendedores, desenvolvedores, criadores, investidores de startups de São Carlos, a Capital da Tecnologia." />
		<meta name="keywords" content="sancahub, sanca, são carlos, capital, tecnologia, startups, happy-hour, feedback, ideias, USP, UFSCar, empreendedores, desenvolvedores, programadores, designers, criadores, investidores" />
		<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="/favicon.png" rel="icon" type="image/png" />
		<!-- css -->
		<link href="css/core.css?<?php echo @base_convert(@filemtime('css/core.css'), 10, 36); ?>" media="screen" rel="stylesheet" type="text/css" />
		<!-- hello google web fonts, goodbye core fonts! -->
		<link href='http://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!-- js -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="js/script.js"></script>
		<!-- google analytics -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-33134319-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</head>
	<body>
		<div id="application">
			<!-- main holder -->
			<div id="main" class="center">
				
				<!-- top -->
				<div id="mainboard">
					<img class="logo" src="images/logo.png" width="234" height="90" alt="sancahub" />
					<div class="menu">
						<a href="#whatis" class="button-whatis">o que é?</a><a href="#getinvolved" class="button-getinvolved">participe!</a>
					</div>
					<!-- getting real! -->
					<img class="bg-ideas" src="images/bg-ideas.png" width="990" height="200" alt="" />
					<p class="ideas ideas1"><strong>Ideias</strong> apenas não valem nada.</p>
					<p class="ideas ideas2">Conheça pessoas e envolva-se<br />com a execução de ideias.</p>
					<p class="ideas ideas3">Coloque-as para funcionar.</p>
					<!-- original illustration by VLADGRIN -->
					<!-- http://www.istockphoto.com/stock-illustration-18935795-background-gears-with-lamp.php -->
					<!-- licensed from istockphoto on June, 28 2012 -->
					<img class="illustration" src="images/sancahub-gettingreal.png" width="609" height="722" alt="Executar é o que vale!" />
					<!-- remember the people about the party -->
					<?php include '_gcal.php'; ?>
					<!-- first event -->
					<div class="date date1">
						<span class="month"><?php echo $sancahub_month[0]; ?></span>
						<span class="day"><?php echo $sancahub_day[0]; ?></span>
					</div>
					<div class="event event1">
						<span class="title"><?php echo $sancahub_title[0]; ?></span>
						<span class="info">às <strong><?php echo $sancahub_time[0]; ?></strong> - <?php echo $sancahub_info[0]; ?></span>
					</div>
					</a>
					<!-- second event -->
					<div class="date date2">
						<span class="month"><?php echo $sancahub_month[1]; ?></span>
						<span class="day"><?php echo $sancahub_day[1]; ?></span>
					</div>
					<div class="event event2">
						<span class="title"><?php echo $sancahub_title[1]; ?></span>
						<span class="info">às <strong><?php echo $sancahub_time[1]; ?></strong> - <?php echo $sancahub_info[1]; ?></span>
					</div>
				</div>
				
				<!-- content block: O que é? -->
				<div id="whatis">
					<h1><span class="label">O que é?</span></h1>
					<p><strong>Sanca Hub</strong> conecta <strong>pessoas e startups de São Carlos</strong> (SP) — a Capital da Tecnologia — para dar vida a novos produtos, serviços e ideias.</p>
					<a href="#main" class="button-top">Topo</a>
				</div>
				
				<!-- content block: Participe! -->
				<div id="getinvolved" class="cf">
					<h1><span class="label">Participe!</span></h1>
					<img class="group" src="images/group.png" width="30" height="150" alt="quem" />
					<ul class="who">
						<li>faz parte de uma startup</li>
						<li>está procurando pessoas para transformar uma ideia em startup</li>
						<li>é desenvolvedor, designer ou criativo a procura de uma startup para se engajar</li>
						<li>é aluno ou professor da USP, UFSCar e outras universidades da região</li>
						<li>é investidor a procura de boas equipes e startups</li>
						<li>é responsável por ações concretas de disseminação da cultura empreendedora no Brasil</li>
					</ul>
					<img class="arrow-getinvolved" src="images/arrow-getinvolved.png" width="55" height="53" alt="" />
					<p class="how">Compareça a uma happy-hour e faça novas conexões! Encontre amigos, sócios, startups e novas ideias. Fique atento :</p>				
			
					<!-- box: facebook -->
					<div class="box box-facebook left">
						<a href="http://www.facebook.com/sancahub">
						<!-- original icon by Mfayas -->
						<!-- http://www.iconfinder.com/icondetails/33628/128/facebook_icon -->
						<img class="icon-facebook right" src="images/icon-facebook.png" width="91" height="91" alt="facebook" />
						<h2>No facebook</h2>
						<p>compartilhe eventos e encontre participantes <span class="underline">curtindo a página</span></p>
						</a>
					</div>
					
					<!-- box: twitter -->
					<div class="box box-twitter left">
						<a href="http://twitter.com/SancaHub">
						<!-- original icon by Mfayas -->
						<!-- http://www.iconfinder.com/icondetails/33646/128/twitter_bird_icon -->
						<img class="icon-twitter left" src="images/icon-twitter.png" width="91" height="91" alt="twitter" />
						<h2>No twitter</h2>
						<p><span class="underline">siga os participantes</span> e divulgue os eventos usando sempre a hashtag #sancahub</p>
						</a>
					</div>
					
					<!-- box: google calendar -->
					<div class="box box-google left">
						<a href="https://www.google.com/calendar/render?cid%3Dsancahub@gmail.com&followup=http://www.google.com/calendar&scc=1">
						<!-- original icon by Janko -->
						<!-- http://www.iconfinder.com/icondetails/56276/128/google_icon -->
						<img class="icon-google right" src="images/icon-google.png" width="72" height="72" alt="google" />
						<h2><span class="underline">google agenda</span></h2>
						<p>receba as datas dos eventos na sua agenda</p>
						</a>
					</div>
					
					<!-- box: ical -->
					<div class="box box-ical left">
						<a href="webcal://www.google.com/calendar/ical/sancahub%40gmail.com/public/basic.ics">
						<!-- original icon by Apple -->
						<!-- http://www.apple.com -->
						<img class="icon-ical left" src="images/icon-ical.png" width="86" height="86" alt="ical" />
						<h2><span class="underline">iCal</span></h2>
						<p>receba as datas dos eventos na sua agenda</p>
						</a>
					</div>
					
					<a href="#main" class="button-top">Topo</a>
				</div>
				
				<!-- content block: Contato -->
				<div id="contact">
					<h1><span class="label">Contato</span></h1>
					<p><strong>Sanca Hub</strong> é resultado de múltiplas colaborações! Antes de entrar em contato, saiba que:</p>
						<ul>
							<li><strong>você pode criar</strong> materiais de divulgação e promover os encontros à sua maneira</li>
							<li><strong>para outras informações,</strong> entre em contato com qualquer dos co-realizadores googlando a web, via redes sociais ou comparecendo às happy-hours!</li>
						</ul>
					<a href="#main" class="button-top">Topo</a>
				</div>
					
			</div>
			<!-- end main holder -->
			<!-- footer -->
			<div id="footer" class="center">
				<p><a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.pt_BR"><img alt="Licença Creative Commons" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br />Os textos e imagens do website <em>sancahub.com.br</em>, exceto quando indicado o contrário, são resultados de múltiplas colaborações dos encontros conhecidos como Sanca Hub. Você pode compartilhar e remixar este conteúdo!<br />Saiba mais: <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.pt_BR">Creative Commons - Atribuição 3.0 Não Adaptada</a>.</p>
				<p><a href="https://github.com/thiagochristof/SancaHub"><img src="images/logo-github.png" width="80" height="31" alt="github" /></a><br />O código-fonte está publicado sob a <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a> e também é resultado de múltiplas colaborações.<br /><a href="https://github.com/thiagochristof/SancaHub">Leve-me ao repositório no github!</a></p>
			</div>
			<!-- end footer -->	
		</div>
	</body>
</html>