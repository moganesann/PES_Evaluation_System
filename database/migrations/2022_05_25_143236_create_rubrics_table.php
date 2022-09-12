<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics', function (Blueprint $table) {
            $table->string('rubricid')->unique();
            $table->string('crs_id');
            $table->string('rubrictype');
            $table->string('co');
            $table->string('criteria');
            $table->string('weight');
            $table->string('score');
            $table->string('mark0');
            $table->string('mark1');
            $table->string('mark2');
            $table->string('mark3');
            $table->string('mark4');
            $table->string('mark5');
        });

        DB::table('rubrics')->insert([
            //PSM1---------------------------------------------------------------
            ['rubricid' => '1', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'INTRODUCTION
            - explanation should consist of domain background, importance of the subject and current issues according to proposed topic', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '10', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'PROBLEM STATEMENT
            - explanation of problem should be related to the domain / knowledge or solution gap ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '11', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'OBJECTIVE
            - MUST be 3 Objectives (reflecting SMART concept)
            ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '12', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'SCOPE
            - must be related to the project', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '13','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK RELEVANCY)
            - Minimum 3 related work relevant to the project must be compared.
            - Comparison on existing systems / proposed techniques must be relevant.', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '14', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK DESCRIPTION)
            - Description should be clear for THREE system/method/ techniques/ algorithm. ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '15', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK ANALYSIS) 
            - Analysis of comparison on previous system/method
            - Should highlight on features/strength/ weakness/ advantage/ disadvantage ', 'weight' => '0.8', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '16', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'PROJECT MANAGEMENT FRAMEWORK
            - should describe on applied / used project management framework in the project.
            Project Based: SDLC (Agile,RAD etc)
            Research Based: Research Framework/Model', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '17', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'PROJECT REQUIREMENT
            - should describe the requirement related to the project.
            Project Based: Functional and Non-Functional Requirement, Constraints and limitations', 'weight' => '0.8', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '18', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -1', 'co' => '1', 'criteria' => 'REFERENCE 
            -Minimum 5 references related to the project must be stated. 
            - Facts are properly cited with correct reference in the proposal content
            - Must follow the proposal format', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '19', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -2', 'co' => '1', 'criteria' => 'POTENTIAL USE OF PROPOSED SOLUTION
            - explanation of potential use of proposed solution in real time situation', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '20','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -2', 'co' => '2', 'criteria' => 'PROPOSED DESIGN
            - should describe the proposed design related to project requirement.
            Project Based: Context Diagram, Use Case Diagram & description, Activity diagram', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '21', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -2', 'co' => '2', 'criteria' => 'DATA DESIGN
            - should describe the data related to the project
             Project Based: ERD, Database Design (PK, FK) / Data Model', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '22', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -2', 'co' => '2', 'criteria' => 'PROOF OF CONCEPT/PROTOTYPE
            - demonstrate evidence of early work
            Project Based: Design Prototype', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '23', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE
            -Functionality: the set of features/criteria/parameter/ must deliver clear value to the user.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '24', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Design
            PROJECT- the design of the prototype should be up to the standard.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '25', 'crs_id' => 'BCC3012', 'rubrictype' => 'PSM1 -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Usability
            PROJECT: Should be easy to use and understand
            - natural interaction style ', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '26','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -2', 'co' => '2', 'criteria' => 'TESTING PLAN/VALIDATION PLAN
            - should describe the testing strategy/approach
            - cover the simple set of input, processess and output and comparison of result ', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            ['rubricid' => '27','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -2', 'co' => '3', 'criteria' => 'Oral Communication
            The ability to deliver ideas clearly and effectively through verbal.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No oral communication', 'mark1' => 'Insufficiently delivered', 'mark2' => '<in between>', 'mark3' => 'Partially delivered', 'mark4' => '<in between', 'mark5' => 'Clearly delivered'],
            ['rubricid' => '28','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -2', 'co' => '3', 'criteria' => 'Written Communication 
            The ability to write an academic discourse (project proposal) which has a coherent flow that is clear and easy to comprehend', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No written communication', 'mark1' => 'Insufficiently delivered', 'mark2' => '<in between>', 'mark3' => 'Partially delivered', 'mark4' => '<in between', 'mark5' => 'Clearly delivered'],
            ['rubricid' => '29','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -2', 'co' => '3', 'criteria' => 'Responding to Question
            The ability to respond to questions using appropriate language ', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No respond to question', 'mark1' => 'Insufficiently responded', 'mark2' => '<in between>', 'mark3' => 'Partially responded', 'mark4' => '<in between', 'mark5' => 'Clearly responded'],
            ['rubricid' => '30','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -2', 'co' => '3', 'criteria' => 'Expression
            The ability to express nonverbal cues such as facial expressions, eye contact or tone of voice', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No expression', 'mark1' => 'Insufficiently expressed', 'mark2' => '<in between>', 'mark3' => 'Partially expressed', 'mark4' => '<in between', 'mark5' => 'Clearly expressed'],
            ['rubricid' => '31','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -3', 'co' => '4', 'criteria' => 'ACADEMIC INTERGRITY
            - ability to sustain academic integrity (no plagiarism)
            - below 25%', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No academic integrity sustained', 'mark1' => 'Total violation on academic integrity', 'mark2' => '<in between>', 'mark3' => 'Partially violating academic integrity', 'mark4' => '<in between', 'mark5' => 'Academic integrity sustained'],
            ['rubricid' => '32','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -3', 'co' => '4', 'criteria' => 'QUALITY OF SUPERVISOR and STUDENT PROGRESS 
            - Consistently record all meeting in Logbook. Punctual for all commitments. Prepares by reading and completing project task as necessary', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No meeting', 'mark1' => 'Insufficiently meets the quality', 'mark2' => '<in between>', 'mark3' => 'Partially meets the quality', 'mark4' => '<in between', 'mark5' => 'Clearly meets the quality'],
            ['rubricid' => '33','crs_id' => 'BCC3012',  'rubrictype' => 'PSM1 -3', 'co' => '4', 'criteria' => 'ATTITUDE
            - Treats supervisors with respect, courtesy, and tact. 
            - Shows enthusiasm and optimism', 'weight' => '0.4', 'score' => '5', 'mark0' => 'Attitude insufficiently complied.', 'mark1' => 'Attitude insufficiently complied.', 'mark2' => '<in between>', 'mark3' => 'Attitude partially complied', 'mark4' => '<in between', 'mark5' => 'Attitude fully complie'],
          


             //PSM2---------------------------------------------------------------
             ['rubricid' => '34', 'crs_id' => 'BCC3024', 'rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'INTRODUCTION
             - explanation should consist of domain background, importance of the subject and current issues according to proposed topic', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '35', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'PROBLEM STATEMENT
             - explanation of problem should be related to the domain / knowledge or solution gap ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '36', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'OBJECTIVE
             - MUST be 3 Objectives (reflecting SMART concept)
             ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '37', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'SCOPE
             - must be related to the project', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '38', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK RELEVANCY)
             - Minimum 3 related work relevant to the project must be compared.
             - Comparison on existing systems / proposed techniques must be relevant.', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '39', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK DESCRIPTION)
             - Description should be clear for THREE system/method/ techniques/ algorithm. ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '40', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK ANALYSIS) 
             - Analysis of comparison on previous system/method
             - Should highlight on features/strength/ weakness/ advantage/ disadvantage ', 'weight' => '0.8', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '41', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'PROJECT MANAGEMENT FRAMEWORK
             - should describe on applied / used project management framework in the project.
             Project Based: SDLC (Agile,RAD etc)
             Research Based: Research Framework/Model', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '42', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'PROJECT REQUIREMENT
             - should describe the requirement related to the project.
             Project Based: Functional and Non-Functional Requirement, Constraints and limitations', 'weight' => '0.8', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '43', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -1', 'co' => '1', 'criteria' => 'REFERENCE 
             -Minimum 5 references related to the project must be stated. 
             - Facts are properly cited with correct reference in the proposal content
             - Must follow the proposal format', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '44', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '1', 'criteria' => 'POTENTIAL USE OF PROPOSED SOLUTION
             - explanation of potential use of proposed solution in real time situation', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '45', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '2', 'criteria' => 'PROPOSED DESIGN
             - should describe the proposed design related to project requirement.
             Project Based: Context Diagram, Use Case Diagram & description, Activity diagram', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '46', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '2', 'criteria' => 'DATA DESIGN
             - should describe the data related to the project
              Project Based: ERD, Database Design (PK, FK) / Data Model', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '47', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '2', 'criteria' => 'PROOF OF CONCEPT/PROTOTYPE
             - demonstrate evidence of early work
             Project Based: Design Prototype', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '48', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE
             -Functionality: the set of features/criteria/parameter/ must deliver clear value to the user.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '49', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Design
             PROJECT- the design of the prototype should be up to the standard.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '50', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Usability
             PROJECT: Should be easy to use and understand
             - natural interaction style ', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '51', 'crs_id' => 'BCC3024','rubrictype' => 'PSM2 -2', 'co' => '2', 'criteria' => 'TESTING PLAN/VALIDATION PLAN
             - should describe the testing strategy/approach
             - cover the simple set of input, processess and output and comparison of result ', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '52','crs_id' => 'BCC3024',  'rubrictype' => 'PSM2 -2', 'co' => '3', 'criteria' => 'Oral Communication
             The ability to deliver ideas clearly and effectively through verbal.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No oral communication', 'mark1' => 'Insufficiently delivered', 'mark2' => '<in between>', 'mark3' => 'Partially delivered', 'mark4' => '<in between', 'mark5' => 'Clearly delivered'],
             ['rubricid' => '53','crs_id' => 'BCC3024',  'rubrictype' => 'PSM2 -2', 'co' => '3', 'criteria' => 'Written Communication 
             The ability to write an academic discourse (project proposal) which has a coherent flow that is clear and easy to comprehend', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No written communication', 'mark1' => 'Insufficiently delivered', 'mark2' => '<in between>', 'mark3' => 'Partially delivered', 'mark4' => '<in between', 'mark5' => 'Clearly delivered'],
             ['rubricid' => '54','crs_id' => 'BCC3024',  'rubrictype' => 'PSM2 -2', 'co' => '3', 'criteria' => 'Responding to Question
             The ability to respond to questions using appropriate language ', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No respond to question', 'mark1' => 'Insufficiently responded', 'mark2' => '<in between>', 'mark3' => 'Partially responded', 'mark4' => '<in between', 'mark5' => 'Clearly responded'],
             ['rubricid' => '55','crs_id' => 'BCC3024',  'rubrictype' => 'PSM2 -2', 'co' => '3', 'criteria' => 'Expression
             The ability to express nonverbal cues such as facial expressions, eye contact or tone of voice', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No expression', 'mark1' => 'Insufficiently expressed', 'mark2' => '<in between>', 'mark3' => 'Partially expressed', 'mark4' => '<in between', 'mark5' => 'Clearly expressed'],
             ['rubricid' => '56','crs_id' => 'BCC3024',  'rubrictype' => 'PSM2 -3', 'co' => '4', 'criteria' => 'ACADEMIC INTERGRITY
             - ability to sustain academic integrity (no plagiarism)
             - below 25%', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No academic integrity sustained', 'mark1' => 'Total violation on academic integrity', 'mark2' => '<in between>', 'mark3' => 'Partially violating academic integrity', 'mark4' => '<in between', 'mark5' => 'Academic integrity sustained'],
             ['rubricid' => '57','crs_id' => 'BCC3024',  'rubrictype' => 'PSM2 -3', 'co' => '4', 'criteria' => 'QUALITY OF SUPERVISOR and STUDENT PROGRESS 
             - Consistently record all meeting in Logbook. Punctual for all commitments. Prepares by reading and completing project task as necessary', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No meeting', 'mark1' => 'Insufficiently meets the quality', 'mark2' => '<in between>', 'mark3' => 'Partially meets the quality', 'mark4' => '<in between', 'mark5' => 'Clearly meets the quality'],
             ['rubricid' => '58','crs_id' => 'BCC3024',  'rubrictype' => 'PSM2 -3', 'co' => '4', 'criteria' => 'ATTITUDE
             - Treats supervisors with respect, courtesy, and tact. 
             - Shows enthusiasm and optimism', 'weight' => '0.4', 'score' => '5', 'mark0' => 'Attitude insufficiently complied.', 'mark1' => 'Attitude insufficiently complied.', 'mark2' => '<in between>', 'mark3' => 'Attitude partially complied', 'mark4' => '<in between', 'mark5' => 'Attitude fully complie'],
           




             //PTA---------------------------------------------------------------
             ['rubricid' => '59', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'INTRODUCTION
             - explanation should consist of domain background, importance of the subject and current issues according to proposed topic', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '60', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'PROBLEM STATEMENT
             - explanation of problem should be related to the domain / knowledge or solution gap ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '61', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'OBJECTIVE
             - MUST be 3 Objectives (reflecting SMART concept)
             ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '62', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'SCOPE
             - must be related to the project', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '63', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK RELEVANCY)
             - Minimum 3 related work relevant to the project must be compared.
             - Comparison on existing systems / proposed techniques must be relevant.', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '64', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK DESCRIPTION)
             - Description should be clear for THREE system/method/ techniques/ algorithm. ', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '65', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'LITERATURE REVIEW (WORK ANALYSIS) 
             - Analysis of comparison on previous system/method
             - Should highlight on features/strength/ weakness/ advantage/ disadvantage ', 'weight' => '0.8', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '66', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'PROJECT MANAGEMENT FRAMEWORK
             - should describe on applied / used project management framework in the project.
             Project Based: SDLC (Agile,RAD etc)
             Research Based: Research Framework/Model', 'weight' => '0.6', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '67', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'PROJECT REQUIREMENT
             - should describe the requirement related to the project.
             Project Based: Functional and Non-Functional Requirement, Constraints and limitations', 'weight' => '0.8', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '68', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -1', 'co' => '1', 'criteria' => 'REFERENCE 
             -Minimum 5 references related to the project must be stated. 
             - Facts are properly cited with correct reference in the proposal content
             - Must follow the proposal format', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
            

             ['rubricid' => '69', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '1', 'criteria' => 'POTENTIAL USE OF PROPOSED SOLUTION
             - explanation of potential use of proposed solution in real time situation', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '70', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '2', 'criteria' => 'PROPOSED DESIGN
             - should describe the proposed design related to project requirement.
             Project Based: Context Diagram, Use Case Diagram & description, Activity diagram', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '71', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '2', 'criteria' => 'DATA DESIGN
             - should describe the data related to the project
              Project Based: ERD, Database Design (PK, FK) / Data Model', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '72', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '2', 'criteria' => 'PROOF OF CONCEPT/PROTOTYPE
             - demonstrate evidence of early work
             Project Based: Design Prototype', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '73', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE
             -Functionality: the set of features/criteria/parameter/ must deliver clear value to the user.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '74', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Design
             PROJECT- the design of the prototype should be up to the standard.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '75', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '2', 'criteria' => 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Usability
             PROJECT: Should be easy to use and understand
             - natural interaction style ', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
             ['rubricid' => '76', 'crs_id' => 'DCC3024','rubrictype' => 'PTA -2', 'co' => '2', 'criteria' => 'TESTING PLAN/VALIDATION PLAN
             - should describe the testing strategy/approach
             - cover the simple set of input, processess and output and comparison of result ', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No explanation', 'mark1' => 'Insufficiently explained', 'mark2' => '<in between>', 'mark3' => 'Partially explained', 'mark4' => '<in between', 'mark5' => 'Clearly explained'],
        

             ['rubricid' => '77','crs_id' => 'DCC3024',  'rubrictype' => 'PTA -2', 'co' => '3', 'criteria' => 'Oral Communication
             The ability to deliver ideas clearly and effectively through verbal.', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No oral communication', 'mark1' => 'Insufficiently delivered', 'mark2' => '<in between>', 'mark3' => 'Partially delivered', 'mark4' => '<in between', 'mark5' => 'Clearly delivered'],
             ['rubricid' => '78','crs_id' => 'DCC3024',  'rubrictype' => 'PTA -2', 'co' => '3', 'criteria' => 'Written Communication 
             The ability to write an academic discourse (project proposal) which has a coherent flow that is clear and easy to comprehend', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No written communication', 'mark1' => 'Insufficiently delivered', 'mark2' => '<in between>', 'mark3' => 'Partially delivered', 'mark4' => '<in between', 'mark5' => 'Clearly delivered'],
             ['rubricid' => '79','crs_id' => 'DCC3024',  'rubrictype' => 'PTA -2', 'co' => '3', 'criteria' => 'Responding to Question
             The ability to respond to questions using appropriate language ', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No respond to question', 'mark1' => 'Insufficiently responded', 'mark2' => '<in between>', 'mark3' => 'Partially responded', 'mark4' => '<in between', 'mark5' => 'Clearly responded'],
             ['rubricid' => '80','crs_id' => 'DCC3024',  'rubrictype' => 'PTA -2', 'co' => '3', 'criteria' => 'Expression
             The ability to express nonverbal cues such as facial expressions, eye contact or tone of voice', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No expression', 'mark1' => 'Insufficiently expressed', 'mark2' => '<in between>', 'mark3' => 'Partially expressed', 'mark4' => '<in between', 'mark5' => 'Clearly expressed'],
             ['rubricid' => '81','crs_id' => 'DCC3024',  'rubrictype' => 'PTA -3', 'co' => '4', 'criteria' => 'ACADEMIC INTERGRITY
             - ability to sustain academic integrity (no plagiarism)
             - below 25%', 'weight' => '0.2', 'score' => '5', 'mark0' => 'No academic integrity sustained', 'mark1' => 'Total violation on academic integrity', 'mark2' => '<in between>', 'mark3' => 'Partially violating academic integrity', 'mark4' => '<in between', 'mark5' => 'Academic integrity sustained'],
             ['rubricid' => '82','crs_id' => 'DCC3024',  'rubrictype' => 'PTA -3', 'co' => '4', 'criteria' => 'QUALITY OF SUPERVISOR and STUDENT PROGRESS 
             - Consistently record all meeting in Logbook. Punctual for all commitments. Prepares by reading and completing project task as necessary', 'weight' => '0.4', 'score' => '5', 'mark0' => 'No meeting', 'mark1' => 'Insufficiently meets the quality', 'mark2' => '<in between>', 'mark3' => 'Partially meets the quality', 'mark4' => '<in between', 'mark5' => 'Clearly meets the quality'],
             ['rubricid' => '83','crs_id' => 'DCC3024',  'rubrictype' => 'PTA -3', 'co' => '4', 'criteria' => 'ATTITUDE
             - Treats supervisors with respect, courtesy, and tact. 
             - Shows enthusiasm and optimism', 'weight' => '0.4', 'score' => '5', 'mark0' => 'Attitude insufficiently complied.', 'mark1' => 'Attitude insufficiently complied.', 'mark2' => '<in between>', 'mark3' => 'Attitude partially complied', 'mark4' => '<in between', 'mark5' => 'Attitude fully complie'],
           



        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrics');
    }
};
