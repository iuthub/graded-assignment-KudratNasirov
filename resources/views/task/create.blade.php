
<div class="main">
    <form action="{{route('add.task')}}" method="post">
        <div id="myDIV" class="header">
            <h2>My To Do List</h2>
            <input type="text" name="newTask" placeholder="More than two words only">
            {{csrf_field()}}
            <button type="submit" class="addBtn">Add</button>
        </div>
    </form>
</div>
