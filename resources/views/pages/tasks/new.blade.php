<div class="col-md-6 col-md-offset-3 login-panel">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Creating a new Task</h3>
        </div>
        <div class="panel-body">
            <form method="POST" action="tasks/new">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Taks name">
                </div>

                <button type="submit" class="btn btn-primary">Create task</button>
            </form>
        </div>
    </div>
</div>
