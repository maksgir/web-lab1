function saveData() {
    try{
        let x_value = $('#x_val').val();
        let y_value = $('#y_val').val();
        let r_value = $('#r_val').val();

        // alert(x_value + " " + y_value + " " + r_value);

        isCorrect();

        alert("я тут")
    } catch (e) {
        alert(e.message);
    }

    //
    // if (isCorrect(x_value, y_value, r_value)) {
    //     // console.log(new Date().getTimezoneOffset());
    //     alert(new Date().getTimezoneOffset());
    // $.ajax({
    //     type: "POST",
    //     url: "back/php/index.php",
    //     async: false,
    //     data: {"x": x_value.trim(), "y": y_value.trim(), "r": r_value.trim(), "timezone": new Date().getTimezoneOffset()},
    //     success: function(data) {
    //         updateTable(data);
    //     },
    //     error: function(data) {
    //         alert(data);
    //     }
    // });
    // }
}