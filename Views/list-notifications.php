<section class="list-notifications">
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

            <div class="list-notifications">
                <?php
                    $list = ModelIndexs\ModelIndex::get('notifications');
                    foreach($list as $key => $value){
                ?>
                <div class="notification-single">
                    <div>
                        <input type="checkbox" />
                    </div>
                    <div>
                        <img src="https://i.pinimg.com/564x/40/91/4b/40914b58b57d593196801fd7db7efaa2.jpg" />
                    </div>
                    <div>
                        <h6><?php echo $value['title']; ?></h6>
                        <button class="success">New</button>
                    </div>
                    <div>
                        <p><?php echo $value['message']; ?></p>
                    </div>
                    <div>
                        <p><?php echo $value['date']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>