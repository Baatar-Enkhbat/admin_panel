<?php require 'header.php';
_selectNoParam(
    $stmt, $count,
    "select id, title, text, image from transaction order by id desc",
    $id, $title, $text, $image
);

?>

<style>
td,
th {
    font-size: 12px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Таны санхүүгийн гүйлгээ - Нийт : <?=$count?> ш</h5>
                <p class="card-title-desc">
                    Мөнгөн дүнг бүхэл тоогоор оруулна. Сар бүр давтагддаг зардлыг СБ хэсэгт тэмдэглэж ялгана.
                </p>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th class="px-0 pr-1">Огноо</th>
                                <th class="px-0 pr-1">Гүйлгээний утга</th>
                                <th class="px-0 pr-1">СБ</th>
                                <th class="px-0 pr-1">Төрөл</th>
                                <th class="px-0 pr-1">Харилцагч</th>
                                <th class="px-0 pr-1 bg-soft-primary">Мөнгө <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Мөнгө <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Хөрөнгө <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Хөрөнгө <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Бараа <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Бараа <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Авлага <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1 bg-soft-primary">Авлага <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1  bg-soft-warning">Өр <i
                                        class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th class="px-0 pr-1 bg-soft-warning">Өр <i
                                        class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th class="px-0 pr-1 bg-soft-warning">Орлого</th>
                                <th class="px-0 pr-1 bg-soft-warning">Зардал</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-0 pr-1"></td>
                                <td class="px-0 pr-1"></td>
                                <td class="px-0 pr-1">
                                </td>
                                <td></td>
                                <td>Нийлбэр: </td>
                                <td <?php if ($smungu_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($smungu_usuh)?></td>
                                <td <?php if ($smungu_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($smungu_buurah)?></td>
                                <td <?php if ($shurungu_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($shurungu_usuh)?></td>
                                <td <?php if ($shurungu_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($shurungu_buurah)?></td>
                                <td <?php if ($sbaraa_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($sbaraa_usuh)?></td>
                                <td <?php if ($sbaraa_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($sbaraa_buurah)?></td>
                                <td <?php if ($savlaga_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($savlaga_usuh)?></td>
                                <td <?php if ($savlaga_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($savlaga_buurah)?></td>
                                <td <?php if ($sur_buurah > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($sur_buurah)?></td>
                                <td <?php if ($sur_usuh > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($sur_usuh)?></td>
                                <td <?php if ($sorlogo > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($sorlogo)?></td>
                                <td <?php if ($szardal > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($szardal)?></td>
                                <td class="p-0">
                                    <button onclick="confirmDelete(<?=$id?>, '<?=$utga?>')" type="button"
                                        class="btn btn-dribbble btm-sm  p-1 ml-2 mt-2">
                                        <i class="ti-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <form action="/user/record/new" method="post">
                                <tr>
                                    <td class="px-0 pr-1"><input type="text" data-date-format="yyyy-mm-dd"
                                            value="<?=date('Y-m-d')?>" name="ognoo" class="form-control form-control-sm"
                                            id="datepicker">
                                    </td>
                                    <td class="px-0 pr-1"><input value="Дэлгүүрээс хүнс авлаа" name="utga"
                                            class="form-control form-control-sm" style="width: 250px;" type="text"
                                            placeholder=""></td>
                                    <td class="px-0 pr-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="togtmol" class="custom-control-input"
                                                id="customCheck02" data-parsley-multiple="groups"
                                                data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck02"></label>
                                        </div>
                                    </td>
                                    <td class="px-0 pr-1"><input value="дэлгүүр" name="turul"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="хүнс" name="hariltsagch"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="mungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="28000" name="mungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="hurungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="hurungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="baraa_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="baraa_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="avlaga_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="avlaga_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="ur_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="ur_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="" name="orlogo"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input value="28000" name="zardal"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="p-0">
                                        <button type="submit" class="btn btn-instagram p-1 mt-2 ml-2 btn-sm">
                                            <i class="ti-save"></i>
                                        </button>
                                    </td>
                                </tr>
                            </form>

                            <?php

while (_fetch($stmt)):
?>

                            <tr>
                                <td class="px-0 pr-1"><?=$ognoo;?></td>
                                <td class="px-0 pr-1"><a href="/user/record/edit?id=<?=$id?>"><?=$utga?></a></td>
                                <td class="px-0 pr-1">
                                    <?php if (!empty($togtmol)): ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" checked name="togtmol" class="custom-control-input"
                                            id="customCheck02" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="customCheck02"></label>
                                    </div>
                                    <?php endif?>
                                </td>
                                <td><?=$turul?></td>
                                <td><?=$hariltsagch?></td>
                                <td <?php if ($mungu_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($mungu_usuh)?></td>
                                <td <?php if ($mungu_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($mungu_buurah)?></td>
                                <td <?php if ($hurungu_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($hurungu_usuh)?></td>
                                <td <?php if ($hurungu_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($hurungu_buurah)?></td>
                                <td <?php if ($baraa_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($baraa_usuh)?></td>
                                <td <?php if ($baraa_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($baraa_buurah)?></td>
                                <td <?php if ($avlaga_usuh > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($avlaga_usuh)?></td>
                                <td <?php if ($avlaga_buurah > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($avlaga_buurah)?></td>
                                <td <?php if ($ur_buurah > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($ur_buurah)?></td>
                                <td <?php if ($ur_usuh > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($ur_usuh)?></td>
                                <td <?php if ($orlogo > 0): ?> class="table-success" <?php endif?>>
                                    <?=formatMoney($orlogo)?></td>
                                <td <?php if ($zardal > 0): ?> class="table-danger" <?php endif?>>
                                    <?=formatMoney($zardal)?></td>
                                <td class="p-0">
                                    <button onclick="confirmDelete(<?=$id?>, '<?=$utga?>')" type="button"
                                        class="btn btn-dribbble btm-sm  p-1 ml-2 mt-2">
                                        <i class="ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function confirmDelete(recordId, recordUtga) {
    var ok = confirm("Та \"" + recordUtga + "\" утгатай гүйлгээг устгахдаа итгэлтэй байна уу?");
    if (ok) {
        location = "/user/record/delete?id=" + recordId + "&utga=<?=$utga?>";
    }
}
</script>

<?php require 'footer.php';?>