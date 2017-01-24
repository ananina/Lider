<div class="content">
    <!-- /карусель логотипов, загрузка из json -->
    <div  class="multiple-items"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="left-sidebar col-md-3">
                <div class="tree-menu" id="tree-menu">
                    <ul class="category">
                        <?php if(isset($category)) {
                            foreach ($category as $id_category => $category_name) {
                                ?>
                                <li>
                                    <a href="#<?php echo $id_category; ?>"><?php echo $category_name; ?></a>
                                    <?php if(isset($subcategory)) {
                                        foreach ($subcategory as $mass) {
                                            if ($id_category == $mass['id_category']){
                                                ?>
                                                <ul>
                                                    <li>
                                                    <a href="#<?php echo $mass['id']; ?>"><?php echo $mass['subCategory']; ?></a>
                                                    </li>
                                                </ul>
                                            <?php
                                            }
                                        }
                                    }?>
                                </li>
                            <?php
                            }
                        }?>
                    </ul>
                </div>
            </div>
            <div class="content-right col-md-9">
                <div class="main-content">
                    <div id="img-info">
                        <img src="<?=FPATH?>img/skigo15_rus_1.png">
                    </div>
                    <div class="item-list">
                        <div class="hit">
                            <h3>ТОВАРЫ НЕДЕЛИ</h3>
                        </div>
                        <div class="more">
                            <a href="#">Посмотреть все предложения</a>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="item-discount col-md-3">
                                    <div class="thumbnail">
                                        <img class="preview" src="<?=FPATH?>img/296a4d4c-f945-11e4-9c5c-adc958ba292e_16ebfe75-4bf3-11e5-8ba5-d25d85a7de21.jpeg" alt="...">
                                        <div class="caption">
                                            <h3>ROTTEFELLA</h3>
                                            <p class="anons">Описание Описание Описание Описание Описание Описание Описание Описание</p>
                                            <p class="desc">Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание</p>
                                            <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                        </div>
                                        <div class="count">
                                            3000р.
                                        </div>
                                        <div class="old-count">
                                            <s>5000р.</s>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-discount col-md-3">
                                    <div class="thumbnail">
                                        <img class="preview" src="<?=FPATH?>img/10769b8f-0911-11e5-9c5c-adc958ba292e_5916656e-5600-11e5-8ba5-d25d85a7de21.jpeg" alt="...">
                                        <div class="caption">
                                            <h3>START</h3>
                                            <p class="anons">Описание Описание Описание Описание Описание Описание </p>
                                            <p class="desc">Описание Описание Описание Описание Описание Описание Описание Описание Описание Описание</p>
                                            <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                        </div>
                                        <div class="count">
                                            3000р.
                                        </div>
                                        <div class="old-count">
                                            <s>5000р.</s>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-discount col-md-3">
                                    <div class="thumbnail">
                                        <img class="preview" src="<?=FPATH?>img/aae5da44-be35-11e6-9cb3-a21d98c18bc5_dc07ec37-be35-11e6-9cb3-a21d98c18bc5.jpeg" alt="...">
                                        <div class="caption">
                                            <h3>SOLDA</h3>
                                            <p class="anons">Описание Описание Описание Описание Описание Описание Описание Описание</p>
                                            <p class="desc">Описание Описание Описание Описание Описание Описание </p>
                                            <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                        </div>
                                        <div class="count">
                                            3000р.
                                        </div>
                                        <div class="old-count">
                                            <s>5000р.</s>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-discount col-md-3">
                                    <div class="thumbnail">
                                        <img class="preview" src="<?=FPATH?>img/ca9a6a18-bdf4-11e6-9cb3-a21d98c18bc5_f32d7059-c36e-11e6-9cb3-a21d98c18bc5.jpeg" alt="...">
                                        <div class="caption">
                                            <h3>SOLDA</h3>
                                            <p class="anons">Описание Описание Описание Описание Описание Описание Описание Описание</p>
                                            <p class="desc">Описание Описание Описание Описание Описание Описание Описание Описание</p>
                                            <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                        </div>
                                        <div class="count">
                                            3000р.
                                        </div>
                                        <div class="old-count">
                                            <s>5000р.</s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>