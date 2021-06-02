<?php
require '../php/functions.php';

if (isset($_POST['cari'])) {
  $fashion = cari($_POST['keyword']);
}

?>

<table border="1" cellpadding="13" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Option</th>
    <th>Picture</th>
    <th>Name</th>
    <th>description</th>
    <th>Price</th>
    <th>Category</th>
  </tr>
  <?php if (empty($fashion)) : ?>
    <tr>
      <td colspan="7">
        <h2>Product not found</h2>
      </td>
    </tr>
  <?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($fashion as $f) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $f['id'] ?>"><button>Edit</button></a>
          <a href="hapus.php?id=<? $f['id'] ?>" onclick="return confirm('Delete Data ?')"><button>Delete</button></a>
        </td>
        <td><img src=" ../assets/img/<?= $f['picture']; ?>" alt="">
        </td>
        <td><?= $f['name']; ?></td>
        <td><?= $f['description']; ?></td>
        <td><?= $f['price']; ?></td>
        <td><?= $f['category']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</table>