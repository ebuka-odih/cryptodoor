/* Created and coded by Abhilash Narayan */
/* Quiz source: w3schools.com */
var quiz = {
    "JS": [
        {
            "id": 1,
            "question": "What was the first tangible item purchased with BTC?",
            "options": [
                {
                    "a": "Beer",
                    "b": "Pizza",
                    "c": "A Boat",
                    "d": "A House"
                }
            ],
            "answer": "Pizza",
            "score": 0,
            "status": ""
        },
        {
            "id": 2,
            "question": "In which year was Proof of Work first conceptualized?",
            "options": [
                {
                    "a": "1993",
                    "b": "1998",
                    "c": "2008",
                    "d": "2009"
                }
            ],
            "answer": "1993",
            "score": 0,
            "status": ""
        },
        {
            "id": 3,
            "question": "Which was the first contentious Bitcoin hard fork?",
            "options": [
                {
                    "a": "Bitcoin Plus",
                    "b": "Bitcoin Cash",
                    "c": "Bitcoin XT",
                    "d": "Bit Gold"
                }
            ],
            "answer": "Bitcoin XT",
            "score": 0,
            "status": ""
        },
        {
            "id": 4,
            "question": "What was the name of the paper introducing Bitcoin?",
            "options": [
                {
                    "a": "Bitcoin: A Decentralized Digital Currency",
                    "b": "Bitcoin: A Peer-to-Peer Electronic Cash System",
                    "c": "Bitcoin: A Decentralized Electronic Cash System",
                    "d": "Bitcoin: A Peer-to-Peer Digital Currency",
                }
            ],
            "answer": "Bitcoin: A Peer-to-Peer Electronic Cash System",
            "score": 0,
            "status": ""
        },
        {
            "id": 5,
            "question": "What date was the Bitcoin genesis block mined?",
            "options": [
                {
                    "a": "31st December 2008",
                    "b": "21st December 2008",
                    "c": "03rd January 2009",
                    "d": "06th October 2004",
                }
            ],
            "answer": "03rd January 2009",
            "score": 0,
            "status": ""
        },
        {
            "id": 6,
            "question": "What was the message hard-coded into the genesis block?",
            "options": [
                {
                    "a": "The Wall Street Journal 18/Sep/2008 Mounting fears shake world markets as banking giants rush to raise capital",
                    "b": "The New York Times 19/Sep/2008 Vast bailout by U.S. proposed in bid to stem economic crisis",
                    "c": "The WSJ 02/Oct/2008 Historic bailout passes as economy slips further",
                    "d": "The Times 03/Jan/2009 Chancellor on brink of second bailout for banks",
                }
            ],
            "answer": "The Times 03/Jan/2009 Chancellor on brink of second bailout for banks",
            "score": 0,
            "status": ""
        },




    ]
}
var quizApp = function () {
    this.score = 0;
    this.qno = 1;
    this.currentque = 0;
    var totalque = quiz.JS.length;
    this.displayQuiz = function (cque) {
        this.currentque = cque;
        if (this.currentque < totalque) {
            $("#tque").html(totalque);
            $("#previous").attr("disabled", false);
            $("#next").attr("disabled", false);
            $("#qid").html(quiz.JS[this.currentque].id + '.');
            $("#question").html(quiz.JS[this.currentque].question);
            $("#question-options").html("");
            for (var key in quiz.JS[this.currentque].options[0]) {
                if (quiz.JS[this.currentque].options[0].hasOwnProperty(key)) {
                    $("#question-options").append(
                        "<div class='form-check option-block'>" +
                        "<label class='form-check-label'>" +
                        "<input type='radio' class='form-check-input' name='option' id='q" + key + "' value='" + quiz.JS[this.currentque].options[0][key] + "'><span id='optionval'>" +
                        quiz.JS[this.currentque].options[0][key] +
                        "</span></label>"
                    );
                }
            }
        }
        if (this.currentque <= 0) {
            $("#previous").attr("disabled", true);
        }
        if (this.currentque >= totalque) {
            $('#next').attr('disabled', true);
            for (var i = 0; i < totalque; i++) {
                this.score = this.score + quiz.JS[i].score;
            }
            return this.showResult(this.score);
        }
    }
    this.showResult = function (scr) {
        $("#result").addClass('result');
        $("#result").html("<h1 class='res-header'>Total Score: &nbsp;" + scr + '/' + totalque + "</h1>");
        for (var j = 0; j < totalque; j++) {
            var res;
            if (quiz.JS[j].score == 0) {
                res = '<span class="wrong">' + quiz.JS[j].score + '</span><i class="fa fa-remove c-wrong"></i>';
            } else {
                res = '<span class="correct">' + quiz.JS[j].score + '</span><i class="fa fa-check c-correct"></i>';
            }
            if (j == 5){
                var reg = '<a style="background: rgb(98 15 95); color: white" class="btn" href="register">Register</a>';
            }
            $("#result").append(
                '<div class="result-question"><span>Q ' + quiz.JS[j].id + '</span> &nbsp;' + quiz.JS[j].question + '</div>' +
                '<div><b>Correct answer:</b> &nbsp;' + quiz.JS[j].answer + '</div>' +
                '<div class="last-row"><b>Score:</b> &nbsp;' + res +
                '</div>' + reg
            );

        }

    }
    this.checkAnswer = function (option) {
        var answer = quiz.JS[this.currentque].answer;
        option = option.replace(/</g, "&lt;") //for <
        option = option.replace(/>/g, "&gt;") //for >
        option = option.replace(/"/g, "&quot;")
        if (option == quiz.JS[this.currentque].answer) {
            if (quiz.JS[this.currentque].score == "") {
                quiz.JS[this.currentque].score = 1;
                quiz.JS[this.currentque].status = "correct";
            }
        } else {
            quiz.JS[this.currentque].status = "wrong";
        }
    }
    this.changeQuestion = function (cque) {
        this.currentque = this.currentque + cque;
        this.displayQuiz(this.currentque);
    }
}
var jsq = new quizApp();
var selectedopt;
$(document).ready(function () {
    jsq.displayQuiz(0);
    $('#question-options').on('change', 'input[type=radio][name=option]', function (e) {
//var radio = $(this).find('input:radio');
        $(this).prop("checked", true);
        selectedopt = $(this).val();
    });
});
$('#next').click(function (e) {
    e.preventDefault();
    if (selectedopt) {
        jsq.checkAnswer(selectedopt);
    }
    jsq.changeQuestion(1);
});
$('#previous').click(function (e) {
    e.preventDefault();
    if (selectedopt) {
        jsq.checkAnswer(selectedopt);
    }
    jsq.changeQuestion(-1);
});
