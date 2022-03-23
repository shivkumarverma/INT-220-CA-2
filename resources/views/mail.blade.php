<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
    <title>Send Emails</title>
</head>
<body>
    <div class="vh-100 d-flex align-items-center justify-content-center container-fluid bg-light">
   
        <div  class=" shadow p-3 mb-5 bg-body rounded w-50 p-4">
          
       <h1 class="display-6 mb-3 text-center ">Send Mails</h1>
             

        <form action="{{url('/')}}" method="post" >
      @csrf
  <div class="form-outline mb-4">
       <label class="form-label" for="form4Example1">From Email address (sender's email)</label>
    <input type="email" name="FromEmail" id="form4Example1" class="form-control" />
   
  </div>

  <div class="form-outline mb-4">
      <label class="form-label" for="form4Example2">To Email address (Reciver's Email)</label>
    <input type="email" name="ToEmail" id="form4Example2" class="form-control" />
    
  </div>

  
  <div class="form-outline mb-4">
      <label class="form-label" for="form4Example3">Message</label>
    <textarea name="content" class="form-control" id="form4Example3" rows="4"></textarea>
    
  </div>

  
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
     
</div>
</div>
 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</body>
</html>