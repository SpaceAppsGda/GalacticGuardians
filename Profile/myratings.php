	<div id="container2"></div>
			<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#container2').jtable({
				title: 'Table of NEOs',
				actions: {
					listAction: 'load1.php?user=<?php echo $user ?>'
				},
				fields: {
					ObjectID: {
						title: 'NEO ID',
						key: true
					},
					Category: {
						title: 'Category'
					},
					PlaceOfDiscovery: {
						title: 'Place of Discovery'
					},
					Magnitude: {
						title: 'Magnitude'
					},
					NoObservations: {
						title: '# of Observations'
					},
					Arc: {
						title: 'Arc'
					},
					Orbital: {
						title: 'Orbital eccentricity'
					},
					Date: {
						title: 'Date'
					},
					UserName: {
						title: 'Username'
					},
					Discoverer: {
						title: 'Discoverer'
					},
					average: {
						title: 'Average Score'
					}
							
				}
			});

			//Load person list from server
			$('#container').jtable('load');

		});

	</script>
 