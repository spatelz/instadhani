<!DOCTYPE html>
<html lang="zxx">

<?php 
include('partials/head.php');
?>

<body>
  

   

<?php 
include('partials/header.php');
?>

    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Business Loan</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>About</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->





    <!-- FAQ -->
    <section class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="loan-section">
                <!-- Container -->
                <div class="container">
                    <form action="#">
                        <!-- row -->
                        <div class="row calculator-loan">
                            <!-- col -->
                            <div class="col-lg-12 col-12 wow fadeInLeft">
                                <div class="loan-calculation-wrapper">
                                    <div class="theme-title">
                                        <h2 class="text-center" style="color: #e93c05;">Business loan status, interest &amp; Installment.</h2>
                                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo ante, auctor at sodales facilisis, tempus vitae sapien.
                                        </p>
                                        <br>
                                        <div class="loan-filter-form">
                                            <div class="thirty form">
                                                <div class="container">
                                                    <div class="row">
                                                    <div class="col-sm-3">
                                                            <div class="accrue-field-amount">
                                                                <p><label>Name</label><input type="number" id="annual" class="amount" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div><div class="col-sm-3">
                                                            <div class="accrue-field-amount">
                                                                <p><label></label><input type="number" id="annual" class="amount" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div><div class="col-sm-3">
                                                            <div class="accrue-field-amount">
                                                                <p><label>Annual P&L</label><input type="number" id="annual" class="amount" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-amount">
                                                                <p><label>Annual P&L</label><input type="number" id="annual" class="amount" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Depreciation</label><input type="number" id="depreciation" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Partner/ Directors
                                                                        salaries</label><input type="number" id="partnerSalary" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Total Monthly Income
                                                                    </label><input type="number" id="totalMonthlyIncome" class="rate" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Foir</label> <input type="number" id="foir" class="rate" value=""></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Home Loan EMI</label><input type="number" id="homeLoanEmi" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Personal
                                                                        Loan EMI </label><input type="number" id="personalLoanEmi" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Personal
                                                                        Loan EMI 2</label><input type="number" id="personalLoanEmi2" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Personal
                                                                        Loan EMI 3</label><input type="number" id="personalLoanEmi3" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Car Loan/
                                                                        Bike Loan EMI</label><input type="number" id="carLoanEmi" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Any other EMI</label><input type="number" id="anyOtherEmi" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Total
                                                                        Monthly EMI</label><input type="number" id="totalMonthlyEmi" class="rate" value=""></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Max Eligibal EMI</label>
                                                                    <input type="number" id="maxEligibalEmi" class="rate" value=""></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Rate of
                                                                        interest</label><input type="number" id="rateOfInterest" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Unit</label><input type="number" id="unit" class="rate" value="100000" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Tenure in
                                                                        Years</label><input type="number" id="tenureInYears" class="rate" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Tenure In Months</label>
                                                                    <input type="number" id="tenureInMonths" class="rate" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label>Per Lakhs EMI</label>
                                                                    <input type="number" id="perLakhEmi" class="rate" value="" onchange="Calculate()"></p>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-3">

                                                            <div class="accrue-field-rate">
                                                                <p><label>Maximum
                                                                        Loan</label><input type="number" id="maximumLoan" class="rate" value="" onchange="Calculate()">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="accrue-field-rate">
                                                                <p><label> EMI</label>
                                                                    <input type="number" id="totalEmi" class="rate" value="">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <a href="#" class="text-center eligibal">Check Your
                                                            Eligibility</a>


                                                    </div>


                                                    <!-- <button>Check Your Eligibility</button> --><br>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->

                        </div>
                        <!-- /row -->
                    </form>
                </div>
                <!-- /Container -->
            </div>
        </div>
    </section>
    <!-- End FAQ -->

    <?php 
include('partials/footer.php');
?>

    

  
</body>

</html>

