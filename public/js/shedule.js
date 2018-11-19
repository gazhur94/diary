$(function () {
    var date = getCookie("date");
    console.log(date);
    $.ajax({
        url: '/shedule/get',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            date: date,
        },
        success: function(response){
            //console.log(data);
            console.log(response);
        }
    });



    function saveSchedule(day,date) {
        var arr = [];
        for (var i = 1; i<=8; i++) {
            var elem = $("#lesson-select-"+day+"-"+i).val();
            arr.push(elem);
        };
        // console.log(day);
        // console.log(arr);
        // console.log(date);
        $.ajax({
            url: '/shedule/edit',
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
                console.log(response.a);
            }
        });
    };


    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    }
});