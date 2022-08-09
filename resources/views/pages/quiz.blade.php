

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Quiz</title>
    <link rel="stylesheet" href="css/style1.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">--}}

</head>
<body>
<header style="background: rgb(98 15 95);" class="header">
{{--    <div class="left-title"><img height="100" width="100" src="{{ asset('img/logo.png') }}" alt=""></div>--}}
    <div class="left-title"><a style="text-decoration: none" href="{{ route('index') }}"><h3 class="text-white">Cryptodoor</h3></a></div>
    <div style="visibility: hidden" class="right-title">Total Questions: <span id="tque"></span></div>
    <div class="clearfix"></div>
</header>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="result" class="quiz-body">
                    <form name="quizForm" onSubmit="">
                        <fieldset class="form-group">
                            <h4><span id="qid">1.</span> <span id="question"></span></h4>
                            <div class="option-block-container" id="question-options">
                            </div>
                            <!-- End of option block -->
                        </fieldset>
                        <button style="background: rgba(236, 56, 117, 1); color: white" name="previous" id="previous" class="btn">Previous</button>
                        &nbsp;
                        <button style="background: rgb(98 15 95); color: white" name="next" id="next" class="btn">Next</button>
                    </form>
                </div>
            </div> <!-- End of col-sm-12 -->
        </div> <!-- End of row -->
    </div> <!-- ENd of container fluid -->
</div> <!-- End of content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="{{ asset('js/quiz.js') }}"></script>
</body>
</html>
