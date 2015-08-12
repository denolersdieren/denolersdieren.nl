;!function(window, document, $, undefined){

$(document).ready(function(){

	var summaryTable = function(){
		var table = $("<table />").addClass("gfield_description"),
			rowsSel = $("#field_1_9 .gfield_list_row_odd, #field_1_9 .gfield_list_row_even"),
			rows = "",
			bbqOptions = {	"Ja"								: 18.50,
					   	"Nee"									: 0
					},
			products = {"Tennistoernooi (5 euro)"						:5,
						"Activiteitenmiddag (5 euro)"					:5, 
						"Kinderprogramma (5 euro)"						:5, 
						"Kinderprogramma voor kinderen t/m 6 (gratis)" 	: 0
						},
			persons = 0,
			total = 0;
      
		rowsSel.each(function(){
			var $this = $(this),
				name = $.trim($this.find(".gfield_list_9_cell1 input").val()),
				bbq = $.trim($this.find(".gfield_list_9_cell2 select").val()),
				product = $.trim($this.find(".gfield_list_9_cell3 select").val());

			if(name){
				rows += "<tr><td>"+ name +"</td><td>Barbecue: "+ bbq +"</td><td>Activiteit: "+ product +"</td></tr>";
				persons += 1;
				if(product === "Kinderprogramma (5 euro)" || product === "Kinderprogramma voor kinderen t/m 6 (gratis)" ){
					total += products[product];	
				} else {
					total += products[product] + bbqOptions[bbq];	
				}
			}

		});
		// Summary
		if(rows.length > 0){
			rows += "<tr class=\"total\"><td>Aantal personen: "+ persons.toString() +"</td><td>&nbsp;</td><td>Totaal: "+ total.toFixed(2) +"</td></tr>"
		}

		return table.html(rows);

	};

	var container = $("<div class=\"summary-table\"></div>");

	
	// Form for 2013 :x
	$("#field_1_9 .gfield_description").after(container);


	$("#gform_1").on("keyup focusout", "#input_1_1", function(){
		$("#gform_1").find(".gfield_list_9_cell1 input").first().val(this.value);
		container.html(summaryTable());
	});
	
	$("#field_1_9").on("keyup focusout", function(){
		container.html(summaryTable());
	});

	$(".gfield_list_9_cell2").css("width", 65);
	$(".gfield_list_9_cell3").css("width", 250);


	// Form for 2014
	// 
	// 
	var summaryTable2014 = function(){
		var table = $("<table />").addClass("gfield_description"),
			rowsSel = $("#field_2_11 .gfield_list_row_odd, #field_2_11 .gfield_list_row_even"),
			rows = "",
			persons = 0,
			total = 0;
    
		rowsSel.each(function(){
			var $this = $(this),
				name = $.trim($this.find(".gfield_list_11_cell1 input").val()),
				bbq = $.trim($this.find(".gfield_list_11_cell2 select").val()),
				tennis = $.trim($this.find(".gfield_list_11_cell3 select").val());

			// Alleen deelname tennistoernooi excl. Barbecue
			// €5, -
			// Overdag geen tijd, maar wel zin in een lekkere Barbecue
			// €15, -


			if(bbq === "Ja" && tennis === "Ja"){
				total += 17.50;
			} else if (bbq === "Ja" && tennis === "Nee"){
				total += 15;
			} else if (bbq === "Nee" && tennis === "Ja"){
				total += 5;
			}

			if(name){
				rows += "<tr><td>"+ name +"</td><td>Barbecue: "+ bbq +"</td><td>Tennis: "+ tennis +"</td></tr>";
				persons += 1;
			}

		});
		// Summary
		if(rows.length > 0){
			rows += "<tr class=\"total\"><td>Aantal personen: "+ persons.toString() +"</td><td>&nbsp;</td><td>Totaal: "+ total.toFixed(2) +"</td></tr>";
		}

		return table.html(rows);

	};

	$("#gform_2").each(function(){

		var $this = $(this);
		$this.find("#field_2_4 .gsection_description").after(container);

		$this.find("#input_2_10_3, #input_2_10_6").on("keyup focusout", function(){
			var name = $("#input_2_10_3").val() + " " + $("#input_2_10_6").val();
			$this.find(".gfield_list_11_cell1 input").first().val(name);
			container.html(summaryTable2014());
		});

		$("#field_2_11").on("keyup focusout change", function(){
			container.html(summaryTable2014());
		});

	});

});

}(window, document, jQuery)