<?php

$CRUD = new CRUD();

$isciler = $CRUD->Select();
rsort($isciler);
if (isset($_POST['elaveet'])) {
  $CRUD->Insert($_POST) ? header("Location:index.php?status=ok") : header("Location:qeydiyyat.php?status=no");
}

if (isset($_POST['redakte'])) {
  $CRUD->Update($_POST) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
}

if(@$_GET['sil']=="ok"){
	$CRUD->Delete(@$_GET['id']) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
}

 ?>
