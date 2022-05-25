<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Draggable Todo App</title>
</head>

<body>
    <!-- modal -->
    <div class="modal" id="todo_form">
        <div class="header">
            <div class="title">Add Todo</div>
            <button class="btn close-modal">&times;</button>
        </div>
        <div class="body">
            <input type="text" id="todo_input" />
            <input type="submit" value="Add Todo" id="todo_submit" />
        </div>
    </div>
    <!-- todo -->
    <div class="todo-container">
        <div class="status" id="no_status">
            <h1>No Status</h1>
            <button id="add_btn" data-target-modal="#todo_form">+ Add Todo</button>
            <div class="todo" draggable="true">
                Buy a Pizza
                <span class="close">&times;</span>
            </div>
        </div>
        <div class="status">
            <h1>Not Started</h1>
        </div>
        <div class="status">
            <h1>In Progress</h1>
        </div>
        <div class="status">
            <h1>Completed</h1>
        </div>
    </div>

    <div id="overlay"></div>

    <script src="script.js"></script>
</body>

</html>