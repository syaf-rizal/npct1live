/**
 * SmartDevTable.js alpha 1
 * Porting from class newtable.js (created by Zona Ariemenda <zona@edi-indonesia.co.id>)
 * Modiefied by syafrizal <syafrizal@edi-indonesia.co.id>
 */

$(document).ready(function() {
    var dd = new DropDown($('.byPassTime'));
    var ds = new DropDown($('.sortByDropDown'));

    $(document).click(function() {
        $('.wrapper-dropdown-3').removeClass('active');
    });

    var $preloaderSmart = $(".container-screen-big-loader");
    setTimeout(function() {
        $preloaderSmart.next().children().next().show();
        $preloaderSmart.hide();
    }, 1000);
    var checked = false;

    if ($(".date-pickers").length > 0) {
        $('.date-pickers').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY', lang: 'id', weekStart: 0, time: false });
    }

    if ($(".datepickers-range").length > 0) {
        $('.date-end').bootstrapMaterialDatePicker({ format: $(".datepickers-range").attr("data-date-format"), weekStart: 0, lang: 'id', time: false });
        $('.date-start').bootstrapMaterialDatePicker({ format: $(".datepickers-range").attr("data-date-format"), weekStart: 0, lang: 'id', time: false }).on('change', function(e, date) {
            $('.date-end').bootstrapMaterialDatePicker('setMinDate', date);
        });
    }

    $(".defaulthide").hide();
    $(".search-panel").css("display", "none");
    $(".chk-advanced").change(function() {
        var $chk = $(this),
            $prev = $chk.parent().parent().prev(),
            $labelMore = $prev.children();
        if ($chk.is(":checked")) {
            $(".defaulthide").show();
            $labelMore.html('Sembunyikan opsi lainnya');
        } else {
            $(".defaulthide").hide();
            $labelMore.html('Tamplikan opsi lainnya');
        }
        return false;
    });
    $(".show-advanced").on("click", function() {
        var $this = $(this),
            $parent = $this.parent(),
            $chk = $parent.next().children().children(':nth-child(1)');
        $chk.prop('checked', true)
        if ($chk.is(":checked")) {
            $(".defaulthide").show();
            $this.html("Sembunyikan opsi lainnya")
        } else {
            $(".defaulthide").hide();
            $this.html("Tamplikan opsi lainnya")
        }
        return false;
    });

    $(".tbs_menu").click(function() {
        chk = $(".filled-in-custom:checked").length;
        url = $(this).attr('url');
        jml = $(this).attr('jml');
        met = $(this).attr('met');
        suff = $(this).attr('url-suffix');
        isngajax = $(this).attr('isngajax');
        datapost = $(this).attr('data-form');
        isbody = $(this).attr('data-body');
        if (url == "") return false;
        if (chk == 0 && jml != '0') {
            bootbox.alert("Maaf, tidak ada data yang dipilih");
            return false;
        }
        if (jml == '1' && chk > 1) {
            bootbox.alert("Maaf, data yang bisa di proses atau di pilih hanya 1 (satu)");
            return false;
        }
        if (met == "GET") {
            bootbox.confirm({
                message: "Proses data terpilih sekarang ?",
                buttons: {
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-light'
                    },
                    confirm: {
                        label: 'Ok',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-primary'
                    }
                },
                callback: function(result) {
                    if (result) {
                        !suff ? location.href = url + '/' + $(".filled-in-custom:checked").val() : location.href = url + '/' + $(".filled-in-custom:checked").val() + suff;
                        return false;
                    }
                }
            });
        } else if (met == "MULTIPLEGET") {
            bootbox.confirm({
                message: "Proses data terpilih sekarang ?",
                buttons: {
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-light'
                    },
                    confirm: {
                        label: 'Ok',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-primary'
                    }
                },
                callback: function(result) {
                    if (result) {
                        var arrChk = new Array();
                        $.each($(".tb_chk:checked"), function() {
                            arrChk.push($(this).val());
                        });
                        var multipleId = arrChk.join("-");
                        !suff ? location.href = url + '/' + multipleId : location.href = url + '/' + multipleId + suff;
                        return false;
                    }
                }
            });
        } else if (met == "GETNEW") {
            bootbox.confirm({
                message: "Proses data terpilih sekarang ?",
                buttons: {
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-light'
                    },
                    confirm: {
                        label: 'Ok',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-primary'
                    }
                },
                callback: function(result) {
                    if (result) {
                        if (jml == '0')
                            window.open(url, '_blank');
                        else
                            var arr = new Array();
                        $.each($(".tb_chk:checked"), function() {
                            arr.push($(this).val());
                        });
                        window.open(url + '/' + arr.join(), '_blank');
                        return false;
                    }
                }
            });
        } else if (met == "BOOTSTRAPDIALOG") {
            bootbox.confirm({
                message: "Proses data terpilih sekarang ?",
                buttons: {
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-light'
                    },
                    confirm: {
                        label: 'Ok',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-primary'
                    }
                },
                callback: function(result) {
                    if (result) {
                        console.log('Bootstrap Dialog Disini');
                    }
                }
            });
        } else if (met == "POST") {
            if (isngajax) {
                var data = $($(this).attr("data-form")).serializeArray();
            } else {
                var data = $("#tb_form").serialize();
            }
            bootbox.confirm({
                message: "Proses data terpilih sekarang ?",
                buttons: {
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-light'
                    },
                    confirm: {
                        label: 'Ok',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-primary'
                    }
                },
                callback: function(result) {
                    if (result) {
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: data,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            error: function() {
                                bootbox.alert("Maaf, request halaman tidak ditemukan");
                                return false;
                            },
                            beforeSend: function() {
                                $('.smartDev-overlay').show();
                            },
                            complete: function() {
                                $('.smartDev-overlay').hide();
                            },
                            success: function(data) {
                                if (data.status == 400) {
                                    bootbox.alert(data.error);
                                } else if (data.status == 200) {
                                    bootbox.alert(data.message);
                                    if (data.redirect.statement == true) {
                                        setTimeout(function() {
                                            location.href = data.redirect.url;
                                        }, 2000);
                                    } else {
                                        setTimeout(function() {
                                            location.reload(true);
                                        }, 2000);
                                    }
                                } else {
                                    bootbox.alert('Oops ... Silahkan periksa kembali koneksi internet anda');
                                }
                                $('.screenOverlay').hide();
                            }
                        });
                    }
                }
            });
        } else if (met == "POSTGET") {
            if (isngajax) var data = $($(this).attr("data-form")).serialize();
            else var data = $("#tb_form").serialize();
            bootbox.confirm({
                message: "Proses data terpilih sekarang ?",
                buttons: {
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-light'
                    },
                    confirm: {
                        label: 'Ok',
                        className: 'btn-wide mb-2 mr-2 btn-transition btn btn-outline-primary'
                    }
                },
                callback: function(result) {
                    if (result) {
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: data,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            error: function() {
                                bootbox.alert("Maaf, request halaman tidak ditemukan");
                                return false;
                            },
                            beforeSend: function() {
                                $('.smartDev-overlay').show();
                            },
                            complete: function() {
                                $('.smartDev-overlay').hide();
                            },
                            success: function(data) {
                                $(isbody).html(data);
                                return false;
                            }
                        });
                    }
                }
            });
        }
        $(this).val(0);
        return false;
    });
    $("#tb_chkall").click(function() {
        $(".tabelajax").find(':checkbox').attr('checked', this.checked);
        $('#newtr').remove();
        $(".tabelajax tr td span.tb_process").html('');
        if (!this.checked) {
            $(".tabelajax input:checkbox:not(#tb_chkall)").parent().parent().removeClass("selected");
            $(".tabelajax input:checkbox:not(#tb_chkall)").parent().parent().next().removeClass("selected");
        } else {
            $(".tabelajax input:checkbox:not(#tb_chkall)").parent().parent().addClass("selected");
            $(".tabelajax input:checkbox:not(#tb_chkall)").parent().parent().next().addClass("selected");
        }
    });
    $("#tb_cari").bind('keypress', function(kode) {
        return bind_tb_cari(kode);
    });
    $(".tb_keycariadv").bind('keypress', function(kode) {
        return bind_tb_cari(kode);
    });
    $('.key_search').keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == 13) {
            $(".btnsearch").click();
            return false;
        }
        event.stopPropagation();
    });
    $(".keywords-select").change(function(e) {
        var $e = $(this);
        if ($e.attr("data-url")) {
            var $parent = $e.parent().parent().parent();
            var $target = $parent.next().children().children().children().attr("id");
            $.get($e.attr("data-url") + $e.val(), function($respon) {
                if ($respon) {
                    $('#' + $target).html($respon);
                }
            });
        } else if ($e.attr("data-onchange")) {
            if ($e.attr("data-post")) {
                postobj($e);
                return false;
            }
        } else {
            return false;
        }
    });
    $(".keywords").keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == 13) {
            postobj($(this));
            return false;
        }
        event.stopPropagation();
    });
    $(".btnreload").click(function(e) {
        if ($(".btnsearch").length > 0) $(".btnsearch").click();
        else postobj($(this));
        return false;
    });
    $(".btnsearch").click(function(e) {
        var $this = $(this);
        var $data = $($this.attr("data-form")).serializeArray();
        $data.push({ name: "data-post", value: $this.attr("data-post") });
        $.ajax({
            type: 'POST',
            url: $this.attr("data-action"),
            data: $data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error: function() {
                alertify.error("Maaf, request halaman tidak ditemukan");
                return false;
            },
            beforeSend: function() {
                if ($("#progress").length === 0) {
                    $($this.attr("data-target")).append($("<div></div>").attr("class", "overlays"))
                    $($this.attr("data-target")).append($("<div><dt/><dd/></div>").attr("id", "progress-ojan"));
                    $("#progress").width((50 + Math.random() * 30) + "%");
                }
            },
            complete: function() {
                if ($(".overlays").length > 0) {
                    $(".overlays").remove();
                }
            },
            success: function(data) {
                $($this.attr("data-target")).html(data);
            }
        });
        return false;
    });
    $(".btnreset").click(function() {
        $(".keywords").val("");
        return false;
    });
});

function fctrim(str) {
    str = str.replace(/^\s+/, '');
    for (var i = str.length - 1; i >= 0; i--) {
        if (/\S/.test(str.charAt(i))) {
            str = str.substring(0, i + 1);
            break;
        }
    }
    return str;
}

/* Extend Code */
function order(a) {
    var $this = $(a);
    if ($this.attr("orderby") || $this.attr("data-post")) {
        $("input[name='orderby']").val($this.attr("orderby"));
        $("input[name='sortby']").val($this.attr("sortby"));
        if ($(".btnsearch").length > 0) $(".btnsearch").click();
        else postobj($this);
    }
    return false;
}

function view(b) {
    var $this = $(b);
    if ($this.attr("data-post")) {
        $("input[name='tb_view']").val(parseInt($this.html()));
        if ($(".btnsearch").length > 0) $(".btnsearch").click();
        else postobj($this);
    }
    return false;
}

function nextprevpage(c) {
    var $this = $(c);
    if ($this.attr("data-post")) {
        $("input[name='tb_hal']").val(parseInt($this.html()));
        if ($(".btnsearch").length > 0) $(".btnsearch").click();
        else postobj($this);
    }
    return false;
}

function postobj(d) {
    var $this = $(d);
    var $data = $($this.attr("data-form")).serializeArray();
    $data.push({ name: "data-post", value: $(d).attr("data-post") });
    $.ajax({
        type: 'POST',
        url: $(d).attr("data-action"),
        data: $data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        error: function() {
            bootbox.alert("Maaf, request halaman tidak ditemukan");
            return false;
        },
        beforeSend: function() {
            $($($this.attr("data-screen-loader"))).show();
            $($($this.attr("data-screen-loader")).next().children().next()).hide();
        },
        complete: function() {
            $($($this.attr("data-screen-loader"))).hide();
            $($($this.attr("data-screen-loader")).next().children().next()).show();
        },
        success: function(data) {
            $($this.attr("data-target")).html(data);
            return false;
        }
    });
    return false;
}

function expand(e) {
    var $checked = false;
    var $this = $(e);
    var $exrow = $this.parent().parent();
    var $urldtl = '';
    if ($exrow.attr('urldetil')) {
        if ($exrow.attr('urldetil') != '') {
            $('#newtr').remove();
            var $jmltd = $('td', $exrow).length;
            var $addtd = '';
            var $cls = '';
            if ($(this).parent().children().first().attr('class'))
                $cls = ' class="' + $(this).parent().children().first().attr('class') + '"';
            $exrow.after('<tr id="newtr">' + $addtd + '<td id="filltd" style="font-size:12px;" colspan="' + $jmltd + '"' + $cls + '></td></tr>');
            $('#filltd').html('Loading..');
            $urldtl = $('#urldtl').val() + $exrow.attr('urldetil');
            $.get($urldtl, function(data) {
                $('#filltd').html(data);
                $('#newtr').removeClass("selected");
            });
        }
    }
    //} 
    return false;
}

function modalrow(f) {
    var $this = $(f);
    if ($this.attr("data-url")) {
        $.get($this.attr("data-url"), function(hasil) {
            if (hasil) {
                if ($(".modal-backdrop").length === 0) {
                    BootstrapDialog.show({
                        title: '',
                        type: BootstrapDialog.TYPE_PRIMARY,
                        size: BootstrapDialog.SIZE_WIDE,
                        message: hasil,
                    });
                }
            }
        });
    }
}

function _keypress(g) {
    $(g).keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == 13) {
            $(".btnsearch").click();
            return false;
        }
        event.stopPropagation();
    });
}

function selectedrow(h) {
    var $this = $(h);
    if ($this.attr("data-target") && $this.attr("data-retrive")) {
        if ($this.attr("data-url-callback") && $this.attr("data-field-callback")) {
            $.get($this.attr("data-url-callback"), function($hasil) {
                if ($hasil) {
                    var $arrdata = $hasil.split('|');
                    var $field = $this.attr("data-field-callback").split('.');
                    for (var $x = 0; $x < $arrdata.length; $x++) {
                        var $object = $("#" + $field[$x]).get(0).tagName;
                        if ($object === 'INPUT' || $object === 'SELECT' || $object === 'TEXTAREA') {
                            $("#" + $field[$x]).val($arrdata[$x]);
                        } else {
                            $("#" + $field[$x]).html($arrdata[$x]);
                        }
                    }
                }
            });
        } else {
            var $tmpids = $this.attr("data-target").split('|');
            var $tdresponse = $this.attr("data-retrive").split('|');
            for (var $i = 0; $i < $tmpids.length; $i++) {
                var $tipe = $("#" + $tmpids[$i]).get(0).tagName;
                if ($tipe === 'INPUT' || $tipe === 'SELECT') {
                    $("#" + $tmpids[$i]).val($tdresponse[$i]);
                } else {
                    $("#" + $tmpids[$i]).html($tdresponse[$i]);
                }
            }
        }
        $(".modal-backdrop, .modal, .bootstrap-dialog, .modal-dialog").remove();
    } else {
        return false;
    }
    return false;
}

function _chkall(i) {
    var $this = $(i);
    var $target = $this.attr("data-body");
    var $bar = $this.attr("data-bar");
    var $length = 0;
    if ($this.is(":checked")) {
        $($target).find(':checkbox').prop('checked', true);
        $length = $($target + ' .tb_chk').filter(':checked').length;
        $(".selected_items span").html($length + ' data terpilih');
        $($bar).show();
    } else {
        $($target).find(':checkbox').prop('checked', false);
        $($bar).hide();
    }
    return false;
}

function submenuHome(r) {
    var $this = $(r),
        $data = {
            key: Math.random()
        };
    if ($this.attr("data-modal") || $this.attr("data-append")) {
        $.ajax({
            type: 'POST',
            url: $this.attr('act'),
            data: $data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'html',
            beforeSend: function() {
                $('.loading-custom').show();
                $('.loading-custom-content').html(loadingCustom.content);
            },
            complete: function() {
                $('.loading-custom').hide();
            },
            success: function(data) {
                if ($this.attr("data-modal")) {
                    if ($(".modal-backdrop").length === 0) {
                        BootstrapDialog.show({
                            title: '',
                            type: BootstrapDialog.TYPE_PRIMARY,
                            size: ($this.attr("data-size") ? $this.attr("data-size") : BootstrapDialog.SIZE_WIDE),
                            message: data.replace(/(?:\r\n|\r|\n)/g, ''),
                        });
                    }
                }
                if ($this.attr("data-append")) {
                    $($this.attr("data-class")).fadeOut();
                    $($this.attr("data-div")).fadeIn(function() {
                        $($this.attr("data-div")).html(hasil);
                        $($this.attr("data-div")).css("margin", "10px");
                    });
                }
                return false;
            },
            error: function(data, status, x) {
                console.log(JSON.stringify(data));
                $('.loading-custom').hide();
            }
        });
        return false;
    } else {
        location.href = $this.attr('act');
    }
    return false;
}

function closepanel(j) {
    var $this = $(j);
    BootstrapDialog.confirm('Anda yakin akan menutup form berikut ?', function(r) {
        if (r) {
            $($this.attr("data-show")).fadeIn();
            $($this.attr("data-closed")).fadeOut(function() {
                $($this.attr("data-closed")).html('');
            });
        } else {
            return false;
        }
    });
}

function appendrow(k) {
    var $this = $(k);
    var $exrow = $this.closest("tr");
    var $jmltd = $('td', $exrow).length;
    if ($this.attr("data-url")) {
        $('#newtr').remove();
        var $addtd = '';
        var $cls = '';
        $exrow.after('<tr id="newtr">' + $addtd + '<td id="filltd" style="font-size:12px;" colspan="' + $jmltd + '"' + $cls + '></td></tr>');
        $('#filltd').html('Loading..');
        $.get($this.attr("data-url"), function(data) {
            $('#filltd').html(data);
            $('#newtr').removeClass("selected");
        });

    }
    return false;
}

function _rowtogglemenu(l) {
    var $this = $(l);
    var $tparent = $this.closest("tr").attr("id");
    chk = $('#' + $tparent).find(':checkbox:checked').length;
    url = $this.attr('url');
    jml = $this.attr('jml');
    met = $this.attr('met');
    isbody = $this.attr('data-body');
    if (url == "") return false;
    if (chk == 0 && jml != '0') {
        alertify.alert("Maaf, tidak ada data yang dipilih");
        return false;
    }
    if (jml == '1' && chk > 1) {
        alertify.alert("Maaf, data yang bisa di proses atau di pilih hanya 1 (satu)");
        return false;
    }
    if (met == "GET") {
        alertify.okBtn("Ya").cancelBtn("Tidak").confirm("Proses data terpilih sekarang ?", function(ev) {
            ev.preventDefault();
            if (jml == '0') location.href = url;
            else location.href = url + '/' + $(".tb_chk:checked").val() + '.html';
            return false;
        }, function(ev) {
            ev.preventDefault();
            alertify.error("Proses dibatalkan");
            return false;
        });
    } else if (met == "POST") {
        alertify.okBtn("Ya").cancelBtn("Tidak").confirm("Proses data terpilih sekarang ?", function(ev) {
            ev.preventDefault();
            var data = $($this.attr("data-form")).serializeArray();
            data.push({ name: "type", value: "2Eqj6weab" });
            $.ajax({
                type: "POST",
                url: $this.attr("url") + '/ajax',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                beforeSend: function() {
                    preloader.on();
                },
                complete: function() {
                    preloader.off();
                },
                success: function(data) {
                    if (data.error != "") {
                        alertify.error(data.error);
                        return false;
                    } else {
                        alertify.success(data.message);
                        setTimeout(function() {
                            location.href = data.returnurl;
                        }, 2000);
                    }
                },
                error: function(data, status, e) {
                    alertify.error(data);
                }
            });
        }, function(ev) {
            ev.preventDefault();
            alertify.error("Proses dibatalkan");
            return false;
        });
    }
    return false;
}

function _clearkey(m) {
    var $this = $(m);
    $(".keywords").val("");
    postobj($this);
    return false;
}

function _hideBottom(o) {
    var $this = $(o);
    var $target = $this.attr("data-body");
    var $bar = $this.attr("data-bar");
    $($bar).hide("fast", function() {
        $($target).find(':checkbox').prop('checked', false);
    });
    return false;
}

function _mfb(n) {
    var $this = $(n);
    if ($this.attr("data-modal") || $this.attr("data-append")) {
        $.get($this.attr('act'), function(hasil) {
            if (hasil) {
                if ($this.attr("data-modal")) {
                    if ($(".modal-backdrop").length === 0) {
                        BootstrapDialog.show({
                            title: '',
                            type: BootstrapDialog.TYPE_SUCCESS,
                            size: BootstrapDialog.SIZE_WIDE,
                            message: hasil
                        });
                        return false;
                    }
                }
                if ($this.attr("data-append")) {
                    $($this.attr("data-class")).fadeOut();
                    $($this.attr("data-div")).fadeIn(function() {
                        $($this.attr("data-div")).html(hasil);
                        $($this.attr("data-div")).css("margin", "10px");
                    });
                }
                return false;
            }
        });
    } else {
        location.href = $this.attr('act');
    }
    return false;
}


function _delrecord(p) {
    var $this = $(p);
    var url = $this.attr("url");
    alertify.okBtn("Ya").cancelBtn("Tidak").confirm("Proses data terpilih sekarang ?", function(ev) {
        ev.preventDefault();
        var data = $($this.attr("data-form")).serializeArray();
        data.push({ name: "type", value: "2Eqj6weab" });
        $.ajax({
            type: "POST",
            url: $this.attr("url") + '/ajax',
            data: data,
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                preloader.on();
            },
            complete: function() {
                preloader.off();
            },
            success: function(data) {
                if (data.error != "") {
                    alertify.error(data.error);
                    return false;
                } else {
                    alertify.success(data.message);
                    setTimeout(function() {
                        location.href = data.returnurl;
                    }, 2000);
                }
            },
            error: function(data, status, e) {
                alertify.error(data);
            }
        });
    }, function(ev) {
        ev.preventDefault();
        alertify.error("Proses dibatalkan");
        return false;
    });
}

function _chk(q) {
    var $this = $(q);
    var $class = $this.attr("class");
    var $length = $('.' + $class + ':checked').length;
    if ($length > 0) {
        $(".selected_items span").html($length + ' data terpilih');
        $(".dropdown").addClass("show");
        $(".smartdev-table-dropdown").addClass("show");
        $(".smartdev-table-dropdown").css({
            'position': 'absolute',
            'transform': 'translate3d(-196px, 32px, 0px)',
            'top': '10px !important',
            'left': '0px',
            'will-change': 'transform'
        });
    } else {
        $(".dropdown").removeClass("show");
        $(".smartdev-table-dropdown").removeClass("show");
    }
    return false;
}

function submenuHome(r) {
    var $this = $(r),
        $data = {
            key: Math.random(),
            _tokens_apps_etrans: $('meta[name=_tokens_apps_etrans]').attr("content-csrf")
        };
    if ($this.attr("data-modal") || $this.attr("data-append")) {
        $.ajax({
            type: 'POST',
            url: $this.attr('act'),
            data: $data,
            dataType: 'html',
            beforeSend: function() {
                $('.loading-custom').show();
                $('.loading-custom-content').html(loadingCustom.content);
            },
            complete: function() {
                $('.loading-custom').hide();
            },
            success: function(data) {
                if ($this.attr("data-modal")) {
                    if ($(".modal-backdrop").length === 0) {
                        BootstrapDialog.show({
                            title: '',
                            type: BootstrapDialog.TYPE_PRIMARY,
                            size: ($this.attr("data-size") ? $this.attr("data-size") : BootstrapDialog.SIZE_WIDE),
                            message: data.replace(/(?:\r\n|\r|\n)/g, ''),
                        });
                    }
                }
                if ($this.attr("data-append")) {
                    $($this.attr("data-class")).fadeOut();
                    $($this.attr("data-div")).fadeIn(function() {
                        $($this.attr("data-div")).html(hasil);
                        $($this.attr("data-div")).css("margin", "10px");
                    });
                }
                return false;
            },
            error: function(data, status, x) {
                console.log(JSON.stringify(data));
                $('.loading-custom').hide();
            }
        });
        return false;
    } else {
        location.href = $this.attr('act');
    }
    return false;
}

function ReplaceAll(Source, stringToFind, stringToReplace) {
    var temp = Source;
    var index = temp.indexOf(stringToFind);
    while (index != -1) {
        temp = temp.replace(stringToFind, stringToReplace);

        index = temp.indexOf(stringToFind);
    }
    return temp;
}

function showSearchPanel() {
    $(".search-panel").slideToggle();
    return false;
}

function DropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown-range > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
}
DropDown.prototype = {
    initEvents: function() {
        var obj = this;

        obj.dd.on('click', function(event) {
            $(this).toggleClass('active');
            return false;
        });

        obj.opts.on('click', function() {
            var opt = $(this);
            obj.val = opt.text();
            obj.index = opt.index();
            obj.placeholder.text(obj.val);
        });
    },
    getValue: function() {
        return this.val;
    },
    getIndex: function() {
        return this.index;
    }
}

/* End Extend Code */