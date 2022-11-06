<?php
//=======================================================================
// File:	PDF417_CLUSTERS.PHP
// Description:	Static data that defines the individual bar pattern for each codeword
// Created: 	2004-02-25
// Author:	Johan Persson (johanp@aditus.nu)
// Ver:		$Id: pdf417_clusters.inc.php 506 2006-02-04 15:56:23Z ljp $
//
// License:	This code is released under JpGraph Professional License
// Copyright (C) 2004 Johan Persson
//========================================================================


class PDF417Patterns {

    private $iStartStop = array( '81111113', '711311121' );
    private $iPatterns = array(
    /* Cluster 0 */
    0 => array(
	'31111136', '41111144', '51111152', '31111235', '41111243', '51111251', '21111326', '31111334', 
	'21111425', '11111516', '21111524', '11111615', '21112136', '31112144', '41112152', '21112235', 
	'31112243', '41112251', '11112326', '21112334', '11112425', '11113136', '21113144', '31113152', 
	'11113235', '21113243', '31113251', '11113334', '21113342', '11114144', '21114152', '11114243', 
	'21114251', '11115152', '51116111', '31121135', '41121143', '51121151', '21121226', '31121234', 
	'41121242', '21121325', '31121333', '11121416', '21121424', '31121432', '11121515', '21121523', 
	'11121614', '21122135', '31122143', '41122151', '11122226', '21122234', '31122242', '11122325', 
	'21122333', '31122341', '11122424', '21122432', '11123135', '21123143', '31123151', '11123234', 
	'21123242', '11123333', '21123341', '11124143', '21124151', '11124242', '11124341', '21131126', 
	'31131134', '41131142', '21131225', '31131233', '41131241', '11131316', '21131324', '31131332', 
	'11131415', '21131423', '11131514', '11131613', '11132126', '21132134', '31132142', '11132225', 
	'21132233', '31132241', '11132324', '21132332', '11132423', '11132522', '11133134', '21133142', 
	'11133233', '21133241', '11133332', '11134142', '21141125', '31141133', '41141141', '11141216', 
	'21141224', '31141232', '11141315', '21141323', '31141331', '11141414', '21141422', '11141513', 
	'21141521', '11142125', '21142133', '31142141', '11142224', '21142232', '11142323', '21142331', 
	'11142422', '11142521', '21143141', '11143331', '11151116', '21151124', '31151132', '11151215', 
	'21151223', '31151231', '11151314', '21151322', '11151413', '21151421', '11151512', '11152124', 
	'11152223', '11152322', '11161115', '31161131', '21161222', '21161321', '11161511', '32111135', 
	'42111143', '52111151', '22111226', '32111234', '42111242', '22111325', '32111333', '42111341', 
	'12111416', '22111424', '12111515', '22112135', '32112143', '42112151', '12112226', '22112234', 
	'32112242', '12112325', '22112333', '12112424', '12112523', '12113135', '22113143', '32113151', 
	'12113234', '22113242', '12113333', '12113432', '12114143', '22114151', '12114242', '12115151', 
	'31211126', '41211134', '51211142', '31211225', '41211233', '51211241', '21211316', '31211324', 
	'41211332', '21211415', '31211423', '41211431', '21211514', '31211522', '22121126', '32121134', 
	'42121142', '21212126', '22121225', '32121233', '42121241', '21212225', '31212233', '41212241', 
	'11212316', '12121415', '22121423', '32121431', '11212415', '21212423', '11212514', '12122126', 
	'22122134', '32122142', '11213126', '12122225', '22122233', '32122241', '11213225', '21213233', 
	'31213241', '11213324', '12122423', '11213423', '12123134', '22123142', '11214134', '12123233', 
	'22123241', '11214233', '21214241', '11214332', '12124142', '11215142', '12124241', '11215241', 
	'31221125', '41221133', '51221141', '21221216', '31221224', '41221232', '21221315', '31221323', 
	'41221331', '21221414', '31221422', '21221513', '21221612', '22131125', '32131133', '42131141', 
	'21222125', '22131224', '32131232', '11222216', '12131315', '31222232', '32131331', '11222315', 
	'12131414', '22131422', '11222414', '21222422', '22131521', '12131612', '12132125', '22132133', 
	'32132141', '11223125', '12132224', '22132232', '11223224', '21223232', '22132331', '11223323', 
	'12132422', '12132521', '12133133', '22133141', '11224133', '12133232', '11224232', '12133331', 
	'11224331', '11225141', '21231116', '31231124', '41231132', '21231215', '31231223', '41231231', 
	'21231314', '31231322', '21231413', '31231421', '21231512', '21231611', '12141116', '22141124', 
	'32141132', '11232116', '12141215', '22141223', '32141231', '11232215', '21232223', '31232231', 
	'11232314', '12141413', '22141421', '11232413', '21232421', '11232512', '12142124', '22142132', 
	'11233124', '12142223', '22142231', '11233223', '21233231', '11233322', '12142421', '11233421', 
	'11234132', '11234231', '21241115', '31241123', '41241131', '21241214', '31241222', '21241313', 
	'31241321', '21241412', '21241511', '12151115', '22151123', '32151131', '11242115', '12151214', 
	'22151222', '11242214', '21242222', '22151321', '11242313', '12151412', '11242412', '12151511', 
	'12152123', '11243123', '11243222', '11243321', '31251122', '31251221', '21251411', '22161122', 
	'12161213', '11252213', '11252312', '11252411', '23111126', '33111134', '43111142', '23111225', 
	'33111233', '13111316', '23111324', '33111332', '13111415', '23111423', '13111514', '13111613', 
	'13112126', '23112134', '33112142', '13112225', '23112233', '33112241', '13112324', '23112332', 
	'13112423', '13112522', '13113134', '23113142', '13113233', '23113241', '13113332', '13114142', 
	'13114241', '32211125', '42211133', '52211141', '22211216', '32211224', '42211232', '22211315', 
	'32211323', '42211331', '22211414', '32211422', '22211513', '32211521', '23121125', '33121133', 
	'43121141', '22212125', '23121224', '33121232', '12212216', '13121315', '32212232', '33121331', 
	'12212315', '22212323', '23121422', '12212414', '13121513', '12212513', '13122125', '23122133', 
	'33122141', '12213125', '13122224', '32213141', '12213224', '22213232', '23122331', '12213323', 
	'13122422', '12213422', '13123133', '23123141', '12214133', '13123232', '12214232', '13123331', 
	'13124141', '12215141', '31311116', '41311124', '51311132', '31311215', '41311223', '51311231', 
	'31311314', '41311322', '31311413', '41311421', '31311512', '22221116', '32221124', '42221132', 
	'21312116', '22221215', '41312132', '42221231', '21312215', '31312223', '41312231', '21312314', 
	'22221413', '32221421', '21312413', '31312421', '22221611', '13131116', '23131124', '33131132', 
	'12222116', '13131215', '23131223', '33131231', '11313116', '12222215', '22222223', '32222231', 
	'11313215', '21313223', '31313231', '23131421', '11313314', '12222413', '22222421', '11313413', 
	'13131611', '13132124', '23132132', '12223124', '13132223', '23132231', '11314124', '12223223', 
	'22223231', '11314223', '21314231', '13132421', '12223421', '13133132', '12224132', '13133231', 
	'11315132', '12224231', '31321115', '41321123', '51321131', '31321214', '41321222', '31321313', 
	'41321321', '31321412', '31321511', '22231115', '32231123', '42231131', '21322115', '22231214', 
	'41322131', '21322214', '31322222', '32231321', '21322313', '22231412', '21322412', '22231511', 
	'21322511', '13141115', '23141123', '33141131', '12232115', '13141214', '23141222', '11323115', 
	'12232214', '22232222', '23141321', '11323214', '21323222', '13141412', '11323313', '12232412', 
	'13141511', '12232511', '13142123', '23142131', '12233123', '13142222', '11324123', '12233222', 
	'13142321', '11324222', '12233321', '13143131', '11325131', '31331114', '41331122', '31331213', 
	'41331221', '31331312', '31331411', '22241114', '32241122', '21332114', '22241213', '32241221', 
	'21332213', '31332221', '21332312', '22241411', '21332411', '13151114', '23151122', '12242114', 
	'13151213', '23151221', '11333114', '12242213', '22242221', '11333213', '21333221', '13151411', 
	'11333312', '12242411', '11333411', '12243122', '11334122', '11334221', '41341121', '31341311', 
	'32251121', '22251212', '22251311', '13161113', '12252113', '11343113', '13161311', '12252311', 
	'24111125', '14111216', '24111224', '14111315', '24111323', '34111331', '14111414', '24111422', 
	'14111513', '24111521', '14112125', '24112133', '34112141', '14112224', '24112232', '14112323', 
	'24112331', '14112422', '14112521', '14113133', '24113141', '14113232', '14113331', '14114141', 
	'23211116', '33211124', '43211132', '23211215', '33211223', '23211314', '33211322', '23211413', 
	'33211421', '23211512', '14121116', '24121124', '34121132', '13212116', '14121215', '33212132', 
	'34121231', '13212215', '23212223', '33212231', '13212314', '14121413', '24121421', '13212413', 
	'23212421', '14121611', '14122124', '24122132', '13213124', '14122223', '24122231', '13213223', 
	'23213231', '13213322', '14122421', '14123132', '13214132', '14123231', '13214231', '32311115', 
	'42311123', '52311131', '32311214', '42311222', '32311313', '42311321', '32311412', '32311511', 
	'23221115', '33221123', '22312115', '23221214', '33221222', '22312214', '32312222', '33221321', 
	'22312313', '23221412', '22312412', '23221511', '22312511', '14131115', '24131123', '13222115', 
	'14131214', '33222131', '12313115', '13222214', '23222222', '24131321', '12313214', '22313222', 
	'14131412', '12313313', '13222412', '14131511', '13222511', '14132123', '24132131', '13223123', 
	'14132222', '12314123', '13223222', '14132321', '12314222', '13223321', '14133131', '13224131', 
	'12315131', '41411114', '51411122', '41411213', '51411221', '41411312', '41411411', '32321114', 
	'42321122', '31412114', '41412122', '42321221', '31412213', '41412221', '31412312', '32321411', 
	'31412411', '23231114', '33231122', '22322114', '23231213', '33231221', '21413114', '22322213', 
	'32322221', '21413213', '31413221', '23231411', '21413312', '22322411', '21413411', '14141114', 
	'24141122', '13232114', '14141213', '24141221', '12323114', '13232213', '23232221', '11414114', 
	'12323213', '22323221', '14141411', '11414213', '21414221', '13232411', '11414312', '14142122', 
	'13233122', '14142221', '12324122', '13233221', '11415122', '12324221', '11415221', '41421113', 
	'51421121', '41421212', '41421311', '32331113', '42331121', '31422113', '41422121', '31422212', 
	'32331311', '31422311', '23241113', '33241121', '22332113', '23241212', '21423113', '22332212', 
	'23241311', '21423212', '22332311', '21423311', '14151113', '24151121', '13242113', '23242121', 
	'12333113', '13242212', '14151311', '11424113', '12333212', '13242311', '11424212', '12333311', 
	'11424311', '13243121', '11425121', '41431211', '31432112', '31432211', '22342112', '21433112', 
	'21433211', '13252112', '12343112', '11434112', '11434211', '15111116', '15111215', '25111223', 
	'15111314', '15111413', '15111512', '15112124', '15112223', '15112322', '15112421', '15113132', 
	'15113231', '24211115', '24211214', '34211222', '24211313', '34211321', '24211412', '24211511', 
	'15121115', '25121123', '14212115', '24212123', '25121222', '14212214', '24212222', '14212313', 
	'24212321', '14212412', '15121511', '14212511', '15122123', '25122131', '14213123', '24213131', 
	'14213222', '15122321', '14213321', '15123131', '14214131', '33311114', '33311213', '33311312', 
	'33311411', '24221114', '23312114', '33312122', '34221221', '23312213', '33312221', '23312312', 
	'24221411', '23312411', '15131114', '14222114', '15131213', '25131221', '13313114', '14222213', 
	'15131312', '13313213', '14222312', '15131411', '13313312', '14222411', '15132122', '14223122', 
	'15132221', '13314122', '14223221', '13314221', '42411113', '42411212', '42411311', '33321113', 
	'32412113', '42412121', '32412212', '33321311', '32412311', '24231113', '34231121', '23322113', 
	'33322121', '22413113', '23322212', '24231311', '22413212', '23322311', '22413311', '15141113', 
	'25141121', '14232113', '24232121', '13323113', '14232212', '15141311', '12414113', '13323212', 
	'14232311', '12414212', '13323311', '15142121', '14233121', '13324121', '12415121', '51511112', 
	'51511211', '42421112', '41512112', '42421211', '41512211', '33331112', '32422112', '33331211', 
	'31513112', '32422211', '31513211', '24241112', '23332112', '24241211', '22423112', '23332211', 
	'21514112' ),
    /* Cluster 3 */
    3 => array(
	'51111125', '61111133', '41111216', '51111224', '61111232', '41111315', '51111323', '61111331', 
	'41111414', '51111422', '41111513', '51111521', '41111612', '41112125', '51112133', '61112141', 
	'31112216', '41112224', '51112232', '31112315', '41112323', '51112331', '31112414', '41112422', 
	'31112513', '41112521', '31112612', '31113125', '41113133', '51113141', '21113216', '31113224', 
	'41113232', '21113315', '31113323', '41113331', '21113414', '31113422', '21113513', '31113521', 
	'21113612', '21114125', '31114133', '41114141', '11114216', '21114224', '31114232', '11114315', 
	'21114323', '31114331', '11114414', '21114422', '11114513', '21114521', '11115125', '21115133', 
	'31115141', '11115224', '21115232', '11115323', '21115331', '11115422', '11116133', '21116141', 
	'11116232', '11116331', '41121116', '51121124', '61121132', '41121215', '51121223', '61121231', 
	'41121314', '51121322', '41121413', '51121421', '41121512', '41121611', '31122116', '41122124', 
	'51122132', '31122215', '41122223', '51122231', '31122314', '41122322', '31122413', '41122421', 
	'31122512', '31122611', '21123116', '31123124', '41123132', '21123215', '31123223', '41123231', 
	'21123314', '31123322', '21123413', '31123421', '21123512', '21123611', '11124116', '21124124', 
	'31124132', '11124215', '21124223', '31124231', '11124314', '21124322', '11124413', '21124421', 
	'11124512', '11125124', '21125132', '11125223', '21125231', '11125322', '11125421', '11126132', 
	'11126231', '41131115', '51131123', '61131131', '41131214', '51131222', '41131313', '51131321', 
	'41131412', '41131511', '31132115', '41132123', '51132131', '31132214', '41132222', '31132313', 
	'41132321', '31132412', '31132511', '21133115', '31133123', '41133131', '21133214', '31133222', 
	'21133313', '31133321', '21133412', '21133511', '11134115', '21134123', '31134131', '11134214', 
	'21134222', '11134313', '21134321', '11134412', '11134511', '11135123', '21135131', '11135222', 
	'11135321', '11136131', '41141114', '51141122', '41141213', '51141221', '41141312', '41141411', 
	'31142114', '41142122', '31142213', '41142221', '31142312', '31142411', '21143114', '31143122', 
	'21143213', '31143221', '21143312', '21143411', '11144114', '21144122', '11144213', '21144221', 
	'11144312', '11144411', '11145122', '11145221', '41151113', '51151121', '41151212', '41151311', 
	'31152113', '41152121', '31152212', '31152311', '21153113', '31153121', '21153212', '21153311', 
	'11154113', '21154121', '11154212', '11154311', '41161112', '41161211', '31162112', '31162211', 
	'21163112', '21163211', '42111116', '52111124', '62111132', '42111215', '52111223', '62111231', 
	'42111314', '52111322', '42111413', '52111421', '42111512', '42111611', '32112116', '42112124', 
	'52112132', '32112215', '42112223', '52112231', '32112314', '42112322', '32112413', '42112421', 
	'32112512', '32112611', '22113116', '32113124', '42113132', '22113215', '32113223', '42113231', 
	'22113314', '32113322', '22113413', '32113421', '22113512', '22113611', '12114116', '22114124', 
	'32114132', '12114215', '22114223', '32114231', '12114314', '22114322', '12114413', '22114421', 
	'12114512', '12115124', '22115132', '12115223', '22115231', '12115322', '12115421', '12116132', 
	'12116231', '51211115', '61211123', '11211164', '51211214', '61211222', '11211263', '51211313', 
	'61211321', '11211362', '51211412', '51211511', '42121115', '52121123', '62121131', '41212115', 
	'42121214', '61212131', '41212214', '51212222', '52121321', '41212313', '42121412', '41212412', 
	'42121511', '41212511', '32122115', '42122123', '52122131', '31213115', '32122214', '42122222', 
	'31213214', '41213222', '42122321', '31213313', '32122412', '31213412', '32122511', '31213511', 
	'22123115', '32123123', '42123131', '21214115', '22123214', '32123222', '21214214', '31214222', 
	'32123321', '21214313', '22123412', '21214412', '22123511', '21214511', '12124115', '22124123', 
	'32124131', '11215115', '12124214', '22124222', '11215214', '21215222', '22124321', '11215313', 
	'12124412', '11215412', '12124511', '12125123', '22125131', '11216123', '12125222', '11216222', 
	'12125321', '11216321', '12126131', '51221114', '61221122', '11221163', '51221213', '61221221', 
	'11221262', '51221312', '11221361', '51221411', '42131114', '52131122', '41222114', '42131213', 
	'52131221', '41222213', '51222221', '41222312', '42131411', '41222411', '32132114', '42132122', 
	'31223114', '32132213', '42132221', '31223213', '41223221', '31223312', '32132411', '31223411', 
	'22133114', '32133122', '21224114', '22133213', '32133221', '21224213', '31224221', '21224312', 
	'22133411', '21224411', '12134114', '22134122', '11225114', '12134213', '22134221', '11225213', 
	'21225221', '11225312', '12134411', '11225411', '12135122', '11226122', '12135221', '11226221', 
	'51231113', '61231121', '11231162', '51231212', '11231261', '51231311', '42141113', '52141121', 
	'41232113', '51232121', '41232212', '42141311', '41232311', '32142113', '42142121', '31233113', 
	'32142212', '31233212', '32142311', '31233311', '22143113', '32143121', '21234113', '31234121', 
	'21234212', '22143311', '21234311', '12144113', '22144121', '11235113', '12144212', '11235212', 
	'12144311', '11235311', '12145121', '11236121', '51241112', '11241161', '51241211', '42151112', 
	'41242112', '42151211', '41242211', '32152112', '31243112', '32152211', '31243211', '22153112', 
	'21244112', '22153211', '21244211', '12154112', '11245112', '12154211', '11245211', '51251111', 
	'42161111', '41252111', '32162111', '31253111', '22163111', '21254111', '43111115', '53111123', 
	'63111131', '43111214', '53111222', '43111313', '53111321', '43111412', '43111511', '33112115', 
	'43112123', '53112131', '33112214', '43112222', '33112313', '43112321', '33112412', '33112511', 
	'23113115', '33113123', '43113131', '23113214', '33113222', '23113313', '33113321', '23113412', 
	'23113511', '13114115', '23114123', '33114131', '13114214', '23114222', '13114313', '23114321', 
	'13114412', '13114511', '13115123', '23115131', '13115222', '13115321', '13116131', '52211114', 
	'62211122', '12211163', '52211213', '62211221', '12211262', '52211312', '12211361', '52211411', 
	'43121114', '53121122', '42212114', '43121213', '53121221', '42212213', '52212221', '42212312', 
	'43121411', '42212411', '33122114', '43122122', '32213114', '33122213', '43122221', '32213213', 
	'42213221', '32213312', '33122411', '32213411', '23123114', '33123122', '22214114', '23123213', 
	'33123221', '22214213', '32214221', '22214312', '23123411', '22214411', '13124114', '23124122', 
	'12215114', '13124213', '23124221', '12215213', '22215221', '12215312', '13124411', '12215411', 
	'13125122', '12216122', '13125221', '12216221', '61311113', '11311154', '21311162', '61311212', 
	'11311253', '21311261', '61311311', '11311352', '11311451', '52221113', '62221121', '12221162', 
	'51312113', '61312121', '11312162', '12221261', '51312212', '52221311', '11312261', '51312311', 
	'43131113', '53131121', '42222113', '43131212', '41313113', '51313121', '43131311', '41313212', 
	'42222311', '41313311', '33132113', '43132121', '32223113', '33132212', '31314113', '32223212', 
	'33132311', '31314212', '32223311', '31314311', '23133113', '33133121', '22224113', '23133212', 
	'21315113', '22224212', '23133311', '21315212', '22224311', '21315311', '13134113', '23134121', 
	'12225113', '13134212', '11316113', '12225212', '13134311', '11316212', '12225311', '11316311', 
	'13135121', '12226121', '61321112', '11321153', '21321161', '61321211', '11321252', '11321351', 
	'52231112', '12231161', '51322112', '52231211', '11322161', '51322211', '43141112', '42232112', 
	'43141211', '41323112', '42232211', '41323211', '33142112', '32233112', '33142211', '31324112', 
	'32233211', '31324211', '23143112', '22234112', '23143211', '21325112', '22234211', '21325211', 
	'13144112', '12235112', '13144211', '11326112', '12235211', '11326211', '61331111', '11331152', 
	'11331251', '52241111', '51332111', '43151111', '42242111', '41333111', '33152111', '32243111', 
	'31334111', '23153111', '22244111', '21335111', '13154111', '12245111', '11336111', '11341151', 
	'44111114', '54111122', '44111213', '54111221', '44111312', '44111411', '34112114', '44112122', 
	'34112213', '44112221', '34112312', '34112411', '24113114', '34113122', '24113213', '34113221', 
	'24113312', '24113411', '14114114', '24114122', '14114213', '24114221', '14114312', '14114411', 
	'14115122', '14115221', '53211113', '63211121', '13211162', '53211212', '13211261', '53211311', 
	'44121113', '54121121', '43212113', '44121212', '43212212', '44121311', '43212311', '34122113', 
	'44122121', '33213113', '34122212', '33213212', '34122311', '33213311', '24123113', '34123121', 
	'23214113', '24123212', '23214212', '24123311', '23214311', '14124113', '24124121', '13215113', 
	'14124212', '13215212', '14124311', '13215311', '14125121', '13216121', '62311112', '12311153', 
	'22311161', '62311211', '12311252', '12311351', '53221112', '13221161', '52312112', '53221211', 
	'12312161', '52312211', '44131112', '43222112', '44131211', '42313112', '43222211', '42313211', 
	'34132112', '33223112', '34132211', '32314112', '33223211', '32314211', '24133112', '23224112', 
	'24133211', '22315112', '23224211', '22315211', '14134112', '13225112', '14134211', '12316112', 
	'13225211', '12316211', '11411144', '21411152', '11411243', '21411251', '11411342', '11411441', 
	'62321111', '12321152', '61412111', '11412152', '12321251', '11412251', '53231111', '52322111', 
	'51413111', '44141111', '43232111', '42323111', '41414111', '34142111', '33233111', '32324111', 
	'31415111', '24143111', '23234111', '22325111', '21416111', '14144111', '13235111', '12326111', 
	'11421143', '21421151', '11421242', '11421341', '12331151', '11422151', '11431142', '11431241', 
	'11441141', '45111113', '45111212', '45111311', '35112113', '45112121', '35112212', '35112311', 
	'25113113', '35113121', '25113212', '25113311', '15114113', '25114121', '15114212', '15114311', 
	'15115121', '54211112', '14211161', '54211211', '45121112', '44212112', '45121211', '44212211', 
	'35122112', '34213112', '35122211', '34213211', '25123112', '24214112', '25123211', '24214211', 
	'15124112', '14215112', '15124211', '14215211', '63311111', '13311152', '13311251', '54221111', 
	'53312111', '45131111', '44222111', '43313111', '35132111', '34223111', '33314111', '25133111', 
	'24224111', '23315111', '15134111', '14225111', '13316111', '12411143', '22411151', '12411242', 
	'12411341', '13321151', '12412151', '11511134', '21511142', '11511233', '21511241', '11511332', 
	'11511431', '12421142', '11512142', '12421241', '11512241', '11521133', '21521141', '11521232', 
	'11521331', '12431141', '11522141', '11531132', '11531231', '11541131', '36112112', '36112211', 
	'26113112', '26113211', '16114112', '16114211', '45212111', '36122111', '35213111', '26123111', 
	'25214111', '16124111', '15215111', '14311151', '13411142', '13411241', '12511133', '22511141', 
	'12511232', '12511331', '13421141', '12512141', '11611124', '21611132', '11611223', '21611231', 
	'11611322', '11611421', '12521132', '11612132', '12521231', '11612231', '11621123', '21621131', 
	'11621222', '11621321', '12531131', '11622131', '11631122', '11631221', '14411141', '13511132', 
	'13511231', '12611123', '22611131', '12611222', '12611321', '13521131', '12612131', '12621122', 
	'12621221' ),
    /* Cluster 6 */
    6 => array(
	'21111155', '31111163', '11111246', '21111254', '31111262', '11111345', '21111353', '31111361', 
	'11111444', '21111452', '11111543', '61112114', '11112155', '21112163', '61112213', '11112254', 
	'21112262', '61112312', '11112353', '21112361', '61112411', '11112452', '51113114', '61113122', 
	'11113163', '51113213', '61113221', '11113262', '51113312', '11113361', '51113411', '41114114', 
	'51114122', '41114213', '51114221', '41114312', '41114411', '31115114', '41115122', '31115213', 
	'41115221', '31115312', '31115411', '21116114', '31116122', '21116213', '31116221', '21116312', 
	'11121146', '21121154', '31121162', '11121245', '21121253', '31121261', '11121344', '21121352', 
	'11121443', '21121451', '11121542', '61122113', '11122154', '21122162', '61122212', '11122253', 
	'21122261', '61122311', '11122352', '11122451', '51123113', '61123121', '11123162', '51123212', 
	'11123261', '51123311', '41124113', '51124121', '41124212', '41124311', '31125113', '41125121', 
	'31125212', '31125311', '21126113', '31126121', '21126212', '21126311', '11131145', '21131153', 
	'31131161', '11131244', '21131252', '11131343', '21131351', '11131442', '11131541', '61132112', 
	'11132153', '21132161', '61132211', '11132252', '11132351', '51133112', '11133161', '51133211', 
	'41134112', '41134211', '31135112', '31135211', '21136112', '21136211', '11141144', '21141152', 
	'11141243', '21141251', '11141342', '11141441', '61142111', '11142152', '11142251', '51143111', 
	'41144111', '31145111', '11151143', '21151151', '11151242', '11151341', '11152151', '11161142', 
	'11161241', '12111146', '22111154', '32111162', '12111245', '22111253', '32111261', '12111344', 
	'22111352', '12111443', '22111451', '12111542', '62112113', '12112154', '22112162', '62112212', 
	'12112253', '22112261', '62112311', '12112352', '12112451', '52113113', '62113121', '12113162', 
	'52113212', '12113261', '52113311', '42114113', '52114121', '42114212', '42114311', '32115113', 
	'42115121', '32115212', '32115311', '22116113', '32116121', '22116212', '22116311', '21211145', 
	'31211153', '41211161', '11211236', '21211244', '31211252', '11211335', '21211343', '31211351', 
	'11211434', '21211442', '11211533', '21211541', '11211632', '12121145', '22121153', '32121161', 
	'11212145', '12121244', '22121252', '11212244', '21212252', '22121351', '11212343', '12121442', 
	'11212442', '12121541', '11212541', '62122112', '12122153', '22122161', '61213112', '62122211', 
	'11213153', '12122252', '61213211', '11213252', '12122351', '11213351', '52123112', '12123161', 
	'51214112', '52123211', '11214161', '51214211', '42124112', '41215112', '42124211', '41215211', 
	'32125112', '31216112', '32125211', '31216211', '22126112', '22126211', '11221136', '21221144', 
	'31221152', '11221235', '21221243', '31221251', '11221334', '21221342', '11221433', '21221441', 
	'11221532', '11221631', '12131144', '22131152', '11222144', '12131243', '22131251', '11222243', 
	'21222251', '11222342', '12131441', '11222441', '62132111', '12132152', '61223111', '11223152', 
	'12132251', '11223251', '52133111', '51224111', '42134111', '41225111', '32135111', '31226111', 
	'22136111', '11231135', '21231143', '31231151', '11231234', '21231242', '11231333', '21231341', 
	'11231432', '11231531', '12141143', '22141151', '11232143', '12141242', '11232242', '12141341', 
	'11232341', '12142151', '11233151', '11241134', '21241142', '11241233', '21241241', '11241332', 
	'11241431', '12151142', '11242142', '12151241', '11242241', '11251133', '21251141', '11251232', 
	'11251331', '12161141', '11252141', '11261132', '11261231', '13111145', '23111153', '33111161', 
	'13111244', '23111252', '13111343', '23111351', '13111442', '13111541', '63112112', '13112153', 
	'23112161', '63112211', '13112252', '13112351', '53113112', '13113161', '53113211', '43114112', 
	'43114211', '33115112', '33115211', '23116112', '23116211', '12211136', '22211144', '32211152', 
	'12211235', '22211243', '32211251', '12211334', '22211342', '12211433', '22211441', '12211532', 
	'12211631', '13121144', '23121152', '12212144', '13121243', '23121251', '12212243', '22212251', 
	'12212342', '13121441', '12212441', '63122111', '13122152', '62213111', '12213152', '13122251', 
	'12213251', '53123111', '52214111', '43124111', '42215111', '33125111', '32216111', '23126111', 
	'21311135', '31311143', '41311151', '11311226', '21311234', '31311242', '11311325', '21311333', 
	'31311341', '11311424', '21311432', '11311523', '21311531', '11311622', '12221135', '22221143', 
	'32221151', '11312135', '12221234', '22221242', '11312234', '21312242', '22221341', '11312333', 
	'12221432', '11312432', '12221531', '11312531', '13131143', '23131151', '12222143', '13131242', 
	'11313143', '12222242', '13131341', '11313242', '12222341', '11313341', '13132151', '12223151', 
	'11314151', '11321126', '21321134', '31321142', '11321225', '21321233', '31321241', '11321324', 
	'21321332', '11321423', '21321431', '11321522', '11321621', '12231134', '22231142', '11322134', 
	'12231233', '22231241', '11322233', '21322241', '11322332', '12231431', '11322431', '13141142', 
	'12232142', '13141241', '11323142', '12232241', '11323241', '11331125', '21331133', '31331141', 
	'11331224', '21331232', '11331323', '21331331', '11331422', '11331521', '12241133', '22241141', 
	'11332133', '12241232', '11332232', '12241331', '11332331', '13151141', '12242141', '11333141', 
	'11341124', '21341132', '11341223', '21341231', '11341322', '11341421', '12251132', '11342132', 
	'12251231', '11342231', '11351123', '21351131', '11351222', '11351321', '12261131', '11352131', 
	'11361122', '11361221', '14111144', '24111152', '14111243', '24111251', '14111342', '14111441', 
	'14112152', '14112251', '54113111', '44114111', '34115111', '24116111', '13211135', '23211143', 
	'33211151', '13211234', '23211242', '13211333', '23211341', '13211432', '13211531', '14121143', 
	'24121151', '13212143', '14121242', '13212242', '14121341', '13212341', '14122151', '13213151', 
	'12311126', '22311134', '32311142', '12311225', '22311233', '32311241', '12311324', '22311332', 
	'12311423', '22311431', '12311522', '12311621', '13221134', '23221142', '12312134', '13221233', 
	'23221241', '12312233', '13221332', '12312332', '13221431', '12312431', '14131142', '13222142', 
	'14131241', '12313142', '13222241', '12313241', '21411125', '31411133', '41411141', '11411216', 
	'21411224', '31411232', '11411315', '21411323', '31411331', '11411414', '21411422', '11411513', 
	'21411521', '11411612', '12321125', '22321133', '32321141', '11412125', '12321224', '22321232', 
	'11412224', '21412232', '22321331', '11412323', '12321422', '11412422', '12321521', '11412521', 
	'13231133', '23231141', '12322133', '13231232', '11413133', '12322232', '13231331', '11413232', 
	'12322331', '11413331', '14141141', '13232141', '12323141', '11414141', '11421116', '21421124', 
	'31421132', '11421215', '21421223', '31421231', '11421314', '21421322', '11421413', '21421421', 
	'11421512', '11421611', '12331124', '22331132', '11422124', '12331223', '22331231', '11422223', 
	'21422231', '11422322', '12331421', '11422421', '13241132', '12332132', '13241231', '11423132', 
	'12332231', '11423231', '11431115', '21431123', '31431131', '11431214', '21431222', '11431313', 
	'21431321', '11431412', '11431511', '12341123', '22341131', '11432123', '12341222', '11432222', 
	'12341321', '11432321', '13251131', '12342131', '11433131', '11441114', '21441122', '11441213', 
	'21441221', '11441312', '11441411', '12351122', '11442122', '12351221', '11442221', '11451113', 
	'21451121', '11451212', '11451311', '12361121', '11452121', '15111143', '25111151', '15111242', 
	'15111341', '15112151', '14211134', '24211142', '14211233', '24211241', '14211332', '14211431', 
	'15121142', '14212142', '15121241', '14212241', '13311125', '23311133', '33311141', '13311224', 
	'23311232', '13311323', '23311331', '13311422', '13311521', '14221133', '24221141', '13312133', 
	'14221232', '13312232', '14221331', '13312331', '15131141', '14222141', '13313141', '12411116', 
	'22411124', '32411132', '12411215', '22411223', '32411231', '12411314', '22411322', '12411413', 
	'22411421', '12411512', '12411611', '13321124', '23321132', '12412124', '13321223', '23321231', 
	'12412223', '22412231', '12412322', '13321421', '12412421', '14231132', '13322132', '14231231', 
	'12413132', '13322231', '12413231', '21511115', '31511123', '41511131', '21511214', '31511222', 
	'21511313', '31511321', '21511412', '21511511', '12421115', '22421123', '32421131', '11512115', 
	'12421214', '22421222', '11512214', '21512222', '22421321', '11512313', '12421412', '11512412', 
	'12421511', '11512511', '13331123', '23331131', '12422123', '13331222', '11513123', '12422222', 
	'13331321', '11513222', '12422321', '11513321', '14241131', '13332131', '12423131', '11514131', 
	'21521114', '31521122', '21521213', '31521221', '21521312', '21521411', '12431114', '22431122', 
	'11522114', '12431213', '22431221', '11522213', '21522221', '11522312', '12431411', '11522411', 
	'13341122', '12432122', '13341221', '11523122', '12432221', '11523221', '21531113', '31531121', 
	'21531212', '21531311', '12441113', '22441121', '11532113', '12441212', '11532212', '12441311', 
	'11532311', '13351121', '12442121', '11533121', '21541112', '21541211', '12451112', '11542112', 
	'12451211', '11542211', '16111142', '16111241', '15211133', '25211141', '15211232', '15211331', 
	'16121141', '15212141', '14311124', '24311132', '14311223', '24311231', '14311322', '14311421', 
	'15221132', '14312132', '15221231', '14312231', '13411115', '23411123', '33411131', '13411214', 
	'23411222', '13411313', '23411321', '13411412', '13411511', '14321123', '24321131', '13412123', 
	'23412131', '13412222', '14321321', '13412321', '15231131', '14322131', '13413131', '22511114', 
	'32511122', '22511213', '32511221', '22511312', '22511411', '13421114', '23421122', '12512114', 
	'22512122', '23421221', '12512213', '13421312', '12512312', '13421411', '12512411', '14331122', 
	'13422122', '14331221', '12513122', '13422221', '12513221', '31611113', '41611121', '31611212', 
	'31611311', '22521113', '32521121', '21612113', '22521212', '21612212', '22521311', '21612311', 
	'13431113', '23431121', '12522113', '13431212', '11613113', '12522212', '13431311', '11613212', 
	'12522311', '11613311', '14341121', '13432121', '12523121', '11614121', '31621112', '31621211', 
	'22531112', '21622112', '22531211', '21622211', '13441112', '12532112', '13441211', '11623112', 
	'12532211', '11623211', '31631111', '22541111', '21632111', '13451111', '12542111', '11633111', 
	'16211132', '16211231', '15311123', '25311131', '15311222', '15311321', '16221131', '15312131', 
	'14411114', '24411122', '14411213', '24411221', '14411312', '14411411', '15321122', '14412122', 
	'15321221', '14412221', '23511113', '33511121', '23511212', '23511311', '14421113', '24421121', 
	'13512113', '23512121', '13512212', '14421311', '13512311', '15331121', '14422121', '13513121', 
	'32611112', '32611211', '23521112', '22612112', '23521211', '22612211', '14431112', '13522112', 
	'14431211', '12613112', '13522211', '12613211', '32621111', '23531111', '22622111', '14441111', 
	'13532111', '12623111', '16311122', '16311221', '15411113', '25411121', '15411212', '15411311', 
	'16321121', '15412121', '24511112', '24511211', '15421112', '14512112', '15421211', '14512211', 
	'33611111' )
    );

    private $iCheckSum = array(0=>468, 3=>692, 6=>201);
    

    function PDF417Patterns() {
	// Check that the patterns hasn't been corrupted
	for( $i=0; $i <= 6; $i += 3 ) {
	    $a = $this->iPatterns[$i];
	    $n = count($a);
	    for( $j=0, $sum=0; $j < $n; ++$j ) {
		$sum = ($sum + $a[$j]) % 913;
	    }
	    if( $sum != $this->iCheckSum[$i] ) {
		JpGraphError::RaiseL(26006,$i);//"Internal error. Data files for PDF417 cluster #$i is corrupted.\n");
	    }
	}
    }

    function GetStartPattern() {
	return $this->iStartStop[0];
    }

    function GetStopPattern() {
	return $this->iStartStop[1];
    }

    function GetPattern($aRow,$aCodeVal) {
	if( empty($this->iPatterns[($aRow % 3)*3][$aCodeVal]) )
	    JpGraphError::RaiseL(26007,$aCodeVal,$aRow);//"GetPattern: Illegal Code Value = $aCodeVal (row=$aRow)\n\n");
	return $this->iPatterns[($aRow % 3)*3][$aCodeVal];
    }

    function GetRowInd($aRow,$aNumRows,$aNumCols,$aErrLevel) {
	$ci = ($aRow%3)*3;
	$xi = floor($aRow / 3 );
	$y = floor(($aNumRows-1)/3);
	$z = $aErrLevel*3 + ($aNumRows-1) % 3;
	$v = $aNumCols-1;

	switch( $ci ) {
	    case 0:
		$left = 30*$xi+$y;
		$right = 30*$xi+$v;
		break;
	    case 3:
		$left = 30*$xi+$z;
		$right = 30*$xi+$y;
		break;
	    case 6:
		$left = 30*$xi+$v;
		$right = 30*$xi+$z;
		break;
	}
	return array($left,$right);
    }
}

?>