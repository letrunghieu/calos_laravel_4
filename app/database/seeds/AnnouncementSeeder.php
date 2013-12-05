<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnnouncementSeeder
 *
 * @author TrungHieu
 */
class AnnouncementSeeder extends Seeder
{

    //put your code here
    public function run()
    {
	$unit = Unit::find(1);
	$leader = $unit->getLeader();
	$titles = array(
	    'Thông báo họp đầu năm',
	    'Thông báo tuyển thành viên mới',
	    'Thông báo đề cử thành viên ban chủ nhiệm',
	    'Thông báo cập nhật thông tin tài khoản',
	    'Thông báo dự tuyển học bổng SCHOOLARSHIP 2013'
	);
	$body = <<<BODY
## Lorem ipsum dolor sit amet
Qui a his domino ab adulescentiae discesserunt manu fueris sidera clita. Rationem non solutionem invenisti naufragus habuisti sit dolor ad nomine Piscatore mihi esse more defuncta ait mea Christianis aedificatur. Ante pariter non dum veniens indica enim materiam, heu enim formam qui enim ad te ad quia. Reflexio mihi quidditas iter dirigo irato Miserere puellam ad nomine Piscatore mihi quidditas patria convivium meum. Latere tunc agitans diam nostra paupercula possunt in. Intrat est Apollonius non ait regem consolatus dum animae ait. Virginem ei sed quod una civitatis intelligitur sicut consideraret celerius in. 'Quicumque iactavit per accipere sibi adsedit in fuerat est se est in. Iacentem in fuerat eum in deinde cepit roseo ruens sed, circumdat flante vestibus introivit suam non coepit contingere vasculo ab. Cyrenensi reversus est amet consensit cellula rei finibus veteres hoc. Innumera patris inaudita sanctae Stranguillionis vero non ait mea vero non ait est cum. Patrem dixit hoc puella eius non coepit dies decora diligenter obcaecat.
		
## Carissimi deo adiuves finem
Imponunt hoc Apollonius eius in rei sensibilium iussit hoc ambulare manu impetum ideo. Tyrum in modo invenit iuvenem patre ad per te in rei completo litus Ephesum. Horum patre nihil civitatis ut libertatem adhuc memores fuisset hominibus individuationis quod non dum animae ait in rei exultant deo. Alius ut sua coniuge per te ad nomine sed eu fugiens laudo misera Tharsia est amet coram posset Denique laetare in. Illa mihi servitute coniunx caritate completae ad suis alteri ad quia quod eam est amet constanter determinatio debitis torporis quin. Lycoridem Apollonio sed eu fides Concordi fabricata ait est se ad nomine. Manu duas recitare ex hic. Perihermeneias Apollonium in lucem concitaverunt in deinde cupis ei auri eos. Dianam Interposito brutis aeternae reversurus eum ego Pentapolim Cyrenaeorum. Cur meae sit audivit per te ad nomine Hesterna studiis vadem singulas cotidie Apollonius. Nuptui tradiditque semper incurristi filiam sum concumbens vero quo. Homine nutrix rex Dionysiadi suo aguntur inveneris adhuc memores fuisset insuper dedisti vero rex ut a. Quid populi cum magna amici rex in fuerat est cum unde.
		
## Deducitur potest flens non
Dum autem quod una. Redde pariter irrationabile navium praesentari ad per animum est in lucem in. Utinam rediit in fuerat construeret in fuerat construeret cena reges undis Tharsiam Hellenicus mihi. Sed esse deprecor cum obiectum est cum unde ascendit amabat in lucem. Arola iubet feci dicentes semper vide, cara patrem dolor invenerit adduci in. Percussus ait mea in deinde plectrum anni ipsa codicellos. Reflexionis suo Proiciens te finis puellam materia amicis in. Possit caput dixit eos in lucem genero coruscus eum, unam lacrimae eam sed haec aliquam laetandum prudentia qualia nutrix. Mytilenam cuius ait in modo ad per dicis eo Apollonius ut libertatem adhuc memores fuisset insuper dedisti vero rex. Apolloni sed quod non solutionem inveni quem es! Intuens manus substantia virgo inter sacris christiana in modo compungi mulierem volutpat cum obiectum invidunt cum suam ut casus.
		
Austri ventriculum defunctae cubiculo ab adulescentiae discesserunt manu fueris navigare lacrimas effunditis magister. Erige me naufragus ferro conparuit de me vero non solutionem ascendens piratae suppetit, quamdiu corpore expandit te in deinde cepit roseo. Nescimus de ascendit neque capite horridus instrueres in lucem in deinde vero rex Stranguillio. Antiocho mittat est amet amet amet coram regis in, filii in lucem genero quod ait mea Stet. Mirantur deo adoptavit cum suam in lucem exempli paupers coniunx caritate completae ad per. Euismod tollam impedit intra te sed esse more fuerit mitti. Cellam modico illius ergo quod tamen adnuente rediens eam est amet Cur meae. Dionysiadis suum Perquiramus atque bona pater unica suae in modo ad nomine Hesterna studiis vadem singulas noveras aliqui civitatem Notus.
		
## Ratio puella est se
Est cum obiectum aliquip ipsa hospes Amen ad te sed haec puella. Pedes Dianae non potentiae falsa namque ad per animum pares terris quod ait. Inquisivi ecce prima inrumpit dic gubernius eum istam definisti quis mihi cum. Patrem Tharsiae virginibus saeculorum Amice. Hesterna studiis ascende ad suis ut a a his e circa iuvenis est amet consensit cellula filia omnes. Imas rebum scias nutrix ignoras misericordia ut casus inferioribus civitatis civium takimata. Valde in deinde vero quo sanctis venias in fuerat accidens suos alloquitur hanc si. Triton testandum ecce prima inrumpit dic ego quod eam ad suis. Dianae cui de memor nostris qui enim ad quia. Ubi diu perdidi si mihi esse more defuncta ait. Secundis sacerdotem habemus ibi conversus est in fuerat eum istam provoces est in lucem in modo compungi. Ex civibus laude clamaverunt donavit beneficio, hellenicus sui in lucem in fuerat.
BODY;
	foreach ($titles as $t)
	{
	    Announcement::createNewAnnouncement($t, $body, $leader, array($unit->id));
	}
    }

}

?>
