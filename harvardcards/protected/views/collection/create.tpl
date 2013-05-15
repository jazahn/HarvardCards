<style>
.row-fluid {
	width: 100%;
}
section.well-dark {
	background-color: #DDDDDD;
	border-radius: 10px;
	padding: 10px;
	min-width: 400px;
	margin: 10px;
}
.editable {
	font-size: 35px;
}
</style>
<div class="row-fluid">
	<section class="well-dark span8 offset2">
		<form class="form-horizontal row-fluid" method="POST">
			<div class="span6" style="height: 100%">
				<div type="text" id="inputTitle" name="title" style="font-size: 35px">Title</div>
			</div>
			<div class="span6" style="height: 100%">
				<div id="inputDescription" name="desc">Description</div>
			</div>

		</form>		
	</section>
</div>
<div class="row-fluid">
	<section id="wizarddd" class="well-dark span8 offset2">
		<div class="row-fluid">
			<div class="template-btn well span4">
				Template 1
			</div>
			<div class="template-btn well span4">
				Template 2
			</div>
			<div class="template-btn well span4">
				Template 3
			</div>
		</div>
	</section>
</div>
<script>
$(document).ready(function(){
	
	$('#inputTitle').editable(function(value, settings){
		return value;
	}, { 
		tooltip   : 'Click to edit...',
		cssclass: 'editable',
		style: 'inherit',
		onblur: 'submit'
	});
	$('#inputDescription').editable(function(value, settings){
		return value.replace(/\n/gi, "<br/>");
	}, {
		type      : 'textarea',
		rows: 10,
		//cancel    : 'Cancel',
		//submit    : 'OK',
		tooltip   : 'Click to edit...',
		onblur: 'submit'
	});
	
	$('.template-btn').click(function(){
		var template_url = '/collection/wizarddd';
		$('#wizarddd').load(template_url);
	});
	
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