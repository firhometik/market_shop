//点击加号
    $(".js_jia").click(function () {
        var _this = $(this);
        var id = _this.parents('.wediv').attr('data');
        console.log(id);
        var _shu = _this.parent().find(".js_shu").val();
        console.log(_shu);
        _shu++;
        _this.parent().find(".js_shu").val(_shu);
        _this.parent().find(".jiannum").css({"color": "#333"})
        change_one(_this, _shu);
        change_all();
    });
    //点击减号
    $(".js_jian").click(function () {
        var _this = $(this);
        var _shu = _this.parent().find(".js_shu").val();
        _shu--;
        if (_shu <= 1) {
            _shu = 1;
            _this.parent().find(".jiannum").css({"color": "#ccc"})
        }
        _this.parent().find(".js_shu").val(_shu);
        change_one(_this, _shu);
        change_all();
    });
    //选中打钩
    $(".js_cbox").on("click", function () {
            change_all();
    });

    //修改数量
    $(".js_shu").keyup(function () {
        var _this = $(this);
        var _shu = _this.parent().find(".js_shu").val();

        if (_shu <= 0) {
            _shu = 1;
        }

        _this.parent().find(".js_shu").val(_shu);
        change_one(_this, _shu);
        change_all();
    });
    //全选
    $("#heheji").on('click', function () {
        if (this.checked) {
            $(".weui-check").prop("checked", true);
            change_all();
        } else {
            $(".weui-check").prop("checked", false);
            change_all();
        }
    });

    //编辑
    $(".js_bj").click(function () {
        $(".js_b").toggle();
        $(".js_x").toggle();
    });

    //函数：单价*数量=小计
    var change_one = function (_this, _shu) {
        var _dan = _this.parent().attr("data");
        var _one = _dan * _shu;
        _one = changeTwoDecimal_f(_one);
        _this.parent().parent().parent().find(".xaojie").html(_one);
    };
    //函数：全部选中小计，计算总价
    var change_all = function () {
        var _newAll = 0;
        $(".diyLi").each(function () {
            var _this = $(this);
            if (_this.find(".js_cbox").is(':checked')) {
                var _newOne = _this.find(".xaojie").html();
                _newOne = parseFloat(_newOne);
                _newAll = _newAll + _newOne;
            }
        });
        _newAll = changeTwoDecimal_f(_newAll);
        console.log(_newAll)
        $(".js_all").html(_newAll);
    };
    //函数：删除
    var fn_delete = function () {
        $(".diyLi").each(function () {
            var _this = $(this);
            if (_this.find(".js_cbox").is(':checked')) {
                _this.remove();
            }
        });
        location.reload();
    }
    //函数：已选择商品数量。
    var f_mgoods = function () {
        var good_length3 = $(".diyLi").find(".js_cbox:checked").length;
        $(".js_mgoods").html(good_length3);
    };
    //保留小数点后2位。
    function changeTwoDecimal_f(x) {
        var f_x = parseFloat(x);
        if (isNaN(f_x)) {
            return false;
        }
        var f_x = Math.round(x * 100) / 100;
        var s_x = f_x.toString();
        var pos_decimal = s_x.indexOf('.');
        if (pos_decimal < 0) {
            pos_decimal = s_x.length;
            s_x += '.';
        }
        while (s_x.length <= pos_decimal + 2) {
            s_x += '0';
        }
        return s_x;
    }
