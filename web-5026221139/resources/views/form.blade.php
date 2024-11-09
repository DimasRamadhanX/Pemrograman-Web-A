<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function validateForm() {


            var name = document.forms["myForm"]["Name"].value;
            var nrp = document.forms["myForm"]["NRP"].value;
            var age = document.forms["myForm"]["age"].value;
            var email = document.forms["myForm"]["email"].value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;




            if (name == "" || nrp == "" || email == "" || age=="") {
                alert("Tolong isi semua eaaa");
                return false;
            }
            if (name.length < 10) {
                alert("Nama terlalu pendek");
                return false;
            }



            if ( nrp.length != 10) {
                alert("Nrp tidak cukup");
                return false;
            }


            if (!emailPattern.test(email)) {
                alert("isi email bang");
                return false;
            }



            if (isNaN(age) || !Number.isInteger(Number(age))) {
                alert("umur tipe salah");
                return false;
            }
            if (isNaN(nrp) || !Number.isInteger(Number(nrp))) {
                alert("nrp format salah");
                return false;
            }
        }
        function ShowAlert(){
            alert("Hawk Tua spat on that thang");
            return true;
        }
    </script>
    </head>


    <body>
        <div class="container">
            <form action="https://www.google.com/" method="get" name="myForm" onsubmit="return validateForm()">




                <div class="input-group">
                    <span class="input-group-text">Nama lengkap</span>
                    <input type="text" class="form-control" placeholder="Isikan Nama" name="Name"id="Namaku">
                </div>
                <div class="input-group">
                    <span class="input-group-text">NRP</span>
                    <input type="text" class="form-control" placeholder="Isikan 10 NRP" name="NRP"id="NRPku">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Umur</span>
                    <input type="text" class="form-control" placeholder="Isikan Umur" name="age"id="umurkuku">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Email</span>
                    <input type="text" class="form-control" placeholder="Isikan email" name="email"id="umurkuku">
                </div>





                <input type="reset" class="btn btn-warning"value="reset">
                <input type="submit" class="btn btn-success"value="kirim">
                <input type="button" class="btn btn-default"value="alert" onclick="ShowAlert()">

            </form>


        </div>
        <div> <a href="{{ route('UTS') }}">Lihat Web ETS</a> </div>
    </body>



</html>


