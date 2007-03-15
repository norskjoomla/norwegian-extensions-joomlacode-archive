<?php
// nb lang variables
//Names
$imlang['desc'] = 'Bildebehandler';
$imlang['preview'] = 'Forh�ndsvis';
$imlang['article_image'] = 'Artikkelbilde';
$imlang['popup_image'] = 'Popupbilde';
$imlang['swap_image'] = 'Rulloverbilde';
$imlang['advanced'] = 'Avansert';
$imlang['appearance'] = 'Utforming';
$imlang['popup'] = 'Popup';
$imlang['size'] = 'St�rrelse';
$imlang['image'] = 'Bilde';
$imlang['alt'] = 'Beskrivelse';
$imlang['border'] = 'Ramme';
$imlang['list'] = 'Listevisning';
$imlang['images'] = 'Miniatyrvisning';
$imlang['resize_upload'] = 'Endre bildest�rrelse';
$imlang['properties'] = 'Bildevalg';
$imlang['popup_basic'] = 'Enkel';
$imlang['popup_advanced'] = 'Avansert';
$imlang['popup_offsite'] = 'Offsite Link';
$imlang['print'] = 'Utskriftslenke';
$imlang['id'] = 'Id';
$imlang['lang_dir'] = 'Spr�krettning';
$imlang['lang_dir_select'] = 'Velg rettning';
$imlang['lang_dir_ltr'] = 'Venstre til h�yre';
$imlang['lang_dir_rtl'] = 'H�yre til venstre';
$imlang['lang_code'] = 'Spr�kkode';
$imlang['image_map'] = 'Bildekart';
$imlang['long_desc'] = 'Lang beskrivelse';
$imlang['styles'] = 'Stil';
$imlang['class_list'] = 'Klasseliste';
$imlang['not_set'] = '--Ikke satt--';
$imlang['mouseover'] = 'Mus over';
$imlang['mouseout'] = 'Mus ut';
$imlang['rtl'] = 'H�yre til venstre';
$imlang['ltr'] = 'Venstre til h�yre';

$imlang['include_width'] = 'Inkluder bredde';
$imlang['include_height'] = 'Inkluder h�yde';
$imlang['thumbPopup'] = 'Popupbilde';
$imlang['popupThumb'] = 'Popupminiatyrbilde';
$imlang['thumbCaption'] = 'Minibildetekst';

$imlang['mode'] = 'Popupmodus';
$imlang['mode_basic'] = 'Enkel';
$imlang['mode_advanced'] = 'Avansert';
$imlang['popup_offsite'] = 'Offsite Link';
$imlang['popup_print'] = 'Utskriftsikon';
$imlang['popup_right_click'] = 'Ikke tillat h�yreklikk';

$imlang['toggle_image'] = 'Endre visningsmodus';
$imlang['toggle_list'] = 'Endre visningsmodus';

//Error Messages
$imlang['thumb_ren_err'] = 'Kunne ikke gi nytt navn til miniatyrbilde!';
$imlang['new_dir_invalid'] = 'Ugyldig mappenavn, velg et annet mappenavn.';
$imlang['no_images'] = 'Ingen bilde funnet';
$imlang['invalid_dir_err'] = 'Ugyldig basemappe';
$imlang['move_thumb_err'] = 'Kunne ikke flytte miniatyrbilde.';
$imlang['thumb_copy_err'] = 'Kunne ikke kopiere fil';
$imlang['new_thumb_err'] = 'Kunne ikke opprette miniatyrbilde.';
$imlang['new_thumb_dir_err'] = 'Kunne ikke opprette minityrbildemappe.';
$imlang['del_thumb_err'] = 'Kunne ikke slette miniatyrbilde.';
$imlang['del_thumb_dir_err'] = 'Kunne ikke slette miniatyrbildemappe.';

//General Messages
$imlang['make_thumb'] = 'Miniatyrbilde';
$imlang['thumb_size'] = 'Miniatyrbildest�rrelse';
$imlang['is_thumb'] = 'Bilde er et miniatyrbilde eller dets dimensjoner er mindre enn, eller lik miniatyrbilders.';
$imlang['del_thumb'] = 'Slett miniatyrbilde';
$imlang['create_thumb'] = 'Opprett miniatyrbilde';
$imlang['use_thumb'] = 'Bruk bildets miniatyrbilde?';
$imlang['missing_alt'] = 'Er du sikker p� at du vil fortsette uten � inkludere en bildebeskrivelse? Uten det kan bildet bli utilgjengelig for noen brukere med reduserte funksjoner, eller for dem som bruker tekstnettlesere, eller surfer p� nettet med bilder avsl�tt.';

//Help File
$imhelp['interface_intro'] = 'JCE Bildebehandler er designet for � v�re enkel i bruk, og for � tilby flest mulig funksjoner p� en begrenset plass. De fleste funksjoner er tilgjengelig via en verkt�ylinje.';
$imhelp['help_title'] = 'JCE Bildebehandler 1.0.0 Hjelp';
$imhelp['interface_mode'] = '<strong>Endre visningsmodus</strong> - Bytter mellom listevisning og miniatyrbildevisning.';
$imhelp['interface_isthumb'] = '<strong>Er miniatyr</strong> - Indikerer at valgte bilde er et miniatyrbilde, eller har dimensjoner lik, eller mindre et miniatyrbilde.';
$imhelp['interface_delthumb'] = '<strong>Slett miniatyrbilde</strong> - Sletter valgte bildets miniatyrbilde. Hvis miniatyrbildemappen er tom etter sletting, slettes ogs� mappen.';
$imhelp['interface_newthumb'] = '<strong>Lag miniatyrbilde</strong> - Opprett et miniatyrbilde av det valgte bilde, med gitte dimensjoner. Hvis det ikke finnes en miniatyrbildemappe vil en miniatyrbildemappe bli opprettet p� samme niv� som som valgte bilde.';
$imhelp['interface_info_desc'] = 'Ved � klikke til h�yre for et bilde i listevisning, eller ved � klikke p� bildet i miniatyrbildevisning, gj�r at man f�r vist informasjon om bildet i detaljfeltet til venstre. De mulige handlinger for det valgte bildet vil bli vist. Om flere filer er valgt vil antall valgte filer vises.';
$imhelp['interface_info'] = 'Bildeegneskaper';
$imhelp['interface_upload_opt'] = 'N�r du laster opp et bilde kan du velge � skalere det til den spesifiserte maksimale pixelst�rrelse (bredde eller h�yde). Du kan ogs� velge � oprette et miniatyrbilde av det opplastende bilde med de spesifiserte dimensjonene.';

$imhelp['insert_insert_image'] = 'Sett inn et bilde';
$imhelp['insert_insert_image_desc'] = 'Sette inn et bilde i en artikkel kan gj�res med f� klikk. Hvis du er i listevisning, klikker du p� navnet til bildet for � sette inn bildets nettadresse i nettadresse-feltet, det vil samtidig sette inn bildebeskrivelsen og tittelen, s�vel som bildest�rrelse, i de respektive feltene. I miniatyrebildevisning, dobbeltklikker man p� bildet for � sette det inn.';
$imhelp['insert_insert_image_desc2'] = 'Etter du har gjort dette, kan du justere horisontalt- og vertikalt mellomrom, ramme- og justeringsverdier til dine �nsker, og deretter klikke <strong>Sett inn</strong>.';
$imhelp['insert_insert_image_desc3'] = 'JCE Bildebehandler inneholder ogs� et antall avanserte innstillinger som du kan stille inn for � gj�re det lettere � opprette tilgjenglig innhold, bildekart mv. Her kan man ogs� benytte statisk innhold i Joomla som beskrivende lenker.';
$imhelp['insert_appearance'] = 'Fanen Utforming er omr�det hvor du setter hvordan bildet skal vises i artikkelen i forhold til teksten.';
$imhelp['insert_appearance_align'] = 'Juster (Align) - Setter inn plasseringen av bildet i forhold til teksten.';
$imhelp['insert_appearance_class'] = 'Klasseliste - Bruk en klasse fra listen over tilgjengelige klasser til � forme bildet.';
$imhelp['insert_appearance_dim'] = 'Dimensjoner - Setter inn bredde og h�yde for bildet.';
$imhelp['insert_appearance_vspace'] = 'VSpace - Setter det vertikale mellomrommet for bildet, f.eks.: avstanden i pixels mellom topp og bunn av bildet og teksten.';
$imhelp['insert_appearance_hspace'] = 'HSpace - Setter inn det horisontale mellomrommet for bildet, f.eks.: avstanden i pixels mellom venstre og h�yre kant av bildet og teksten.';
$imhelp['insert_appearance_border'] = 'Ramme - Setter bildets ramme i pixels.';
$imhelp['insert_appearance_styles'] = 'Stil - Definerer en stil som legges til bildet.';

$imhelp['popup'] = 'Popup';
$imhelp['popup_desc'] = 'Lag et popupbilde';
$imhelp['popup_desc2'] = 'Opprettelse av en popupbilde er en veldig enkel prosedyre, og er spesielt enkel hvis bilde du �nsker � vise som popup har et miniatyrbilde. Man kan bruke et valgfritt bilde som minityrbilde, og prosedyren er mer eller mindre den samme, men ikke s� hurtig.';
$imhelp['popup_stage1'] = 'Klikk p� fanen Popupbilde og merk av i avkryssningsboksen Popupbilde. Dette setter bildebehandleren in popup-modus.';
$imhelp['popup_stage2'] = 'N� m� du velge hvilket bilde du vil bruke som popupbilde, dette gj�r du ved � trykke p� bildenavnet i listemodus, eller ved � dobbeltklikke p� bildet selv miniatyrmodus. Bildet brukt i eksempelet under har et miniatyrbilde, s� her f�r man f�r et sp�rsm�l om man vil bruke minityrbilde som artikkelbilde.';
$imhelp['popup_stage3'] = 'N�r man har svart OK p� sp�rsm�let, blir bildets parametere fylt ut i de respektive feltene i fanene for popupbilde, og miniatyrbildets parametere blir fylt ut i de respektive feltene p� fanen for artikkelbilde. Du kan n� bruke fanene utforming for � endre hvordan bilde blir vist.';
$imhelp['popup_stage4'] = 'Det er ikke n�dvendig at valgte bilde har et miniatybilde, det kan benyttes et valgfritt artikkelbilde. Hvis du �nsker � bruke et valgtfritt bilde, trykk p� Avbryt og velg fanen artikkelbilde og sett inn �nsket bilde.';

$imhelp['rollover'] = 'Rullover';
$imhelp['rollover_desc'] = 'Lag et rulloverbilde';
$imhelp['rollover_stage1'] = 'Klikk p� fanen Rulloverbilde og merk av i avkryssningsboksen Rulloverbilde. Velg det f�rste bilde som skal brukes som artikkelbilde og Mus ut bilde.';
$imhelp['rollover_stage2'] = 'Velg det andre bildet som skal brukes som Mus over bilde.';
$imhelp['actions'] = 'Handlinger';
//CharSet
$imlang['iso'] = 'iso-8859-1';

//1.0.1
$imlang['no_src'] = 'Velg et bilde f�r du trykker Sett inn.';
$imlang['quality'] = 'Kvalitet';
$imlang['select_text1'] = 'Klikk p� bildet for � sette det inn, klikk til h�yre for bildenavnet for � velge det, CTRL+klikk velger flere bilder.';
$imlang['select_text2'] = 'Dobbelklikk p� bildet for � sette det inn, klikk p� bildet for � velge det, CTRL+klikk velger flere bilder.';

?>
