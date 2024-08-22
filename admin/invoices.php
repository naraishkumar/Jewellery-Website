<?php
  include 'includes/header/header.php';
  include 'includes/header/sidebar.php'; 
?>
  <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-12">
              <h2>Invoices
              <!-- <a href="add_user.php" class="btn btn-primary float-end">Insert User</a> -->
              </h2>
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Invoice No.</th>
                          
                          <th>Order No.</th>
                          <th>Date</th>
                          <th>Status</th>
                          
                          <th>Additional Info</th>
                          
                          
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $tbl_name = 'tbl_invoices';
                        $invoices = get_records($tbl_name);
                        if (!empty($invoices)) {
                          foreach ($invoices as $order) {
                echo "<tr>";
                echo "<td> INVO#" . $order['invoice_number'] . "</td>";
                
                echo "<td> ORD#" . $order['order_number'] . "</td>";
                echo "<td>" . $order['create_at'] . "</td>";
                echo "<td>" . $order['status'] . "</td>";
                
                echo "<td>" . $order['additional_info'] . "</td>";
                
                
                echo "<td>
                          <a href='/Jewellery-website/admin/edit_order.php?id=" . $order['id'] . "' class='btn btn-primary'><i class='fa-solid fa-pen-to-square'></i></a>
                          <form action='delete_order.php' method='POST' style='display:inline;'>
                              <input type='hidden' name='id' value='" . $order['id'] . "'>
                              <button type='submit' class='btn btn-warning mx-1'><i class='fa-solid fa-trash'></i></button>
                          </form>
                      </td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            ?>
                  </tbody>
              </table>
              <?php include 'pagination.php'; ?>
          </div>
      </div>
  </div>

  <?php include 'includes/footer/footer.php'; ?>