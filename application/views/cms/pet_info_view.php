﻿<style>
    .thumb {
        height: 175px;
        border: 1px solid #000;
        margin: 10px 5px 0 0;
    }
</style>


</head>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    ペット情報
                    <!-- <small>顧客情報はここから->  <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small> -->
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>ペット詳細</h2>
                        </div>
                        <div class="body">
                            <form action="cl_pet_info/pet_info_validation" id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pet_name" required>
                                        <label class="form-label">名前</label>
                                    </div>
                                </div>
                                <!-- File Upload | Drag & Drop OR With Click & Choose -->
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>写真</h2>
                                                </div>
                                                <div class="body">
                                                    <input type="file" id="files" name="" multiple />
                                                    <output id="list"></output>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pet_classification" required>
                                        <label class="form-label">分類</label>
                                    </div>
                                    <div class="help-info">犬、猫、鳥</div>
                                </div>
                            <div class="form-group form-float">
                                <label class="form-label">性別</label>
                                <div class="form-line">
                                    <input type="radio" name="pet_animal_gender" id="male" value="1" class="with-gap" checked/>
                                    <label for="male">オス</label>

                                    <input type="radio" name="pet_animal_gender" id="female" value="2" class="with-gap">
                                    <label for="female" class="m-l-20">メス</label>

                                    <input type="radio" name="pet_animal_gender" id="other" value="3" class="with-gap">
                                    <label for="other" class="m-l-20">その他</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="date">生年月日</label>
                                    <input id="date" name="pet_birthday" class="form-control" type="date" >
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="form-line">
                                    <label class="with-gap">去勢</label>
                                    <input type="radio" name="pet_contraception" id="on" value=1 class="with-gap">
                                    <label for="on">有</label>
                                    <input type="radio" name="pet_contraception" id="off" value=2 class="with-gap" checked/>
                                    <label for="off">無</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="pet_body_height" required>
                                        <label class="form-label">体高</label>
                                    </div>
                                    <div class="help-info">cm</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="pet_body_weight" required>
                                        <label class="form-label">体重</label>
                                    </div>
                                    <div class="help-info">kg</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="pet_information" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">備考：</label>
                                    </div>
                                </div>
                                    <button class="btn btn-primary waves-effect" type="submit">新規登録</button>
                                    <button class="btn btn-primary waves-effect" type="reset">クリア</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= isset($text)? $text: false; ?>

    </div>
</section>
<!-- Dropzone Plugin Js -->
<script src="../assets/cms/plugins/dropzone/dropzone.js"></script>

<!-- Jquery Core Js -->
<script src="../assets/cms/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../assets/cms/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../assets/cms/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../assets/cms/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../assets/cms/plugins/node-waves/waves.js"></script>

<!-- Autosize Plugin Js -->
<script src="../assets/cms/plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="../assets/cms/plugins/momentjs/moment.js"></script>

<!-- Custom Js -->
<script src="../assets/cms/js/admin.js"></script>
</body>

</html>