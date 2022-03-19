<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <style>
      .InReview{
    background-color: #ca670a;}
    .InProgress{
    background-color: #0aca8a;}
    .NotStarting{
      background-color: blue;
    }
    .Completed{
      background-color: lightcoral;
    }
    .Cancelled{
      background-color: red;
    }

    th, td{
      border-top: 1px solid black;
      margin-top:20px;  
  
}
    </style>
    <title>Assignment</title>
</head>
<body>
  {{-- {{var_dump( asset('css/app.css') )}} --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">Projects</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Tasks</span></a>
        </li>
    </div>
  </nav>
  <h2 style="text-align:left;background-color:LightGray;">
    Task Board
  </h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <form action="" method="POST">
                @csrf
                
                <div class="form-group">
                  <label for="task" class="form-label">Task</label>
                  <input type="text" name="task" id="name" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="date" class="form-label">End-Date</label>
                  <input type="date" name="date" id="">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                      <select name="status" id="status" class="form-control" >
                           
                        <option value="Not Starting" class="btn btn-primary btn-sm">Not Starting</p></option>
                        <option value="In Progress" class="btn btn-success">In Progress</option>
                        <option value="In Review" class="btn btn-info">In Review</option>
                        <option value="Completed" class="btn btn-warning">Completed</option>
                        <option value="Cancelled" class="btn btn-danger">Cancelled</option>
                      </select>

                         </div>
                         
                

                <div class="form-group">
                    <label for="priority" class="form-label">Priority</label>
                    <select name="priority" id="priority" class="form-control">
                           
                        <option value="Very Low">VERY LOW</option>
                        <option value="Low">LOW</option>
                        <option value="Medium">MEDIUM</option>
                        <option value="High">HIGH</option>
                        <option value="Very High">VERY HIGH</option>
                      </select> 
                  </div>
                  

                  <div class="form-group">
                    <label for="marks" class="form-label">Progress <span class="sr-only">(%)</span></label>
                    <input type="number" name="progress" id="progress" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="marks" class="form-label">Assignees(member)</label>
                    <input type="number" name="assignees" id="assignees" class="form-control" >
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                @if (session()->has('status'))
                <div class="alert alert-dark">
                    {{ session('status') }}
                </div>
                @endif


            </div>
            <div class="col-sm-9">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TASK</th>
                            <th scope="col">END-DATE</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">PRIORITY</th>
                            <th scope="col">PROGRESS%</th>
                            <th scope="col">ASSIGNEES</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($task as $task1)
                        <tr>
                            <th>{{$task1->id}}</th>
                            <td>{{$task1->task}}</td>
                            <td>{{$task1->date}}</td>
                            <td class="btn {{str_replace(' ','', $task1->status)}}">{{$task1->status}}</td>
                            <td>{{$task1->priority}}</td>
                            <td>{{$task1->progress}}</td>
                            <td>{{$task1->assignees}}</td>
                            <td>
                                <a href="{{ url('/edit', $task1->id)}}" class="btn btn-info btn-sm">Edit</a> 
                                <a href="{{ url('/delete', $task1->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>                          
                       </tr>                           
                        @endforeach
                    </tbody>

                </table>





                
            </div> 
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>