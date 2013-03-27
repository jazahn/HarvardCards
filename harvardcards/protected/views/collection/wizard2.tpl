<style>
section {
	border: solid #CCCCCC 1px;
	border-radius: 5px;
}
section.field-form ul {
	padding: 15px;
}
.field-form li {
	border: solid #CCCCCC 1px;
	border-radius: 5px;
	margin: 10px;
}
.field-form input, .field-form select {
	margin: 5px;
}
.field-form form {
	margin-bottom: 0px;
}
.field-form li:hover {
	background-color: #AAEEEE;
}
.field-form li.active {
	background-color: #22EEEE;
}
.form-reveal {
	background-color: #AAAAAA;
}
</style>
<div class="row-fluid">
	<section class="span6 field-form">
		<form>
			<ul class="unstyled form-display nav" style="">
				<li>
					<input type="checkbox" name="showtitle1" class="show-title" />
					<input type="text" class="" name="fieldname1" />
					<select name="type1" class="input-small">
						<option value="text">Text</option>
						<option value="image">Image</option>
						<option value="audio">Audio</option>
						<option value="video">Video</option>
					</select>
				</li>
				<li>
					<input type="checkbox" name="showtitle2" class="show-title" />
					<input type="text" class="" name="fieldname2" />
					<select name="type2" class="input-small">
						<option value="text">Text</option>
						<option value="image">Image</option>
						<option value="audio">Audio</option>
						<option value="video">Video</option>
					</select>
				</li>
				<li>
					<input type="checkbox" name="showtitle3" class="show-title" />
					<input type="text" class="" name="fieldname3" />
					<select name="type3" class="input-small">
						<option value="text">Text</option>
						<option value="image">Image</option>
						<option value="audio">Audio</option>
						<option value="video">Video</option>
					</select>
				</li>
			</ul>
			<ul class="unstyled form-reveal nav" style="">
				<li>
					<input type="checkbox" name="showtitle4" class="show-title" />
					<input type="text" class="" name="fieldname4" />
					<select name="type4" class="input-small">
						<option value="text">Text</option>
						<option value="image">Image</option>
						<option value="audio">Audio</option>
						<option value="video">Video</option>
					</select>
				</li>
				<li>
					<input type="checkbox" name="showtitle5" class="show-title" />
					<input type="text" class="" name="fieldname5" />
					<select name="type5" class="input-small">
						<option value="text">Text</option>
						<option value="image">Image</option>
						<option value="audio">Audio</option>
						<option value="video">Video</option>
					</select>
				</li>
			</ul>
		</form>	
		<button id="add_collection_field_button" class="btn">+</button>
		<button id="del_collection_field_button" class="btn">-</button>
	</section>
	<section class="span6 preview">
	</section>
</div>
<script>
$(document).ready(function(){
	$('.field-form li').click(function(e){
		$('.field-form li').removeClass('active');
		$(e.currentTarget).addClass('active');
	});
	var count = 6;
	$('#add_collection_field_button').click(function(){
		var li = '<li>' + 
					'<input type="checkbox" name="showtitle'+count+'" class="show-title" />' +
					'<input type="text" class="" name="fieldname'+count+'" />' + 
					'<select name="type'+count+'" class="input-small">' +
						'<option value="text">Text</option>' +
						'<option value="image">Image</option>' +
						'<option value="audio">Audio</option>' +
						'<option value="video">Video</option>' +
					'</select>' +
				'</li>';

		$('.form-display').append(li);
		count++;
	});
	$('#del_collection_field_button').click(function(){
		$('.field-form li.active').remove();
		count++;
	});
});
</script>