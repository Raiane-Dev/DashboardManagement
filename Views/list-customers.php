<section class="list-customers">
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


            <div class="list-customers">
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
                            $list = ModelIndexs\ModelIndex::get('users');
                            foreach($list as $key => $value){
                        ?>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td>
                                <img src="assets/<?php echo $value['image']; ?>" />
                            </td>
                            <td>
                                <h6><?php echo $value['name']; ?></h6>
                            </td>
                            <td>
                                <a class="link"><?php echo $value['email']; ?></a>
                            </td>
                            <td>
                                <p>Your Daily Work Summary</p>
                            </td>
                            <td>
                                <p><?php echo $value['ip']; ?></p>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>