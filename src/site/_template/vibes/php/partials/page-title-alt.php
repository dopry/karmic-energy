<!-- Page Title Area -->
<div class="page-title page-title-short">
  <div class="container">

    <nav class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
      <meta itemprop="numberOfItems" content="3">
      <meta itemprop="itemListOrder" content="Ascending">
      <ol class="breadcrumb">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
          <a href="index.php">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
          <a href="blog.php">
            <span itemprop="name">Blog</span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item active">
          <span itemprop="name"><?php echo isset( $title ) && $title ? $title : 'Home' ?></span>
          <meta itemprop="position" content="3">
        </li>
      </ol><!-- /.breadcrumb -->
    </nav><!-- /.breadcrumbs -->

  </div><!-- /.container -->
</div><!-- /.page-title -->
