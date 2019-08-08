$(document).ready(function () {
    $("#NombreC").on('change', function () {
        var curso = $(this).val();
        switch (curso) {
            case "Paginas web basico":
                alert("El curso elegido tien un valor de Q 50");
                break;
            case "Paginas web intermedio":
                alert("El curso elegido tien un valor de Q 125");
                break;

            case "Paginas web avanzado":
                alert("El curso elegido tien un valor de Q 200");
                break;
        }
    });
});