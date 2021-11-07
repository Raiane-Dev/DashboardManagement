<?php 
    $views = ControllerIndexs\ControllerIndex::views();
    $total_orders = ModelIndexs\ModelIndex::getTotalOrders();
    $customers = ModelIndexs\ModelIndex::get('users');
    $orders = ModelIndexs\ModelIndex::get('orders');
?>
<section class="home">
    <div id="chart"></div>

    <div class="wrapper-three">
        <div class="card">
            <p>Customers</p>
            <h4><?php echo count($customers); ?></h4>
            <a href="" class="link">See all <i data-feather="chevron-right"></i></a>
        </div>
        
        <div class="card">
            <p>Views</p>
            <h4><?php echo count($views); ?></h4>
            <a href="" class="link">See all <i data-feather="chevron-right"></i></a>
        </div>

        <div class="card">
            <p>Amount</p>
            <h4><?php echo $total_orders ?></h4>
            <a href="" class="link">See all <i data-feather="chevron-right"></i></a>
        </div>
    </div>


    <div class="container">
        <div class="head-container">
            <div><h2>Recent Orders</h2></div>
            <div>
                <button class="simple"><i data-feather="plus"></i> New</button>
                <button class="simple"><i data-feather="filter"></i> Filter</button>
                <button class="simple"><i data-feather="external-link"></i> Export</button>
            </div>
        </div>

        <table class="row-five">
            <thead>
                <tr>
                    <td>Order</td>
                    <td>Created</td>
                    <td>Card Number</td>
                    <td>CVV</td>
                    <td>Amount</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($orders as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['created']; ?></td>
                    <td><?php echo $value['card_number']; ?></td>
                    <td><?php echo $value['cvv']; ?></td>
                    <td><?php echo $value['amount']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="wrapper-bedroom">
        <div class="metrics">
            <h6>Active user in globo</h6>
            <h4><?php echo count($views); ?></h4>
            <span>Page views por seconds</span>
            <div id="chart-bar"></div>
            <table>
                <thead>
                    <tr>
                        <td>Top Active Pages</td>
                        <td>Active users</td>
                    <tr>
                </thead>
                <tbody>
                    <?php
                        $year = date('Y');
                        $month = date('m');
                        $day = date('d');
                        $view_ip = ModelIndexs\ModelIndex::getWhere('views','LIMIT 3');
                        foreach($view_ip as $key => $value){
                    ?>
                    <tr>
                        <td><?php echo $value['created']; ?></td>
                        <td><?php echo $value['ip']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php include('js/maps.php'); ?>
    </div>

</section>
