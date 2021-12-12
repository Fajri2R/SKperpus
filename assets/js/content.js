 $(function () {
 	$('#reservationdate').datetimepicker({
 		format: 'L'
 	});

 	$("#example2-5").DataTable({
 		"responsive": true,
 		"lengthChange": false,
 		"autoWidth": false,
 		"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
 	}).buttons().container().appendTo('#example2-5_wrapper .col-md-6:eq(0)');
 	$("#example3-5").DataTable({
 		"responsive": true,
 		"lengthChange": false,
 		"autoWidth": false,
 		"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
 	}).buttons().container().appendTo('#example3-5_wrapper .col-md-6:eq(0)');
 	$('#example2').DataTable({
 		"paging": true,
 		"lengthChange": false,
 		// "searching": false,
 		"ordering": true,
 		"info": true,
 		"autoWidth": false,
 		"responsive": true,
 	});
 	$('#example3').DataTable({
 		"paging": true,
 		"lengthChange": false,
 		// "searching": false,
 		"ordering": true,
 		"info": true,
 		"autoWidth": false,
 		"responsive": true,
 	});
 });

 //Image
 $('.custom-file-input').on('change', function () {
 	let filename = $(this).val().split('\\').pop();
 	$(this).next('.custom-file-label').addClass("selected").html(filename);
 });
