<?php
    if(isset($_POST['create_notification'])){
        ControllerIndexs\ControllerIndex::createNotification($_POST['title'], $_POST['message'], $_POST['date']);
    }
?>
<section class="create-event">
    <div class="container create-event">
        <div class="head-container">
            <div><h2>Create Event</h2></div>
            <div>
                <button class="simple">Save</button>
                <button class="simple"><a href="" class="link">Make your event live</a></button>
            </div>
        </div>
    </div>

    <div class="cover-event">
        <img class="cover" src="assets/cover.jpg" />
    </div>

    <div class="feed">
        <div class="area-create-event">
            <div class="container">
                <h2>Create Notification</h2>
                <form method="post">
                    <label>Notification Title</label>
                    <input type="text" name="title" />

                    <label>Start Date</label>
                    <input type="date" name="date" />

                    <label>Description</label>
                    <textarea name="message"></textarea>

                    <input type="submit" name="create_notification" value="Create" />
                </form>
            </div>

            <div class="container">
                <h2>Nice Job! You're almost done</h2>
            </div>
        </div>

        <div class="area-create-event">
            <div class="container">
                <h2>Others Info</h2>
                <label>Organizier <a href="" class="link">Add new</a></label>
                <select>
                    <option>Default</option>
                </select>

                <label>Organizier <a href="" class="link">Add new</a></label>
                <select>
                    <option>Default</option>
                </select>

                <label>Organizier <a href="" class="link">Add new</a></label>
                <select desabled>
                    <option>Default</option>
                </select>

                <label>Organizier <a href="" class="link">Add new</a></label>
                <select desabled>
                    <option>Default</option>
                </select>

                <label>Organizier <a href="" class="link">Add new</a></label>
                <select>
                    <option>Default</option>
                </select>

                <div class="division"></div>

                <form>
                    <div>
                        <input type="radio" /><span> Public page</span>
                        <p>Discoverable by anyone on Falcon, our distribution partners, and search engines.</p>
                    </div>
                    <div>
                        <input type="radio" /><span> Public page</span>
                        <p>Discoverable by anyone on Falcon, our distribution partners, and search engines.</p>
                    </div>

                    <div class="division"></div>

                    <input type="checkbox" /><span> Show the number of remaining tickets</span>
                </form>
            </div>
        </div>

    </div>
</section>