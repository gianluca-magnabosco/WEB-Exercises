var uncompleted = []
var completed = []

$(function(event) {
    $("#formInput").on("submit", function(event) {
        var tamanho;

        event.preventDefault();

        uncompleted.push($("#inputUsuario").val());
        $("#inputUsuario").val("");

        tamanho = uncompleted.length
        $("#naoConcluidas").append($("<li></li>").html(uncompleted[tamanho - 1]));

        $("#naoConcluidas").on("click", "li", function(event) {
            var item;
            var index;
            var tamanho;

            event.stopImmediatePropagation();

            item = $(this).html();
            completed.push(item);

            tamanho = completed.length;
            index = uncompleted.indexOf(item);
            uncompleted.splice(index,1);

            $(this).remove();

            $("#concluidas").append($("<li></li>").html(completed[tamanho - 1]));
        });
    });
});