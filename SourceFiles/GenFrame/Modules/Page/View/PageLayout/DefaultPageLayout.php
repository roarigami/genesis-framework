<!DOCTYPE html>
<html lang="en">
<?php include ROOT_PATH . "GenFrame/includes/Header/GenMainHeader.php";?>

<body>
<!-- Main Navigation -->
  <?php include ROOT_PATH . "GenFrame/includes/Navigation/GenMainNav.php" ;?>


<!-- Page Content -->
<?php include MODULE_PATH . "Page/View/PageContent/" . $pageObj->pagecontent . ".php" ;?>



<!-- Main Footer -->
  <?php include ROOT_PATH . "GenFrame/includes/Footer/GenMainFooter.php" ;?>


<!-- <div class="push"></div> -->
<?//php include ROOT_PATH . "GenFrame/includes/footers/GenFrameFooter.php" ;?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="/ABSOLUTE/GenFramework/SourceFiles/GenFrame/UI/Resources/js/script.js"></script>
</body>
</html>
