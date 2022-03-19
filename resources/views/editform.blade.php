<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">Projects</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/}')}}">Tasks</span></a>
        </li>
    </div>
  </nav>
  <h2 style="text-align:left;background-color:LightGray;">
    Task Board
  </h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="task" class="form-label">Task</label>
                  <input type="text" name="task" id="name" class="form-control" value="{{$student->task}}">
                </div>
                <div class="form-group">
                  <label for="date" class="form-label">End-Date</label>
                  <input type="date" name="date" id="" class="form-control" value="{{$student->date}}">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                      <select name="status" id="status" class="form-control" value="{{$student->status}}">
                           
                        <option value="Not Starting">Not Starting</option>
                        <option value="In Progress">In Progress</option>
                        <option value="In Review">In Review</option>
                        <option value="Completed">Completed</option>
                        <option value="Cancelled">Cancelled</option>
                      </select>
                         </div>

                <div class="form-group">
                    <label for="priority" class="form-label">Priority</label>
                    <select name="priority" id="priority" class="form-control" value="{{$student->priority}}"">
                           
                      <option value="Very Low">VERY LOW</option>
                      <option value="Low">LOW</option>
                      <option value="Medium">MEDIUM</option>
                      <option value="High">HIGH</option>
                      <option value="Very High">VERY HIGH</option>
                      </select> 
                  </div>
                  <div class="form-group">
                    <label for="marks" class="form-label">Progress <span class="sr-only">(%)</span></label>
                    <input type="number" name="progress" id="progress" class="form-control" value="{{$student->progress}}"">
                  </div>
                  <div class="form-group">
                    <label for="marks" class="form-label">Assignees(member)</label>
                    <input type="number" name="assignees" id="assignees" class="form-control"  value="{{$student->assignees}}">
                  </div>

                  <button class="btn btn-primary">UPDATE</button>
                </form>
                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
