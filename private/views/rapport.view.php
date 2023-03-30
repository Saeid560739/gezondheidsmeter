<?php $this->view('inclodes/header')?>
<div id="content">
        <div id="menu_container">
                <ul>
                        <li><a class="active" href="#home">Home</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#about">About</a></li>
                </ul>
        </div>
        <div id="content_container">
        <h1>this is overzicht</h1>
                <?php
                        echo "<pre>";
                        print_r ($rows);
                ?>
        </div>
</div>        
<?php $this->view('inclodes/footer')?>