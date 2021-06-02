<?php
require '../php/functions.php';
$fashion = cari($_GET['keyword']);

?>

<div class="container">
  <?php if (empty($fashion)) : ?>
    <h1>Data Not Found</h1>
  <?php else : ?>
    <?php foreach ($fashion as $f) : ?>
      <div class="grid">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row">
            <div class="col-md-4">
              <img src="../assets/img/<?= $f["picture"]; ?>" width="200px">
            </div>
            <div class="col-s12-m12">
              <div class="card-body">
                <table>
                  <ul>
                    <li>
                      <h5 class="card-title">Name : <?= $f["name"]; ?></h5>
                    </li>
                    <li>
                      <p class="card-text"> Description : <?= $f["description"]; ?></p>
                    </li>
                    <li>
                      <p class="card-text">Price : <?= $f["price"]; ?></p>
                    </li>
                    <li>
                      <p class="card-text"><small class="kategori text-muted">Category : <?= $f["category"]; ?></small></p>
                    </li>
                    <li>
                      <a href="ubah.php?id=<?= $f['id'] ?>"><button>Edit</button></a>
                    </li><br>
                    <li>
                      <a href="hapus.php?id=<?= $f['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Delete</button></a>
                    </li>
                  </ul>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>