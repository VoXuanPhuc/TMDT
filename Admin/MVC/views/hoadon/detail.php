<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Danh sách đơn hàng</li>
      <li class="breadcrumb-item"><a href="#">Kiểm tra đơn hàng</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Kiểm tra đơn hàng</h3>
        <?php if (isset($data) and $data != null) { ?>
          <a href="./?mod=hoadon&act=xetduyet&id=<?= $data['0']['MaHD'] ?>" class="btn btn-success">Browse bills</a>
          <a href="./?mod=hoadon&act=delete&id=<?= $data['0']['MaHD'] ?>" onclick="return confirm('Do you really want to delete?');" type="button" class="btn btn-danger">Xóa</a>
        <?php } ?>
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all"></th>
                <th>Tên sản phẩm/Color</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng đơn hàng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $row) { ?>
                <tr>
                  <td><input type="checkbox" id="all"></td>
                  <td><?= $row['Ten'] ?>/<?= $row['Color'] ?></td>
                  <td>$ <?= number_format($row['DonGia']) ?></td>
                  <td><?= $row['SoLuong'] ?></td>
                  <td>$ <?= number_format($row['DonGia'] * $row['SoLuong']) ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>
</main>