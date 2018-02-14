<p>Please select the activity type sent to the LRS (Learning Record Store). </p>



<p><label for=""><strong>VERB</strong></label></p>
<p class="input">
	<label for="xapi_select_1">
		<input type="radio" class="xapi_radio" name="xapi_radio" id="xapi_select_1" checked>&nbsp;&nbsp;
		<select name="xapi_verb" id="xapi_verb" class="verb-control">
			<?php foreach($verblist as $vl):?>
			<option value="<?php echo $vl;?>" <?php echo $vl == $current_verb ? 'selected' : '';?>><?php echo ucfirst($vl); ?></option>
			<?php endforeach;?>
		</select>
	</label>
</p>

<p class="input">
	<label for="xapi_select_2">
		<input type="radio" class="xapi_radio" name="xapi_radio" id="xapi_select_2">&nbsp;&nbsp;
		<input type="text" name="xapi_verb" id="xapi_verb" class="verb-control" placeholder="Custom verb..." disabled>
	</label>
</p>

<p style="font-size: 0.9em; font-style: italic; color: #888;">You can select from the dropdown box<br /> or create your own custom verb.</p>

<p><label for="xapi_list"><strong>Verb URL/IRI</strong></label></p>

<p class="input-url">
	<input type="text" 
				name="xapi_url" 
				class="awesomplete" 
				id="xapi_list" 
				list="mylist" 
				placeholder="http://activitystrea.ms/schema/1.0/read" 
				value="<?php echo strlen($current_url) ? $current_url : ''; ?>">

	<datalist id="mylist">
		<option>https://w3id.org/xapi/adl/verbs/abandoned</option>
		<option>http://activitystrea.ms/schema/1.0/accept</option>
		<option>https://w3id.org/xapi/seriousgames/verbs/accessed</option>
		<option>http://activitystrea.ms/schema/1.0/access</option>
		<option>http://activitystrea.ms/schema/1.0/acknowledge</option>
		<option>http://activitystrea.ms/schema/1.0/add</option>
		<option>http://activitystrea.ms/schema/1.0/agree</option>
		<option>https://w3id.org/xapi/adb/verbs/annotated</option>
		<option>https://w3id.org/xapi/acrossx/verbs/annotated</option>
		<option>http://risc-inc.com/annotator/verbs/annotated</option>
		<option>http://adlnet.gov/expapi/verbs/answered</option>
		<option>http://activitystrea.ms/schema/1.0/append</option>
		<option>http://activitystrea.ms/schema/1.0/approve</option>
		<option>http://activitystrea.ms/schema/1.0/archive</option>
		<option>https://w3id.org/xapi/adb/verbs/arrived</option>
		<option>http://adlnet.gov/expapi/verbs/asked</option>
		<option>http://activitystrea.ms/schema/1.0/assign</option>
		<option>http://activitystrea.ms/schema/1.0/attach</option>
		<option>http://adlnet.gov/expapi/verbs/attempted</option>
		<option>http://adlnet.gov/expapi/verbs/attended</option>
		<option>https://w3id.org/xapi/adb/verbs/attended</option>
		<option>http://activitystrea.ms/schema/1.0/attend</option>
		<option>http://activitystrea.ms/schema/1.0/author</option>
		<option>http://activitystrea.ms/schema/1.0/authorize</option>
		<option>https://w3id.org/xapi/adb/verbs/bookmarked</option>
		<option>http://activitystrea.ms/schema/1.0/borrow</option>
		<option>http://activitystrea.ms/schema/1.0/build</option>
		<option>http://activitystrea.ms/schema/1.0/cancel</option>
		<option>http://activitystrea.ms/schema/1.0/checkin</option>
		<option>http://activitystrea.ms/schema/1.0/close</option>
		<option>https://w3id.org/xapi/adb/verbs/coached</option>
		<option>http://adlnet.gov/expapi/verbs/commented</option>
		<option>http://adlnet.gov/expapi/verbs/completed</option>
		<option>http://activitystrea.ms/schema/1.0/complete</option>
		<option>http://activitystrea.ms/schema/1.0/confirm</option>
		<option>http://activitystrea.ms/schema/1.0/consume</option>
		<option>http://activitystrea.ms/schema/1.0/create</option>
		<option>http://activitystrea.ms/schema/1.0/delete</option>
		<option>http://activitystrea.ms/schema/1.0/deliver</option>
		<option>https://w3id.org/xapi/adb/verbs/demanded</option>
		<option>http://activitystrea.ms/schema/1.0/deny</option>
		<option>https://w3id.org/xapi/adb/verbs/described</option>
		<option>https://w3id.org/xapi/acrossx/verbs/designed</option>
		<option>http://activitystrea.ms/schema/1.0/disagree</option>
		<option>https://w3id.org/xapi/acrossx/verbs/disliked</option>
		<option>http://activitystrea.ms/schema/1.0/dislike</option>
		<option>https://w3id.org/xapi/acrossx/verbs/edited</option>
		<option>https://w3id.org/xapi/acrossx/verbs/evaluated</option>
		<option>http://adlnet.gov/expapi/verbs/exited</option>
		<option>http://adlnet.gov/expapi/verbs/experienced</option>
		<option>http://activitystrea.ms/schema/1.0/experience</option>
		<option>http://adlnet.gov/expapi/verbs/failed</option>
		<option>http://activitystrea.ms/schema/1.0/favorite</option>
		<option>http://activitystrea.ms/schema/1.0/flag-as-inappropriate</option>
		<option>http://activitystrea.ms/schema/1.0/follow</option>
		<option>http://activitystrea.ms/schema/1.0/find</option>
		<option>http://activitystrea.ms/schema/1.0/give</option>
		<option>https://w3id.org/xapi/adb/verbs/highlighted</option>
		<option>http://activitystrea.ms/schema/1.0/host</option>
		<option>https://w3id.org/xapi/medbiq/verbs/ignored</option>
		<option>http://activitystrea.ms/schema/1.0/ignore</option>
		<option>http://adlnet.gov/expapi/verbs/imported</option>
		<option>http://adlnet.gov/expapi/verbs/initialized</option>
		<option>https://w3id.org/xapi/adb/verbs/initiated</option>
		<option>http://activitystrea.ms/schema/1.0/insert</option>
		<option>http://activitystrea.ms/schema/1.0/install</option>
		<option>http://adlnet.gov/expapi/verbs/interacted</option>
		<option>http://activitystrea.ms/schema/1.0/interact</option>
		<option>http://adlnet.gov/expapi/verbs/cmi.interacted</option>
		<option>http://activitystrea.ms/schema/1.0/invite</option>
		<option>http://activitystrea.ms/schema/1.0/join</option>
		<option>http://adlnet.gov/expapi/verbs/launched</option>
		<option>http://activitystrea.ms/schema/1.0/leave</option>
		<option>https://w3id.org/xapi/acrossx/verbs/liked</option>
		<option>http://activitystrea.ms/schema/1.0/like</option>
		<option>http://activitystrea.ms/schema/1.0/listen</option>
		<option>https://w3id.org/xapi/adl/verbs/logged-in</option>
		<option>https://w3id.org/xapi/adl/verbs/logged-out</option>
		<option>http://activitystrea.ms/schema/1.0/lose</option>
		<option>http://activitystrea.ms/schema/1.0/make-friend</option>
		<option>http://adlnet.gov/expapi/verbs/mastered</option>
		<option>http://risc-inc.com/annotator/verbs/modified</option>
		<option>https://w3id.org/xapi/adb/verbs/noted</option>
		<option>http://activitystrea.ms/schema/1.0/open</option>
		<option>http://adlnet.gov/expapi/verbs/passed</option>
		<option>https://w3id.org/xapi/video/verbs/paused</option>
		<option>https://w3id.org/xapi/video/verbs/played</option>
		<option>http://activitystrea.ms/schema/1.0/play</option>
		<option>https://w3id.org/xapi/acrossx/verbs/posted</option>
		<option>http://adlnet.gov/expapi/verbs/preferred</option>
		<option>http://activitystrea.ms/schema/1.0/present</option>
		<option>https://w3id.org/xapi/seriousgames/verbs/pressed</option>
		<option>http://adlnet.gov/expapi/verbs/progressed</option>
		<option>http://activitystrea.ms/schema/1.0/purchase</option>
		<option>http://activitystrea.ms/schema/1.0/qualify</option>
		<option>http://activitystrea.ms/schema/1.0/read</option>
		<option>https://w3id.org/xapi/adb/verbs/read</option>
		<option>http://activitystrea.ms/schema/1.0/receive</option>
		<option>https://w3id.org/xapi/adb/verbs/referenced</option>
		<option>http://adlnet.gov/expapi/verbs/registered</option>
		<option>http://activitystrea.ms/schema/1.0/reject</option>
		<option>https://w3id.org/xapi/seriousgames/verbs/released</option>
		<option>http://activitystrea.ms/schema/1.0/remove</option>
		<option>http://activitystrea.ms/schema/1.0/remove-friend</option>
		<option>http://activitystrea.ms/schema/1.0/replace</option>
		<option>https://w3id.org/xapi/acrossx/verbs/reported</option>
		<option>http://activitystrea.ms/schema/1.0/request</option>
		<option>https://w3id.org/xapi/adb/verbs/requested</option>
		<option>http://activitystrea.ms/schema/1.0/request-friend</option>
		<option>http://activitystrea.ms/schema/1.0/resolve</option>
		<option>http://adlnet.gov/expapi/verbs/responded</option>
		<option>http://adlnet.gov/expapi/verbs/resumed</option>
		<option>http://activitystrea.ms/schema/1.0/retract</option>
		<option>http://activitystrea.ms/schema/1.0/return</option>
		<option>https://w3id.org/xapi/acrossx/verbs/revealed</option>
		<option>http://activitystrea.ms/schema/1.0/rsvp-maybe</option>
		<option>http://activitystrea.ms/schema/1.0/rsvp-no</option>
		<option>http://activitystrea.ms/schema/1.0/rsvp-yes</option>
		<option>https://w3id.org/xapi/adl/verbs/satisfied</option>
		<option>http://activitystrea.ms/schema/1.0/satisfy</option>
		<option>http://activitystrea.ms/schema/1.0/save</option>
		<option>http://activitystrea.ms/schema/1.0/schedule</option>
		<option>http://adlnet.gov/expapi/verbs/scored</option>
		<option>http://activitystrea.ms/schema/1.0/search</option>
		<option>https://w3id.org/xapi/acrossx/verbs/searched</option>
		<option>https://w3id.org/xapi/video/verbs/seeked</option>
		<option>https://w3id.org/xapi/adb/verbs/selected</option>
		<option>http://activitystrea.ms/schema/1.0/send</option>
		<option>http://adlnet.gov/expapi/verbs/shared</option>
		<option>http://activitystrea.ms/schema/1.0/share</option>
		<option>http://activitystrea.ms/schema/1.0/sell</option>
		<option>http://activitystrea.ms/schema/1.0/sponsor</option>
		<option>http://activitystrea.ms/schema/1.0/start</option>
		<option>http://activitystrea.ms/schema/1.0/stop-following</option>
		<option>http://activitystrea.ms/schema/1.0/submit</option>
		<option>http://adlnet.gov/expapi/verbs/suspended</option>
		<option>http://activitystrea.ms/schema/1.0/tag</option>
		<option>http://adlnet.gov/expapi/verbs/terminated</option>
		<option>http://activitystrea.ms/schema/1.0/terminate</option>
		<option>http://activitystrea.ms/schema/1.0/tie</option>
		<option>http://activitystrea.ms/schema/1.0/unfavorite</option>
		<option>http://activitystrea.ms/schema/1.0/unlike</option>
		<option>https://w3id.org/xapi/seriousgames/verbs/unlocked</option>
		<option>http://activitystrea.ms/schema/1.0/unsatisfy</option>
		<option>http://activitystrea.ms/schema/1.0/unsave</option>
		<option>http://activitystrea.ms/schema/1.0/unshare</option>
		<option>https://w3id.org/xapi/medbiq/verbs/updated</option>
		<option>http://activitystrea.ms/schema/1.0/update</option>
		<option>https://w3id.org/xapi/seriousgames/verbs/used</option>
		<option>http://activitystrea.ms/schema/1.0/use</option>
		<option>http://adlnet.gov/expapi/verbs/voided</option>
		<option>https://w3id.org/xapi/adl/verbs/waived</option>
		<option>http://activitystrea.ms/schema/1.0/at</option>
		<option>https://w3id.org/xapi/acrossx/verbs/was-assigned</option>
		<option>http://activitystrea.ms/schema/1.0/watch</option>
		<option>https://w3id.org/xapi/adb/verbs/watched</option>
		<option>https://w3id.org/xapi/acrossx/verbs/watched</option>
		<option>http://activitystrea.ms/schema/1.0/win</option>
	</datalist>
</p>
<script>
	jQuery(document).ready(function($){
		$('input.xapi_radio').on('click', function(e){

			var verb =  $(e.target).next('.verb-control');

									$(verb).prop('disabled', false);

			var value = $(verb)
										.closest('p.input')
										.siblings('p.input')
										.find('.verb-control')
										.prop('disabled', true);
		});

	});
</script>