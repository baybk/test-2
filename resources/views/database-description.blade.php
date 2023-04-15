@extends('template.master')

@section('content')
    <section class="py-4">
        <h2 class="text-center display-5">Project's Timeline</h2>
        <div class="container">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Date/Time</th>
                        <th style="width:20%">Task</th>
                        <th style="width:30%">Hours</th>
                        <th style="width:30%">Note</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>19/1/2023</td>
                        <td>View and study the problem, check figma</td>
                        <td>2h</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>29/1/2023</td>
                        <td>Setup Laravel project, database and back-end</td>
                        <td>8h</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30/1/2023</td>
                        <td>Draw some basic UI/Screen to show some testing data</td>
                        <td>8h</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        

        <h1 class="text-center display-5">Summarize Database</h1>

        <div class="container">
            <div class="text-center py-1">Table: <span class="text-primary">users</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>text</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>text</td>
                        <td>unique</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td>text</td>
                        <td></td>
                        <td>hashed</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center py-1">Table: <span class="text-primary">dishes</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>text</td>
                        <td></td>
                        <td>Name of the dish</td>
                    </tr>
                    <tr>
                        <td>image</td>
                        <td>text in db + file in storage</td>
                        <td>nullable</td>
                        <td>Image description for the dish</td>
                    </tr>
                    <tr>
                        <td>user_id</td>
                        <td>number</td>
                        <td>nullable, <strong>FK to users record</strong></td>
                        <td>Some dishes can be created by an user</td>
                    </tr>
                    <tr>
                        <td>nutrients</td>
                        <td>text</td>
                        <td></td>
                        <td>Nutrients info in the dish</td>
                    </tr>
                </tbody>
            </table>


            <div class="text-center py-1">Table: <span class="text-primary">meals</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>number</td>
                        <td>Enum: 1->MORNING, 2->LUNCH, 3->DINNER, 4->SNACK</td>
                        <td>Type of the meal</td>
                    </tr>
                    <tr>
                        <td>image</td>
                        <td>text in db + file in storage</td>
                        <td>nullable</td>
                        <td>Image description for the meal</td>
                    </tr>
                    <tr>
                        <td>user_id</td>
                        <td>number</td>
                        <td><strong>FK to users record</strong></td>
                        <td>To know the meal belong to an user</td>
                    </tr>
                    <tr>
                        <td>datetime_at</td>
                        <td>datetime</td>
                        <td></td>
                        <td>What time is the meal?</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center py-1">Table: <span class="text-primary">meal_dish</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>meal_id</td>
                        <td>number</td>
                        <td><strong>FK to meals record</strong></td>
                        <td>To know which meal</td>
                    </tr>
                    <tr>
                        <td>dish_id</td>
                        <td>number</td>
                        <td><strong>FK to dishes record</strong></td>
                        <td>To know which dish</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center py-1">Table: <span class="text-primary">body_records</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>weight</td>
                        <td>float number</td>
                        <td></td>
                        <td>Weight of user</td>
                    </tr>
                    <tr>
                        <td>fat_percentage</td>
                        <td>float number</td>
                        <td></td>
                        <td>Fat percentage in body of user</td>
                    </tr>
                    <tr>
                        <td>user_id</td>
                        <td>number</td>
                        <td><strong>FK to users record</strong></td>
                        <td>To know the record belong to an user</td>
                    </tr>
                    <tr>
                        <td>date_at</td>
                        <td>date</td>
                        <td></td>
                        <td>What date is the record?</td>
                    </tr>
                </tbody>
            </table>


            <div class="text-center py-1">Table: <span class="text-primary">exercise_records</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>text</td>
                        <td></td>
                        <td>Name of the exercise</td>
                    </tr>
                    <tr>
                        <td>description</td>
                        <td>text</td>
                        <td></td>
                        <td>Description of the exercise</td>
                    </tr>
                    <tr>
                        <td>kcal</td>
                        <td>float number</td>
                        <td></td>
                        <td>Description of the exercise</td>
                    </tr>
                    <tr>
                        <td>minutes</td>
                        <td>int number</td>
                        <td></td>
                        <td>The amount of minutes to finish the exercise</td>
                    </tr>
                    <tr>
                        <td>user_id</td>
                        <td>number</td>
                        <td><strong>FK to users record</strong></td>
                        <td>To know the exercise belong to an user</td>
                    </tr>
                    <tr>
                        <td>date_at</td>
                        <td>date</td>
                        <td></td>
                        <td>What date is the record?</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center py-1">Table: <span class="text-primary">diary_records</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>diary</td>
                        <td>text</td>
                        <td></td>
                        <td>Content of the diary</td>
                    </tr>
                    <tr>
                        <td>user_id</td>
                        <td>number</td>
                        <td><strong>FK to users record</strong></td>
                        <td>To know the diary belong to an user</td>
                    </tr>
                    <tr>
                        <td>datetime_at</td>
                        <td>datetime</td>
                        <td></td>
                        <td>What date is the record?</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center py-1">Table: <span class="text-primary">tags</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>text</td>
                        <td></td>
                        <td>Name of the tag</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center py-1">Table: <span class="text-primary">recommendeds</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>title</td>
                        <td>text</td>
                        <td></td>
                        <td>Title of the recommended</td>
                    </tr>
                    <tr>
                        <td>content</td>
                        <td>text</td>
                        <td></td>
                        <td>Content of the recommended</td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>number</td>
                        <td></td>
                        <td>Type of the recommended (1=column 2=diet 3=beauty 4=health)</td>
                    </tr>
                    <tr>
                        <td>image</td>
                        <td>text in db + file in storage</td>
                        <td>nullable</td>
                        <td>Image description for the recommended</td>
                    </tr>
                    <tr>
                        <td>datetime_at</td>
                        <td>datetime</td>
                        <td></td>
                        <td>What date is the record?</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center py-1">Table: <span class="text-primary">recommended_tags</span></div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th style="width:20%">Column name</th>
                        <th style="width:20%">Value Type</th>
                        <th style="width:30%">Rules</th>
                        <th style="width:30%">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>number</td>
                        <td>primary key</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>recommended_id</td>
                        <td>number</td>
                        <td>FK to recommended record</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>tag_id</td>
                        <td>number</td>
                        <td>FK to tag record</td>
                        <td>Content of the recommended</td>
                    </tr>
                </tbody>
            </table>

        </div>

        <h1 class="text-center display-5">Summarize API</h1>

        <div class="container" id="summary-api">
            <h2>Api Login</h2>
            <img src="img/arenttest/api-login.png" class="img-fluid">

            <h2>Api get data for Recommended Page (Without login)</h2>
            <img src="img/arenttest/api-recommended.png" class="img-fluid">

            <h2>Api get data for Top Page (With login)</h2>
            <img src="img/arenttest/api-toppage.png" class="img-fluid">

            <h2>Api get data for My Record Page (With login)</h2>
            <img src="img/arenttest/api-myrecord.png" class="img-fluid">
            <img src="img/arenttest/api-myrecord2.png" class="img-fluid">
        </div>
    </section>
@stop