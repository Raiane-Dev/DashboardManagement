<section class="create-product">
    <div class="container create-product">
        <div class="head-container">
            <h2>New Product</h2>
        </div>
        <form method="post">
            <input type="text" name="subject" placeholder="Subject"/>
    
            <input type="email" name="email" placeholder="Email"/>

            <div class="textarea">
                <div>
                    <select id="text-type">
                        <option value="paragrafo">Páragrafo</option>
                        <option value="h1">H1</option>
                        <option value="h2">H2</option>
                        <option value="h3">H3</option>
                        <option value="h4">H4</option>
                        <option value="h5">H5</option>
                        <option value="h6">H6</option>
                    </select>
                </div>
                <div id="strong">
                    <p><strong>B</strong></p>
                </div>
                <div id="italic">
                    <p><i>i</i></p>
                </div>
                <div id="underline">
                    <p><u>U</u></p>
                </div>
                <div id="strikethrough">
                    <p><s>Rasurado</s></p>
                </div>
                <div id="testimonial">
                    <p style="font-size:1rem; font-weight:700;">❝</p>
                </div>
                <div id="code">
                    <p><strong> &lt;/&gt; </strong></p>
                </div>
                <div id="color-select">
                    <p><input type="color" id="color" /></p>
                </div>
                <div id="background-text">
                    <p style="background-color:#344050; color:#ffffff;">A</p>
                </div>
                <div id="text-align-left">
                    <p><i data-feather="align-left"></i></p>
                </div>
                <div id="text-align-center">
                    <p><i data-feather="align-center"></i></p>
                </div>
                <div id="text-align-right">
                    <p><i data-feather="align-right"></i></p>
                </div>
                <div id="text-align-justify">
                    <p><i data-feather="align-justify"></i></p>
                </div>
                <div id="list">
                    <p><i data-feather="list"></i></p>
                </div>
                <div id="href">
                    <p><i data-feather="link"></i></p>
                </div>
                <div id="img">
                    <input type="file" id="image" /><label for="image"><i data-feather="image"></i></label>
                </div>
                <div id="video">
                    <input type="file" id="film" /><label for="film"><i data-feather="film"></i></label>
                </div>
                <div id="delete">
                    <p><i data-feather="delete"></i></p>
                </div>
            </div>
            <textarea id="textarea" placeholder="Message..."></textarea>

            <div class="form-send">
                <div><input type="submit" name="create" value="Update" />
                <i data-feather="link"></i></div>
                <div><i data-feather="more-vertical"></i>
                <i data-feather="trash"></i></div>
            </div>
        </form>
    </div>
</section>