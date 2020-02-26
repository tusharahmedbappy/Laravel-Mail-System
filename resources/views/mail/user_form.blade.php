<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
            <!-- 123rt@tushar -->

    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="col-md-7 m-auto">
                        <div class="card-header bg-success">
                                <h4 class="text-center text-white">Mailing Form</h4>
                            </div>
                    <div class="card card-body ">
                       @if(Session::has('message'))
                            <span class="alert alert-primary">Your email has been  Send!</span>
                        @endif
                        <form action="{{url('send')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Subject">Subject</label>
                                <input type="text" class="form-control"
                                    id="Subject"
                                    name="subject"
                                    placeholder="Enter Subject">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control"
                                    id="Email"
                                    name="email"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                    <label for="message">Message</label>

                                   <textarea name="message" id="message"name="message" class="form-control"></textarea>
                                </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
