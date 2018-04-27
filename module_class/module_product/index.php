<?php 
require_once '../config/core.php';
require_once '../config/database.php';
require_once '../inc/header.php';
require_once '../object/product.php'; 

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);
$stmt = $product->readAll($from_record_num,$records_per_page);
$total_rows = $stmt->rowCount();
?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>This is main title</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">หน้าหลัก</a>
            </li>
            <li class="active">
                <strong>รายการสินค้า</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
     <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Product List</h5>
        </div>
        <div class="ibox-content">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($result = $stmt->fetch()){ ?>
                    <tr>
                        <td><?=$number?></td>
                        <td><?=$result['P_Name']?></td>
                        <td><?=$result['P_Price']?></td>
                        <td><?=$result['P_ID']?></td>
                    </tr>
                    <?php $number++; }?>
                </tbody>
            </table>

            <div class="btn-group">
                <button type="button" class="btn btn-white"><i class="fa fa-chevron-left"></i></button>
                <button class="btn btn-white">1</button>
                <button class="btn btn-white  active">2</button>
                <button class="btn btn-white">3</button>
                <button class="btn btn-white">4</button>
                <button type="button" class="btn btn-white"><i class="fa fa-chevron-right"></i> </button>
            </div>
        </div>
    </div>                    
</div>
</div>

<?php require_once '../inc/footer.php'; ?>


