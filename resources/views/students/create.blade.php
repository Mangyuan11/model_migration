<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-mb-6 mx-auto d-grid gap-2">
                <form action="{{  url('students')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="form-lable">First Name</label>
        <input type="text" name="fname" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Last Name</label>
        <input type="text" name="lname" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Email</label>
        <input type="text" name="email" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Phone number</label>
        <input type="text" name="phone" calss="form-control">
        @error('phone')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Address</label>
        <input type="text" name="address" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">City</label>
        <input type="text" name="city" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Province</label>
        <input type="text" name="province" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">Zip</label>
        <input type="text" name="zip" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
    <label class="form-lable">BirthDate</label>
        <input type="date" name="birthdate" calss="form-control">
        @error('email')
                <div>{{ $message }}</div> 
            @enderror
    </div>
    <div class="form-group mb-3">
        <button class="btn btn-primary">Save changes</button>
    </div>
    </form>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>