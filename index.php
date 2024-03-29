<?php

	require_once('inc/config.php');
	
	
  //get all content related to this page (home)
  $sql = "SELECT * FROM site_content WHERE page_name='home'";
  $myData = $db->query($sql);
  
  //create container for each piece of data
  while($row = $myData->fetch_assoc())
  {
	  	if($row['section_name'] === 'intro')
		{
			$intro = $row['content'];			
		}
		elseif($row['section_name'] === 'blurb')
		{
			$blurb = $row['content'];
		}
	  }
?>





<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="home_page">

<div class="container">

<?php include_once('inc/header.php'); ?>

  <div class="sidebar1">
  
<?php require_once('inc/nav.php'); ?>
    <aside>
	  <?php echo $blurb; ?>
    </aside>
    
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Home</h1>
    <section>
     <h2>How to use this document</h2>
     
      <p>
      <?php echo $intro; ?>
      </p>
    </section>
    
    <section>
      <h2>Clearing Method</h2>
      <p>Because all the columns are floated, this layout uses a clear:both declaration in the footer rule.  This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the footer from the .container, you'll need to use a different clearing method. The most reliable will be to add a &lt;br class=&quot;clearfloat&quot; /&gt; or &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; after your final floated column (but before the .container closes). This will have the same clearing effect. </p>
    </section>
    <section>
      <h2>Logo Replacement</h2>
      <p>An image placeholder was used in this layout in the header where you'll likely want to place  a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. </p>
      <p> Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. </p>
      <p>To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there.)</p>
    </section>
  <!-- end .content --></article>
  <aside>
    <h4>Backgrounds</h4>
    <p>By nature, the background color on any block element will only show for the length of the content. If you'd like a dividing line instead of a color, place a border on the side of the .content block (but only if it will always contain more content).</p>
  </aside>
  
<?php include_once('inc/footer.php'); ?>

  <!-- end .container --></div>
</body>
</html>
