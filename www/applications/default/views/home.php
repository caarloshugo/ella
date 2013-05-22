<div class="welcome">
	<h2>
		Welcome <?php echo $user["name"];?> to Study Tour on Human rights Mexico
	</h2>
</div>

<div id="buttons">
	
	<div class="icon info-icon info-icon"></div>
	<div class="icon trabajar-icon trabajar-icon"></div>
	<div class="icon documentos-icon documentos-icon"></div>
	
	
	<div class="section info">
		<ul>
			<li class="doc">
				<a href="<?php print get('webURL'); ?>/documents/info/Seminar_Program.docx" title="Program">Program</a>
			</li>

			<li>
				<a href="<?php print get('webURL'); ?>/documents/info/Agenda_International_Participants.pdf" title="Agenda International Participants">Agenda International Participants</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/flights/itinerary-<?php echo $user_id;?>.pdf" title="Itinerary">Itinerary</a>
			</li>
			
			<?php if(isset($user["flight2"])) { ?>
				<li>
					<a href="<?php print get('webURL'); ?>/documents/flights/itinerary-<?php echo $user_id;?>2.pdf" title="Itinerary 2">Itinerary 2</a>
				</li>
			<?php } ?>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
			<div class="min-icon documentos-icon-min documentos-icon-min-en"></div>
		</div>
	</div>
	
	<div class="section trabajar">
		<ul>
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/ACIJ-summary.pdf" title="ACIJ Summary">ACIJ Summary</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/LP-case-study-ACIJ.pdf" title="LP case study ACIJ">LP case study ACIJ</a>
			</li>
			
			<li class="doc">
				<a href="<?php print get('webURL'); ?>/documents/work/Amasango_write_up.docx" title="Amasango write up">Amasango write up</a>
			</li>
		</ul>
		
		
		<div class="section-icons-min">
			<div class="min-icon info-icon-min info-icon-min-en"></div>
			<div class="min-icon documentos-icon-min documentos-icon-min-en"></div>
		</div>
	</div>
	
	<div class="section documentos">
		<ul>			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Politicas-publicas-y-presupuestos-con-perspectiva-de-derechos-humanos-OACNUDH-et-al.pdf" title="Políticas públicas y presupuestos con perspectiva de derechos humanos OACNUDH">
					Pol&iacute;ticas p&uacute;blicas y presupuestos con perspectiva de derechos humanos OACNUDH
				</a>
			</li>
			
			<li class="xls">
				<a href="<?php print get('webURL'); ?>/documents/documents/Revision-bibliografica.xlsx" title="Revisión bibliográfica">
					Revisi&oacute;n bibliogr&aacute;fica
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Prevencion_de_incendios_en_escuelas_Cainfo.pdf" title="Prevención de incendios en escuelas Cainfo">
					Prevenci&oacute;n de incendios en escuelas Cainfo
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.idasa.org/our_products/resources/output/monitoring_government_budgets_2/" title="Idasa, Monitoring government budgets to advance child rights">
					Idasa, Monitoring government budgets to advance child rights
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/budget_guide_en.pdf" title="FAO, Budget work to advance the right to food 'Many a slip…'">
					FAO, Budget work to advance the right to food 'Many a slip…'
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Budget_and_rights.pdf" title="INESC, Budget and rights: developing a budget analysis method from the perspective of human rights">
					INESC, Budget and rights: developing a budget analysis method from ...
				</a>
			</li>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon info-icon-min info-icon-min-en"></div>
			<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
		</div>
	</div>
</div>
