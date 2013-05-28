<div class="welcome">
	<h2>
		Welcome <?php echo $user["name"];?> to Study Tour on Human Rights Mexico
	</h2>
</div>

<div id="buttons">
	
	<div class="icon info-icon info-icon"></div>
	<div class="icon trabajar-icon trabajar-icon"></div>
	<div class="icon documentos-icon documentos-icon"></div>
	
	
	<div class="section info">
		<ul>			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/flights/itinerary-<?php echo $user_id;?>.pdf" title="Itinerary">Itinerary</a>
			</li>
			
			<?php if(isset($user["flight2"])) { ?>
				<li>
					<a href="<?php print get('webURL'); ?>/documents/flights/itinerary-<?php echo $user_id;?>2.pdf" title="Itinerary 2">Itinerary 2</a>
				</li>
			<?php } ?>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/info/Important-pre-tour-information.pdf" title="Important pre-tour information">
					Important pre-tour information
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/info/Study-tour-accommodations.pdf" title="Study tour accommodations">
					Study tour accommodations
				</a>
			</li>
			
			
			<li>
				<?php if(isset($user["type"])) { ?>
					<a href="<?php print get('webURL'); ?>/documents/action-plan/action-plan-<?php echo $user_id;?>.<?php echo $user["type"]; ?>" title="Action Plan">
						Action Plan
					</a>
				<?php } else { ?>
					<a href="<?php print get('webURL'); ?>/documents/action-plan/action-plan-<?php echo $user_id;?>.docx" title="Action Plan">
						Action Plan
					</a>
				<?php } ?>
			</li>
			
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
			<div class="min-icon documentos-icon-min documentos-icon-min-en"></div>
		</div>
	</div>
	
	<div class="section trabajar">
		<ul>			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/Note-taking.pdf" title="Note taking">
					Note taking
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/Location-of-ST-activities.pdf" title="Location of ST activities">
					Location of ST activities
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/Organisations-background-information.pdf" title="Organisations background information">
					Organisations background information
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/Study-Tour-Programme.pdf" title="Study Tour Programme">
					Study Tour Programme
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/Who-is-in-the-Tour.pdf" title="Who is in the Tour">
					Who is in the Tour
				</a>
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
				<a href="<?php print get('webURL'); ?>/documents/documents/Report-on-the-Human-Rights-Situation-in-Mexico.pdf" title="Report on the Human Rights Situation in Mexico">
					Report on the Human Rights Situation in Mexico
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Mexico's-Human-Rights-Crisis.pdf" title="Mexico's Human Rights Crisis">
					Mexico's Human Rights Crisis
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Report-of-the-Special-Repporteur-on-the-Independence-of-Judges-and-Lawyers_Mission-to-Mexico_2010.pdf" title="Report of the Special Repporteur on the Independence of Judges and Lawyers_Mission to Mexico_2010">
					Report of the Special Rapporteur - Mexico
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Mexico's-profile.pdf" title="Mexico's profile">
					Mexico's profile
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Human-Rights-Situation-Mexico.pdf" title="Human Rights Situation Mexico">
					Human Rights Situation Mexico
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/National-Report-on-Human-Rights-submitted-to-the-UN.pdf" title="National Report on Human Rights submitted to the UN">
					National Report on Human Rights submitted to the UN
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Cultural-Information-on-Mexico.pdf" title="Cultural Information on Mexico">
					Cultural Information on Mexico
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/cuestionario-pabellon-13.pdf" title="Cuestionario Pabellón 13">
					Cuestionario Pabellón 13
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/mexico's-purrent-political-context.pptx" title="Mexico's Current Political Context 27052013">
					Mexico's Current Political Context
				</a>
			</li>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon info-icon-min info-icon-min-en"></div>
			<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
		</div>
	</div>
</div>
