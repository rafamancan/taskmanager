<div class="col-md-6 col-md-offset-3 login-panel">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Welcome to Taskmanager!</h3>
        </div>
        <div class="panel-body">
            <form method="POST" action="validateUserLogin">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name">Login:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Login">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
