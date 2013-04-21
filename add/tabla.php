
	<div id="container">
			<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#container').jtable({
				title: 'Table of NEOs',
				actions: {
					listAction: 'load.php',
					createAction: 'create.php'
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
					Username: {
						title: 'Username'
					},
					Discoverer: {
						title: 'Discoverer'
					}
							
				}
			});

			//Load person list from server
			$('#container').jtable('load');

		});

	</script>
 