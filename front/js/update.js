function saveData() {
    let x_value = document.getElementById("x_val").value;
    let y_value = document.getElementById("y_val").value;
    let r_value = document.getElementById("r_val").value;

    alert(x_value + " " + y_value + " " + r_value);
    // $.ajax({
    //     type: "POST",
    //     url: "../../back/php/index.php",
    //     async: false,
    //     data: {"x": x_value.trim(), "y": y_value.trim(), "r": r_value.trim(), "timezone": new Date().getTimezoneOffset()},
    //     success: function(data) {
    //         updateTable(data);
    //     },
    //     error: function(data) {
    //         alert(data);
    //     }
    // });
}