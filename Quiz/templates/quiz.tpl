<html>
    <head>
        <script type="text/javascript" src="scripts/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="scripts/quiz.js" ></script>
        <link type="text/css" rel="stylesheet" href="styles/generalStyle.css">
       

        <link type="text/css" rel="stylesheet" href="styles/style.css">
        <title>QUIZ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <script>var qId = {$teeext};</script>
         <p class="question" id="question"> What is the answer to this question?</p>        

    <ul class="answers" id="answer">            
        <input type="radio" name="q1" id ="a" value="a"><label  id="qa" for="q1a">Answer 1</label><br/>          
        <input type="radio" name="q1" id ="b" value="b" ><label id="qb" for="q1b">Answer 2</label><br/>            
        <input type="radio" name="q1" id ="c" value="c" ><label id="qc" for="q1c">Answer 3</label><br/>            
        <input type="radio" name="q1" id ="d" value="d" ><label id="qd" for="q1d">Answer 4</label><br/>       
    </ul>        
    <br/>
    <div >  
        <button type="submit" id="results"> check!</button>
               
    </div>                

    <div id="category1">            
        <p>              
            <strong>Question 1:</strong> The correct answer is the <strong id="right">RightAnswer</strong>.</p>        
    </div>        
    <div >  
        <form action="" >
        <button type="submit" id="new" > Neustart</button>
        </form>   
    </div>  

   
</body>
</html>