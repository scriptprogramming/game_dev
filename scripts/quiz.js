var count = 0;
var d;
function loadQuestion() {

    $.ajax('Datas.php?id=' + qId, {
        dataType: 'json'
    }).done(function (json) {
        //auf der seite die frage anzeigen
        // json.Question;
        $('#question').text(json.Question);
        $('#qa').text(json.Answer1);
        $('#qb').text(json.Answer2);
        $('#qc').text(json.Answer3);
        $('#qd').text(json.Answer4);
        $('#right').text(json.RightAnswer);
        d = json.RightAnswer;
    }).fail(function () {
        alert('fail');
    });

}


$(document).ready(function ()
{

    loadQuestion();

    $("#results").click(function () {

        if (!$("input[name='q1']:checked").val()) {
            alert("You're not done yet!");
        }


        else {
            var a = $("input[name='q1']:checked").val();
            //alert(a);
            // var d= $('#right').val();
            if (a === d) {
                loadQuestion();
                count++;
            } else {
                alert("Die richtige Antwort waere " + d);

                //  $('#info').html("Sie haben " + count + " Fragen richtig beantwortet");
                window.location.href = "loose.php?count=" + count;
                count = 0;
            }
        }
    });
});
