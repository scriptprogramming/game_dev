$(function () {
    loadTable();

});

function loadTable() {
    $.getJSON('ranking_ajax.php').done(function (data) {
        console.dir(data);

        var htmlTable = "<thead><tr> <th align='center'> Rank </th> <th align='center'> Name </th> <th align='center'> Score </th> </tr></thead><tbody>";

        for (var i = 0; i < data.length; i++) {

            htmlTable += "<tr>";
            htmlTable += "<td align='center' class='feld'>";
            htmlTable += (i + 1);
            htmlTable += "</td>";
            htmlTable += "<td align='center' class='feld'>";
            htmlTable += data[i]['name'];
            htmlTable += "</td>";
            htmlTable += "<td align='center' class='feld'>";
            htmlTable += data[i]['score'];
            htmlTable += "</td>";
            htmlTable += "</tr>";
        }

        htmlTable += "</tbody>";
        $('#table').append(htmlTable);
    });
}