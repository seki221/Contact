/*
 * zen2han.js v0.1
 * info: http://company.miyanavi.net/archives/1315
 * auther: miyanavi
 * licence: MIT
 *
 */
jQuery(function(){
 
    // 電話番号の処理
    $('.tel-number').change( function(){
        var data = $(this).val();
        var hankaku = data.replace(/[Ａ-Ｚａ-ｚ０-９]|\－|\＋/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});
 
        // 半角数字と+-のみ残す
        var zenkakuDel = new String( hankaku ).match(/\d|\-|\+/g);
        zenkakuDel = zenkakuDel.join("");
 
        $(this).val(zenkakuDel);
    });
 
    // メールアドレスの処理
    $('.mail-address').change( function(){
        var zenkigou = "＠－ー＋＿．，、";
        var hankigou = "@--+_...";
        var data = $(this).val();
        var str = "";
 
        // 指定された全角記号のみを半角に変換
        for (i=0; i<data.length; i++)
        {
            var dataChar = data.charAt(i);
            var dataNum = zenkigou.indexOf(dataChar,0);
            if (dataNum >= 0) dataChar = hankigou.charAt(dataNum);
            str += dataChar;
        }
        // 定番の、アルファベットと数字の変換処理
        var hankaku = str.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});
        $(this).val(hankaku);
    });
 
});