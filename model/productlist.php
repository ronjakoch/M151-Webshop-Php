
<div class="container">
  <div class="row pt-5 pb-5">
    <div class="col-1 pr-5">

    </div>
    <div class="col">

      <div class="btn-group btn-group-sm" role="group" aria-label="...">

        <form action="../view/products.php" method="POST">
          <button type="button" class="btn btn-secondary titleBox">SORT:</button>
          <button name="submit" type="submit" class="btn btn-secondary sortfield" value="11">low to high</button>
          <button name="submit" type="submit" class="btn btn-secondary sortfield" value="22">high to low</button>
        </form>

      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">

        <?php
        require_once '../controller/db-postgres/connect.php';
        $sort;

        $query3 = "SELECT  *  FROM products;";
        $query1 = "SELECT  *  FROM products ORDER BY price ASC;";
        $query2 = "SELECT  *  FROM products ORDER BY price DESC;";

        $finalquery = $query3;
        if (isset($_POST["submit"])) {
          if ($_POST["submit"] == "11") {
            $finalquery = $query1;
          } else if ($_POST["submit"] == "22") {
            $finalquery = $query2;
          }
        }

        $result = pg_query($db_conn, $finalquery);

        while ($row = pg_fetch_assoc($result))
        
          echo '   
          <form method="post" >
            <div class="col">
            <div class="card h-100">
            <input type="hidden" name="productid" value="' . htmlspecialchars($row['id']) . '" />
              <img src="../view/img/' . htmlspecialchars($row['path']) . '" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>
                <p class="card-text">' . htmlspecialchars($row['price']) . ' CHF </p>
              </div>
              <div class="card-footer">
              <button type="submit" class="btn btn-outline-secondary btn-block">Add to cart</button>
              </div>
            </div>
          </div>
        </form>
                ';
        ?>
      </div>
    </div>
    <div class="col-1"></div>
  </div>
</div>
    }