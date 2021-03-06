<style>
.options {
	padding: 8px;
}
.options li {
	margin: 4px;
}
.mysortable {
	border: dotted black 1px;
}
</style>

<div class="well">
	<ul class="inline options">
		<li id="draggableText" class="draggable ui-state-highlight textDrag">Text</li>
		<li id="draggableSound" class="draggable ui-state-highlight textDrag">Sound</li>
		<li id="draggableImage" class="draggable ui-state-highlight imgDrag">Image</li>
		<li id="draggableVideo" class="draggable ui-state-highlight textDrag">Video</li>
	</ul>
	<ul id="sortable" class="unstyled">
		<li class="mysortable">
			<span class="mylabel">+label</span>
			<input type="text"/>
			<i class="icon-align-justify"></i>
			<i class="icon-remove-sign"></i>
		</li>
		<li class="mysortable">
			<div class="mylabel">+label</div>
			<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRd-pVDClrxvD-0hOaXVw2gDkHLy2Vi7rGulqTtNyg29_4shOoF"/>
			<i class="icon-align-justify"></i>
			<i class="icon-remove-sign"></i>
		</li>
		<li class="mysortable">
			<span class="mylabel"></span>
			<input type="text"/>
			<i class="icon-align-justify"></i>
			<i class="icon-remove-sign"></i>
		</li>
	</ul>
	
</div>

<script>
{literal}
var textItem = '<span class="mylabel">+label</span> '
			+ '<input type="text"/> '
			+ '<i class="icon-align-justify"></i> '
			+ '<i class="icon-remove-sign"></i> ';
var imgItem = '<div class="mylabel">+label</div> '
			+'<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRd-pVDClrxvD-0hOaXVw2gDkHLy2Vi7rGulqTtNyg29_4shOoF"/> '
			+'<i class="icon-align-justify"></i> '
			+'<i class="icon-remove-sign"></i> ';

setEditables = function(){
	$('.mylabel').editable(function(value, settings){
		return value;
	}, { 
		tooltip   : 'Click to edit...',
		placeholder: '+label',
		cssclass: 'editable',
		style: 'inherit',
		onblur: 'submit'
	});
}

$(document).ready(function(){
	$('#sortable').sortable({
		revert: true,
		update: function(event, ui){
			console.log("update");
			console.log(ui.item);
			if($(ui.item).hasClass('mysortable')){
				
			} else {
				$(ui.item).removeClass('ui-state-highlight');
				$(ui.item).addClass('mysortable');
				
				if($(ui.item).hasClass('textDrag')){
					$(ui.item).html(textItem);					
				}
				if($(ui.item).hasClass('imgDrag')){
					$(ui.item).html(imgItem);					
				}
				setEditables();
			}
		}
	});
	$('.draggable').draggable({
        connectToSortable: "#sortable",
        helper: "clone",
        revert: "invalid"
	});
	

	setEditables();
	
});
{/literal}

</script>