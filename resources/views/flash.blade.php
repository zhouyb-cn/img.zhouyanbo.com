@if(session()->has('flash_message'))

	<script type="text/javascript">
    	swal({
		  title: "Error!",
		  text: "Here's my error message!",
		  type: "error",
		  timer: 1700
		});
    </script>

@endif