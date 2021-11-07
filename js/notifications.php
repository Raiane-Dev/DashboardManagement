<script>
    Notification.requestPermission();
</script>
<?php
    $date = date('Y-m-d');
    $notifications = \MySql::connect()->prepare("SELECT * FROM `notifications` WHERE `date` = '$date'");
    $notifications->execute();
    $notifications = $notifications->fetchAll();
    $date = date('Y-m-d');
    foreach($notifications as $key => $push){ 
    ?>

<script>

    function showNotification(){
        const notification = new Notification("<?php echo $push['title'] ?>", {
            body: "<?php echo $push['message']; ?>",
            icon: "./assets/Usuario.png",
            onClick: function(){
                window.location.href = "<?php echo INCLUDE_PATH; ?>";
            }
        });
    }

    if(Notification.permission === "granted"){
        showNotification();
    }else if(Notification.permission !== "denied"){
        Notification.requestPermission().then(permission => {
            showNotification();
        });
    }

    if(window.matchMedia("(max-width: 780px").matches){
            navigator.serviceWorker.register('js/sw.js');
            Notification.requestPermission(function(result) {
            if (result === 'granted') {
                navigator.serviceWorker.ready.then(function(registration) {
                registration.showNotification('<?php echo $push['title'] ?>', {
                    body: "<?php echo $push['message']; ?>",
                    icon: "./assets/Usuario.png",
                    onClick: function(){
                        window.location.href = "<?php echo INCLUDE_PATH; ?>";
                    }
                });
                });
            }
            });
        }
</script>

<?php
    }
?>