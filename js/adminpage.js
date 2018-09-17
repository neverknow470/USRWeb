function getjsondata() {
    $.getJSON("jsondata/contactdata.json", function (json) {
        var cnt=1;
        var strHtml = "<table border='1' style='min-width:400px;word-break:break-all;'>";
        $.each(json, function (infoIndex, info) {
            strHtml += "<tr><td colspan='2' style='text-align:left;'>第" + cnt + "筆 新增日期："+info["date"]+"</td></tr>";
            strHtml += "<tr><td style='width:30%'>姓名</td><td>" + info["name"] + "</td></tr>";
            strHtml += "<tr><td>性別</td><td>" + info["sex"] + "</td></tr>";
            strHtml += "<tr><td>聯絡電話</td><td>" + info["tel"] + "</td></tr>";
            strHtml += "<tr><td>電子郵件</td><td>" + info["email"] + "</td></tr>";
            strHtml += "<tr><td>問題或建議</td><td>" + info["message"] + "</td></tr>";
            cnt++;
        })
        strHtml += "</table>";
        document.getElementById('contactdatajson').innerHTML = strHtml;
    });
}

function getaccountdata() {
    $.getJSON("jsondata/accountdata.json", function (json) {
        $.each(json, function (infoIndex, info) {
            document.getElementById('hUSRID').value = info["USRID"];
            document.getElementById('hUSRPASS').value = info["USRPASS"];
        })
    });
}

function checkpass() {
    var USRID = document.getElementById('USRID').value;
    var USRPASS = document.getElementById('USRPASS').value;
    var hUSRID = document.getElementById('hUSRID').value;
    var hUSRPASS = document.getElementById('hUSRPASS').value;
    if (USRID == hUSRID && USRPASS == hUSRPASS) {
        document.getElementById('logindiv').style.display = "none";
        document.getElementById('maindiv').style.display = "block";
        getjsondata();
        geteventdata();
        document.getElementById('USRID').value = "";
        document.getElementById('USRPASS').value = "";
    }
    else {
        document.getElementById('USRPASS').value = "";
        alert("帳號密碼有誤！");
    }
}

function eventadd() {
    var eventname = document.getElementById('eventname');
    var eventurl = document.getElementById('eventurl');
    var error = '';
    if (eventname.value == '') {
        error += '未填寫活動名稱！\n';
    }
    if (eventurl.value == 0) {
        error += '未填寫活動網址！\n';
    }

    if (error != '') {
        alert(error);
    } else {
        var date = new Date();
        var jsontxt = "{\"eventname\":\"" + eventname.value + "\",\"eventurl\":\"" + eventurl.value + "\",\"eventdate\":\"" + date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + date.getDate() + "\"}"
        eventname.value = '';
        eventurl.value = '';
        $.ajax({
            type: "POST",
            url: "writtingjson.php",
            data: { jsontxt: jsontxt, filename: "eventdata" }
        });
    }
}

function geteventdata() {
    $.getJSON("jsondata/eventdata.json", function (json) {
        var cnt=1;
        var strHtml = "<table border='1' style='min-width:400px;word-break:break-all;'>";
        $.each(json, function (infoIndex, info) {
            strHtml += "<tr><td colspan='2' style='text-align:left;'>第" + cnt + "筆 新增日期：" + info["eventdate"] + "</td></tr>";
            strHtml += "<tr><td style='width:30%'>活動名稱</td><td>" + info["eventname"] + "</td></tr>";
            strHtml += "<tr><td>活動網址</td><td>" + info["eventurl"] + "</td></tr>";
            cnt++;
        })
        strHtml += "</table>";
        document.getElementById('eventdatajson').innerHTML = strHtml;
    });
}

function logout() {
    document.getElementById('logindiv').style.display="block";
    document.getElementById('maindiv').style.display="none";
    getaccountdata();
}