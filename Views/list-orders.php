<section class="list-orders">
    <div class="container">
        <div class="head-container">
            <div>
                <input type="checkbox" />
                <button class="simple"><i data-feather="rotate-cw"></i></button>
                <button class="simple">all <i data-feather="sliders"></i></button>
            </div>
                <div>
                    <button class="simple"><a href="" class="link">Compose New</a></button>
                </div>
            </div>


            <div class="list-orders">
                <table>
                    <thead>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Billing Address</td>
                            <td>Joined</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $list = ModelIndexs\ModelIndex::get('orders');
                            foreach($list as $key => $value){
                        ?>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td>
                                <h6><?php echo $value['name'] ?></h6>
                                <a class="link"><?php echo $value['card_number']; ?></a>
                            </td>
                            <td>
                                <p><?php echo $value['expiration']; ?></p>
                            </td>
                            <td>
                                <p>Created in <?php echo $value['created']; ?></p>
                            </td>
                            <td>
                                <?php if($value['status'] == 'Pendente'){ ?>
                                <button class="error"><?php echo $value['status'] ?><i data-feather="clock"></i></button>
                                <?php }else if($value['status'] == 'Completed'){ ?>
                                <button class="success"><?php echo $value['status'] ?><i data-feather="check"></i></button>
                                <?php } ?>
                            </td>
                            <td>
                                <p>$<?php echo $value['amount']; ?></p>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>