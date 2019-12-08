	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="script.js"></script>
	<script>
	  let status = `<?= @$_GET['status'] ?>`;

	  if (status == "ok") {
	    swal({
	      title: "Əla!",
	      text: "Əməliyyat uğurla yerinə yetirildi!",
	      icon: "success",
	      button: "Ok!",
	    });
	    setTimeout(Yonlendir, 1000);
	  } else if (status == "no") {
	    swal({
	      title: "Təəssüf!",
	      text: "Əməliyyat yerinə yetirilmədi!",
	      icon: "error",
	      button: "Ok!",
	    });
	    setTimeout(Yonlendir, 1000);
	  }

	  function Yonlendir() {
	    let way = `<?= $_SERVER["SCRIPT_NAME"] ?>`;
	    location.href = way;
	  }
	</script>
	</body>

	</html>