<?if(!$_REQUEST['ELEMENT_ID']){?>

<div class="filters">
    <div class="wrapper">

    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.smart.filter",
        "realty",
        Array(
            "IBLOCK_TYPE" => "ittian_realty_catalog",
            "IBLOCK_ID" => "10",
            "SECTION_ID" => $GLOBALS['CATALOG_SECTION_ID'],
            "FILTER_NAME" => "f",
            "PRICE_CODE" => array(""),
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_GROUPS" => "Y",
            "SAVE_IN_SESSION" => "N",
            "XML_EXPORT" => "Y",
            "SECTION_TITLE" => "NAME",
            "SECTION_DESCRIPTION" => "DESCRIPTION",
            'HIDE_NOT_AVAILABLE' => "",
            "TEMPLATE_THEME" => ""
        ),
        false,
        array('HIDE_ICONS' => 'Y')
    );
    ?>

        <div class="filters-2">
            <div class="layout">
                <a class="blocks" data-layout="blocks"></a>
                <a class="tables" data-layout="tables"></a>
            </div>
            <script>
                var layout = BX.localStorage.get('layout');
                if(layout == 'blocks'){
                    $('.layout .blocks').addClass('active');
                }else if(layout == 'tables'){
                    $('.layout .tables').addClass('active');
                }else{
                    $('.layout .blocks').addClass('active');
                }
                $('.layout a').click(function(){

                    var layout = $(this).data('layout');
                    $('.layout a').removeClass('active');
                    $(this).addClass('active');

                    BX.localStorage.set('layout',layout,30758400);

                    if(layout == 'tables'){
                        $('.cat-sl').addClass('table-cat');
                    }else{
                        $('.cat-sl').removeClass('table-cat');
                    }

                    return false;
                });
            </script>
            <?
            $ar_sort = array(
                'price'=>array('field'=>'PROPERTY_PRICE','order'=>'asc','sort'=>'price'),
                'date'=>array('field'=>'DATE_ACTIVE_FROM','order'=>'desc','sort'=>'date')
            );
            if($_REQUEST['action'] == 'sort_realty' && in_array($_REQUEST['sort'], array_keys($ar_sort)))
            {
                $_SESSION['sort'] = $ar_sort[$_REQUEST['sort']];
            }
            if(!$_SESSION['sort'])
            {
                $_SESSION['sort'] = array('field'=>'DATE_ACTIVE_FROM','order'=>'desc','sort'=>'date');
            }
            ?>
            <div class="row">
                <label>
                    Сортировать по
                    <select id="sort-realty">
                        <option <?=$_SESSION['sort']['sort']=='date'?'selected="selected"':''?> value="date">Дате</option>
                        <option <?=$_SESSION['sort']['sort']=='price'?'selected="selected"':''?> value="price">Цене</option>
                    </select>
                </label>
            </div>
            <script>
                $('#sort-realty').change(function(){

                    var val = $(this).val();
                    $.ajax({
                        type: 'GET',
                        data: {
                            sort: val,
                            action: 'sort_realty'
                        },
                        success: function(){
                            location.reload();
                        }
                    });
                });
            </script>
        </div>

    </div>
</div>

<?}?>