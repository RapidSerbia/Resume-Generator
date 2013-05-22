<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:400,300|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">


<!-- HTML5 shim for IE backward compatability -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
	<![endif]-->

<title>Untitled Document</title>

<style>
.row-fluid {
max-width: 860px;
width: 80%;
margin: 40px auto;
background-color: #fff;
padding: 60px 0 30px 11%;
box-shadow: 1px 1px 5px #ccc;
}
p {
	font-family: "Roboto", sans-serif;
	margin: 0px;
	font-size: 14px;
}
</style>
</head>

<body style="padding-top: 0px;">
<div class="container-fluid resume">
<section class="row-fluid">

<article class="span12" style="margin-bottom: 30px;">
<p class="span2"></p><h1 class="span10" style="text-align: left"><?php echo $_POST["fname"]; ?></h1>
</article>


<article class="span12">
<div class="span2"><h3>Contact<h3></div><div class="span10"><p><?php echo $_POST["phone"]; ?>  &nbsp;|&nbsp; 
<a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo $_POST["email"]; ?></a></p>
<p><?php echo $_POST["address"]; ?></p>
</div>
</article>

<article class="span12">
<div class="span2"><h3>Experience</h3></div><div class="span10">
<p><span style="font-weight:400"><?php echo $_POST["title"]; ?></span> &nbsp;|&nbsp; <?php echo $_POST["company"]; ?></p> 
<p><?php echo $_POST["dates"]; ?>  &nbsp;|&nbsp; <?php echo $_POST["location"]; ?></p> 
<p><a href="<?php echo $_POST["website"]; ?>"><?php echo $_POST["website"]; ?></a> </p>
<p style="white-space: pre-line;"><?php if (isset($_POST['description'])) {
    // Escape any html characters
    echo htmlentities($_POST['description']);
} ?></p>
<?php if (isset($_REQUEST['title2'])) {
echo "<br>";
  }
  ?>
<p><span style="font-weight:400"><?php echo $_POST["title2"]; ?></span> &nbsp;|&nbsp; <?php echo $_POST["company2"]; ?></p> 
<p><?php echo $_POST["dates2"]; ?> &nbsp;|&nbsp; <?php echo $_POST["location2"]; ?></p> 
<p><a href="<?php echo $_POST["website2"]; ?>"><?php echo $_POST["website2"]; ?></a> </p>
<p style="white-space: pre-line;"><?php if (isset($_POST['description2'])) {
    // Escape any html characters
    echo htmlentities($_POST['description2']);
} ?></p>
<?php if (isset($_REQUEST['title3'])) {
echo "<br>";
  }
  ?>

<p><span style="font-weight:400"><?php echo $_POST["title3"]; ?></span> &nbsp;|&nbsp; <?php echo $_POST["company3"]; ?></p> 
<p><?php echo $_POST["dates3"]; ?> &nbsp;|&nbsp; <?php echo $_POST["location3"]; ?></p> 
<p><a href="<?php echo $_POST["website3"]; ?>"><?php echo $_POST["website3"]; ?></a> </p>
<p style="white-space: pre-line;"><?php if (isset($_POST['description3'])) {
    // Escape any html characters
    echo htmlentities($_POST['description3']);
} ?></p>
<?php if (isset($_REQUEST['title4'])) {
echo "<br>";
  }
  ?>

<p><span style="font-weight:400"><?php echo $_POST["title4"]; ?></span> &nbsp;|&nbsp; <?php echo $_POST["company4"]; ?></p> 
<p><?php echo $_POST["dates4"]; ?> &nbsp;|&nbsp; <?php echo $_POST["location4"]; ?></p> 
<p><a href="<?php echo $_POST["website4"]; ?>"><?php echo $_POST["website4"]; ?></a> </p>
<p style="white-space: pre-line;"><?php if (isset($_POST['description4'])) {
    // Escape any html characters
    echo htmlentities($_POST['description4']);
} ?></p>
<?php if (isset($_REQUEST['title51'])) {
echo "<br>";
  }
  ?>


<p><span style="font-weight:400"><?php echo $_POST["title51"]; ?> </span> &nbsp;|&nbsp; <?php echo $_POST["company51"]; ?></p> 
<p><?php echo $_POST["dates51"]; ?> &nbsp;|&nbsp; <?php echo $_POST["location51"]; ?></p> 
<p><a href="<?php echo $_POST["website51"]; ?>"><?php echo $_POST["website51"]; ?></a> </p>
<p style="white-space: pre-line;"><?php if (isset($_POST['description51'])) {
    // Escape any html characters
    echo htmlentities($_POST['description51']);
} ?></p>


<?php if (isset($_REQUEST['title52'])) {
echo "<br>";
  }
  ?>

<p><span style="font-weight:400"><?php echo $_POST["title52"]; ?> </span>
<?php if (isset($_REQUEST['company52'])) {
echo "&nbsp;|&nbsp;";
  }
  ?>
<?php echo $_POST["company52"]; ?></p> 
<p><?php echo $_POST["dates52"]; ?>
<?php if (isset($_REQUEST['location52'])) {
echo "&nbsp;|&nbsp;";
  }
  ?> 
<?php echo $_POST["location52"]; ?></p> 
<p><a href="<?php echo $_POST["website52"]; ?>"><?php echo $_POST["website52"]; ?></a> </p>
<p style="white-space: pre-line;"><?php if (isset($_POST['description52'])) {
    // Escape any html characters
    echo htmlentities($_POST['description52']);
} ?></p>

<?php if (isset($_REQUEST['title53'])) {
echo "<br>";
  }
  ?>

<p><span style="font-weight:400"><?php echo $_POST["title53"]; ?> </span>
<?php if (isset($_REQUEST['company53'])) {
echo "&nbsp;|&nbsp;";
  }
  ?>
<?php echo $_POST["company53"]; ?></p> 
<p><?php echo $_POST["dates53"]; ?>
<?php if (isset($_REQUEST['location53'])) {
echo "&nbsp;|&nbsp;";
  }
  ?> 
<?php echo $_POST["location53"]; ?></p> 
<p><a href="<?php echo $_POST["website53"]; ?>"><?php echo $_POST["website53"]; ?></a> </p>
<p style="white-space: pre-line;"><?php if (isset($_POST['description53'])) {
    // Escape any html characters
    echo htmlentities($_POST['description53']);
} ?></p>

</div>
</article>

<article class="span12">
<div class="span2"><h3>Education</h3></div><div class="span10">
<p><?php echo $_POST["degree2"]; ?> </p>
<p><?php echo $_POST["institution2"]; ?></p> 
<p><?php echo $_POST["ed_location2"]; ?></p> 
<p><?php echo $_POST["graduated2"]; ?></p> 
<?php if (isset($_REQUEST['degree3'])) {
echo "<br>";
  }
  ?>
<p><?php echo $_POST["degree3"]; ?> </p>
<p><?php echo $_POST["institution3"]; ?></p> 
<p><?php echo $_POST["ed_location3"]; ?></p> 
<p><?php echo $_POST["graduated3"]; ?></p> 
<?php if (isset($_REQUEST['degree4'])) {
echo "<br>";
  }
  ?>
<p><?php echo $_POST["degree4"]; ?> </p>
<p><?php echo $_POST["institution4"]; ?></p> 
<p><?php echo $_POST["ed_location4"]; ?></p> 
<p><?php echo $_POST["graduated4"]; ?></p> 
</div>
</article>

<article class="span12">
<div class="span2"><h3>Skills</h3></div><div class="span10">
<p style="white-space: pre-line;"><?php if (isset($_POST['skills'])) {
    // Escape any html characters
    echo htmlentities($_POST['skills']);
} ?></p>
</div>
</article>



</section>

</div>
</body>
</html>