<?php
/*9891385470
Plugin Name: dojofilter
Plugin URI: http://www.rcorp.co.in
Version: 1.0
Author: Abhineet Verma
Description: Includes Dojo
*/

		/**
		 * Create dGrid based upon a Json for columns, a Json for the data and a DOM Tag Id.
		 * This basically adds a script tag and adds a dgrid to the using Dojo!
		 * @param  JSON $column_json The Schema (Column Structure) of the grid as a JSON.
		 *         Has a format [{'label' : 'What to show in the column', 'field' : 'column_name_in_the_database'}]
		 * @param  JSON $data_json The data for each row of the Grid as a JSON. Will convert to dojo/store/Memory
		 *         Has a format [{columnName: value, column2Name: value}, {columnName: value, column2Name: value}]
		 * @param  String $node_id Id of the node as a string where the Grid is to be made.
		 */
			function create_dojo_grid($column_json, $data_json, $node_id) { ?>
				<script type="text/javascript">
					require(['dojo/_base/declare', 'dojo/store/Memory', 'dgrid/OnDemandGrid', 'dgrid/extensions/rowFilter', 'dojo/domReady!'], function(declare, Memory, Grid, rowFilter) {
						
						//The JSON for the column structure
						var columns = <?php echo $column_json; ?>;
						//If PHP is giving us a string, parse it
						if (typeof columns == 'string'){
							columns = JSON.parse(columns);
						}

						//Data to be filled into the Grid
						var data = <?php echo $data_json; ?>
						//Again, if PHP is giving us a string, parse it
						if (typeof data == 'string'){
							data = JSON.parse(data);
						}

						var store = new Memory({
							data: data
						});

						//The grid itself!
						var grid = new (declare([Grid, rowFilter]))({
							store: store,
							columns: columns
						}, /* Id of the DOM Tag where the grid is going to be made */'<?php echo $node_id ?>');
						//console.log(grid)
						grid.renderHeaderX();
						grid.resize();

					}); 	
				</script>
			<?php	
			}
			// add_action( 'init', 'create_dojo_grid', 1 );
			?>
