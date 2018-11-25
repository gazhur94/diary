function saveSchedule(day,date) {
    var arr = [];
    for (var i = 1; i<=8; i++) {
        var elem = $("#lesson-select-"+day+"-"+i).val();
        arr.push(elem);
    };
    $.ajax({
        url: '/schedule/edit',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            date: date,
            arr: arr
        },
        success: function(response){
            //console.log(data);
            console.log(response);
        }
    });
}

function saveHomework(seq, date, day) {
    console.log(seq,date,day);
    var homework = $("#homework-"+day+"-"+seq).val();
    $.ajax({
        url: '/homework/edit',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            homework: homework,
            date: date,
            seq: seq
        },
        success: function(response){
            console.log(response);
        }
    });

}

$(function () {
    var date = getCookie("date");


    getSchedule(date);


    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    }

    function setSheduleOnPage(data) {
        var days = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
        for (var i = 0; i < days.length; i++) {
            var day = days[i];
            var seq = i+1;
            for (var j = 1; j < 9; j++) {
                var homeworkInput = $('#homework-'+day+'-'+j);
                var scheduleInput = $('#lesson-select-'+day+'-'+j);
                if (day == 'mon' && data.mon[j] != undefined) {
                    scheduleInput.val(data.mon[j].lessonId);
                    homeworkInput.val(data.mon[j].homework);
                    console.log(data.mon[j].scheduleId);
                    homeworkInput.data('homework-id', '1');
                } else if (day == 'tue' && data.tue[j] != undefined) {
                    scheduleInput.val(data.tue[j].lessonId);
                    homeworkInput.val(data.tue[j].homework);
                } else if (day == 'wed' && data.wed[j] != undefined) {
                    scheduleInput.val(data.wed[j].lessonId);
                    homeworkInput.val(data.wed[j].homework);
                } else if (day == 'thu' && data.thu[j] != undefined) {
                    scheduleInput.val(data.thu[j].lessonId);
                    homeworkInput.val(data.thu[j].homework);
                } else if (day == 'fri' && data.fri[j] != undefined) {
                    scheduleInput.val(data.fri[j].lessonId);
                    homeworkInput.val(data.fri[j].homework);
                } else if (day == 'sat' && data.sat[j] != undefined) {
                    scheduleInput.val(data.sat[j].lessonId);
                    homeworkInput.val(data.sat[j].homework);
                }
            }

        }

    }

    function getSchedule(date) {
        $.ajax({
            url: '/schedule/get',
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                date: date,
            },
            success: function(response){
                var data = JSON.parse(response);
                setSheduleOnPage(data);
            }
        });
    }
});