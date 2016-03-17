<?php if(is_tax('local_authority')) {
$localAuthority = single_term_title("", false);
echo '<div class="row">
		<div class="col s12">
			<div class="card-panel grey darken-2 z-depth-0">
				<span class="white-text">This is a list of reported locations in ' . $localAuthority . ' due to a problem that impedes access to the physical environment for people living with dementia.
				</span>
			</div>
		</div>
	</div>';
} elseif(is_tax('problem_type')) {
$problemType = single_term_title("", false);
echo '<div class="row">
		<div class="col s12">
			<div class="card-panel grey darken-2 z-depth-0">
				<span class="white-text">This is a list of reported locations due to ' . $problemType . ' that impedes access to the physical environment for people living with dementia.
				</span>
			</div>
		</div>
	</div>';
} else {
	echo '
	<div class="row">
			<div class="col s12">
				<div class="card-panel grey darken-2 z-depth-0">
					<span class="white-text">This is a list of locations reported due to a problem that impedes access to the physical environment for people living with dementia. We hope that, by collecting this data, awareness can be raised as to the importance of dementia-friendly communities and local authorities will have ready access to a list of locations in their area that need improving.
					</span>
				</div>
			</div>
		</div>';
} ?>
