<?php 
  $heading = get_page_heading($title, 'Home');
  $classes = null;
  $style = null;

  if(isset($title) && $title) {
    $type = gettype($title);
    if($type === 'array') {
      $heading = $title[0];

      if(isset($title[1]))
        $classes = $title[1];

      if(isset($title[2]))
        $style = $title[2];
    }
  }
?>

<!-- Page Title Area -->
<div 
    class="<?= "page-title" . ( $classes !== null ? " " . $classes : null ) ?>"
    <?= $style !== null ? 'style="'.$style.'"' : null ?>
    >

  <div class="container">

    <h1 class="entry-title heading-effect">
      <span class="title"><?= $heading ?></span>
    </h1>

    <nav class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
      <meta itemprop="numberOfItems" content="2">
      <meta itemprop="itemListOrder" content="Ascending">
      <ol class="breadcrumb">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
          <a href="index.php">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item active">
          <span itemprop="name"><?= $heading ?></span>
          <meta itemprop="position" content="2">
        </li>
      </ol><!-- /.breadcrumb -->
    </nav><!-- /.breadcrumbs -->

  </div><!-- /.container -->
</div><!-- /.page-title -->
