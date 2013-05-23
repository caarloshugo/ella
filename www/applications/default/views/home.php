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
			
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
			<div class="min-icon documentos-icon-min documentos-icon-min-en"></div>
		</div>
	</div>
	
	<div class="section trabajar">
		<ul>
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Report-on-the-Human-Rights-Situation-in-Mexico.pdf" title="Report on the Human Rights Situation in Mexico">
					Report on the Human Rights Situation in Mexico
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
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon info-icon-min info-icon-min-en"></div>
			<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
		</div>
	</div>
</div>
