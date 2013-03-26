<style>
.row-fluid {
	width: 100%;
}
section#wizard1 {
	background-color: #DDDDDD;
	border-radius: 10px;
	padding: 10px;
	min-width: 400px;
}
</style>
<div class="row-fluid">
	<section id="wizard1" class="span8 offset2">
		<form class="form-horizontal" method="POST">
			<div class="control-group">
				<label class="control-label" for="inputTitle">Title</label>
				<div class="controls">
					<input type="text" id="inputTitle" name="title" placeholder="Title" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputDescription">Description</label>
				<div class="controls">
					<textarea id="inputDescription" name="desc" placeholder="Description"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input type="submit" id="wizard1_submit_button" name="submit" class="btn btn-primary" value="Next"/>
					<button type="button" class="btn">Cancel</button>
				</div>
			</div>
		</form>
		
	</section>
</div>
<script>
$(document).ready(function(){
	/*
	$('#wizard1_submit_button').click(function(){
		var next_url = '/collection/wizard1form';
		// grab form vars
		var data = {
			title: $('#inputTitle').val(),
			desc: $('#inputDescription').val()
		};
		// now send the form query
		$.ajax({
			type: 'POST',
			url: next_url,
			data: data,
			dataType: 'json',
			//error: failure,
			success: function(response){
				console.log(response);
				console.log(response.errors.length);
				if(response.errors.length == 0){
					window.location = '/collection/wizard2';
				} else {
					if(response.errors.no_title){
						alert("no title");
					}
					if(response.errors.no_desc){
						alert("no description");
					}
				}
			}
		});
	});
	*/
});
</script>