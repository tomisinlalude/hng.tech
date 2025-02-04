<html>
    <head>
        <title>HNGi Certificate for Intermediate</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/certificate/expert_cert.css')}}">
        <link rel="stylesheet" href="{{ asset('css/certificate/style.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <section class="container-fluid">

            <!--Certificate Header-->
            <header>
                <nav class="navbar">
                    <img class="navbar-brand img-fluid" src="{{ asset('css/certificate/assets/logo-beginner.svg')}}" alt="HNG logo" >
                    <div class="float-right issueDate">Issued October 20, 2019</div>
                </nav>
            </header>
            <!--End Of Certificate Header-->

            <!--Certificate Info-->
            <main class="text-center mx-auto mt-5">
                <h2>This is to certify that</h2>
                <span>Seyi Onifade</span>
                <p>participated in HNGi 6.0 and is rated an Expert in</p>
                <h3>UI/UX Design</h3>
            </main>
            <!--End Of Certificate Info-->

             <!--HNG Seal-->
             <aside class="mt-3">
                    <img src="{{ asset('css/certificate/assets/seal.svg')}}" alt="HNG seal">
                </aside>
                <!--End Of HNG Seal-->

            <!--Intern Signature and CEO Info-->
            <section class="text-center mx-auto mt-8">
                <h3>Seyi Onifade</h3>
                <hr>
                <span class="ceo-name d-block">Seyi Onifade</span>
                <span class="ceo-title d-block">CEO, HNG Internship</span>
            </section>
            <!--End Of Intern Signature and CEO Info-->

            <!--Certificate Footer-->
            <footer class="text-center mt-3">
                <p>HNG Internship has confirmed the participation of this individual in this program. Confirm <a href="hng.tech/certificate/xyluz">here</a></p>
            </footer>
            <!--End of Certificate Footer-->

        </section>
    </body>
</html>
