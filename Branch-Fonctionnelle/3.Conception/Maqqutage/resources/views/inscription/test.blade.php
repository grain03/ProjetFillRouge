@extends('layouts.layout')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Web Development QCM Test</h3>
            </div>
            <div class="card-body">
                <!-- Question 1 -->
                <div class="question">
                    <p>What does HTML stand for?</p>
                    <div class="options">
                        <input type="radio" id="q1_option1" name="q1" value="option1">
                        <label for="q1_option1">Hypertext Markup Language</label><br>
                        <input type="radio" id="q1_option2" name="q1" value="option2">
                        <label for="q1_option2">High-Level Text Modeling Language</label><br>
                        <input type="radio" id="q1_option3" name="q1" value="option3">
                        <label for="q1_option3">Hyperlink and Text Management Language</label><br>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="question">
                    <p>Which of the following is a programming language?</p>
                    <div class="options">
                        <input type="radio" id="q2_option1" name="q2" value="option1">
                        <label for="q2_option1">HTML</label><br>
                        <input type="radio" id="q2_option2" name="q2" value="option2">
                        <label for="q2_option2">CSS</label><br>
                        <input type="radio" id="q2_option3" name="q2" value="option3">
                        <label for="q2_option3">JavaScript</label><br>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="question">
                    <p>What does CSS stand for?</p>
                    <div class="options">
                        <input type="radio" id="q3_option1" name="q3" value="option1">
                        <label for="q3_option1">Computer Style Sheets</label><br>
                        <input type="radio" id="q3_option2" name="q3" value="option2">
                        <label for="q3_option2">Creative Style Sheets</label><br>
                        <input type="radio" id="q3_option3" name="q3" value="option3">
                        <label for="q3_option3">Cascading Style Sheets</label><br>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="question">
                    <p>Which of the following is used for adding interactivity to a website?</p>
                    <div class="options">
                        <input type="radio" id="q4_option1" name="q4" value="option1">
                        <label for="q4_option1">HTML</label><br>
                        <input type="radio" id="q4_option2" name="q4" value="option2">
                        <label for="q4_option2">CSS</label><br>
                        <input type="radio" id="q4_option3" name="q4" value="option3">
                        <label for="q4_option3">JavaScript</label><br>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="question">
                    <p>What is the purpose of the HTML <code>&lt;head&gt;</code> element?</p>
                    <div class="options">
                        <input type="radio" id="q5_option1" name="q5" value="option1">
                        <label for="q5_option1">To define the main content of the document</label><br>
                        <input type="radio" id="q5_option2" name="q5" value="option2">
                        <label for="q5_option2">To define the header of the document</label><br>
                        <input type="radio" id="q5_option3" name="q5" value="option3">
                        <label for="q5_option3">To define metadata about the document</label><br>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary" onclick="submitTest()">Envoyer</button>
            </div>
        </div>
    </div>   
@endsection