<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
// You can override via functions.php conditionals or define:
// $columns = 'four';

get_header();
st_before_content($columns='');

$backgroundImage = get_bloginfo('template_directory').'/images/resource-center-background.jpg'; ?>
<style>
body {	
	background: url('<?php echo $backgroundImage; ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage; ?>', sizingMethod='scale');
-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage; ?>', sizingMethod='scale')";
}

h1.page-title {
	margin-top:20px;
}

.page-id-270 .entry-content {
	padding:0;
	padding-top:20px;
}

#post-270 {
	padding:0;
}

form {
overflow:hidden;
}
</style>

<div class="container">
<div class="fourteen columns offset-by-one">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="breadcrumbs">
						<?php if ( !get_post_custom_values('custom_title_above') ) {
							if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
						}?>
                    </div> 
						<?php if ( get_post_custom_values('custom_title_above') ) : ?>
							<h1 class="page-title">Ingredients</h1>
                          <h2 class="page-title">For Success</h2>
						<?php else: ?>
                        <h1 class="page-title"><?php the_title() ?></h1>
                        <?php endif;?>
						

					<div class="entry-content">
						<?php the_content(); ?>
                        



     <form id="profitability-calculator" action="" onkeypress="return event.keyCode != 13;" method="post" novalidate>
           
                    <div id="profitcalc-top" class="eight columns offset-by-three profitcalc">
        

		<label for="product_name">
                Product Name
               </label>
		<input type="text" name="product_name" id="field1" required="required">


               <label for="unit_size">
                    Unit Size (lbs)
               </label>
               <input type="number" name="unit_size" id="unit_size" required="required" onchange="calcSpreadsheet()">

               <label for="field3">
                    Case Pack (per case)
               </label>
               <input type="number" name="case_pack" id="field3" required="required" onchange="calcSpreadsheet()">
               
               <label for="concentration">
                    Concentration
               </label>
               <select name="concentration" onchange="calcSpreadsheet()">
  					<option value="1" selected="">Not applicable.</option> 
 					<option value="2">1:1</option>
  					<option value="1.333333333333333333333333333333">3:1</option>
</select>
               
               <label for="ounces">
                    Ounces
               </label>
               <input type="number" name="ounces" id="ounces" required="required" readonly>

            <hr>


               <label for="field4">
                    Case Price
               </label>
               <input type="number" name="case_price" id="field4" required="required" min="0.00" step="0.01" onchange="calcSpreadsheet()">

               <label for="field5">
                    Freight Cost
               </label>
               <input type="number" name="freight_cost" id="field5" min="0.00" step="0.01" required="required">

               <label for="field6">
                    Distributor Markup (%)
               </label>
               <input type="number" name="markup_percentage" id="field6" min="0.01" step="0.01" required="required" onchange="calcSpreadsheet()">

               <label for="field7">
                    Distributor Markup
               </label>
               <input type="number" name="markup" id="field7" required="required" min="0.01" step="0.01" onchange="calcSpreadsheet()">

               <label for="field8">
                    Total Case Price
               </label>
               <input type="number" name="total_case_price" min="0.00" step="0.01" required="required" readonly>
               
               <label for="field9">
                    Price Per Ounce
               </label>
               <input type="number" name="price_per_ounce" min="0.00" step="0.01" required="required" readonly>

            <hr>

               <label for="field9">
                    Serving Size (in ounces)
               </label>
               <input type="number" name="serving_size" required="required" onchange="calcSpreadsheet()">
               
               <label for="field9">
                    Suggested Retail Price
               </label>
               <input type="number" name="suggested_retail_price" min="0.00" step="0.01" required="required" onchange="calcSpreadsheet()">

               <label for="field9">
                    Price Per Serving
               </label>
               <input type="number" name="price_per_serving" min="0.00" step="0.01" required="required" readonly onchange="calcSpreadsheet()">
               
               <label for="field9">
                    Food Cost (%)
               </label>
               <input type="number" name="food_cost_percentage" required="required" readonly>
               
               <label for="field9">
                    Profit Per Serving
               </label>
               <input type="number" name="profit_per_serving" min="0.00" step="0.01" required="required" readonly>


            <hr>
            	
               <label for="field9">
                    Average Sales Per Day
               </label>
               <input type="number" name="avg_sales_per_day" min="0.00" step="0.01" required="required" onchange="calcSpreadsheet()">
               
               <label for="field9">
                    Number of Locations
               </label>
               <input type="number" name="locations" required="required" onchange="calcSpreadsheet()">

               <label for="field9">
                    Profit Per Day
               </label>
               <input type="number" name="profit_per_day" min="0.00" step="0.01" required="required" readonly>
               
               <label for="field9">
                    Profit Per Year
               </label>
               <input type="number" name="profit_per_year" min="0.00" step="0.01" required="required" readonly>
		
		<input type="submit" value="Clear Profitability Calculator" onclick="clearCalc()">
		</div>
     </form>
   	<script>
		
	 function calcSpreadsheet() {
			
			var formObject = document.forms['profitability-calculator'];
			
			var unit_size = formObject.elements['unit_size'].value;
			var concentration = formObject.elements['concentration'].value;
			var case_pack = formObject.elements['case_pack'].value;
			var ounces = formObject.elements['ounces'].value;
			var markup_percentage = formObject.elements['markup_percentage'].value;
			var markup = formObject.elements['markup'].value * 100;
			var case_price = formObject.elements['case_price'].value * 100;
			var total_case_price = formObject.elements['total_case_price'].value * 100;
			var price_per_ounce = formObject.elements['price_per_ounce'].value * 100;
			var serving_size = formObject.elements['serving_size'].value;
			var price_per_serving = formObject.elements['price_per_serving'].value * 100;
			var suggested_retail_price = formObject.elements['suggested_retail_price'].value* 100;
			var food_cost_percentage = formObject.elements['food_cost_percentage'].value;
			var profit_per_serving = formObject.elements['profit_per_serving'].value * 100;
			var avg_sales_per_day = formObject.elements['avg_sales_per_day'].value;
			var locations = formObject.elements['locations'].value;
			var profit_per_day = formObject.elements['profit_per_day'].value * 100;
			var profit_per_year = formObject.elements['profit_per_year'].value * 100;
			
			//if unit size and number per pack are not empty, multiply them together and multiply by 16
			if ( !unit_size == "" && !case_pack == "")
			{
				ounces = 16 * unit_size * case_pack * concentration;
				formObject.elements['ounces'].value = ounces.toFixed( 2 );
			}

			//if there is a markup percentage and case price, calculate distributor markup and find total case price by first calculating dollar markup. If there is ounces, calculate ounces.
			//if there is no markup percentage, but there is a dollar markup and case price, calculate total case price and then ounces, if possible.
			if ( !markup_percentage == "" && !case_price == "")
			{	
				//lots of unneccesary math in the next lines because js doesn't have a proper decimal datatype and we're dealing with currency.
				markup = ((markup_percentage)*  case_price)/100; 
				formObject.elements['markup'].value = (markup/100).toFixed(2);
				total_case_price = (parseInt(case_price) + parseInt(markup))/100;
				formObject.elements['total_case_price'].value = total_case_price.toFixed(2);
				if (!ounces == "") {
					price_per_ounce = total_case_price / ounces;
					formObject.elements['price_per_ounce'].value = price_per_ounce.toFixed(2);
				}
			}
			else if( !markup == "" && !case_price == "" )
			{
				total_case_price = (parseInt(case_price) + parseInt(markup))/100;
				formObject.elements['total_case_price'].value = total_case_price.toFixed(2);
				if (!ounces == "")
				{
					price_per_ounce = parseFloat(formObject.elements['total_case_price'].value) / parseFloat(formObject.elements['ounces'].value);
					formObject.elements['price_per_ounce'].value= price_per_ounce.toFixed(2);
				}
			}


			//if price per ounce and serving size exist, multiply them.
			if ( !price_per_ounce == "" && !serving_size == "" )
			{
					price_per_serving = (price_per_ounce * serving_size);
					formObject.elements['price_per_serving'].value = price_per_serving.toFixed(2);
			}

		

			//if price per serving and suggested retail price exist, divide.
			if (!formObject.elements['price_per_serving'].value == "" && !formObject.elements['suggested_retail_price'].value == "" ) {
					food_cost_percentage = (price_per_serving / suggested_retail_price)*100;
					formObject.elements['food_cost_percentage'].value = food_cost_percentage.toFixed(2);
					profit_per_serving = (suggested_retail_price - price_per_serving* 100)/100;
					formObject.elements['profit_per_serving'].value = profit_per_serving.toFixed(2);
			}

			 //if avg sales per day and locations exist, multiply them for profit per day.
			 if (!avg_sales_per_day == "" && !locations == "" && !formObject.elements['profit_per_serving'].value == "") {
					
					profit_per_day = avg_sales_per_day * locations * profit_per_serving;
					formObject.elements['profit_per_day'].value = profit_per_day.toFixed(2);
					
			 		//once profit per day is calculated, we can multiply it by 365 to get the profit per year.
			 		formObject.elements['profit_per_year'].value = (profit_per_day * 365).toFixed(2);
			 }
		 
		
		 } //end function calcSpreadsheet()
		 
		 function clearCalc()
		 {
			 document.forms['profitability-calculator'].reset();
		 }
	</script>
    </div>
    </div>
</div>
    <?php endwhile; // end of the loop. ?>
<?php
st_after_content();
get_footer();
?>