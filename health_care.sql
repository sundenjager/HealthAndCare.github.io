-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 09:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health&care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `nomAdmin` varchar(255) NOT NULL,
  `prenomAdmin` varchar(255) NOT NULL,
  `emailAdmin` varchar(255) NOT NULL,
  `pwAdmin` varchar(255) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `nomAdmin`, `prenomAdmin`, `emailAdmin`, `pwAdmin`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `idArt` int(11) NOT NULL AUTO_INCREMENT,
  `idSpec` int(255) NOT NULL,
  `titreArt` varchar(255) NOT NULL,
  `catArt` int(255) NOT NULL,
  `thumbArt` varchar(255) NOT NULL,
  `descArt` varchar(255) NOT NULL,
  `textArt` text NOT NULL,
  `etatArt` int(1) NOT NULL,
  `alaune` int(1) NOT NULL,
  PRIMARY KEY (`idArt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`idArt`, `idSpec`, `titreArt`, `catArt`, `thumbArt`, `descArt`, `textArt`, `etatArt`, `alaune`) VALUES
(1, 6, 'Quels sont les traitements mÃ©dicamenteux contre le cancer ?', 5, 'esm-fr-cancer-traitements-medic-chimiotherapie-07-02-2024-credit-getty-images-684x384.jpg', 'ChimiothÃ©rapie, thÃ©rapies ciblÃ©es, hormonothÃ©rapie, immunothÃ©rapie : ces traitements font partie de lâ€™arsenal de mÃ©dicaments contre le cancer, aux cÃ´tÃ©s de la chirurgie et de la radiothÃ©rapie. Quels sont leurs modes dâ€™action, leurs diffÃ©renc', 'Dans les traitements mÃ©dicamenteux contre le cancer, la chimiothÃ©rapie reste dominante (avec 363 160 personnes traitÃ©es en 2021, selon les chiffres les plus rÃ©cents de lâ€™Institut national du cancer). Elle consiste dans lâ€™administration de mÃ©dicaments agissant sur les cellules qui se divisent rapidement, ce qui est le cas des cellules cancÃ©reuses.\r\n\r\nLa chimiothÃ©rapie intervient dans la majoritÃ© des cancers. Elle peut Ãªtre prescrite en tant que traitement adjuvant dans le cas dâ€™une tumeur localisÃ©e, pour complÃ©ter la destruction de celle-ci (aprÃ¨s une chirurgie par exemple) et prÃ©venir les rechutes. Mais elle peut faire figure de traitement principal en cas de mÃ©tastases, son but Ã©tant alors de limiter lâ€™extension de ces derniÃ¨res (voire de les faire rÃ©gresser) et de prolonger la durÃ©e de vie du patient.\r\n\r\nSi lâ€™efficacitÃ© de la chimiothÃ©rapie continue de progresser avec la sortie rÃ©guliÃ¨re de nouvelles molÃ©cules, ses effets toxiques demeurent importants. Ã€ la diffÃ©rence de la chirurgie et de la radiothÃ©rapie qui sont des traitements localisÃ©s, les produits utilisÃ©s en chimiothÃ©rapie â€“ dont certains sont encore des dÃ©rivÃ©s du gaz moutarde3 â€“ agissent sur lâ€™ensemble de lâ€™organisme et notamment sur les cellules saines qui se multiplient rapidement. Dâ€™oÃ¹ les nombreux effets secondaires du traitement sur les cheveux, la peau, la moelle osseuse, les muqueuses intestinales, et la nÃ©cessitÃ© de limiter le traitement dans le temps. La durÃ©e dâ€™une chimiothÃ©rapie est en gÃ©nÃ©ral de 4 Ã  6 cures espacÃ©es de 3 Ã  4 semaines.\r\n\r\nÂ« En raison de son efficacitÃ©, la chimiothÃ©rapie va rester largement prescrite dans les annÃ©es Ã  venir, notamment pour les patients prÃ©sentant dâ€™importants risques de rÃ©cidive, estime Iris PauportÃ©, directrice de la Recherche, Innovation et Information scientifique Ã  la Ligue contre le cancer. Mais on observe deux Ã©volutions importantes : une tendance Ã  la dÃ©sescalade4 thÃ©rapeutique en chimiothÃ©rapie, quand la situation du patient le permet, et la montÃ©e en puissance de la mÃ©decine personnalisÃ©e, avec les thÃ©rapies ciblÃ©es, et de lâ€™immunothÃ©rapie Â». En quoi consistent ces derniÃ¨res, Ã©galement appelÃ©es traitements de prÃ©cision ?\r\n\r\nLâ€™immunothÃ©rapie consiste Ã  stimuler le systÃ¨me immunitaire pour quâ€™il Ã©limine les cellules cancÃ©reuses. En plein essor depuis une quinzaine dâ€™annÃ©es, ce traitement a ouvert une nouvelle Ã¨re dans le combat contre la maladie.\r\n\r\nApparues au dÃ©but des annÃ©es 2000, les thÃ©rapies ciblÃ©es visent, elles, les anomalies molÃ©culaires dÃ©celÃ©es dans la tumeur. Cette recherche est dÃ©sormais effectuÃ©e de maniÃ¨re quasi systÃ©matique pour chaque patient et rendue possible grÃ¢ce aux avancÃ©es en matiÃ¨re gÃ©nomique. Â« Ces traitements nâ€™agissent que sur les cellules cancÃ©reuses. Par consÃ©quent, ils ont en gÃ©nÃ©ral moins dâ€™effets secondaires que la chimiothÃ©rapie, explique Iris PauportÃ©. Ils peuvent Ãªtre administrÃ©s Ã  plus long terme. Â»\r\n\r\nOlivier Tredan, spÃ©cialiste des cancers du sein et oncologue mÃ©dical au centre LÃ©on BÃ©rard Ã  Lyon, tÃ©moigne de cette Ã©volution Ã  travers cet exemple. Â« Le traitement actuel dâ€™un cancer du sein chez une femme de 70 ans nâ€™a plus rien Ã  voir avec celui pratiquÃ© il y a 30 ou 40 ans. Ã€ lâ€™Ã©poque, on aurait sÃ»rement pratiquÃ© une grosse Â» chirurgie et une chimiothÃ©rapie conventionnelle, trÃ¨s toxique. Aujourdâ€™hui, on va davantage prendre en compte lâ€™Ã¢ge de la patiente, sa physiologie, son histoire, mais aussi les particularitÃ©s gÃ©nÃ©tiques de son cancer et cibler ainsi le traitement sur la biologie propre de sa maladie. Il sera peut-Ãªtre suffisant de lui prescrire une thÃ©rapie ciblÃ©e. Cette mÃ©decine de prÃ©cision, adaptÃ©e Ã  chaque patient et Ã  chaque cancer, va se dÃ©velopper. Â»\r\n\r\nIl sâ€™agit toutefois de rester prudent. Â« Dâ€™une part, on nâ€™a pas encore trouvÃ© des particularitÃ©s molÃ©culaires Ã  tous les cancers, et dans ces cas-lÃ , la chimiothÃ©rapie reste de mise, prÃ©cise Olivier TrÃ©dan. Dâ€™autre part, quel que soit le traitement biologique appliquÃ©, il aura toujours des effets secondaires. Â»', 1, 1),
(2, 9, 'Etre une femme et travailler chez soi : les assistantes maternelles entre disponibilitÃ© Ã©tendue et rÃ©munÃ©ration limitÃ©e', 6, 'SOLANA-CAIN-HONOURING-BLACK-MOTHERHOOD-JORIAN-SOLEIL-MAY04.jpg', 'Dans le cadre du projet de mÃ©diation scientifique Â« Que sait-on du travail ? Â» du Laboratoire interdisciplinaire dâ€™Ã©valuation des politiques publiques de Sciences Po, diffusÃ© en collaboration avec Â« Le Monde Â», trois sociologues dÃ©crivent les fr', 'Vous pouvez partager un article en cliquant sur les icÃ´nes de partage en haut Ã  droite de celui-ci. \r\nLa reproduction totale ou partielle dâ€™un article, sans lâ€™autorisation Ã©crite et prÃ©alable du Monde, est strictement interdite. \r\nPour plus dâ€™informations, consultez nos conditions gÃ©nÃ©rales de vente. \r\nPour toute demande dâ€™autorisation, contactez syndication@lemonde.fr. \r\nEn tant quâ€™abonnÃ©, vous pouvez offrir jusquâ€™Ã  cinq articles par mois Ã  lâ€™un de vos proches grÃ¢ce Ã  la fonctionnalitÃ© Â« Offrir un article Â». \r\n\r\nhttps://www.lemonde.fr/emploi/article/2024/02/12/etre-une-femme-et-travailler-chez-soi-les-assistantes-maternelles-entre-disponibilite-etendue-et-remuneration-limitee_6216084_1698637.html\r\n\r\n[Comment travaillent les assistantes maternelles ? GeneviÃ¨ve Cresson est sociologue, retraitÃ©e, ancienne professeure Ã  lâ€™universitÃ© de Lille et au Centre lillois dâ€™Ã©tudes et de recherches sociologiques et Ã©conomiques (ClersÃ©). Ses travaux concernent la famille, la santÃ©, la petite enfance et le genre ainsi que leurs articulations. FranÃ§ois-Xavier Devetter est chercheur au ClersÃ© (universitÃ© de Lille) et Ã  lâ€™Institut de recherches Ã©conomiques et sociales (IRES). Ses travaux de recherche portent sur le temps de travail et les emplois Ã  bas salaire, tout particuliÃ¨rement les agentes et agents dâ€™entretien, les aides Ã  domicile et les assistantes maternelles agrÃ©Ã©es. Il a publiÃ© rÃ©cemment Aide Ã  domicile, un mÃ©tier en souffrance. Sortir de lâ€™impasse, avec Annie Dussuet et Emmanuelle Puissant, aux Editions de lâ€™Atelier (2023). Julie LazÃ¨s est enseignante-chercheuse Ã  lâ€™IMT Nord Europe et au ClersÃ©. Elle travaille sur les usages numÃ©riques et leurs impacts sur des dynamiques territoriales (activitÃ© de communes insulaires) ou sur des conditions de travail et dâ€™emploi (assistantes maternelles).]\r\n\r\nDans notre pays, le recours aux assistantes maternelles (AM) reste la premiÃ¨re solution de garde pour les jeunes enfants avant 3 ans et leur scolarisation. Lâ€™enquÃªte emploi de lâ€™Insee compte 390 000 AM, dont 80 % sont salariÃ©es du particulier employeur. Leur rÃ©munÃ©ration mensuelle moyenne nette est de 1 233 euros, selon la mÃªme enquÃªte.\r\n\r\nCe mÃ©tier reste essentiellement fÃ©minin (Ã  plus de 97 %), mÃªme si les textes officiels en parlent au masculin â€“ ce que nous ne ferons pas ici. Il est traversÃ© par des paradoxes proches de ceux des autres mÃ©tiers fÃ©minins considÃ©rÃ©s comme peu qualifiÃ©s (cf. la contribution de SÃ©verine LemiÃ¨re et Rachel Silvera, Â« ReconnaÃ®tre le travail pour Ã©tablir lâ€™Ã©galitÃ© salariale femmes-hommes : le cas des sages-femmes Â», Le Monde du 8 janvier) : il est indispensable au bon dÃ©veloppement de lâ€™enfant comme au bon fonctionnement de lâ€™Ã©conomie, en permettant aux parents, et spÃ©cialement aux mÃ¨res, de rester en emploi.', 1, 1),
(3, 4, 'Complications et mÃ©susages des produits de comblement injectables', 11, 'Screenshot 2024-02-20 131934.png', 'Les consÃ©quences dÃ©sastreuses des injections Â«â€‰sauvagesâ€‰Â» dâ€™acide hyaluronique ont fait couler beaucoup dâ€™encre. Elles sont Ã  lâ€™origine dâ€™un nombre croissant de complications motivant le recours Ã  une prise en charge dermatologique.', 'Depuis quelques annÃ©es, le marchÃ© de la mÃ©decine esthÃ©tique, surtout des produits injectables (toxine botulique pour la correction des rides, acide hyaluronique et autres produits pour le comblement cutanÃ©), est en plein essor. Il augmente mÃªme deux fois plus vite que celui de la chirurgie esthÃ©tique. En cause : la prÃ©fÃ©rence croissante des personnes pour ces soins moins invasifs, trÃ¨s vantÃ©s sur les rÃ©seaux sociaux. Ce marchÃ© sâ€™Ã©tablirait Ã  4 milliards dâ€™euros dâ€™ici Ã  2025 au niveau mondial, selon certaines estimations.\r\n\r\nLa France nâ€™est pas Ã©trangÃ¨re Ã  cet engouement, qui dÃ©borde sur le marchÃ© clandestin. Ainsi, dÃ¨s 2022, lâ€™ANSM a Ã©mis une alerte aprÃ¨s avoir reÃ§u une quarantaine de notifications dâ€™effets indÃ©sirables Ã  la suite dâ€™injections dâ€™acide hyaluronique par des personnes non autorisÃ©es, dont esthÃ©ticiennes, coiffeuses, prothÃ©sistes ongulaires, etc. Ces pratiques, bien que constituant un dÃ©lit dâ€™exercice illÃ©gal de la mÃ©decine passible de 2 ans de prison et 30 000 â‚¬ dâ€™amende, semblent se poursuivre aujourdâ€™hui (en 2023, deux femmes dans le dÃ©partement du Nord ont Ã©tÃ© condamnÃ©es Ã  de la prison ferme et Ã  une peine avec sursis pour injections illÃ©gales de toxine botulique et dâ€™acide hyaluronique). Les chirurgiens esthÃ©tiques ont lancÃ© un appel pour interdire la vente libre dâ€™acide hyaluronique (qui est aujourdâ€™hui toujours possible en officine).\r\n\r\nDes effets indÃ©sirables pouvant aller jusquâ€™Ã  des infections graves ou des nÃ©croses de la peau sont majoritairement liÃ©s Ã  ces pratiques non conformes (non-respect des conditions dâ€™hygiÃ¨ne, injection mal rÃ©alisÃ©eâ€¦), selon lâ€™ANSM. Dâ€™autres effets indÃ©sirables moins graves mais frÃ©quents, y compris en cas de ', 1, 1),
(4, 4, 'Ã‰ruptions et virus chez lâ€™enfant : pas toujours simple', 7, 'Screenshot 2024-02-20 132357.png', 'Les Ã©ruptions fÃ©briles de lâ€™enfant sont liÃ©es dans la majoritÃ© des cas Ã  une infection, principalement virale. Ni la sÃ©miologie de lâ€™exanthÃ¨me ni son Ã©volution ne sont spÃ©cifiques dâ€™un agent infectieux donnÃ©. Ces Ã©lÃ©ments ne permettent d', 'Dans la majoritÃ© des cas les fiÃ¨vres Ã©ruptives infanti-\r\nles correspondent Ã  des viroses exanthÃ©matiques,\r\nvoire Ã  des Ã©tiologies bactÃ©riennes. Beaucoup\r\nmoins frÃ©quemment ces fiÃ¨vres Ã©ruptives sont les premiÃ¨res\r\nmanifestations dâ€™une affection potentiellement plus sÃ©vÃ¨re,\r\net chez lâ€™enfant le souci constant est de ne pas passer Ã  cÃ´tÃ© du\r\ndiagnostic dâ€™un syndrome de Kawasaki.\r\nLes caractÃ©ristiques de lâ€™exanthÃ¨me lui-mÃªme, les signes\r\nassociÃ©s (Ã©nanthÃ¨me, adÃ©nopathies, pharyngite etc.), les\r\ncirconstances de survenue, et en particulier les donnÃ©es\r\nÃ©pidÃ©miologiques et le carnet de vaccination, sont des Ã©lÃ©-\r\nments essentiels Ã  la dÃ©marche diagnostique et Ã  la prise en\r\ncharge de lâ€™enfant.\r\nLes Ã©tudes microbiologiques de ces derniÃ¨res annÃ©es\r\nmontrent bien quâ€™il nâ€™existe aucun lien univoque entre un\r\ntype dâ€™exanthÃ¨me, ou de maladie Ã©ruptive, et un agent\r\ninfectieux donnÃ© : un mÃªme tableau clinique stÃ©rÃ©otypÃ© peut\r\nÃªtre dÃ» Ã  plusieurs agents infectieux, et un mÃªme agent\r\ninfectieux peut Ãªtre Ã  lâ€™origine de plusieurs tableaux cliniques.\r\nLâ€™EXANTHÃˆME\r\nExanthÃ¨me viral\r\nPresque toutes les variÃ©tÃ©s sÃ©miologiques ont Ã©tÃ© dÃ©crites au\r\ncours des exanthÃ¨mes viraux, mais on observe surtout des\r\nexanthÃ¨mes maculo-papuleux, et des exanthÃ¨mes vÃ©siculeux.\r\nLâ€™exanthÃ¨me maculo-papuleux est le plus frÃ©quent. Il peut\r\nÃªtre morbilliforme, fait dâ€™Ã©lÃ©ments sÃ©parÃ©s, parfois\r\nconfluents. Une Ã©volution Ã  marche descendante est alors\r\ntrÃ¨s Ã©vocatrice dâ€™une rougeole. Il peut aussi Ãªtre rubÃ©oli-\r\nforme, composÃ© dâ€™Ã©lÃ©ments plus fins, et plus serrÃ©s, voire\r\nrosÃ©oliforme fait de macules espacÃ©es, discrÃ¨tement rosÃ©es.\r\nBeaucoup plus rarement lâ€™Ã©rythÃ¨me est scarlatiniforme,\r\ncomposÃ© de larges plaques rouge foncÃ©, voire purpurique,\r\navec un aspect chaud et grenu Ã  la palpation, sans espace de\r\npeau saine. Cet aspect sÃ©miologique doit faire rechercher une\r\nautre Ã©tiologie mais nâ€™Ã©limine pas le diagnostic dâ€™exanthÃ¨me\r\nviral (tableau I).\r\nLâ€™exanthÃ¨me vÃ©siculeux est trÃ¨s en faveur dâ€™une virose. En\r\ndehors de la varicelle il sâ€™agit surtout dâ€™infections Ã  entÃ©rovi-\r\nrus (coxsackies). Les vÃ©sicules sont alors de plus petite taille\r\nque dans la varicelle, et disparaissent rapidement aprÃ¨s une\r\nsimple flÃ©trissure, sans phase dâ€™ombilication et de croÃ»tes. La\r\nlocalisation au cuir chevelu nâ€™est pas courante, par contre les\r\nextrÃ©mitÃ©s sont volontiers atteintes.\r\nLa durÃ©e des exanthÃ¨mes viraux est variable, allant de 24\r\nheures Ã  plus dâ€™une semaine. Le moment de lâ€™apparition de\r\nlâ€™Ã©ruption par rapport au dÃ©but de la fiÃ¨vre est aussi variable.\r\nUn Ã©nanthÃ¨me est trÃ¨s frÃ©quemment associÃ© (hyperhÃ©mie\r\npharyngÃ©e, vÃ©sicules...).', 1, 0),
(5, 6, 'DÃ©fi environnemental et soins de santÃ©', 1, 'covid+burnout+image_mid.jpg', 'La crise globale Ã  laquelle nous faisons face (climat, santÃ©, Ã©nergie, guerresâ€¦) constitue une opportunitÃ© unique de repenser notre fonctionnement et de nous engager pour mettre en place des soins de santÃ© de qualitÃ©, durables et Ã©quitables. Pour', 'Notre systÃ¨me de soins de santÃ© a de nombreuses qualitÃ©sâ€¦ et aussi quelques dÃ©fauts. Ces derniÃ¨res annÃ©es, sa rÃ©silience a Ã©tÃ© Ã©prouvÃ©e Ã  plusieurs reprises et la mise Ã  lâ€™Ã©preuve ne fait probablement que commencer. En effet, les changements planÃ©taires sont nombreux et rapides et il ne sâ€™agit pas dâ€™une Ã©volution linÃ©aire mais dâ€™une rupture sans prÃ©cÃ©dent, tant au regard du temps long des modifications gÃ©ologiques et environnementales du passÃ© que face Ã  lâ€™imprÃ©visibilitÃ© que gÃ©nÃ¨rent ces changements. Le fonctionnement des sociÃ©tÃ©s humaines en gÃ©nÃ©ral, et des soins de santÃ© en particulier, nâ€™est quâ€™en apparence dÃ©connectÃ© des rÃ©alitÃ©s physiques de la Terre : nos sociÃ©tÃ©s ne fonctionnent que grÃ¢ce Ã  lâ€™Ã©nergie quâ€™elles puisent Ã  la surface du globe et aux matÃ©riaux extraits de la croÃ»te terrestre. Ces ressources sont en quantitÃ© limitÃ©e et leur utilisation entraÃ®ne des modifications profondes de lâ€™Ã©cosystÃ¨me terrestre qui Ã  leur tour impactent le fonctionnement de nos sociÃ©tÃ©s et la santÃ© de tous les Ãªtres vivants. Il nous faut donc simultanÃ©ment nous adapter aux modifications environnementales, aux pathologies qui en rÃ©sultent et rÃ©duire notre impact Ã©cologique.\r\n\r\nLâ€™ampleur de ces dÃ©fis est potentiellement dÃ©courageante, anxiogÃ¨ne voire paralysante. Pourtant, câ€™est aussi une opportunitÃ© fondamentale de faire le point et se rÃ©orienter (1). Quâ€™est-ce qui nous importe vraiment, en Â« santÃ© Â» et dans la vie ? Comment mettre en place une sobriÃ©tÃ© positive, centrÃ©e sur la qualitÃ© de vie ? Quels Â« justes soins Â» souhaitons-nous pour nos vieux jours, pour nos enfants et petits-enfants, pour chaque personne vivant sur cette planÃ¨te ? Comment Â« Avant tout ne pas nuire Â», chez nous et dans lâ€™articulation entre le Â« Nord Â» et le Â« Sud Â» ?\r\n\r\nPour rÃ©pondre Ã  ces questions, il est nÃ©cessaire de clarifier les enjeux, les concepts et les pistes de solution, pour nos sociÃ©tÃ©s en gÃ©nÃ©ral et pour les soins de santÃ© en particulier. Câ€™est ce que nous essaierons de faire dans cet article, sans optimisme excessif mais Ã©galement sans catastrophisme. Nous commencerons par revoir briÃ¨vement les prÃ©visions en matiÃ¨re dâ€™environnement et de ressources, les concepts de Â« dÃ©veloppement durable Â», Â« transition Â» et leurs critiques. Nous nous intÃ©resserons ensuite aux interactions entre environnement, santÃ© et soins de santÃ©, avant de terminer par une brÃ¨ve prÃ©sentation des stratÃ©gies possibles pour des soins de santÃ© durables, efficaces et sans danger pour les humains et leur environnement naturel. Le rÃ©chauffement climatique (augmentation de la tempÃ©rature moyenne de lâ€™air Ã  la surface de la Terre) est observÃ© depuis le dÃ©but de lâ€™Ã¨re industrielle (fin XIXe siÃ¨cle). Il est causÃ© par lâ€™augmentation de concentration de gaz Ã  effet de serre (GES) dans lâ€™atmosphÃ¨re, des suites de lâ€™activitÃ© humaine*.\r\n\r\nLe dernier rapport (3) du Groupe Intergouvernemental sur lâ€™Evolution du Climat (GIEC) Ã©tablit que lâ€™activitÃ© humaine a causÃ© une Ã©lÃ©vation de tempÃ©rature globale de 1.1Â°C entre 1850-1900 et 2011-2020. Ce rÃ©chauffement dâ€™origine anthropique augmente la frÃ©quence et lâ€™intensitÃ© des Ã©vÃ©nements mÃ©tÃ©orologiques extrÃªmes (vagues de chaleur, sÃ©cheresses, incendies, tempÃªtes, prÃ©cipitations intenses, inondations) ainsi que la fonte des glaces et lâ€™Ã©lÃ©vation du niveau des mers : le terme de dÃ©rÃ¨glement climatique est ainsi plus appropriÃ© que celui de rÃ©chauffement.\r\n\r\nLa Belgique nâ€™est pas Ã©pargnÃ©e par ce phÃ©nomÃ¨ne (4). La tempÃ©rature moyenne Ã  Uccle a augmentÃ© de 2.1Â°C (davantage que la moyenne mondiale) entre 1833 et 2019. Le nombre, la durÃ©e et lâ€™intensitÃ© des vagues de chaleur, les prÃ©cipitations annuelles moyennes, le nombre de jours de prÃ©cipitations abondantes et le nombre moyen de jours de sÃ©cheresse ont Ã©galement augmentÃ©.\r\n\r\nLes consÃ©quences du dÃ©rÃ¨glement climatique sur la biodiversitÃ© et les conditions de vie des communautÃ©s les plus pauvres sont dÃ©jÃ  observÃ©es et ont un impact Ã©conomique et Ã©cologique global, irrÃ©versible Ã  lâ€™Ã©chelle de plusieurs siÃ¨cles compte tenu de la longue demi-vie dans lâ€™atmosphÃ¨re du CO2. Le GIEC a modÃ©lisÃ© plusieurs scÃ©narii reprÃ©sentatifs des trajectoires climatiques possibles selon lâ€™Ã©volution de nos Ã©missions de GES** (3). Il est Ã©tabli que les politiques dÃ©jÃ  en place sont insuffisantes pour limiter le rÃ©chauffement Ã  1.5Â°C. Le scÃ©nario dâ€™augmentation de 2Â°C Ã  lâ€™horizon 2100, qui impliquerait un monde net zÃ©ro carbone en 2070, reste envisageable Ã  condition de mettre immÃ©diatement en Å“uvre des mesures ambitieuses, la fenÃªtre dâ€™opportunitÃ© permettant dâ€™instaurer des changements significatifs se refermant trÃ¨s rapidement.\r\n\r\nAutre motif dâ€™inquiÃ©tude, la biodiversitÃ© dÃ©croit Ã  une vitesse 10 Ã  100 fois plus Ã©levÃ©e quâ€™au cours des derniers millÃ©naires, au point que lâ€™IPBES (Plate-forme intergouvernementale scientifique et politique sur la biodiversitÃ© et les services Ã©cosystÃ©miques) Ã©voque une sixiÃ¨me extinction de masse*** (5,6). Dans le monde, lâ€™Ã©tendue et la qualitÃ© des Ã©cosystÃ¨mes ont dÃ©clinÃ© de 47% par rapport Ã  leur ligne de base, 25% des espÃ¨ces animales et vÃ©gÃ©tales sont en danger et la biomasse de mammifÃ¨res sauvages a diminuÃ© de 87% (5). En Belgique, prÃ¨s dâ€™un tiers des espÃ¨ces indigÃ¨nes recensÃ©es sont rares, menacÃ©es ou Ã©teintes (6). Les causes de la perte de biodiversitÃ© sont multiples : modifications dâ€™utilisation des sols et des ocÃ©ans avec destructions dâ€™habitats naturels (dÃ©forestation, loisirs et tourismeâ€¦), exploitation de certaines espÃ¨ces (agriculture intensive, production de bois, surpÃªcheâ€¦), dÃ©rÃ¨glement climatique, pollution, dissÃ©mination dâ€™espÃ¨ces invasives (5)â€¦ La biodiversitÃ© est pourtant vitale pour notre espÃ¨ce, tant pour des raisons matÃ©rielles (rÃ©gulation du climat, de la qualitÃ© de lâ€™air et de lâ€™eau, rÃ©silience des Ã©cosystÃ¨mes, production de nourriture, dâ€™Ã©nergie, de matiÃ¨res premiÃ¨resâ€¦) quâ€™immatÃ©rielles (culture, santÃ© mentale, sentiment dâ€™appartenance et dâ€™identitÃ©â€¦) (7).\r\n\r\nChangement climatique et perte de biodiversitÃ© ne sont pas les seuls changements dÃ©lÃ©tÃ¨res causÃ©s par lâ€™activitÃ© humaine. En se basant sur la reconnaissance de neuf systÃ¨mes biogÃ©ochimiques nÃ©cessaires Ã  la vie sur Terre, une Ã©quipe internationale (8) a proposÃ©, en 2009, le concept de limites planÃ©taires au-delÃ  desquelles lâ€™espace sÃ»r de fonctionnement de lâ€™humanitÃ© serait mis en danger. A lâ€™Ã©poque, trois de ces limites de sÃ©curitÃ© Ã©taient dÃ©passÃ©es sous la pression des activitÃ©s humaines. Selon le Stockholm Resilience Centre qui met Ã  jour ce modÃ¨le (9), six limites sont aujourdâ€™hui dÃ©passÃ©es (fig. 1). Les interactions entre ces systÃ¨mes gÃ©nÃ¨rent des boucles de renforcement amplifiant lâ€™impact dÃ©lÃ©tÃ¨re des activitÃ©s humaines sur le systÃ¨me terrestre. Par exemple, dÃ©rÃ¨glement climatique et perte de biodiversitÃ© se renforcent mutuellement (10).\r\n', 1, 1),
(6, 6, 'Le Yoga', 3, 'i105659-yoga-th.jpeg', 'Le yoga est la pratique d''un ensemble de postures et d ''exercices de respiration qui vise Ã  apporter un bien Ãªtre physique et mental. cet ancien art de vivre tel qu''il est expliquÃ© dans les textes se rÃ©vÃ¨le comme un chemin initiatique qui transcende ', 'Il existe plusieurs styles de yoga et chacun met l''accent sur un aspect spÃ©cifique de cette pratique.\r\n    Il y a des yogas dynamiques dans lesquels l''enchaÃ®nement des postures se fait au rythme de la respiration tel que l''ashtanga et le vinyasa, dans ces cours plutÃ´t physiques tout en assouplissant et renforÃ§ant le corps, on amÃ©liore le systÃ¨me cardio-vasculaire.\r\n\r\n    L''Iyengar qui est un yoga plus statique met l''accent sur l''alignement du corps, ici on prend le temps de dissÃ©quer chacun des asanas, on dÃ©veloppe la comprÃ©hension de notre corps.\r\n\r\n    Le Hatha yoga est un yoga doux aisÃ©ment pratiquÃ© par des personnes plus Ã¢gÃ©es.\r\n\r\nil est important de trouver le style de yoga qui nous convient le mieux, cela dÃ©pend beaucoup de notre potentiel.\r\n\r\nIl est prÃ©fÃ©rable, pour bÃ©nÃ©ficier des bienfaits des yogas dynamiques, d''Ãªtre en bonne santÃ© gÃ©nÃ©rale et d''avoir une certaine condition physique, sinon il devient difficile de suivre le rythme, ce qui gÃ©nÃ¨re un risque de blessures.\r\n\r\nPour ceux qui ont des problÃ¨mes de dos et qui ne sont pas sportifs il faut se tourner vers un yoga moins dynamique ou l''on prend le temps de bien expliquer les postures comme l''Iyengar et le hatha.\r\n Les autres types de Yoga par PasseportSantÃ©\r\n\r\n \r\n\r\nMÃªme si les postures classiques ont fait leurs preuves et demeurent les mÃªmes depuis des millÃ©naires, le hatha-yoga continue d''Ã©voluer et a pris diffÃ©rentes formes, surtout au cours du XXe siÃ¨cle. Chacun des styles de yoga combine les postures, les exercices respiratoires et la mÃ©ditation d''une faÃ§on plus ou moins Ã©nergique ou douce, animÃ©e ou calme. Voici les yogas plus courants en Occident.\r\n\r\n \r\n\r\nAnusara. Une nouvelle forme de yoga crÃ©Ã©e en 1997 par John Friend. Elle sâ€™est rapidement popularisÃ©e et est aujourdâ€™hui prÃ©sente dans 70 pays. Sa philosophie de base est de cÃ©lÃ©brer le coeur et de voir le bon dans chaque personne et chaque chose.\r\n\r\n \r\n\r\nAshtanga. CaractÃ©risÃ© par la synchronisation de la respiration avec des enchaÃ®nements rapides de postures de plus en plus exigeantes. Cela Ã©lÃ¨ve considÃ©rablement le mÃ©tabolisme et la tempÃ©rature corporelle. L''Ashtanga est excellent pour l''endurance. Aux Ã‰tats-Unis, on en a conÃ§u une forme particuliÃ¨rement dynamique appelÃ©e Power Yoga.\r\n\r\n \r\n\r\nIntÃ©gral. ConÃ§u aux Ã‰tats-Unis dans les annÃ©es 1960, il propose une intÃ©gration Ã©quilibrÃ©e des postures, de la respiration, de la mÃ©ditation et de la relaxation. (Ne pas confondre avec l''approche spirituelle de Sri Aurobindo, appelÃ©e Ã©galement yoga intÃ©gral.)\r\n\r\n \r\n\r\nIyengar. Cours disciplinÃ©s et rigoureux oÃ¹ l''on insiste sur l''alignement des membres et, surtout, de la colonne vertÃ©brale; trÃ¨s orientÃ© vers la santÃ©. Aucune connotation spirituelle, mais l''aspect mÃ©ditatif est prÃ©sent.\r\n\r\n \r\n\r\nKripalu. Une danse du corps, de l''esprit et de l''Ã©nergie, avec une insistance sur les techniques respiratoires. Favoriserait particuliÃ¨rement les systÃ¨mes cardiovasculaire, digestif et nerveux.\r\n\r\n \r\n\r\nKundalini. Vise avant tout Ã  Ã©veiller la kundalini, l''Ã©nergie originelle curative. Lâ€™approche travaille sur la conscience mÃ©ditative Ã  travers des enchaÃ®nements de postures.\r\n\r\n \r\n\r\nSivananda ou Vedanta. Les cours sont donnÃ©s par l''organisation Sivananda, dans ses propres centres. On insiste sur la pensÃ©e positive, la mÃ©ditation, la respiration, la relaxation et l''alimentation. Aspect spirituel trÃ¨s prÃ©sent.\r\n\r\n \r\n\r\nSudarshan Kriya. Cette forme de yoga a Ã©tÃ© crÃ©Ã©e par Sri Sri Ravi Shankar au dÃ©but des annÃ©es 1980. Aujourdâ€™hui prÃ©sente dans plus de 140 pays, elle mise fortement sur la respiration pour rÃ©Ã©quilibrer le corps et lâ€™esprit.\r\n\r\n \r\n\r\nViniyoga. Se caractÃ©rise par l''intÃ©gration du mouvement Ã  la respiration et par un enseignement personnalisÃ© qui s''adapte Ã  chaque individu.\r\n\r\n \r\n\r\nQuant au yoga prÃ©natal, il s''agit de cours orientÃ©s sur les besoins spÃ©cifiques des femmes enceintes. L''instructeur choisit alors certains exercices (posturaux et respiratoires) pour aider celles-ci Ã  surmonter les difficultÃ©s liÃ©es Ã  la grossesse, faciliter les Ã©tapes de l''accouchement et favoriser le retour Ã  l''Ã©quilibre corporel aprÃ¨s la naissance. Les instructeurs peuvent avoir pratiquÃ© dans l''un ou l''autre des mouvements citÃ©s plus haut.', 1, 1),
(7, 8, 'Le tabagisme raccourcit la vie', 4, 'Screenshot 2024-02-20 134647.png', 'Les fumeurs courent un risque accru dâ€™au moins 16 types de cancer. Ã€ moins dâ€™Ã©craser, jusquâ€™Ã  la moitiÃ© des fumeurs vont mourir dâ€™une maladie liÃ©e au tabagisme. La plupart des fumeurs vivront environ 10 ans de moins que quelquâ€™un qui nâ€™a ', 'Le cancer du poumon est la principale cause de dÃ©cÃ¨s par cancer au Canada. Environ 72 % des cas de cancer du poumon au Canada sont dus au tabagisme. \r\n\r\nLes fumeurs sont Ã  peu prÃ¨s 20 fois plus susceptibles de dÃ©velopper un cancer du poumon que les non-fumeurs. Plus une personne fume longtemps et plus elle fume de cigarettes chaque jour, plus son risque de cancer du poumon augmente. Les fumeurs courent Ã©galement plus de risques sâ€™ils sont exposÃ©s au radon ou Ã  certaines substances chimiques Ã  la maison ou au travail et quâ€™ils continuent Ã  fumer. \r\n\r\nLe tabagisme est le principal facteur de risque des maladies Ã©vitables et de mortalitÃ© au Canada. Renseignez-vous sur notre action dans la lutte antitabac.\r\nLa nicotine est une substance puissante qui engendre une dÃ©pendance et se rend au cerveau aprÃ¨s chaque bouffÃ©e de cigarette. Pendant un court moment, vous vous sentez Ã  la fois de meilleure humeur, plus calme et plus alerte. Mais au fur et Ã  mesure que le temps passe, vous pourriez voir votre niveau dâ€™Ã©nergie baisser et votre humeur se dÃ©tÃ©riorer, et alors ressentir un urgent besoin de recevoir une nouvelle dose de nicotine. Câ€™est lÃ  que le cercle vicieux sâ€™installe : plus vous fumez, plus votre besoin de nicotine augmente.\r\n\r\nDites-vous que tout nâ€™est pas perdu et quâ€™il est possible de vaincre la dÃ©pendance Ã  la cigarette. Plusieurs Canadiens y sont parvenus grÃ¢ce aux lignes dâ€™aide pour fumeurs, aux thÃ©rapies de remplacement de la nicotine et Ã  dâ€™autres formes de soutien. \r\nBien des fumeurs croient que le tabagisme leur permet de relaxer. En fait, câ€™est physiologiquement le contraire qui se passe. Sous lâ€™effet du tabac, votre cÅ“ur bat plus vite, votre respiration sâ€™accÃ©lÃ¨re et votre pression sanguine augmente.\r\n\r\nPourquoi alors certaines personnes ont-elles lâ€™impression dâ€™Ãªtre plus calmes lorsquâ€™elles fument? Câ€™est que le fait de fumer libÃ¨re de la dopamine â€“ une substance chimique du cerveau qui provoque des sensations agrÃ©ables. Mais cette impression de dÃ©tente ne dure que quelques instants. Souvent, ce nâ€™est pas la cigarette elle-mÃªme qui apporte une vÃ©ritable relaxation, mais la pause quâ€™on sâ€™accorde pour Ã©chapper au travail ou Ã  une source de stress.', 1, 0),
(8, 8, 'ObÃ©sitÃ©  Une maladie des tissus adipeux ', 2, 'open-market-assorted-vegetables.tmb-1920v.jpg', ' Principaux faits      Ã€ lâ€™Ã©chelle mondiale, le nombre de cas dâ€™obÃ©sitÃ© a presque triplÃ© depuis 1975.     En 2016, plus de 1,9 milliard dâ€™adultes â€“ personnes de 18 ans et plus â€“ Ã©taient en surpoids. Sur ce total, plus de 650 millions Ã©tai', 'Que sont le surpoids et lâ€™obÃ©sitÃ© ?\r\n\r\nLe surpoids et lâ€™obÃ©sitÃ© se dÃ©finissent comme une accumulation anormale ou excessive de graisse corporelle qui peut nuire Ã  la santÃ©.\r\n\r\nLâ€™indice de masse corporelle (IMC) est une mesure simple du poids par rapport Ã  la taille couramment utilisÃ©e pour estimer le surpoids et lâ€™obÃ©sitÃ© chez lâ€™adulte. Il correspond au poids divisÃ© par le carrÃ© de la taille, exprimÃ© en kg/m2.\r\nAdultes\r\n\r\nPour lâ€™adulte, lâ€™OMS dÃ©finit le surpoids et lâ€™obÃ©sitÃ© comme suit :\r\n\r\n    il y a surpoids quand lâ€™IMC est Ã©gal ou supÃ©rieur Ã  25; et\r\n    lâ€™il y a obÃ©sitÃ© quand lâ€™IMC est Ã©gal ou supÃ©rieur Ã  30.\r\n\r\nLâ€™IMC est la mesure la plus utile du surpoids et de lâ€™obÃ©sitÃ© dans une population car, chez lâ€™adulte, lâ€™Ã©chelle est la mÃªme quels que soient le sexe ou lâ€™Ã¢ge du sujet. Il donne toutefois une indication approximative car il ne correspond pas forcÃ©ment au mÃªme degrÃ© dâ€™adipositÃ© dâ€™un individu Ã  lâ€™autre.\r\n\r\nPour les enfants, il faut tenir compte de lâ€™Ã¢ge pour dÃ©finir le surpoids et lâ€™obÃ©sitÃ©.\r\nEnfants de moins de 5 ans\r\n\r\n    le surpoids est un poids par rapport Ã  la taille debout supÃ©rieur Ã  deux Ã©carts-types au-dessus de la mÃ©diane des normes OMS de croissance de lâ€™enfant; et\r\n    lâ€™obÃ©sitÃ© est un poids par rapport Ã  la taille debout supÃ©rieur Ã  trois Ã©carts-types au-dessus de la mÃ©diane des normes OMS de croissance de lâ€™enfant.\r\n\r\n    Poids-pour-taille debout \r\n\r\nEnfants de 5 Ã  19 ans\r\n\r\nPour les enfants Ã¢gÃ©s de 5 Ã  19 ans, le surpoids et lâ€™obÃ©sitÃ© se dÃ©finissent comme suit:\r\n\r\n    le surpoids est un IMC pour lâ€™Ã¢ge supÃ©rieur Ã  un Ã©cart-type au dessus de la mÃ©diane de la croissance de rÃ©fÃ©rence de lâ€™OMS; et\r\n    lâ€™obÃ©sitÃ© est un IMC pour lâ€™Ã¢ge supÃ©rieur Ã  2 Ã©carts-types au dessus de la mÃ©diane de la croissance de rÃ©fÃ©rence de lâ€™OMS.\r\n\r\n    Poids-pour-taille debout \r\n\r\nInformations sur le surpoids et lâ€™obÃ©sitÃ©\r\n\r\nDâ€™aprÃ¨s les estimations mondiales rÃ©centes de lâ€™OMS:\r\n\r\n    En 2016, plus de 1,9 milliard dâ€™adultes â€“ personnes de 18 ans et plus â€“ Ã©taient en surpoids. Sur ce total, plus de 650 millions Ã©taient obÃ¨ses.\r\n    Globalement, environ 13% de la population adulte mondiale (11% des hommes et 15% des femmes) Ã©taient obÃ¨ses en 2016.\r\n    En 2016, 39% des adultes â€“ personnes de 18 ans et plus â€“ (39% des hommes et 40% des femmes) Ã©taient en surpoids.\r\n    La prÃ©valence de lâ€™obÃ©sitÃ© a presque triplÃ© au niveau mondial entre 1975 et 2016.\r\n\r\nEn 2019, on estimait que 38,2 millions dâ€™enfants de moins de 5 ans Ã©taient en surpoids ou obÃ¨ses. Autrefois considÃ©rÃ©s comme des problÃ¨mes spÃ©cifiques des pays Ã  haut revenu, le surpoids et lâ€™obÃ©sitÃ© sont dÃ©sormais en augmentation dans les pays Ã  revenu faible ou intermÃ©diaire, en particulier en milieu urbain.\r\n\r\nEn Afrique, le nombre dâ€™enfants en surpoids ou obÃ¨ses a augmentÃ© de prÃ¨s de 24% depuis 2000. PrÃ¨s de la moitiÃ© des enfants de moins de 5 ans en surpoids ou obÃ¨ses vivaient en Asie en 2019.\r\n\r\nPlus de 340 millions dâ€™enfants et dâ€™adolescents Ã¢gÃ©s de 5 Ã  19 ans Ã©taient en surpoids ou obÃ¨ses en 2016.\r\n\r\nLa prÃ©valence du surpoids et de lâ€™obÃ©sitÃ© chez les enfants et les adolescents Ã¢gÃ©s de 5 Ã  19 ans a augmentÃ© de faÃ§on spectaculaire, passant dâ€™Ã  peine 4% en 1975 Ã  un peu plus de 18% en 2016. Lâ€™augmentation a Ã©tÃ© la mÃªme chez les garÃ§ons que chez les filles: en 2016, 18% des filles et 19% des garÃ§ons Ã©taient en surpoids.\r\n\r\nÃ€ lâ€™Ã©chelle mondiale, le surpoids et lâ€™obÃ©sitÃ© sont liÃ©s Ã  davantage de dÃ©cÃ¨s que lâ€™insuffisance pondÃ©rale. Il y a plus de personnes obÃ¨ses quâ€™en insuffisance pondÃ©rale, et ce dans toutes les rÃ©gions Ã  lâ€™exception de certaines parties de lâ€™Afrique subsaharienne et de lâ€™Asie.\r\nQuelles sont les causes de lâ€™obÃ©sitÃ© et du surpoids?\r\n\r\nLa cause fondamentale de lâ€™obÃ©sitÃ© et du surpoids est un dÃ©sÃ©quilibre Ã©nergÃ©tique entre les calories consommÃ©es et dÃ©pensÃ©es. Au niveau mondial, on a constatÃ©:\r\n\r\n    une augmentation de la consommation dâ€™aliments trÃ¨s caloriques riches en lipides; et\r\n    une augmentation du manque d''activitÃ© physique en raison de la nature de plus en plus sÃ©dentaire de nombreuses formes de travail, de lâ€™Ã©volution des modes de transport et de lâ€™urbanisation croissante.\r\n\r\nLâ€™Ã©volution des habitudes en matiÃ¨re dâ€™alimentation et dâ€™exercice physique rÃ©sulte souvent de changements au niveau de lâ€™environnement et de la sociÃ©tÃ© et dâ€™une absence de politiques dans certains secteurs, comme la santÃ©, lâ€™agriculture, les transports, lâ€™urbanisme, lâ€™environnement, la transformation des aliments, la distribution, le marketing et lâ€™Ã©ducation.\r\nQuelles sont les consÃ©quences les plus frÃ©quentes du surpoids et de lâ€™obÃ©sitÃ©?\r\n\r\nLa hausse de lâ€™IMC est un facteur de risque majeur pour certaines maladies chroniques comme:\r\n\r\n    les maladies cardiovasculaires (principalement les cardiopathies et les accidents vasculaires cÃ©rÃ©braux), qui Ã©taient dÃ©jÃ  la premiÃ¨re cause de dÃ©cÃ¨s en 2012;\r\n    le diabÃ¨te;\r\n    les troubles musculo-squelettiques, en particulier lâ€™arthrose â€“ une maladie dÃ©gÃ©nÃ©rative des articulations, trÃ¨s invalidante;\r\n    certains cancers (de lâ€™endomÃ¨tre, du sein, des ovaires, de la prostate, du foie, de la vÃ©sicule biliaire, du rein et du colon). \r\n\r\nLe risque de contracter des maladies non transmissibles augmente avec l''IMC.\r\n\r\nOn associe Ã  lâ€™obÃ©sitÃ© de lâ€™enfant un risque accru dâ€™obÃ©sitÃ©, de dÃ©cÃ¨s prÃ©maturÃ© et dâ€™incapacitÃ© Ã  lâ€™Ã¢ge adulte. Mais, en plus de ces risques pour lâ€™avenir, les enfants obÃ¨ses peuvent avoir des difficultÃ©s respiratoires, un risque accru de fractures, une hypertension artÃ©rielle, une apparition des premiers marqueurs de maladie cardiovasculaire, une rÃ©sistance Ã  lâ€™insuline et des problÃ¨mes psychologiques.\r\nUne double charge de morbiditÃ©\r\n\r\nDe nombreux pays Ã  revenu faible ou intermÃ©diaire sont aujourdâ€™hui confrontÃ©s Ã  une Â«double chargeÂ» de morbiditÃ©.\r\n\r\n    Alors quâ€™ils continuent de faire face aux problÃ¨mes des maladies infectieuses et de la dÃ©nutrition, ils connaissent Ã©galement une augmentation rapide des facteurs de risque pour les maladies non transmissibles, comme lâ€™obÃ©sitÃ© et le surpoids, notamment en milieu urbain.\r\n    Il nâ€™est pas rare dâ€™observer simultanÃ©ment la dÃ©nutrition et lâ€™obÃ©sitÃ© dans un mÃªme pays, une mÃªme communautÃ©, voire une mÃªme famille.\r\n\r\nDans les pays Ã  revenu faible ou intermÃ©diaire, les enfants risquent davantage de ne pas recevoir une alimentation adaptÃ©e Ã  leur Ã¢ge, que ce soit au stade prÃ©natal, Ã  celui du nourrisson ou du jeune enfant. ParallÃ¨lement, ils sont exposÃ©s Ã  des aliments riches en lipides, en sucre, en sel, trÃ¨s caloriques, mais pauvres en micronutriments, qui tendent Ã  Ãªtre moins chers, mais aussi de qualitÃ© nutritionnelle infÃ©rieure. Ces habitudes alimentaires, associÃ©es Ã  la sÃ©dentaritÃ©, entraÃ®nent une augmentation marquÃ©e de lâ€™obÃ©sitÃ© chez lâ€™enfant alors que les problÃ¨mes de malnutrition ne sont toujours pas rÃ©solus.\r\nComment rÃ©duire la charge du surpoids et de lâ€™obÃ©sitÃ©?\r\n\r\nLe surpoids et lâ€™obÃ©sitÃ©, ainsi que les maladies non transmissibles qui y sont associÃ©es, peuvent Ãªtre en grande partie Ã©vitÃ©s. Des environnements et des communautÃ©s propices sont cruciaux pour induire les choix des populations, en facilitant celui dâ€™aliments plus sains et dâ€™une activitÃ© physique rÃ©guliÃ¨re en termes dâ€™accessibilitÃ©, de disponibilitÃ© et de coÃ»t, et ainsi agir en prÃ©vention du surpoids et de lâ€™obÃ©sitÃ©.\r\n\r\nAu niveau individuel, on peut:\r\n\r\n    limiter lâ€™apport Ã©nergÃ©tique provenant de la consommation des lipides totaux et de sucres;\r\n    consommer davantage de fruits et lÃ©gumes, de lÃ©gumineuses, de cÃ©rÃ©ales complÃ¨tes et de noix;\r\n    avoir une activitÃ© physique rÃ©guliÃ¨re (60 minutes par jour pour un enfant et 150 minutes par semaine pour un adulte). \r\n\r\nLa responsabilitÃ© individuelle ne peut pleinement jouer son rÃ´le que si on a accÃ¨s Ã  un mode de vie sain. Il est donc important quâ€™au niveau de la sociÃ©tÃ©, lâ€™individu soit aidÃ© Ã  appliquer les recommandations Ã©noncÃ©es ci-dessus, par la mise en Å“uvre durable de politiques reposant sur des bases factuelles Ã  lâ€™Ã©chelle des populations qui rendent les choix de lâ€™activitÃ© physique rÃ©guliÃ¨re et de meilleures habitudes alimentaires disponibles, financiÃ¨rement avantageux et facilement accessibles pour tout un chacun, y compris les plus pauvres.\r\n\r\nUne taxe sur les boissons sucrÃ©es est un exemple de ce type de politiques.\r\n\r\nLâ€™industrie agro-alimentaire peut jouer un rÃ´le important de promotion des rÃ©gimes alimentaires sains:\r\n\r\n    en rÃ©duisant la teneur en graisse, en sucre et en sel des aliments prÃ©parÃ©s;\r\n    en proposant Ã  tous les consommateurs des produits sains et nutritifs Ã  un prix abordable;\r\n    en limitant la commercialisation dâ€™aliments riches en lipides, en sel et en sucre, notamment ceux qui sont destinÃ©s aux enfants et aux adolescents; et\r\n    en veillant Ã  proposer des aliments sains et Ã  favoriser la pratique dâ€™une activitÃ© physique sur le lieu de travail.\r\n\r\nAction de lâ€™OMS\r\n\r\nAdoptÃ©e par lâ€™AssemblÃ©e mondiale de la SantÃ© en 2004 et rÃ©affirmÃ©e en 2011 dans une dÃ©claration politique sur les maladies non transmissibles (MNT), la StratÃ©gie mondiale pour lâ€™alimentation, lâ€™exercice physique et la santÃ© indique les mesures nÃ©cessaires pour encourager les gens Ã  avoir une alimentation saine et Ã  faire rÃ©guliÃ¨rement de lâ€™exercice. Elle appelle toutes les parties intÃ©ressÃ©es Ã  prendre des mesures aux niveaux mondial, rÃ©gional et local pour amÃ©liorer les habitudes de la population en matiÃ¨re dâ€™alimentation et dâ€™activitÃ© physique.\r\n\r\nLe Programme de dÃ©veloppement durable Ã  lâ€™horizon 2030 reconnaÃ®t que les MNT sont un obstacle majeur au dÃ©veloppement durable. Dans ce programme, les chefs dâ€™Ã‰tat et de gouvernement se sont engagÃ©s Ã  mener une action nationale ambitieuse dâ€™ici Ã  2030 pour rÃ©duire dâ€™un tiers, par la prÃ©vention et le traitement, la mortalitÃ© prÃ©maturÃ©e due Ã  des MNT (cible 3.4 des ODD).\r\n\r\nSous le titre Â« Une population plus active pour un monde en meilleure santÃ© Â», le Plan dâ€™action mondial pour promouvoir lâ€™activitÃ© physique 2018-2030 prÃ©voit des mesures gouvernementales efficaces et faisables pour accroÃ®tre lâ€™activitÃ© physique partout dans le monde. Lâ€™OMS a publiÃ© un dossier technique intitulÃ© Â« ACTIVE Â» pour aider les pays Ã  planifier et Ã  mener Ã  bien leur action. De nouvelles lignes directrices de lâ€™OMS sur lâ€™activitÃ© physique, la sÃ©dentaritÃ© et le sommeil chez les enfants de moins de cinq ans ont paru en 2019.  \r\n\r\nLâ€™AssemblÃ©e mondiale de la SantÃ© a pris note avec satisfaction du rapport de la Commission pour mettre fin Ã  lâ€™obÃ©sitÃ© de lâ€™enfant (2016) et de ses six recommandations pour combattre les environnements obÃ©sogÃ¨nes et intervenir lors des pÃ©riodes cruciales de lâ€™existence en prÃ©vention de lâ€™obÃ©sitÃ© de lâ€™enfant. En 2017, lâ€™AssemblÃ©e de la SantÃ© a accueilli favorablement le plan de mise en Å“uvre devant servir de guide aux pays pour prendre des mesures en application des recommandations de la Commission. ', 1, 0),
(9, 3, 'DÃ©terminants environnementaux de la santÃ©', 8, 'sdg-diagram-environmental-determinants.jpeg', 'Un environnement sain est essentiel pour Â« permettre Ã  tous de vivre en bonne santÃ© et promouvoir le bien-Ãªtre de tous Ã  tout Ã¢ge Â».(1)  En tant quâ€™intersection de lâ€™environnement et de la santÃ© publique, dans le cadre de cette stratÃ©gie, la ', '\r\n    Environ 83 millions de personnes ne disposent toujours pas de systÃ¨mes dâ€™assainissement adÃ©quats, dont 15,6 millions pratiquent encore la dÃ©fÃ©cation Ã  lâ€™air libre et 28 millions nâ€™ont pas accÃ¨s Ã  des sources amÃ©liorÃ©es dâ€™eau potable, ce qui entraÃ®ne environ 30 <> dÃ©cÃ¨s Ã©vitables chaque annÃ©e;\r\n    Les risques chimiques dangereux, tels que lâ€™exposition aux pesticides toxiques, au plomb et au mercure, ont tendance Ã  avoir un impact disproportionnÃ© sur les enfants et les femmes enceintes;\r\n    Lâ€™exposition Ã  des produits chimiques toxiques peut entraÃ®ner des problÃ¨mes de santÃ© chroniques et souvent irrÃ©versibles tels que des problÃ¨mes de dÃ©veloppement neurologique, des malformations congÃ©nitales et des maladies associÃ©es Ã  la perturbation endocrinienne;\r\n    Les changements environnementaux tels que le changement climatique ont de plus en plus un impact sur la santÃ© et le bien-Ãªtre des populations de la RÃ©gion en perturbant les systÃ¨mes physiques, biologiques et Ã©cologiques Ã  lâ€™Ã©chelle mondiale. Les phÃ©nomÃ¨nes mÃ©tÃ©orologiques extrÃªmes ont exacerbÃ© lâ€™insÃ©curitÃ© alimentaire, la pollution atmosphÃ©rique, lâ€™accÃ¨s Ã  lâ€™eau potable, les migrations de population et les modes de transmission des maladies Ã  transmission vectorielle. Les effets de ces perturbations sur la santÃ© peuvent inclure une augmentation des maladies respiratoires, cardiovasculaires et infectieuses; Blessures; stress thermique et problÃ¨mes de santÃ© mentale;\r\n    Les groupes en situation de vulnÃ©rabilitÃ© aux alÃ©as liÃ©s au climat, tels que ceux qui vivent sur de petites Ã®les, sont exposÃ©s Ã  un risque disproportionnÃ© en raison de la frÃ©quence et de la gravitÃ© accrues des phÃ©nomÃ¨nes mÃ©tÃ©orologiques extrÃªmes et de lâ€™Ã©lÃ©vation du niveau de la mer ou les communautÃ©s vivant dans les montagnes sont exposÃ©es Ã  un risque disproportionnÃ© en raison des modifications du dÃ©bit des cours dâ€™eau, des altÃ©rations de la flore et de la faune, et le risque accru de glissements de terrain, dâ€™avalanches et dâ€™inondations en raison de la fonte des glaciers et de la diminution de la couche de neige;\r\n    Lâ€™Ã©mergence de nouveaux risques environnementaux, par exemple, les dÃ©chets Ã©lectroniques, les nanoparticules, les microplastiques, les produits chimiques qui altÃ¨rent le systÃ¨me endocrinien et la raretÃ© de lâ€™eau;\r\n    Les dÃ©fis complexes de gestion posÃ©s par la pollution interrÃ©gionale (par exemple, la pollution atmosphÃ©rique transfrontaliÃ¨re et les bassins polluÃ©s partagÃ©s).\r\n\r\n', 1, 0);
INSERT INTO `article` (`idArt`, `idSpec`, `titreArt`, `catArt`, `thumbArt`, `descArt`, `textArt`, `etatArt`, `alaune`) VALUES
(10, 2, 'Les nouvelles technologies au service de la santÃ© ', 10, 'Technologies_sante.jpg', 'Biotechnologies, e-santÃ©, robotique chirurgicale, impression de prothÃ¨ses en 3Dâ€¦, les nouvelles technologies entraÃ®nent une vÃ©ritable rÃ©volution mÃ©dicale. Non sans soulever quelques questions Ã©thiques.', '\r\nLâ€™innovation au service de la santÃ©\r\n\r\nAprÃ¨s lâ€™avÃ¨nement de la chimie et la recherche de nouvelles molÃ©cules thÃ©rapeutiques, les nouvelles technologies ont apportÃ© bon nombre dâ€™innovations pour la santÃ©. Les biotechnologies, les nouvelles technologies de lâ€™information et de la communication, la robotique, les sciences de lâ€™ingÃ©nieur, le numÃ©riqueâ€¦, toutes ces disciplines concourent Ã  crÃ©er une mÃ©decine de pointe.\r\nThÃ©rapie gÃ©nique et immunothÃ©rapie\r\n\r\nDepuis quelques annÃ©es, la rÃ©volution biotechnologique vient des techniques dâ€™Ã©dition du gÃ©nome. Ces outils consistent Ã  utiliser des â€œciseaux molÃ©culairesâ€ tels que CRISPR (clustered regularly interspaced short palindromic repeat) ou TALEN (transcription activator-like effector nucleases). Lâ€™Ã©dition gÃ©nomique permet de crÃ©er des thÃ©rapies gÃ©niques personnalisÃ©es. La modification gÃ©nÃ©tique des cellules offre un espoir pour de nombreux patients souffrant de cancers, grÃ¢ce Ã  lâ€™immunothÃ©rapie.\r\n\r\nEn aoÃ»t 2017, lâ€™Agence amÃ©ricaine des produits alimentaires et mÃ©dicamenteux (US Food and Drug Administration, FDA), qui fournit les autorisations pour les mÃ©dicaments, a ainsi approuvÃ© la mise sur le marchÃ© dâ€™une thÃ©rapie gÃ©nique contre la leucÃ©mie, le Kymriah, du laboratoire suisse Novartis. Le principe repose sur une mÃ©decine personnalisÃ©e. Des cellules immunitaires du patient sont prÃ©levÃ©es et modifiÃ©es gÃ©nÃ©tiquement pour Ãªtre capables de sâ€™attaquer Ã  la leucÃ©mie. Ces cellules sont appelÃ©es â€œcellules CAR-Tâ€. Dâ€™aprÃ¨s la FDA, lors dâ€™un essai clinique portant sur 63 patients, le taux de rÃ©mission a atteint 83% dans les trois premiers mois du traitement. Chaque traitement reprÃ©sente nÃ©anmoins un coÃ»t de prÃ¨s de 400 000 euros.\r\nLes robots-chirurgiens entrent dans les salles dâ€™opÃ©ration\r\n\r\nEn chirurgie, la robotique est de plus en plus prÃ©sente auprÃ¨s des mÃ©decins. En septembre 2017, au centre hospitalier universitaire (CHU) dâ€™Amiens, un enfant souffrant dâ€™une grave scoliose a par exemple Ã©tÃ© opÃ©rÃ© Ã  lâ€™aide dâ€™un robot-chirurgien composÃ© dâ€™un bras, dâ€™un ordinateur et dâ€™une camÃ©ra. Lâ€™opÃ©ration consistait Ã  poser des vis et des crochets pour redresser son dos. Le robot permet de faire de plus petites incisions pour une opÃ©ration trÃ¨s dÃ©licate.\r\n\r\nLâ€™utilisation de la robotique en salle dâ€™opÃ©ration ouvre la possibilitÃ© dâ€™opÃ©rer Ã  distance. Câ€™est ainsi quâ€™en 2001 le professeur Jacques Marescaux, pionnier de la chirurgie robotique, a opÃ©rÃ© depuis New York une patiente du CHU de Strasbourg, pour une ablation de la vÃ©sicule biliaire. Cette premiÃ¨re fut baptisÃ©e â€œlâ€™opÃ©ration Lindberghâ€, en rÃ©fÃ©rence au premier vol au-dessus de lâ€™Atlantique de Charles Lindbergh, en 1927.\r\n\r\nSi les robots-chirurgiens apparaissent comme un progrÃ¨s mÃ©dical, ils nÃ©cessitent aussi des mÃ©decins bien formÃ©s. De maniÃ¨re gÃ©nÃ©rale, le robot ne doit pas Ãªtre conÃ§u pour remplacer lâ€™homme mais pour lâ€™assister. Psychologiquement, il reste nÃ©anmoins difficile dâ€™accepter dâ€™Ãªtre opÃ©rÃ© par une machine sans le contrÃ´le dâ€™un mÃ©decinâ€¦\r\nDes mÃ©dicaments et des tissus imprimÃ©s en 3D\r\n\r\nLâ€™impression 3D trouve dâ€™innombrables applications en santÃ©, Ã  commencer par la pharmacie avec lâ€™impression de mÃ©dicaments sur mesure. De la mÃªme faÃ§on quâ€™Ã  partir dâ€™une ordonnance un pharmacien peut prÃ©parer un mÃ©dicament personnalisÃ© Ã  lâ€™aide des ingrÃ©dients prÃ©sents dans son officine, lâ€™impression 3D pourrait bientÃ´t crÃ©er des mÃ©dicaments sur mesure. Cette mÃ©thode permettrait aussi dâ€™ajuster la dose en fonction du patient.\r\n\r\nEn 2015, la FDA a donnÃ© une autorisation pour un mÃ©dicament imprimÃ© en 3D, un antiÃ©pileptique. Dans ce cas, la technologie dÃ©veloppÃ©e au Massachusetts Institute of Technology (MIT) a permis un assemblage particulier du mÃ©dicament, couche par couche.\r\n\r\nSi lâ€™impression 3D de mÃ©dicaments appartient encore Ã  la pharmacie du futur, les imprimantes 3D ont dÃ©jÃ  fait leurs preuves pour la fabrication de prothÃ¨ses sur mesure. Mais lâ€™impression 3D pourrait aller encore plus loin Ã  lâ€™avenir et produire des tissus Ã  greffer : du cartilage pour traiter des articulations abÃ®mÃ©es ou de la peau pour fabriquer des greffons. Lâ€™impression 3D dâ€™organes apporterait une solution au manque de donneurs, tout en limitant le risque de rejet, puisque les cellules utilisÃ©es peuvent venir du patient.\r\nUne santÃ© de plus en plus high-tech et connectÃ©e\r\n\r\nUn autre champ important est en train de bouleverser les relations entre patients et personnels mÃ©dicaux : lâ€™e-santÃ©. Il sâ€™agit de lâ€™ensemble de services liÃ©s Ã  la santÃ© qui utilisent les nouvelles technologies de lâ€™information et de la communication.\r\n\r\nLa tÃ©lÃ©santÃ©, ou e-santÃ©, utilise internet, des applications pour smartphones et/ou des objets connectÃ©s. En 2016, le Concours LÃ©pine a rÃ©compensÃ© une application dâ€™e-santÃ© consacrÃ©e aux patients diabÃ©tiques, pour leur permettre de mieux suivre leur traitement. Cette application pour smartphone fournit aux diabÃ©tiques le taux dâ€™insuline exact Ã  sâ€™injecter en fonction de leur activitÃ©, de leur alimentation et de leur glycÃ©mie.\r\n\r\nLes smartphones ne sont cependant pas les seuls objets connectÃ©s utilisÃ©s par lâ€™e-santÃ©. Les bracelets connectÃ©s et les traqueurs dâ€™activitÃ© ont le vent en poupe. Pratiques, lÃ©gers, ils proposent de suivre lâ€™activitÃ© physique quotidienne des utilisateurs et les incitent Ã  bouger davantage pour Ãªtre en meilleure santÃ©.\r\n\r\nLes montres connectÃ©es sâ€™inscrivent elles aussi dans cette dynamique. Par exemple, lâ€™application Cardiogram pour la montre connectÃ©e dâ€™Apple (Apple Watch) mesure le rythme cardiaque toutes les cinq minutes et dÃ©tecte ainsi des anomalies, comme une arythmie due Ã  une fibrillation. Lâ€™application SantÃ© dâ€™Apple se propose quant Ã  elle de rassembler les informations sur la santÃ© des dÃ©tenteurs dâ€™iPhone ou dâ€™Apple Watch (alimentation, activitÃ© physique, sommeilâ€¦).\r\n\r\nÃ€ lâ€™Ã¨re des mÃ©gadonnÃ©es (big data), toutes les donnÃ©es transitant par les objets connectÃ©s ou les systÃ¨mes de santÃ© pourraient aussi aider chercheurs et mÃ©decins dans leurs travaux. La multiplication des applications comme la collecte des donnÃ©es chez le mÃ©decin et le pharmacien a augmentÃ© considÃ©rablement la masse dâ€™informations existant dans le domaine de la santÃ©. Lâ€™ensemble de ces donnÃ©es reprÃ©sente une manne pour les chercheurs.\r\n\r\nEn France, les donnÃ©es des remboursements de frais de santÃ© sont collectÃ©es par le SystÃ¨me national dâ€™information interrÃ©gimes de lâ€™assurance maladie (SNIIRAM). Un autre systÃ¨me, le SystÃ¨me national des donnÃ©es de santÃ© (SNDS), rassemble des donnÃ©es de santÃ© mises Ã  disposition de chercheurs, aprÃ¨s avoir Ã©tÃ© rendues anonymes.\r\n\r\nDe tels fichiers permettent de dresser le tableau de prÃ©valence dâ€™une maladie au sein de la population, dâ€™identifier des facteurs de risque de maladie ou de vÃ©rifier lâ€™efficacitÃ© des traitements. Lâ€™analyse de ces donnÃ©es pourrait aider Ã  Ã©viter dâ€™importants problÃ¨mes sanitaires, comme celui du Mediator, en repÃ©rant des effets indÃ©sirables de certains mÃ©dicaments.\r\n\r\nEnfin, les nouvelles technologies peuvent aussi aider au traitement de certains troubles, grÃ¢ce aux â€œjeux sÃ©rieuxâ€ (serious games). Par exemple, en kinÃ©sithÃ©rapie, la rÃ©alitÃ© virtuelle peut permettre Ã  un patient une rÃ©Ã©ducation autonome grÃ¢ce Ã  un casque qui lâ€™emmÃ¨ne dans un espace virtuel pour lâ€™aider Ã  effectuer des mouvements.\r\nDes nouvelles technologies qui rapprochent ou Ã©loignent des soins ', 1, 0),
(11, 2, 'Tout ce quâ€™il faut savoir sur le Covid-19 ', 12, 'UNI310746.jpg.jpeg', 'Savoir comment se protÃ©ger du coronavirus ', 'Tout le monde parle de la maladie Ã  coronavirus 2019 (COVID-19) et vous Ãªtes submergÃ©(e) dâ€™informations sur le virus et la maniÃ¨re de sâ€™en protÃ©ger. Pour vous prÃ©parer correctement et vous protÃ©ger, vos proches et vous, il est essentiel que vous disposiez de donnÃ©es factuelles. Malheureusement, les fausses informations foisonnent. En pÃ©riode de crise sanitaire, ce type dâ€™informations risque de priver certaines personnes de protection et dâ€™accroÃ®tre leur vulnÃ©rabilitÃ© Ã  la maladie, en plus de favoriser la peur et la stigmatisation.\r\n\r\nVeillez Ã  vous informer auprÃ¨s de sources de confiance, telles que lâ€™UNICEF et lâ€™Organisation mondiale de la SantÃ©. Lâ€™UNICEF travaille sans relÃ¢che avec des spÃ©cialistes de la santÃ© du monde entier afin de vous fournir des informations exactes. Des informations fiables sont des informations fondÃ©es sur les donnÃ©es scientifiques probantes les plus rÃ©centes. Nous continuerons de vous informer des derniÃ¨res actualitÃ©s, de fournir des conseils aux parents et aux enseignants, ainsi que des ressources pour les mÃ©dias au fur et Ã  mesure que nous obtenons de nouvelles informations. Consultez rÃ©guliÃ¨rement nos pages afin de vous tenir informÃ©(e) des meilleures mesures Ã  prendre pour vous protÃ©ger, votre famille et vous.\r\n\r\nAidez-nous Ã  lutter contre la dÃ©sinformation entourant la COVID-19. Partagez ces informations avec votre famille, vos amis et vos collÃ¨gues afin de veiller Ã  ce quâ€™ils soient tous correctement informÃ©s sur la COVID-19 et Ã  mÃªme de protÃ©ger leur santÃ©', 1, 0),
(12, 5, 'L''accÃ¨s aux mÃ©dicaments : un dÃ©fi pour l''industrie pharmaceutique', 12, 'la-liste-noire-des-92-medicaments-declares-dangere-.jpeg', ' lâ€™inÃ©galitÃ© dâ€™accÃ¨s aux mÃ©dicaments est un enjeu Ã©thique inhÃ©rent Ã  lâ€™activitÃ© mÃªme de lâ€™industrie pharmaceutique auxquel tous les laboratoires privÃ©s sans exception sont confrontÃ©s et qui nâ€™accepte aucune solution dÃ©finitive. Concr', 'Mais le problÃ¨me de lâ€™accÃ¨s aux mÃ©dicaments relÃ¨ve-t-il vraiment de la responsabilitÃ© des laboratoires pharmaceutiques ? En tant que sociÃ©tÃ©s privÃ©es, ils recherchent inconditionnellement Ã  optimiser la rÃ©munÃ©ration de lâ€™actionnariat. NÃ©anmoins leur fonction ne saurait se rÃ©duire Ã  la rÃ©alisation de performances financiÃ¨res. Lâ€™impÃ©ratif de rentabilitÃ© ne peut occulter la mission de lâ€™industrie pharmaceutique, sa raison dâ€™Ãªtre, qui est de Â« dÃ©couvrir, dÃ©velopper, et commercialiser des produits innovants pour prÃ©venir et guÃ©rir les maladies, soulager la souffrance et amÃ©liorer la qualitÃ© de la vie Â»â€¯[4]\r\n[4]Novartis, Facts and Figures 2006\r\n. Cette industrie est donc par essence confrontÃ©e Ã  une situation paradoxale : dÃ©fendre des intÃ©rÃªts privÃ©s et assumer une mission de santÃ© publique.\r\n\r\n4\r\nNotre propos est donc de dÃ©montrer que les leaders de lâ€™industrie pharmaceutique ont radicalement changÃ© leur approche stratÃ©gique, passant du dÃ©ni Ã  la reconnaissance de leurs responsabilitÃ©s sociales. Au-delÃ  des engagements thÃ©oriques, nous mettrons en lumiÃ¨re les actes qui en dÃ©coulent, câ€™est-Ã -dire les nombreux programmes destinÃ©s Ã  faciliter lâ€™accÃ¨s du plus grand nombre aux produits pharmaceutiques. Les moyens dâ€™action sont multiples : dons, rÃ©ductions de prix, programmes de prÃ©vention et de recherche. Enfin, nous tenterons dâ€™identifier les avantages que prÃ©sente une politique dâ€™accÃ¨s aux mÃ©dicaments pour ses instigateurs. Pour garantir lâ€™efficacitÃ©, la pÃ©rennitÃ© et lâ€™importance de ces initiatives envers les populations les plus pauvres, il faut accepter que ces opÃ©rations ne soient pas totalement dÃ©sintÃ©ressÃ©es et que lâ€™industrie pharmaceutique y trouve des bÃ©nÃ©fices secondaires. Câ€™est dans ces conditions quâ€™Ã©thique et rentabilitÃ© sont compatibles, que lâ€™intÃ©rÃªt particulier se concilie Ã  lâ€™intÃ©rÃªt gÃ©nÃ©ral, qui est en lâ€™occurrence le droit Ã  la vie.\r\nI â€“ Lâ€™accÃ¨s aux mÃ©dicaments pour tous : un enjeu Ã©thique\r\nI.1 â€“ Un droit fondamental\r\n\r\n5\r\nLâ€™accÃ¨s aux mÃ©dicaments reprÃ©sente un enjeu Ã©thique parce quâ€™il sâ€™agit dâ€™un droit Ã©lÃ©mentaire, qui est celui de conserver sa vie. En effet, lâ€™accÃ¨s aux mÃ©dicaments est une question de santÃ© publique, qui met en jeu les principes dâ€™Ã©galitÃ© et de justice sociale. EntÃ©rinÃ© par la constitution de lâ€™OMS en 1946, Â« la possession du meilleur Ã©tat de santÃ© quâ€™il est capable dâ€™atteindre constitue lâ€™un des droits fondamentaux de lâ€™Ãªtre humain Â». Lâ€™ONU le reconnaÃ®t aussi comme un droit universel, par la Convention internationale sur les droits Ã©conomiques, sociaux et culturels adoptÃ©e en 1976. Câ€™est ainsi que lâ€™OMS dÃ©finit les soins de santÃ© primaires comme Â« des soins de santÃ© essentiels (â€¦), scientifiquement valables et socialement acceptables, rendus universellement accessibles Ã  tous les individusâ€¦ Â»â€¯[5]\r\n[5]DÃ©claration dâ€™Alma-Ata. ConfÃ©rence internationale sur les soinsâ€¦\r\n. Les soins de santÃ© primaires comprennent notamment Â« la vaccination contre les grandes maladies infectieuses, la prÃ©vention et le contrÃ´le des endÃ©mies locales, le traitement des maladies et lÃ©sions courantes et la fourniture de mÃ©dicaments essentiels. Â» Les produits pharmaceutiques sont ainsi identifiÃ©s comme un moyen dâ€™accÃ¨s Ã  une vie socialement et Ã©conomiquement productive et constituent la condition essentielle au dÃ©veloppement de tout individu. La santÃ© pour tous est donc une prioritÃ© politique et sociale autant quâ€™un devoir moral pour tous les intervenants du secteur.\r\n\r\n6\r\nLâ€™enjeu est de taille puisque les disparitÃ©s gÃ©ographiques dâ€™accÃ¨s aux mÃ©dicaments sont flagrantes. Rappelons que les pays industrialisÃ©s, soit 18,7 % de la population mondialeâ€¯[6]\r\n[6]Source: UNFPA, State of world population 2006, Demographic,â€¦\r\n, reprÃ©sentent 87 % du marchÃ© pharmaceutiqueâ€¯[7]\r\n[7]Source :IMS Health\r\nmondial. Ces chiffres ne donnent pourtant quâ€™une image partielle de lâ€™inÃ©galitÃ© quâ€™induit la distribution de mÃ©dicament dans le monde. Le problÃ¨me dâ€™accÃ¨s au mÃ©dicament ne se mesure pas seulement Ã  lâ€™aune de la taille des populations mais aussi par la gravitÃ© des pathologies en question. A cet Ã©gard, on observe que la prÃ©valence de maladie Ã  forte morbiditÃ© est sensiblement plus forte dans les pays du Sudâ€¯[8]\r\n[8]Ainsi la totalitÃ© des cas de poliomyÃ©lites sont recensÃ©s dansâ€¦\r\nâ€¯[9]\r\n[9]Le constat est identique pour le virus du Sida qui provoque 3â€¦\r\nâ€¯[10]\r\n[10]Si les maladies transmissibles contribuent pour 50 % Ã  laâ€¦\r\n.\r\n\r\n7\r\nPar consÃ©quent, la distribution de produits pharmaceutiques ne soulÃ¨ve pas un problÃ¨me dâ€™Ã©galitÃ© mais bien un problÃ¨me dâ€™Ã©quitÃ©. On peut parler dâ€™Ã©galitÃ© devant le droit Ã  la santÃ© mais dâ€™Ã©quitÃ© devant lâ€™accÃ¨s aux mÃ©dicaments. Selon le principe dâ€™une justice distributive, le mÃ©dicament doit Ãªtre distribuÃ© non pas Ã  chacun mais Ã  chaque patient selon ses besoins.\r\n\r\n8\r\nLâ€™accÃ¨s aux mÃ©dicaments essentiels est donc un droit reconnu comme universel par la communautÃ© internationale. Mais entre ce qui doit Ãªtre et ce qui est, il existe ici un fossÃ© incommensurable qui est en partie liÃ© au fonctionnement du marchÃ© pharmaceutique.\r\nI.2 â€“ Les obstacles Ã©conomiques Ã  lâ€™accÃ¨s aux mÃ©dicaments essentiels\r\n\r\n9\r\nDeux obstacles majeurs sâ€™opposent Ã  la distribution Ã©quitable des mÃ©dicaments essentiels : le problÃ¨me de la disponibilitÃ© des mÃ©dicaments et celui de leur accessibilitÃ©â€¯[11]\r\n[11]Rapport de la CIPIH, SantÃ© publique, innovation et droits deâ€¦\r\n.\r\n\r\n10\r\nâ€¢ La disponibilitÃ© des mÃ©dicaments est directement liÃ©e aux investissements publics ou privÃ©s en matiÃ¨re de recherche et dÃ©veloppement. Or lâ€™existence de besoins ne prÃ©dÃ©termine pas lâ€™existence dâ€™un marchÃ©. Les laboratoires privÃ©s nâ€™ont pas dâ€™intÃ©rÃªt Ã©conomique immÃ©diat Ã  investir dans des thÃ©rapies Ã  destination de pays insolvables. Les donnÃ©es sont Ã©loquentes : sur les 1393 nouveaux mÃ©dicaments commercialisÃ©s entre 1975 et 1999, seuls 13 ciblent les maladies tropicalesâ€¯[12]\r\n[12]Trouiller, P., Olliaro, P., Torreele, E., Orbinski, J., Laingâ€¦\r\n. On parle dans ce cas de figure de maladies nÃ©gligÃ©esâ€¯[13]\r\n[13]Câ€™est notamment le cas de la trypanosomiase africaine humaineâ€¦\r\n.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banspecs`
--

CREATE TABLE IF NOT EXISTS `banspecs` (
  `idSpec` int(11) NOT NULL,
  PRIMARY KEY (`idSpec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banspecs`
--

INSERT INTO `banspecs` (`idSpec`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `banusers`
--

CREATE TABLE IF NOT EXISTS `banusers` (
  `idUser` int(255) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banusers`
--

INSERT INTO `banusers` (`idUser`) VALUES
(1),
(14);

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE IF NOT EXISTS `bookmark` (
  `idUser` int(255) NOT NULL,
  `idQuest` int(255) NOT NULL,
  PRIMARY KEY (`idUser`,`idQuest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`idUser`, `idQuest`) VALUES
(1, 17),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catart`
--

CREATE TABLE IF NOT EXISTS `catart` (
  `idCat` int(255) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `catart`
--

INSERT INTO `catart` (`idCat`, `categorie`) VALUES
(1, 'MÃ©decine gÃ©nÃ©rale'),
(2, 'Nutrition'),
(3, 'Fitness'),
(4, 'Bien-Ãªtre mental'),
(5, 'Maladies spÃ©cifiques'),
(6, 'SantÃ© des femmes'),
(7, 'SantÃ© des enfants '),
(8, 'SantÃ© environnementale'),
(9, 'SantÃ© publique'),
(10, 'Technologie et santÃ©'),
(11, 'MÃ©decine alternative et complÃ©mentaire'),
(12, 'SantÃ© mondiale');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `idMes` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`idMes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idMes`, `nom`, `sujet`, `email`, `message`) VALUES
(1, 'Ayoub', 'Bonjour', 'ayoub.rebhi0@gmail.com', 'Merci pour votre service');

-- --------------------------------------------------------

--
-- Table structure for table `listerouge`
--

CREATE TABLE IF NOT EXISTS `listerouge` (
  `emaillisterouge` varchar(255) NOT NULL,
  PRIMARY KEY (`emaillisterouge`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listerouge`
--

INSERT INTO `listerouge` (`emaillisterouge`) VALUES
('joudi.intissar@gmail.com'),
('merchergui.selim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `quest`
--

CREATE TABLE IF NOT EXISTS `quest` (
  `idQuest` int(255) NOT NULL AUTO_INCREMENT,
  `titreQuest` varchar(255) DEFAULT NULL,
  `details` text,
  `dateQuest` date DEFAULT NULL,
  `timeQuest` varchar(6) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`idQuest`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quest`
--

INSERT INTO `quest` (`idQuest`, `titreQuest`, `details`, `dateQuest`, `timeQuest`, `idUser`) VALUES
(2, 'Bonjour,  A ton avis, les Ã©lÃ¨ves qui veulent faire mÃ©decine mais qui sont trÃ¨s moyens en maths, ils ont des chances ?', '', '2024-02-21', '14:17', 14),
(3, 'quel avis avoir sur les complÃ©ments alimentaires en fer ?', 'J''ai une alimentation variÃ©e et saine mais mon dernier don de sang a signalÃ© un taux d''hÃ©moglobine trop bas. Je songe donc Ã  prendre des complÃ©ments pour corriger Ã§a, d''oÃ¹ mon intÃ©rÃªt pour les complÃ©ments en fer. Mais je lis des avis contradictoires : solution miracle, danger potentiel... Du coup, un avis ? Des recommandations ? Merci :)', '2024-02-21', '14:20', 17);

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

CREATE TABLE IF NOT EXISTS `reponse` (
  `idRep` int(255) NOT NULL AUTO_INCREMENT,
  `idSpec` int(255) NOT NULL,
  `idQuest` int(255) NOT NULL,
  `contenuRep` text NOT NULL,
  PRIMARY KEY (`idRep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`idRep`, `idSpec`, `idQuest`, `contenuRep`) VALUES
(3, 4, 2, 'Bonjour,\r\n\r\nClairement non, la filiÃ¨re mÃ©decine est issu de la PACES, qui teste non pas les connaissances comme beaucoup semble croire, mais les capacitÃ©s Ã \r\n\r\n    acquÃ©rir beaucoup de connaissance en peu temps,\r\n\r\n    Ã  Â« mourir sur le terrain Â»\r\n\r\n    sâ€™organiser\r\n\r\n    grandir tout simplement\r\n\r\nCar :\r\n\r\n    câ€™est ce quâ€™on va lui demander aprÃ¨s mais en x1000 (et câ€™est pas exagÃ©re)\r\n\r\n    parce que câ€™est ce quâ€™il fera aprÃ¨s quand il dÃ©cidera du traitement dâ€™un patient aprÃ¨s 36h de garde\r\n\r\n    Le minimum quand les patients sont nombreux\r\n\r\n    parce que trÃ¨s vite tu vas avoir des responsabilitÃ©s');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `idreport` int(20) NOT NULL AUTO_INCREMENT,
  `idquest` int(20) NOT NULL,
  PRIMARY KEY (`idreport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`idreport`, `idquest`) VALUES
(1, 14),
(2, 17),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialiste`
--

CREATE TABLE IF NOT EXISTS `specialiste` (
  `idSpec` int(255) NOT NULL AUTO_INCREMENT,
  `nomSpec` varchar(255) NOT NULL,
  `prenomSpec` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `etabSpec` varchar(255) NOT NULL,
  `emailSpec` varchar(255) NOT NULL,
  `telSpec` int(255) NOT NULL,
  `adresseSpec` varchar(255) NOT NULL,
  `paysSpec` varchar(255) NOT NULL,
  `fichierSpec` varchar(255) NOT NULL,
  `pwSpec` varchar(255) NOT NULL,
  `photoSpec` varchar(255) NOT NULL,
  `bioSpec` text NOT NULL,
  `etatSpec` int(11) NOT NULL,
  PRIMARY KEY (`idSpec`),
  UNIQUE KEY `emailSpec` (`emailSpec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `specialiste`
--

INSERT INTO `specialiste` (`idSpec`, `nomSpec`, `prenomSpec`, `specialite`, `etabSpec`, `emailSpec`, `telSpec`, `adresseSpec`, `paysSpec`, `fichierSpec`, `pwSpec`, `photoSpec`, `bioSpec`, `etatSpec`) VALUES
(2, 'Tletli', 'Amine', 'Neurologue', 'HÃ´pital Rabta', 'tletli.amine@gmail.com', 98724436, 'tunis', 'Tunisie', '406946233_832907238169026_8642610995253387864_n.pdf', '123456789', 'healthcare-medical-staff-concept-portrait-600nw-2281024823.jepg.webp', 'Bonjour Ã  tous', 1),
(3, 'najjar', 'anis', 'cardiologue', 'Hopital XYZ ', 'najjar.anis@gmail.com', 12345678, 'XYZ', 'Tunisie', 'blank.pdf', '123456789', '360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpg', 'Bonjour Ã  tous', 1),
(4, 'lejmi', 'abdelkader', 'Dermatologue', 'Hopital LMN', 'lejmi.abdk@gmail.com', 56777222, 'LMN', 'Tunisie', 'blank.pdf', '123456789', 'team-5.jpg', 'Bonjour Ã  tous', 1),
(5, 'Bouchiba', 'Neila', 'neurochirurgienne', 'Hopital KMS', 'bouchiba.neila@gmail.com', 21552844, 'KMS', 'Tunisie', 'blank.pdf', '123456789', 'How-to-become-a-doctor-1300x1065-1.webp', 'Bonjour Ã  tous', 1),
(6, 'Hdidane', 'Amina', 'mÃ©decin d''urgence', 'Hopital JDK', 'hdidane.amina@gmail.com', 91223576, 'JDK', 'Tunisie', 'blank.pdf', '123456789', 'testimonial-1.jpg', 'Bonjour Ã  tous', 1),
(8, 'Sahli', 'Roukaya', 'pneumologue', 'Hopital SKD', 'sahli.roukaya@gmail.com', 99556852, 'SKD', 'Tunisie', 'blank.pdf', '123456789', 'team-4.jpg', 'Bonjour Ã  tous', 1),
(10, 'Cherif', 'maryem', 'Rhumatologue', 'GHGG', 'cherif.maryem@gmail.com', 55446699, 'GHHGG', 'Tunisie', 'blank.pdf', '123456789', '', 'Bonjour Ã  tous', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(255) NOT NULL,
  `prenomUser` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `telUser` int(8) NOT NULL,
  `pwUser` varchar(255) NOT NULL,
  `birthUser` date NOT NULL,
  `pays` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nomUser`, `prenomUser`, `emailUser`, `telUser`, `pwUser`, `birthUser`, `pays`, `Photo`) VALUES
(1, 'Rebhi', 'Ayoub', 'ayoub.rebhi0@hotmail.com', 54488635, '12345678', '1999-09-30', 'Tunisie', '5616.jpeg'),
(6, 'jbeli', 'chaima', 'jbeli.chaima@gmail.com', 54886354, '123456789', '1997-02-05', 'Tunisie', ''),
(7, 'trabelsi', 'amir', 'amir.trabelsi@gmail.com', 93548773, '123456789', '1990-03-11', 'Tunisie', ''),
(8, 'BOUNJEH', 'Ranim', 'bounjeh.ranim@gmail.com', 21553901, '123456789', '1985-01-24', 'Tunisie', ''),
(9, 'chebbi', 'adem', 'chebbi.adem@gmail.com', 87521654, '123456789', '2000-03-01', 'Andorre', ''),
(10, 'jleili ', 'karim', 'karim.jleli@gmail.com', 23755681, '123456789', '1995-05-12', 'Tunisie', ''),
(11, 'Bousetta', 'Youssef', 'youssef.bousetta@gmail.com', 425876325, '123456789', '1996-11-26', 'Taiwan', ''),
(12, 'amiri', 'soulaima', 'amiri.soulaima@gmail.com', 544866354, '123456789', '1999-06-30', 'Tunisie', ''),
(13, 'khedhr', 'lamis', 'khedhr.lamis@gmail.com', 98663554, '123456789', '1997-02-05', 'Tunisie', ''),
(14, 'rezgui', 'med amine', 'rezgui.medamine@gmail.com', 22369478, '123456789', '1996-08-30', 'Tunisie', ''),
(15, 'sleimi', 'aziz', 'sleimi.aziz@gmail.com', 25444666, '123456789', '1985-04-14', 'Tunisie', ''),
(16, 'kraimi', 'mohsen', 'mohsen.kraimi@gmail.com', 54123698, '123456789', '1988-06-05', 'Tunisie', ''),
(17, 'klibi', 'nour', 'nour.klibi@gmail.com', 21553636, '123456789', '1991-05-12', 'Tunisie', ''),
(18, 'znaidi', 'alia', 'alia.znaidi@gmail.com', 99658666, '123456789', '1970-02-28', 'Tunisie', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quest`
--
ALTER TABLE `quest`
  ADD CONSTRAINT `quest_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
