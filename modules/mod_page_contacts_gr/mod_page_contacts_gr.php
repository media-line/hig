<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
   
// No direct access to this file
defined('_JEXEC') or die;

function createBold($string) {
  $count = strrpos( $string, ')')+1;
  if ($count != 1) {
     $stringBold = substr($string, 0, $count).'<span class="bold">'.substr($string, $count).'</span>';
  } else {
     $stringBold = $string;
  }
  return $stringBold;
}

$mapLogoArr = json_decode($params->get('map'))->maplogo;
$mapTextCityArr = json_decode($params->get('map'))->maptextcity;
$mapTextStreetArr = json_decode($params->get('map'))->maptextstreet;
$mapXArr = json_decode($params->get('map'))->mapx;
$mapYArr = json_decode($params->get('map'))->mapy;
$mapZoomArr = json_decode($params->get('map'))->mapzoom;
$count = count($mapTextCityArr); 


$mapBlock1LogoArr = json_decode($params->get('block1'))->block1logo;
$mapBlock1InfoArr = json_decode($params->get('block1'))->block1info;
$mapActive1Arr = json_decode($params->get('block1'))->active1;
$mapActive1UrlArr = json_decode($params->get('block1'))->active1url;
$count1 = count($mapBlock1InfoArr); 


$mapBlock2LogoArr = json_decode($params->get('block2'))->block2logo;
$mapBlock2InfoArr = json_decode($params->get('block2'))->block2info;
$mapActive2Arr = json_decode($params->get('block2'))->active2;
$mapActive2UrlArr = json_decode($params->get('block2'))->active2url;
$count2 = count($mapBlock2InfoArr); 


$mapBlock3LogoArr = json_decode($params->get('block3'))->block3logo;
$mapBlock3InfoArr = json_decode($params->get('block3'))->block3info;
$mapActive3Arr = json_decode($params->get('block3'))->active3;
$mapActive3UrlArr = json_decode($params->get('block3'))->active3url;
$count3 = count($mapBlock3InfoArr); 


$employee1nameArr = json_decode($params->get('employees1'))->employee1name;
$employee1jobArr = json_decode($params->get('employees1'))->employee1job;
$employee1logo1Arr = json_decode($params->get('employees1'))->employee1logo1;
$employee1info1Arr = json_decode($params->get('employees1'))->employee1info1;
$employee1logo2Arr = json_decode($params->get('employees1'))->employee1logo2;
$employee1info2Arr = json_decode($params->get('employees1'))->employee1info2;
$employee1logo3Arr = json_decode($params->get('employees1'))->employee1logo3;
$employee1info3Arr = json_decode($params->get('employees1'))->employee1info3;
$countEmp1 = count($employee1nameArr); 

$employee2nameArr = json_decode($params->get('employees2'))->employee2name;
$employee2jobArr = json_decode($params->get('employees2'))->employee2job;
$employee2logo1Arr = json_decode($params->get('employees2'))->employee2logo1;
$employee2info1Arr = json_decode($params->get('employees2'))->employee2info1;
$employee2logo2Arr = json_decode($params->get('employees2'))->employee2logo2;
$employee2info2Arr = json_decode($params->get('employees2'))->employee2info2;
$employee2logo3Arr = json_decode($params->get('employees2'))->employee2logo3;
$employee2info3Arr = json_decode($params->get('employees2'))->employee2info3;
$countEmp2 = count($employee2nameArr); 

$employee3nameArr = json_decode($params->get('employees3'))->employee3name;
$employee3jobArr = json_decode($params->get('employees3'))->employee3job;
$employee3logo1Arr = json_decode($params->get('employees3'))->employee3logo1;
$employee3info1Arr = json_decode($params->get('employees3'))->employee3info1;
$employee3logo2Arr = json_decode($params->get('employees3'))->employee3logo2;
$employee3info2Arr = json_decode($params->get('employees3'))->employee3info2;
$employee3logo3Arr = json_decode($params->get('employees3'))->employee3logo3;
$employee3info3Arr = json_decode($params->get('employees3'))->employee3info3;
$countEmp3 = count($employee3nameArr); 

$employee4nameArr = json_decode($params->get('employees4'))->employee4name;
$employee4jobArr = json_decode($params->get('employees4'))->employee4job;
$employee4logo1Arr = json_decode($params->get('employees4'))->employee4logo1;
$employee4info1Arr = json_decode($params->get('employees4'))->employee4info1;
$employee4logo2Arr = json_decode($params->get('employees4'))->employee4logo2;
$employee4info2Arr = json_decode($params->get('employees4'))->employee4info2;
$employee4logo3Arr = json_decode($params->get('employees4'))->employee4logo3;
$employee4info3Arr = json_decode($params->get('employees4'))->employee4info3;
$countEmp4 = count($employee4nameArr); 

$employee5nameArr = json_decode($params->get('employees5'))->employee5name;
$employee5jobArr = json_decode($params->get('employees5'))->employee5job;
$employee5logo1Arr = json_decode($params->get('employees5'))->employee5logo1;
$employee5info1Arr = json_decode($params->get('employees5'))->employee5info1;
$employee5logo2Arr = json_decode($params->get('employees5'))->employee5logo2;
$employee5info2Arr = json_decode($params->get('employees5'))->employee5info2;
$employee5logo3Arr = json_decode($params->get('employees5'))->employee5logo3;
$employee5info3Arr = json_decode($params->get('employees5'))->employee5info3;
$countEmp5 = count($employee5nameArr); 

$employee6nameArr = json_decode($params->get('employees6'))->employee6name;
$employee6jobArr = json_decode($params->get('employees6'))->employee6job;
$employee6logo1Arr = json_decode($params->get('employees6'))->employee6logo1;
$employee6info1Arr = json_decode($params->get('employees6'))->employee6info1;
$employee6logo2Arr = json_decode($params->get('employees6'))->employee6logo2;
$employee6info2Arr = json_decode($params->get('employees6'))->employee6info2;
$employee6logo3Arr = json_decode($params->get('employees6'))->employee6logo3;
$employee6info3Arr = json_decode($params->get('employees6'))->employee6info3;
$countEmp6 = count($employee6nameArr); 
?>
	<div class="clearfix mod_contacts_page" itemscope itemtype="http://schema.org/Organization">

		<span itemprop="name" style="display: none;">ООО "Холод Инвест Групп"</span>
	
		<a href="<?php echo $params->get('info_link'); ?>" class="button_doc"><div class="word"><img src="/images/word.png"></div> Реквизиты</a>

	 
		<div class="mod_contacts_page_block" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		
		    <div class="mod_contacts_page_block_name">Адрес:</div>
            <?php for ($i=0; $i < $count; $i++) { ?>
				<div class="mod_contacts_page_block_map clearfix">
					<div class="map_block logo"><img src="<?php echo $mapLogoArr[$i]; ?>" alt=""></div>
					<div class="map_block map">
						<p><span itemprop="addressLocality"><?php echo $mapTextCityArr[$i]; ?></span>, <span itemprop="streetAddress"><?php echo $mapTextStreetArr[$i]; ?></span></p>
						<p class="map_button button_<?php echo $i; ?>" data="<?php echo $i; ?>" <!--data-toggle="modal" data-target=".map_modal_<?php echo $i; ?>"-->Посмотреть карту проезда</p>
					</div>			
				</div>
				
				<!--<div class="map_modal_<?php echo $i; ?> modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
						<script type="text/javascript">			
								ymaps.ready(init);
								var myMap<?php echo $i; ?>;

								function init(){ 
									myMap<?php echo $i; ?> = new ymaps.Map("map_<?php echo $i; ?>", {
										center: [<?php echo $mapXArr[$i]; ?>,<?php echo $mapYArr[$i]; ?>],
										zoom: <?php echo $mapZoomArr[$i]; ?>
									}); 
									
									var myPlacemark<?php echo $i; ?> = new ymaps.Placemark([<?php echo $mapXArr[$i]; ?>,<?php echo $mapYArr[$i]; ?>], {}, {
										iconImageSize: [89, 65],
										iconImageOffset: [-45, -65]
									});
									
									myMap<?php echo $i; ?>.geoObjects.add(myPlacemark<?php echo $i; ?>);
								}
						</script>
						<div id="map_<?php echo $i; ?>" style="width: 100%; height: 500px"></div>
					</div>
				</div>-->			
            <?php } ?>
		</div>
		
		<div class="mod_contacts_page_block">
		    <div class="mod_contacts_page_block_name"><?php echo $params->get('block1name'); ?></div>
            <?php for ($i=0; $i < $count1; $i++) { ?>
				<div class="mod_contacts_page_block_single clearfix">
					<div class="map_block logo">
						<?php if ($mapActive1Arr[$i] == 'no') { ?>
							<img src="<?php echo $mapBlock1LogoArr[$i]; ?>" alt="">
						<?php } else if ($mapActive1Arr[$i] == 'skype') { ?>
							<a href="skype:<?php echo $mapActive1UrlArr[$i]; ?>?chat"><img src="<?php echo $mapBlock1LogoArr[$i]; ?>" alt=""></a>
						<?php } else if ($mapActive1Arr[$i] == 'viber') { ?>
							<a href="viber://chat:<?php echo $mapActive1UrlArr[$i]; ?>"><img src="<?php echo $mapBlock1LogoArr[$i]; ?>" alt=""></a>
						<?php } else if ($mapActive1Arr[$i] == 'mail') { ?>
							<a href="mailto:<?php echo $mapActive1UrlArr[$i]; ?>"><img src="<?php echo $mapBlock1LogoArr[$i]; ?>" alt=""></a>
						<?php } else { ?>
							<img src="<?php echo $mapBlock1LogoArr[$i]; ?>" alt="">
						<?php } ?>
					</div>
					<div class="map_block map">
						<?php if ($mapActive1Arr[$i] == 'no') { ?>
							<p itemprop="telephone"><?php echo createBold($mapBlock1InfoArr[$i]); ?></p>
						<?php } else if ($mapActive1Arr[$i] == 'skype') { ?>
							<p><a href="skype:<?php echo $mapActive1UrlArr[$i]; ?>?chat"><?php echo createBold($mapBlock1InfoArr[$i]); ?></a></p>
						<?php } else if ($mapActive1Arr[$i] == 'viber') { ?>
							<p><a href="viber://chat:<?php echo $mapActive1UrlArr[$i]; ?>"><?php echo createBold($mapBlock1InfoArr[$i]); ?></a></p>
						<?php } else { ?>
							<p><?php echo createBold($mapBlock1InfoArr[$i]); ?></p>
						<?php } ?>
					</div>
				</div>
            <?php } ?>			
		</div>
		
		<div class="mod_contacts_page_block">
		    <div class="mod_contacts_page_block_name"><?php echo $params->get('block2name'); ?></div>
            <?php for ($i=0; $i < $count2; $i++) { ?>
				<div class="mod_contacts_page_block_single clearfix">
					<div class="map_block logo">
						<?php if ($mapActive2Arr[$i] == 'no') { ?>
							<img src="<?php echo $mapBlock2LogoArr[$i]; ?>" alt="">
						<?php } else if ($mapActive2Arr[$i] == 'skype') { ?>
							<a href="skype:<?php echo $mapActive2UrlArr[$i]; ?>?chat"><img src="<?php echo $mapBlock2LogoArr[$i]; ?>" alt=""></a>
						<?php } else if ($mapActive2Arr[$i] == 'viber') { ?>
							<a href="viber://chat:<?php echo $mapActive2UrlArr[$i]; ?>"><img src="<?php echo $mapBlock2LogoArr[$i]; ?>" alt=""></a>
						<?php } else if ($mapActive2Arr[$i] == 'mail') { ?>
							<a href="mailto:<?php echo $mapActive2UrlArr[$i]; ?>"><img src="<?php echo $mapBlock2LogoArr[$i]; ?>" alt=""></a>						
						<?php } else { ?>
							<img src="<?php echo $mapBlock2LogoArr[$i]; ?>" alt="">
						<?php } ?>
					</div>
					<div class="map_block map">
						<?php if ($mapActive2Arr[$i] == 'no') { ?>
							<p><?php echo createBold($mapBlock2InfoArr[$i]); ?></p>
						<?php } else if ($mapActive2Arr[$i] == 'skype') { ?>
							<p><a href="skype:<?php echo $mapActive2UrlArr[$i]; ?>?chat"><?php echo createBold($mapBlock2InfoArr[$i]); ?></a></p>
						<?php } else if ($mapActive2Arr[$i] == 'viber') { ?>
							<p><a href="viber://chat:<?php echo $mapActive2UrlArr[$i]; ?>"><?php echo createBold($mapBlock2InfoArr[$i]); ?></a></p>
						<?php } else { ?>
							<p><?php echo createBold($mapBlock2InfoArr[$i]); ?></p>
						<?php } ?>
					</div>
				</div>
            <?php } ?>			
		</div>
		
		<div class="mod_contacts_page_block">
		    <div class="mod_contacts_page_block_name"><?php echo $params->get('block3name'); ?></div>
            <?php for ($i=0; $i < $count3; $i++) { ?>
				<div class="mod_contacts_page_block_single clearfix">
					<div class="map_block logo">
						<?php if ($mapActive3Arr[$i] == 'no') { ?>
							<img src="<?php echo $mapBlock3LogoArr[$i]; ?>" alt="">
						<?php } else if ($mapActive3Arr[$i] == 'skype') { ?>
							<a href="skype:<?php echo $mapActive3UrlArr[$i]; ?>?chat"><img src="<?php echo $mapBlock3LogoArr[$i]; ?>" alt=""></a>
						<?php } else if ($mapActive3Arr[$i] == 'viber') { ?>
							<a href="viber://chat:<?php echo $mapActive3UrlArr[$i]; ?>"><img src="<?php echo $mapBlock3LogoArr[$i]; ?>" alt=""></a>
						<?php } else if ($mapActive3Arr[$i] == 'mail') { ?>
							<a href="mailto:<?php echo $mapActive3UrlArr[$i]; ?>"><img src="<?php echo $mapBlock3LogoArr[$i]; ?>" alt=""></a>
						<?php } else { ?>
							<img src="<?php echo $mapBlock3LogoArr[$i]; ?>" alt="">
						<?php } ?>
					</div>
					<div class="map_block map">
						<?php if ($mapActive3Arr[$i] == 'no') { ?>
							<p><?php echo createBold($mapBlock3InfoArr[$i]); ?></p>
						<?php } else if ($mapActive3Arr[$i] == 'skype') { ?>
							<p><a href="skype:<?php echo $mapActive3UrlArr[$i]; ?>?chat"><?php echo createBold($mapBlock3InfoArr[$i]); ?></a></p>
						<?php } else if ($mapActive3Arr[$i] == 'viber') { ?>
							<p><a href="viber://chat:<?php echo $mapActive3UrlArr[$i]; ?>"><?php echo createBold($mapBlock3InfoArr[$i]); ?></a></p>
						<?php } else { ?>
							<p><?php echo createBold($mapBlock3InfoArr[$i]); ?></p>
						<?php } ?>
					</div>
				</div>
            <?php } ?>			
		</div>
		
	</div>
	
	<div class="clearfix">
	
		<div class="mod_contacts_page_section">
			<?php if ($params->get('section1')) { ?>
				<div class="mod_contacts_page_section_block section contacts_show">
					<?php echo $params->get('section1'); ?>
					<div class="section_block_tip"><span></span></div>
				</div>	
			<?php } ?>	
			<?php if ($params->get('section2')) { ?>
				<div class="mod_contacts_page_section_block section">
					<?php echo $params->get('section2'); ?>
					<div class="section_block_tip"><span></span></div>
				</div>	
			<?php } ?>	
			<?php if ($params->get('section3')) { ?>
				<div class="mod_contacts_page_section_block section">
					<?php echo $params->get('section3'); ?>
					<div class="section_block_tip"><span></span></div>
				</div>	
			<?php } ?>	
			<?php if ($params->get('section4')) { ?>
				<div class="mod_contacts_page_section_block section">
					<?php echo $params->get('section4'); ?>
					<div class="section_block_tip"><span></span></div>
				</div>	
			<?php } ?>	
			<?php if ($params->get('section5')) { ?>
				<div class="mod_contacts_page_section_block section">
					<?php echo $params->get('section5'); ?>
					<div class="section_block_tip"><span></span></div>
				</div>	
			<?php } ?>	
			<?php if ($params->get('section6')) { ?>
				<div class="mod_contacts_page_section_block section">
					<?php echo $params->get('section6'); ?>
					<div class="section_block_tip"><span></span></div>
				</div>	
			<?php } ?>	
		</div>
		
		<div class="mod_contacts_page_section info">
			<?php if ($params->get('section1')) { ?>
				<div class="mod_contacts_page_section_block employee clearfix">
					<?php for ($i=0; $i < $countEmp1; $i++) { ?>
						<div class="mod_contacts_page_section_block_inner clearfix">
							<div class="mod_contacts_page_section_fio mod_contacts_page_section_employee">
								<div class="employee_name"><?php echo $employee1nameArr[$i] ?></div>
								<div class="employee_job"><?php echo $employee1jobArr[$i] ?></div>
							</div>
							<div class="mod_contacts_page_section_info mod_contacts_page_section_employee">
								<?php if (!empty($employee1info1Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee1logo1Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee1logo1Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee1info1Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>	
								<?php if (!empty($employee1info2Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee1logo2Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee1logo2Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee1info2Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee1info3Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee1logo3Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee1logo3Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee1info3Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
							</div>	
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			
			
			<?php if ($params->get('section2')) { ?>
				<div class="mod_contacts_page_section_block employee clearfix">
					<?php for ($i=0; $i < $countEmp2; $i++) { ?>
						<div class="mod_contacts_page_section_block_inner clearfix">
							<div class="mod_contacts_page_section_fio mod_contacts_page_section_employee">
								<div class="employee_name"><?php echo $employee2nameArr[$i] ?></div>
								<div class="employee_job"><?php echo $employee2jobArr[$i] ?></div>
							</div>
							<div class="mod_contacts_page_section_info mod_contacts_page_section_employee">
								<?php if (!empty($employee2info1Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee2logo1Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee2logo1Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee2info1Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee2info2Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee2logo2Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee2logo2Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee2info2Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee2info3Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee2logo3Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee2logo3Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee2info3Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>		
							</div>	
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			
			
			<?php if ($params->get('section3')) { ?>	
				<div class="mod_contacts_page_section_block employee clearfix">
					<?php for ($i=0; $i < $countEmp3; $i++) { ?>
						<div class="mod_contacts_page_section_block_inner clearfix">
							<div class="mod_contacts_page_section_fio mod_contacts_page_section_employee">
								<div class="employee_name"><?php echo $employee3nameArr[$i] ?></div>
								<div class="employee_job"><?php echo $employee3jobArr[$i] ?></div>
							</div>
							<div class="mod_contacts_page_section_info mod_contacts_page_section_employee">
								<?php if (!empty($employee3info1Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee3logo1Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee3logo1Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee3info1Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>	
								<?php if (!empty($employee3info2Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee3logo2Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee3logo2Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee3info2Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee3info3Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee3logo3Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee3logo3Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee3info3Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
							</div>	
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			
			
			<?php if ($params->get('section4')) { ?>	
				<div class="mod_contacts_page_section_block employee clearfix">
					<?php for ($i=0; $i < $countEmp4; $i++) { ?>
						<div class="mod_contacts_page_section_block_inner clearfix">
							<div class="mod_contacts_page_section_fio mod_contacts_page_section_employee">
								<div class="employee_name"><?php echo $employee4nameArr[$i] ?></div>
								<div class="employee_job"><?php echo $employee4jobArr[$i] ?></div>
							</div>
							<div class="mod_contacts_page_section_info mod_contacts_page_section_employee">
								<?php if (!empty($employee4info1Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee4logo1Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee4logo1Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee4info1Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee4info2Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee4logo2Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee4logo2Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee4info2Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee4info3Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee4logo3Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee4logo3Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee4info3Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
							</div>		
						</div>
					<?php } ?>
				</div>
			<?php } ?>

			<?php if ($params->get('section5')) { ?>	
				<div class="mod_contacts_page_section_block employee clearfix">
					<?php for ($i=0; $i < $countEmp5; $i++) { ?>
						<div class="mod_contacts_page_section_block_inner clearfix">
							<div class="mod_contacts_page_section_fio mod_contacts_page_section_employee">
								<div class="employee_name"><?php echo $employee5nameArr[$i] ?></div>
								<div class="employee_job"><?php echo $employee5jobArr[$i] ?></div>
							</div>
							<div class="mod_contacts_page_section_info mod_contacts_page_section_employee">
								<?php if (!empty($employee5info1Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee5logo1Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee5logo1Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee5info1Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee5info2Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee5logo2Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee5logo2Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee5info2Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee5info3Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee5logo3Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee5logo3Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee5info3Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
							</div>	
						</div>
					<?php } ?>
				</div>	
			<?php } ?>		

			<?php if ($params->get('section6')) { ?>	
				<div class="mod_contacts_page_section_block employee clearfix">
					<?php for ($i=0; $i < $countEmp6; $i++) { ?>
						<div class="mod_contacts_page_section_block_inner clearfix">
							<div class="mod_contacts_page_section_fio mod_contacts_page_section_employee">
								<div class="employee_name"><?php echo $employee6nameArr[$i] ?></div>
								<div class="employee_job"><?php echo $employee6jobArr[$i] ?></div>
							</div>
							<div class="mod_contacts_page_section_info mod_contacts_page_section_employee">
								<?php if (!empty($employee6info1Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee6logo1Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee6logo1Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee6info1Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee6info2Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee6logo2Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee6logo2Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee6info2Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
								<?php if (!empty($employee6info3Arr[$i])) { ?>
									<div class="clearfix">
										<?php if ($employee6logo3Arr[$i]) { ?>
											<div class="employee_block logo"><img src="<?php echo $employee6logo3Arr[$i]; ?>" alt=""></div>
										<?php } ?>
										<div class="employee_block info">
											<p><?php echo $employee6info3Arr[$i]; ?></p>
										</div>				
									</div>
								<?php } ?>
							</div>	
						</div>
					<?php } ?>
				</div>	
			<?php } ?>	


            <?php for ($i=0; $i < $count; $i++) { ?>
				<div class="mod_contacts_page_section_map">
					<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
					<script type="text/javascript">			
						ymaps.ready(init);
						var myMap<?php echo $i; ?>;					
						
						function init(){ 
							
							myMap<?php echo $i; ?> = new ymaps.Map("map_<?php echo $i; ?>", {
								center: [<?php echo $mapXArr[$i]; ?>,<?php echo $mapYArr[$i]; ?>],
								zoom: <?php echo $mapZoomArr[$i]; ?>
							}); 
									
							var myPlacemark<?php echo $i; ?> = new ymaps.Placemark([<?php echo $mapXArr[$i]; ?>,<?php echo $mapYArr[$i]; ?>], {}, {
								iconLayout: 'default#image',
								iconImageHref: '/images/map-tip.png',
								iconImageSize: [27, 43],
								iconImageOffset: [-13, -43]
							});
									
							myMap<?php echo $i; ?>.geoObjects.add(myPlacemark<?php echo $i; ?>);
						}
					</script>
					<div id="map_<?php echo $i; ?>" style="width: 100%; height: 500px"></div>				
				</div>
			<?php } ?>
			
			
		</div>
	
	</div>
	
	<script type="text/javascript">
	    jQuery(document).ready(function() {
			jQuery('.mod_contacts_page_section_block.employee').hide();
			jQuery('.mod_contacts_page_section_map').hide();
			jQuery('.mod_contacts_page_section_block.employee').eq(0).show(400);
			jQuery('.mod_contacts_page_section_block.section').eq(0).addClass('employee_show');
			var number = 0;
			var numberMap;
			
			jQuery('.mod_contacts_page_section_block.section').click(function() {
			    if (jQuery(this).index() != number) {
					number = jQuery(this).index();
					numberMap = null;
					jQuery('.mod_contacts_page_section_block.employee').hide(400);
					jQuery('.mod_contacts_page_section_map').hide(400);
					jQuery('.mod_contacts_page_section_block.employee').eq(number).show(400);
				    jQuery('.mod_contacts_page_section_block.section').removeClass('employee_show');
					jQuery('.mod_contacts_page_section_block.section').eq(number).addClass('employee_show');
				}
			});	

			jQuery('.map_button').click(function() {
			    if (jQuery(this).attr("data") != numberMap) {
					numberMap = jQuery(this).attr("data");
					number = null;
					jQuery('.mod_contacts_page_section_block.employee').hide(400);
					jQuery('.mod_contacts_page_section_map').hide(400);
					jQuery('.mod_contacts_page_section_map').eq(jQuery(this).attr("data")).show();
					jQuery('.mod_contacts_page_section_block.section').removeClass('employee_show');
				}
			});			
		});
	</script>		
	