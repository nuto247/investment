<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VortexIncome</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eef1f0;
            padding-top: 56px; /* To avoid content being hidden behind the navbar */
        }
        .navbar-nav {
            margin: auto;
        }
        .nav-link {
            text-transform: uppercase;
        }
        .navbar-custom {
            background-color: navy;
        }
        .custom-card {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .navy-card {
            background-color: navy;
            color: white;
        }
        .footer {
            background-color: black;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        /* Adding bottom border to all navbar items in mobile view */
        @media (max-width: 767px) {
            .navbar-nav .nav-item {
                position: relative;
            }
            .navbar-nav .nav-item::after {
                content: '';
                position: absolute;
                bottom: -1px;
                left: 0;
                width: 100%;
                height: 1px;
                background-color: #ccc; /* Adjust color as needed */
            }
        }
        /* Style for Available Balance card */
        .card-available-balance {
            background-color: navy;
            color: white;
        }
    </style>
</head>
<body>
    <!-- (omitted navbar content for brevity) -->

    <!-- Content with Form in Card -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 custom-card mb-3">
                <div class="card">
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf

                       

                  
                            <div class="form-group">
                                <label for="investmentAmount">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter email" >
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type="password" class="form-control"  name="password" placeholder="Enter password" >
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <br>
                            <a href="register">Don't have an account? Click here to registert</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <!-- (omitted footer content for brevity) -->

    <!-- Bootstrap and jQuery -->
    <!-- (omitted scripts for brevity) -->

    <!-- JavaScript for BTC Conversion -->
    <script>
        function convertToBTC() {
            const btcRate = 30000; // Example conversion rate, 1 BTC = 30000 USD
            const investmentAmount = document.getElementById('investmentAmount').value;
            const btcAmount = investmentAmount / btcRate;
            document.getElementById('btcAmount').value = btcAmount.toFixed(6); // Display up to 6 decimal places
        }

   
    </script>
</body>
</html>
