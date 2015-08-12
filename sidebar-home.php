<?php
/**
 * The Home widget areas.
 * At some point i'll want this to be editted by the widgets.
 *
 * @package WordPress
 * @subpackage Nolers Saturnalia
 * @since Nolers 0.8
 */
?>

<?php
	//  Should be used laters...
	// /* If the homepage is loaded we display these widget's.
	//  * 
	//  * If none of the sidebars have widgets, then let's bail early.
	//  */
	// if (   ! is_active_sidebar( 'first-footer-widget-area'  )
	// 	&& ! is_active_sidebar( 'second-footer-widget-area' )
	// 	&& ! is_active_sidebar( 'third-footer-widget-area'  )
	// )
	// 	return;
	// // If we get this far, we have widgets. Let do this.
?>

<hr class="grid_16"/>

<div class="artikels">
	<div class="artikel grid_6">
		<div class="artikelimg" style="background:url(<?php echo get_bloginfo(template_directory) . '/img/prinssenpet.png'; ?>);"></div>
		<h3>Prinsen</h3>
		<p>Ieder jaar wordt er een Prins gekozen. Samen met zijn adjudant, hofdames en de Raad van Elf zorgen zij ervoor dat het carnaval in goede banen wordt geleid. We zijn hen erg dankbaar voor hun inzet. Het is altijd een groot geheim wie de nieuwe Prins zal zijn, ieder jaar wordt de nieuwe Prins gepresenteerd op het Prinsenbal.</p> <a href="/prins/prins-jerry-de-1ste/" class="leesverder">Lees verder >></a>
	</div>
	<div class="artikel grid_6">
		<div class="artikelimg" style="background:url(<?php echo get_bloginfo(template_directory) . '/img/nolersbord.png'; ?>);"></div>
		<h3>de N&#246;lers</h3>
		<p>De Koninklijk erkende carnavalsvereniging De N&#246;lers is opgericht in 1964. Sindsdien zijn de N&#246;lers niet meer weg te denken uit het carnavalsleven van Dieren. Rondom het carnaval organiseren wij een groot feest in onze feestburcht Theotorne. Ben je opzoek naar informatie, wil je lid worden, of een bijdrage leveren aan onze vereniging?</p>  <a href="/c-v-de-nolers/" title="Informatie over de N&#246;lers" class="leesverder">Lees dan verder >></a> 
	</div>
	<div class="artikel grid_4">
		<div class="artikelimg" style="background:url(<?php echo get_bloginfo(template_directory) . '/img/trompet.png'; ?>);"></div>
		<h3>Programma</h3>
		<p><script type="text/javascript" charset="utf-8">
			var beforeText = 'Over';
			var afterText  = 'dagen barst het carnaval in Dieren weer los.';

			var now = new Date();

			var CarnavalDate = new Date("Februari 18, 2012");
			//var CarnavalDate = new Date("Februari 3, 2011");

			var leftDays = CarnavalDate.getTime() - now.getTime();

			leftDays = leftDays  / (24 * 60 * 60 * 1000);

			if (leftDays > 0) {
				document.write(beforeText+'&nbsp;'+leftDays.toFixed()+'&nbsp;'+afterText);
			}

			else {
				//nothing, cya next year.
			}	

		</script> Wij doen ons best om een mooi programma voor deze dagen in elkaar te zetten. Op zoek naar informatie omtrent kaartverkoop, tijden of het programma?</p> <a href="/programma-carnaval-2012/" title="Programma C.V. de Nölers" class="leesverder">Neem dan hier een kijkje &gt;&gt;</a>
	</div>
	<div class="clear"></div>
</div>