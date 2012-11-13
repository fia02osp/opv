
$(document).ready(function(){
	$('.search-query').each(function() {
	   // Save current value of element
	   $(this).data('oldVal', $(this).val());

	   // Look for changes in the value
	   $(this).bind("propertychange keyup input paste", function(event){
	      // If value has changed...
	      if ($(this).data('oldVal') != $(this).val()) {
		       // Updated stored value
		       $(this).data('oldVal', $(this).val());
		       searchHandler($(this).val());
			}
	   });
 	});
});
var global = {};
var searchHandler = function (strSearch) {
	data = {'searchTerm' : strSearch};
	$.ajax({
		 type: "GET",
		 data : data,
		 url: "Projects/getSearchResults",
		 dataType: "json",
		 success: function(data){
		 		renderSearchResults(data);
		 		}
	});
}

var renderSearchResults = function (objResults) {
	global = objResults;
	console.log(objResults);
}