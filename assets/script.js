$(document).ready(function(){
    var item;
    //загрузка логотипов из JSON
    $.ajax({
        url: "/Lider/img/logo.json",
        dataType: 'json',
        success: function (data) {
            console.log(data);
            for (item in data) {
                console.log(data[item]);
                var url = data[item];
                $('<div>').appendTo('.multiple-items');
                $('<a href="#">').appendTo('.multiple-items div:last');
                $('<img>').attr('src', url).appendTo('.multiple-items div a:last');

            }
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1
            });
        }
    });

    loadData('all', 'brand');
    loadTreeMenu();

    function loadData(count, table, id_name, id) {
        $.ajax({
            type: "POST",
            url: "/Lider/model/ajax.php",
            async: true,
            dataType: 'json',
            data: {count: count, table: table, id_name: id_name, id: id},
            success: function (data) {
                switch (table) {
                    case 'brand':
                        for (item in data) {
                            var idBrand = data[item]['id'];
                            var brand = data[item]['brand'];
                            $('<option>').attr('value', idBrand).html(brand).appendTo('#select-brand');
                        }
                        break;
                }
            }
        });
    }

    function loadTreeMenu(){
        $.ajax({
            type: "POST",
            url: "/Lider/model/ajax.php",
            async: true,
            dataType: 'json',
            data: {
                join: 'join',
                q: 'SELECT `category`.`id_category`,' +
                '`category`.`category`,' +
                '`subcategory`.`id`,' +
                '`subcategory`.`subCategory` FROM `category` LEFT JOIN `subcategory` ON `category`.`id_category` = `subcategory`.`id_category`'
            },
            success: function (data) {
                var idid = '';
                for (item in data) {
                    var idCategory = data[item]['id_category'];
                    var id = data[item]['id'];
                    var category = data[item]['category'];
                    var subCategory = data[item]['subCategory'];
                    if(idid != idCategory){
                        $('<li>').attr('data_idCategory', idCategory).appendTo('#tree-menu ul.category');
                        $('<a>').attr('href' , '#').html(category).appendTo('#tree-menu ul li:last');
                        idid = idCategory;
                    }
                    if(id != null){
                        $('<ul>').addClass('subcategory').attr('data_id', idCategory).appendTo('#tree-menu ul li[data_idCategory=' + idCategory +']');
                        $('<li>').attr('data_id', id).appendTo('#tree-menu ul.subcategory:last');
                        $('<a>').attr('href' , '#').html(subCategory).appendTo('#tree-menu ul.subcategory:last li:last');
                    }
                }
            },
            complete: function(){
                //каталог-меню в левом сайдбаре
                $('#tree-menu').ntm();
            }
        });
    }



});
