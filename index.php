<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button22 {
  background-color: #fb1300; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 12px;}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>AI Based Game Category Finder</h1>
  <p>The below questionnaire will help you understand which category of games would be great to play and build a carrier upon based on your personality trade. Consider this as a gaming counseller that helps you grow.</p>
</div>

<div class="topnav">
  <a href="#">Home</a>
 <!--  <a href="#">Details</a> -->
  
 <!-- <a href="#" style="float:right">Link</a> -->
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
     <!--
      <h2>Form</h2>
      <h5> Text</h5>
      <!--<div class="fakeimg" style="height:200px;">Image</div> 
      <p>Questions</p> -->
      <p> 
      
      <!DOCTYPE html>
<html>
<body>

<h1>Student Registration Form</h1>

<form action="action_page.php">
   
  <p>Do you like socializing?</p>
  <input type="radio" id="age1" name="q1" value="1" required="required">
  <label for="age1">Yes</label><br>
  <input type="radio" id="age2" name="q1" value="0">
  <label for="age2">No</label><br>  
  <input type="radio" id="age3" name="q1" value="0">
  <label for="age3">May be</label><br><br>
  
  <br>  

  <p>Have you ever been a captain/leader of any team/ group activity? </p>
  <input type="radio" id="age1" name="q2" value="1" required="required">
  <label for="age1">Yes</label><br>
  <input type="radio" id="age2" name="q2" value="0">
  <label for="age2">No</label><br>  
  
  
  <br>  

    
  <p>What kind of movies do you like to watch?</p>
  <input type="radio" id="age1" name="q3" value="1" required="required">
  <label for="age1">Horror </label><br>
  <input type="radio" id="age2" name="q3" value="2">
  <label for="age2">Drama</label><br>  
  <input type="radio" id="age3" name="q3" value="3">
  <label for="age3">Action</label><br>
  <input type="radio" id="age3" name="q3" value="4">
  <label for="age3">Documentary </label><br><br>
  
  <p>which number logically follows the series 
           <br> 4-6-9-6-14-6
</p>
  <input type="radio" id="age1" name="q4" value="0" required="required">
  <label for="age1">6</label><br>
  <input type="radio" id="age2" name="q4" value="0">
  <label for="age2">17</label><br>  
  <input type="radio" id="age3" name="q4" value="1">
  <label for="age3">19</label><br>
  <input type="radio" id="age3" name="q4" value="0">
  <label for="age3">21</label><br><br>
  
   <p> If you are continually losing games, will you wait until winning to stop playing or will you call it a day?</p>
  <input type="radio" id="age1" name="q5" value="1" required="required">
  <label for="age1">I will try another game but will stop after that</label><br>
  <input type="radio" id="age2" name="q5" value="2">
  <label for="age2">I will give up and call it a day </label><br>  
  <input type="radio" id="age3" name="q5" value="3">
  <label for="age3">I will play until I eventually win  </label><br><br>
  
  
  <p>How would you react if someone in your game is cheating? </p>
  <input type="radio" id="age1" name="q6" value="1" required="required">
  <label for="age1">Report and ignore them</label><br>
  <input type="radio" id="age2" name="q6" value="2">
  <label for="age2">Talk to them and convince to avoid using hacks </label><br>  
  <input type="radio" id="age3" name="q6" value="3">
  <label for="age3">Get angry and yell at them  </label><br>
  <input type="radio" id="age3" name="q6" value="4">
  <label for="age3">Start using hacks yourself  </label><br><br>
  
  <p> Would you appreciate or learn from your competitor's work on their channel?</p>
  <input type="radio" id="age1" name="q7" value="1" required="required">
  <label for="age1">Yes </label><br>
  <input type="radio" id="age2" name="q7" value="2">
  <label for="age2">No </label><br><br>  
  
  
  <p>What kind of game player are you? </p>
  <input type="radio" id="age1" name="q8" value="1" required="required">
  <label for="age1">Flankers (Going from another way and surprising the enemy)</label><br>
  <input type="radio" id="age2" name="q8" value="2">
  <label for="age2">Campers (Hiding in a corner and attacking enemies)</label><br>  
  <input type="radio" id="age3" name="q8" value="3">
  <label for="age3">Too defensive (prefer not to initiate) </label><br>
  <input type="radio" id="age3" name="q8" value="4">
  <label for="age3">Too aggressive (always rush or initiate) </label><br><br>
  
  <p>How many times can you go LIVE in a week on any platforms? </p>
  <input type="radio" id="age1" name="q9" value="0" required="required">
  <label for="age1">Once </label><br>
  <input type="radio" id="age2" name="q9" value="1">
  <label for="age2">2-3 Times </label><br>  
  <input type="radio" id="age3" name="q9" value="2">
  <label for="age3">Every day </label><br><br>
  
  
  <p>Do you like to play sports in real life? </p>
  <input type="radio" id="age1" name="q10" value="1" required="required">
  <label for="age1">Yes </label><br>
  <input type="radio" id="age2" name="q10" value="0">
  <label for="age2">No</label><br><br>  
  
  
  <p>What kind of game do you usually play?</p>
  <input type="radio" id="age1" name="q11" value="1" required="required">
  <label for="age1">Shooting Games (Call Of Duty, PUBG, Valorant) </label><br>
  <input type="radio" id="age2" name="q11" value="2">
  <label for="age2">Board Games (Rummy, LUDO) </label><br>  
  <input type="radio" id="age3" name="q11" value="3">
  <label for="age3">Action-Adventure (GTA, Legend of Zelda)</label><br>
  <input type="radio" id="age3" name="q11" value="4">
  <label for="age3">Strategy Games (Clash Royale, League of Legends, DOTA2)</label><br><br>
  
  <p>Do you spend real money in game?</p>
  <input type="radio" id="age1" name="q12" value="1" required="required">
  <label for="age1">Yes</label><br>
  <input type="radio" id="age2" name="q12" value="0">
  <label for="age2">No</label><br><br> 
  
  
  <p>When undertaking a new mission, what do you do?</p>
  <input type="radio" id="age1" name="q13" value="1" required="required">
  <label for="age1">Do a little research work? I want to know what I am getting into.</label><br>
  <input type="radio" id="age2" name="q13" value="2">
  <label for="age2">Consult my teammates to get their impressions and feedback first.</label><br>  
  <input type="radio" id="age3" name="q13" value="3">
  <label for="age3">Do research work and consult everyone. I have got to get it right!</label><br>
  <input type="radio" id="age3" name="q13" value="4">
  <label for="age3">"Less talk, more action" is your motto. Let's just get it done, already! </label><br><br>
  
  <p>How do you most like to prepare for gaming?</p>
  <input type="radio" id="age1" name="q14" value="1" required="required">
  <label for="age1">By analyzing my previous stats </label><br>
  <input type="radio" id="age2" name="q14" value="2">
  <label for="age2">I don't prepare-I just go with the flow </label><br>  
  <input type="radio" id="age3" name="q14" value="3">
  <label for="age3">By doing physical exercise 	</label><br>
  <input type="radio" id="age3" name="q14" value="0">
  <label for="age3">With a lot of food and energy drink</label><br><br>
  
  <p>Which of These Activities Would you do rather than gaming?</p>
  <input type="radio" id="age1" name="q15" value="0" required="required">
  <label for="age1">Hit the gym/ physical workout</label><br>
  <input type="radio" id="age2" name="q15" value="0">
  <label for="age2">Sleep</label><br>  
  <input type="radio" id="age3" name="q15" value="0">
  <label for="age3">Work/study</label><br>
  <input type="radio" id="age3" name="q15" value="0">
  <label for="age3">Creative work </label><br><br>
  
  
 <!-- <input type="submit" value="Submit"> -->
  
  <button class="button button1">Submit your Details</button>
</form>
      </p>
    </div>
    
    <!--
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    -->
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Games Categories</h2>
      <!--<div class="fakeimg" style="height:100px;">Image</div> -->
      <p><h4>FPS</h4><br>
				<h4>Casino</h4><br>
				<h4>Sport</h4><br>
				<h4>Action and Adventure</h4><br>
				<h4>Arcade</h4><br>						
				<h4>MMORPG</h4><br>	</p>
    </div>
   
   <!--
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
  
</div>

<div class="footer">
  <h2>@challang</h2>
</div>
-->		
</body>
</html>
