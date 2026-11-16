
<?php
// SDC310L Week 2: Product catalog page framework
require __DIR__ . '/products.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Shopping Cart | Catalog</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header"><div class="wrap header-row"><div><span class="eyebrow">SDC310L · WEEK 2</span><h1>Tech Corner</h1><p>Your simple online shopping catalog</p></div><a class="nav-link" href="cart.php">View Cart →</a></div></header>
<main class="wrap">
  <div class="page-heading"><div><h2>Product Catalog</h2><p>Browse our five sample products. Cart functionality will be added in Week 3.</p></div><span class="count"><?= count($products) ?> products</span></div>
  <div class="product-grid">
  <?php foreach ($products as $product): ?>
    <article class="product">
      <span class="product-id">PRODUCT #<?= (int)$product['product_id'] ?></span>
      <h3><?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') ?></h3>
      <p class="description"><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></p>
      <p class="price">$<?= number_format((float)$product['price'], 2) ?></p>
      <p class="quantity">Quantity currently in cart: <strong>0</strong></p>
      <button type="button" disabled title="Available in Week 3">Add to Cart · Week 3</button>
    </article>
  <?php endforeach; ?>
  </div>
  <p class="phase-note">Phase 2 framework: the database schema and seed records are provided in <code>sql/shopping_cart_db.sql</code>. This page uses sample PHP data until the Phase 3 database connection is implemented.</p>
</main>
<footer class="wrap">SDC310L Course Project · Phase 2</footer>
</body>
</html>
