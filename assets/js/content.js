 $(function () {
 	//Initialize Select2 Elements
 	$('.select2').select2()

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
 		// "lengthChange": false,
 		"lengthMenu": [
 			[10, 25, 50, -1],
 			[10, 25, 50, "All"]
 		],
 		// "searching": false,
 		"ordering": true,
 		"info": true,
 		"autoWidth": false,
 		"responsive": true,
 	});
 	$('#example3').DataTable({
 		"paging": true,
 		// "lengthChange": false,
 		"lengthMenu": [
 			[10, 25, 50, -1],
 			[10, 25, 50, "All"]
 		],
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


 //  password 
 $("#click-eyepw").click(function () {
 	$("#click-eyepw").toggleClass("fa-eye-slash");
 	var input_pass = $("#password");
 	if (input_pass.attr("type") === "password") {
 		input_pass.attr("type", "text");
 	} else {
 		input_pass.attr("type", "password");
 	}
 });
 $("#click-eyepw1").click(function () {
 	$("#click-eyepw1").toggleClass("fa-eye-slash");
 	var input_pass = $("#password1");
 	if (input_pass.attr("type") === "password") {
 		input_pass.attr("type", "text");
 	} else {
 		input_pass.attr("type", "password");
 	}
 });
 $("#click-eyepw2").click(function () {
 	$("#click-eyepw2").toggleClass("fa-eye-slash");
 	var input_pass = $("#password2");
 	if (input_pass.attr("type") === "password") {
 		input_pass.attr("type", "text");
 	} else {
 		input_pass.attr("type", "password");
 	}
 });
