function saveData() {

    let x_value = $('#x_val').val();
    let y_value = $('#y_val').val();
    let r_value = $('#r_val').val();


    if (isCorrect(x_value, y_value, r_value)) {
        console.log(new Date().getTimezoneOffset());
        $.ajax({
            type: "POST",
            url: "../php/index.php",
            async: false,
            data: {
                "x": x_value.trim(),
                "y": y_value.trim(),
                "r": r_value.trim(),
                "clean": 'false',
                "timezone": new Date().getTimezoneOffset()
            },
            success: function (data) {
                console.log(data)
                addInTable(data);
            },
            error: function (data) {
                alert(data);
            }
        });
    } else {
        alert("false");
    }
}