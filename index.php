<html>
  <head>
    <style>
      /* Add styling for the to-do list */
      .todo-list {
        width: 500px;
        margin: auto;
        font-family: Arial, sans-serif;
      }

      /* Style the task items */
      .todo-list li {
        background-color: #f9f9f9;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        list-style: none;
      }

      /* Style the task items as completed */
      .todo-list .completed {
        text-decoration: line-through;
        color: #ddd;
      }

      /* Style the add task button */
      .add-task-btn {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        float: right;
      }

      /* Style the task input field */
      .add-task-input {
        padding: 10px;
        border-radius: 5px;
        border: none;
        width: 70%;
        float: left;
        margin-right: 10px;
      }

      /* Clear the floats */
      .clear-fix {
        clear: both;
      }
    </style>
  </head>
  <body>
    <div class="todo-list">
      <h1>To-Do List</h1>
      <input type="text" class="add-task-input" placeholder="Add Task">
      <button class="add-task-btn">Add Task</button>
      <ul>
        <!-- The task items will be added here dynamically -->
      </ul>
    </div>
    <script>
      // Get the task input field and the add task button
      const taskInput = document.querySelector(".add-task-input");
      const addTaskBtn = document.querySelector(".add-task-btn");

      // Get the task list
      const taskList = document.querySelector("ul");

      // Add a new task to the list
      addTaskBtn.addEventListener("click", function() {
        // Get the task name from the input field
        const taskName = taskInput.value;

        // Create a new task item
        const taskItem = document.createElement("li");
        taskItem.innerHTML = taskName;

        // Add a delete button to the task item
        const deleteBtn = document.createElement("button");
        deleteBtn.innerHTML = "Delete";
        deleteBtn.style.float = "right";
        deleteBtn.addEventListener("click", function() {
          taskList.removeChild(taskItem);
            });
    </script>
  </body>
</html>
