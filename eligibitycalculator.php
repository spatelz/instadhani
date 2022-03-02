<!DOCTYPE html>
<html lang="zxx">


<?php 
include('partials/head.php');
?>



<body>
    <!-- Preloader -->
    <?php 
include('partials/header.php');
?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Eligibity Calculator</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <span>Eligibity Calculator</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-70 " style="margin-top:50px;">
        <div class="row">
            <div class="col-12">
                <div class="w3-bar w3-black">

                    <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event, 'Business Loan')">Business Loan
                        Calculator</button>
                    <button class="w3-bar-item w3-button tablink " onclick="openCity(event, 'Personal Loan')">Personal Loan
                        Calculator</button>
                    <button class="w3-bar-item w3-button tablink " onclick="openCity(event, 'Home Loan')">Home Loan Salaried Calculator
                    </button>
                    <button class="w3-bar-item w3-button tablink " onclick="openCity(event, 'Home Self Employed')">Home Loan Self Employed
                        Calculator</button>

                </div>

                <div id="Business Loan" class="w3-container w3-border city">
                    <section class="faq-area pt-70 pb-70">
                        <div class="container">
                            <div class="loan-section">
                                <!-- Container -->
                                <div class="container">
                                    <form action="CalculateEmi.php" method="post"
                                        onsubmit="return mySubmitFunction(event)">
                                        <!-- row -->
                                        <div class="row calculator-loan">
                                            <!-- col -->
                                            <div class="col-lg-12 col-12 ">
                                                <div class="loan-calculation-wrapper">
                                                    <div class="theme-title">
                                                        <h2 class="text-center" style="color: #e93c05;">Business
                                                            loan
                                                            status, interest &amp; Installment.</h2>
                                                        <p class="text-center">Lorem ipsum dolor sit amet,
                                                            consectetur
                                                            adipiscing elit. Vestibulum justo ante, auctor at
                                                            sodales
                                                            facilisis, tempus vitae sapien.
                                                        </p>
                                                        <br>
                                                        <div class="loan-filter-form">
                                                            <div class="thirty form">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Name</label><input
                                                                                        type="Input">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Email</label><input
                                                                                        type="email">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Phone Number</label><input
                                                                                        type="tel">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Annual P&L</label><input
                                                                                        type="input" name="annual_pl"
                                                                                        id="annual" class="amount"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Depreciation</label><input
                                                                                        type="input" name="depreciation"
                                                                                        id="depreciation" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Partner/ Directors
                                                                                        salaries</label><input
                                                                                        type="input"
                                                                                        name="partner_salaries"
                                                                                        id="partnerSalary" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Total Monthly Income
                                                                                    </label><input type="input"
                                                                                        name="total_monthly_income"
                                                                                        id="totalMonthlyIncome"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Foir</label> <input
                                                                                        type="input" name="foir"
                                                                                        id="foir" class="rate" value="">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Home Loan
                                                                                        EMI</label><input type="input"
                                                                                        name="home_loan_emi"
                                                                                        id="homeLoanEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI </label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi"
                                                                                        id="personalLoanEmi"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI 2</label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi2"
                                                                                        id="personalLoanEmi2"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI 3</label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi3"
                                                                                        id="personalLoanEmi3"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Car Loan/
                                                                                        Bike Loan EMI</label><input
                                                                                        type="input" name="car_loan_emi"
                                                                                        id="carLoanEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Any other
                                                                                        EMI</label><input type="input"
                                                                                        name="any_other_emi"
                                                                                        id="anyOtherEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Total
                                                                                        Monthly EMI</label><input
                                                                                        type="input"
                                                                                        name="total_monthly_emi"
                                                                                        id="totalMonthlyEmi"
                                                                                        class="rate" value=""></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Max Eligibal EMI</label>
                                                                                    <input type="input"
                                                                                        name="max_eligibal_emi"
                                                                                        id="maxEligibalEmi" class="rate"
                                                                                        value=""></p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Rate of
                                                                                        interest</label><input
                                                                                        type="input"
                                                                                        name="rate_of_interest"
                                                                                        id="rateOfInterest" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Unit</label><input
                                                                                        type="input" name="unit"
                                                                                        id="unit" class="rate"
                                                                                        value="100000"
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Tenure in
                                                                                        Years</label><input type="input"
                                                                                        name="tenure_in_years"
                                                                                        id="tenureInYears" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Tenure In Months</label>
                                                                                    <input type="input"
                                                                                        name="tenure_in_months"
                                                                                        id="tenureInMonths" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Per Lakhs EMI</label>
                                                                                    <input type="input"
                                                                                        name="per_lakh_emi"
                                                                                        id="perLakhEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-sm-3">

                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Maximum
                                                                                        Loan</label><input type="input"
                                                                                        name="maximum_loan"
                                                                                        id="maximumLoan" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label> EMI</label>
                                                                                    <input type="input" name="emi"
                                                                                        id="totalEmi" class="rate"
                                                                                        value="">
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="msg"></div>
                                                                        <button type="submit" name="submit"
                                                                            class="text-center eligibal"
                                                                            onclick="submitData()">Check Your
                                                                            Eligibility</button>


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
                </div>

                <div id="Personal Loan" class="w3-container w3-border city" style="display:none">
                    <section class="faq-area  pb-70">
                        <div class="container">
                            <form action="#">
                                <!-- row -->
                                <div class="row calculator-loan">
                                    <!-- col -->
                                    <div class="col-lg-12 col-12 ">
                                        <div class="loan-calculation-wrapper">
                                            <div class="theme-title">
                                                <h2 class="text-center" style="color: #e93c05;">Personal loan status,
                                                    interest &amp; Installment.
                                                </h2>
                                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Vestibulum justo ante, auctor at sodales facilisis,
                                                    tempus vitae sapien.
                                                </p>
                                                <br>
                                                <div class="loan-filter-form">
                                                    <div class="thirty form">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-amount">
                                                                        <p><label>Name</label><input type="Input">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-amount">
                                                                        <p><label>Email</label><input type="email">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-amount">
                                                                        <p><label>Phone Number</label><input type="tel">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-amount">
                                                                        <p><label>Monthly
                                                                                Salary</label><input type="text"
                                                                                class="amount" id="monthlySalary"
                                                                                value="" onchange="PersonalLoan()">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Monthly
                                                                                Incentives</label><input type="text"
                                                                                class="rate" id="monthlyIncentives"
                                                                                value="" onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Total Monthly Income
                                                                            </label><input type="text" class="rate"
                                                                                id="totalMonthlyIncome" value=""></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>FOIR </label><input type="text"
                                                                                class="rate" id="foir" value=""
                                                                                onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Home Loan
                                                                                EMI</label><input type="text"
                                                                                class="rate" id="homeLoanEmi" value=""
                                                                                onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Personal
                                                                                Loan EMI </label><input type="text"
                                                                                class="rate" id="personalLoanEmi"
                                                                                value="" onchange="PersonalLoan()">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Personal
                                                                                Loan EMI 2</label><input type="text"
                                                                                class="rate" id="personalLoanEmi2"
                                                                                value="" onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Personal
                                                                                Loan EMI 3</label><input type="text"
                                                                                class="rate" id="personalLoanEmi3"
                                                                                value="" onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Car Loan/
                                                                                Bike Loan EMI</label><input type="text"
                                                                                class="rate" id="carLoanEmi" value=""
                                                                                onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-term">
                                                                        <p><label>Any other
                                                                                EMI</label><input type="text"
                                                                                class="term" id="anyOtherEmi" value=""
                                                                                onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Total
                                                                                Monthly
                                                                                EMI</label><input type="text"
                                                                                class="rate" id="totalMonthlyEmi"
                                                                                value="" onchange="PersonalLoan()">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">

                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Max
                                                                                Eligible EMI
                                                                            </label><input type="text" class="rate"
                                                                                id="maxEligibalEmi" value=""></p>
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Rate of
                                                                                interest</label><input type="text"
                                                                                class="rate" id="rateOfInterest"
                                                                                value="" onchange="PersonalLoan()">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Unit</label><input type="text"
                                                                                class="rate" id="unit" value="100000"
                                                                                onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Tenure in
                                                                                Years</label><input type="text"
                                                                                class="rate" id="tenureInYears" value=""
                                                                                onchange="PersonalLoan()">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">

                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Tenure in
                                                                                months</label><input type="text"
                                                                                id="tenureInMonths" class="rate"
                                                                                value="" onchange="PersonalLoan()"></p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-3">

                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Per Lakh
                                                                                EMI</label><input type="text"
                                                                                class="rate" id="perLakhEmi" value=""
                                                                                onchange="PersonalLoan()">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>Maximum
                                                                                Loan</label><input type="text"
                                                                                class="rate" id="maximumLoan" value=""
                                                                                onchange="PersonalLoan()">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="accrue-field-rate">
                                                                        <p><label>EMI</label><input type="text"
                                                                                class="rate" id="totalEmi" value="">
                                                                        </p>
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

                                            <!-- /col -->

                                        </div>
                                        <!-- /row -->
                            </form>
                        </div>
                        <!-- /Container -->
                    </section>

                </div>

                <div id="Home Loan" class="w3-container w3-border city" style="display:none">
                    <section class="faq-area pt-70 pb-70">
                        <div class="container">
                            <div class="loan-section">
                                <!-- Container -->
                                <div class="container">
                                    <form action="CalculateEmi.php" method="post"
                                        onsubmit="return mySubmitFunction(event)">
                                        <!-- row -->
                                        <div class="row calculator-loan">
                                            <!-- col -->
                                            <div class="col-lg-12 col-12 ">
                                                <div class="loan-calculation-wrapper">
                                                    <div class="theme-title">
                                                        <h2 class="text-center" style="color: #e93c05;">Home
                                                            loan Salaried
                                                            status, interest &amp; Installment.</h2>
                                                        <p class="text-center">Lorem ipsum dolor sit amet,
                                                            consectetur
                                                            adipiscing elit. Vestibulum justo ante, auctor at
                                                            sodales
                                                            facilisis, tempus vitae sapien.
                                                        </p>
                                                        <br>
                                                        <div class="loan-filter-form">
                                                            <div class="thirty form">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Name</label><input
                                                                                        type="Input">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Email</label><input
                                                                                        type="email">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Phone Number</label><input
                                                                                        type="tel">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Annual P&L</label><input
                                                                                        type="input" name="annual_pl"
                                                                                        id="annual" class="amount"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Depreciation</label><input
                                                                                        type="input" name="depreciation"
                                                                                        id="depreciation" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Partner salaries</label><input
                                                                                        type="input"
                                                                                        name="partner_salaries"
                                                                                        id="partnerSalary" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Monthly
                                                                                        Incentives</label><input
                                                                                        type="input"
                                                                                        name="partner_salaries"
                                                                                        id="partnerSalary" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Total Monthly Income
                                                                                    </label><input type="input"
                                                                                        name="total_monthly_income"
                                                                                        id="totalMonthlyIncome"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Foir</label> <input
                                                                                        type="input" name="foir"
                                                                                        id="foir" class="rate" value="">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Home Loan
                                                                                        EMI</label><input type="input"
                                                                                        name="home_loan_emi"
                                                                                        id="homeLoanEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI </label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi"
                                                                                        id="personalLoanEmi"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI 2</label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi2"
                                                                                        id="personalLoanEmi2"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI 3</label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi3"
                                                                                        id="personalLoanEmi3"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Car Loan/
                                                                                        Bike Loan EMI</label><input
                                                                                        type="input" name="car_loan_emi"
                                                                                        id="carLoanEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Any other
                                                                                        EMI</label><input type="input"
                                                                                        name="any_other_emi"
                                                                                        id="anyOtherEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Total
                                                                                        Monthly EMI</label><input
                                                                                        type="input"
                                                                                        name="total_monthly_emi"
                                                                                        id="totalMonthlyEmi"
                                                                                        class="rate" value=""></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Max Eligibal EMI</label>
                                                                                    <input type="input"
                                                                                        name="max_eligibal_emi"
                                                                                        id="maxEligibalEmi" class="rate"
                                                                                        value=""></p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Rate of
                                                                                        interest</label><input
                                                                                        type="input"
                                                                                        name="rate_of_interest"
                                                                                        id="rateOfInterest" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Unit</label><input
                                                                                        type="input" name="unit"
                                                                                        id="unit" class="rate"
                                                                                        value="100000"
                                                                                        onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Tenure in
                                                                                        Years</label><input type="input"
                                                                                        name="tenure_in_years"
                                                                                        id="tenureInYears" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Tenure In Months</label>
                                                                                    <input type="input"
                                                                                        name="tenure_in_months"
                                                                                        id="tenureInMonths" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Per Lakhs EMI</label>
                                                                                    <input type="input"
                                                                                        name="per_lakh_emi"
                                                                                        id="perLakhEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-sm-3">

                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Maximum
                                                                                        Loan</label><input type="input"
                                                                                        name="maximum_loan"
                                                                                        id="maximumLoan" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label> EMI</label>
                                                                                    <input type="input" name="emi"
                                                                                        id="totalEmi" class="rate"
                                                                                        value="">
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-sm-12">
                                                                            <div class="msg"></div>
                                                                            <button type="submit" name="submit"
                                                                                class="text-center eligibal"
                                                                                onclick="submitData()">Check Your
                                                                                Eligibility</button>
                                                                        </div>

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
                </div>
                <div id="Home Self Employed" class="w3-container w3-border city" style="display:none">
                    <section class="faq-area pt-70 pb-70">
                        <div class="container">
                            <div class="loan-section">
                                <!-- Container -->
                                <div class="container">
                                    <form action="CalculateEmi.php" method="post"
                                        onsubmit="return mySubmitFunction(event)">
                                        <!-- row -->
                                        <div class="row calculator-loan">
                                            <!-- col -->
                                            <div class="col-lg-12 col-12 ">
                                                <div class="loan-calculation-wrapper">
                                                    <div class="theme-title">
                                                        <h2 class="text-center" style="color: #e93c05;">Home
                                                            loan Self Employed
                                                            status, interest &amp; Installment.</h2>
                                                        <p class="text-center">Lorem ipsum dolor sit amet,
                                                            consectetur
                                                            adipiscing elit. Vestibulum justo ante, auctor at
                                                            sodales
                                                            facilisis, tempus vitae sapien.
                                                        </p>
                                                        <br>
                                                        <div class="loan-filter-form">
                                                            <div class="thirty form">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Name</label><input
                                                                                        type="Input">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Email</label><input
                                                                                        type="email">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-amount">
                                                                                <p><label>Phone Number</label><input
                                                                                        type="tel">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Monthly Salary</label><input
                                                                                        type="input" name="depreciation"
                                                                                        id="depreciation" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Monthly
                                                                                        Incentives</label><input
                                                                                        type="input"
                                                                                        name="partner_salaries"
                                                                                        id="partnerSalary" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Total Monthly Income
                                                                                    </label><input type="input"
                                                                                        name="total_monthly_income"
                                                                                        id="totalMonthlyIncome"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Foir</label> <input
                                                                                        type="input" name="foir"
                                                                                        id="foir" class="rate" value="">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Home Loan
                                                                                        EMI</label><input type="input"
                                                                                        name="home_loan_emi"
                                                                                        id="homeLoanEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI </label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi"
                                                                                        id="personalLoanEmi"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI 2</label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi2"
                                                                                        id="personalLoanEmi2"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Personal
                                                                                        Loan EMI 3</label><input
                                                                                        type="input"
                                                                                        name="person_loan_emi3"
                                                                                        id="personalLoanEmi3"
                                                                                        class="rate" value=""
                                                                                        onchange="Calculate()"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Car Loan/
                                                                                        Bike Loan EMI</label><input
                                                                                        type="input" name="car_loan_emi"
                                                                                        id="carLoanEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Any other
                                                                                        EMI</label><input type="input"
                                                                                        name="any_other_emi"
                                                                                        id="anyOtherEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Total
                                                                                        Monthly EMI</label><input
                                                                                        type="input"
                                                                                        name="total_monthly_emi"
                                                                                        id="totalMonthlyEmi"
                                                                                        class="rate" value=""></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Max Eligibal EMI</label>
                                                                                    <input type="input"
                                                                                        name="max_eligibal_emi"
                                                                                        id="maxEligibalEmi" class="rate"
                                                                                        value=""></p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Rate of
                                                                                        interest</label><input
                                                                                        type="input"
                                                                                        name="rate_of_interest"
                                                                                        id="rateOfInterest" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Unit</label><input
                                                                                        type="input" name="unit"
                                                                                        id="unit" class="rate"
                                                                                        value="100000"
                                                                                        onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Tenure in
                                                                                        Years</label><input type="input"
                                                                                        name="tenure_in_years"
                                                                                        id="tenureInYears" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Tenure In Months</label>
                                                                                    <input type="input"
                                                                                        name="tenure_in_months"
                                                                                        id="tenureInMonths" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Per Lakhs EMI</label>
                                                                                    <input type="input"
                                                                                        name="per_lakh_emi"
                                                                                        id="perLakhEmi" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-sm-3">

                                                                            <div class="accrue-field-rate">
                                                                                <p><label>Maximum
                                                                                        Loan</label><input type="input"
                                                                                        name="maximum_loan"
                                                                                        id="maximumLoan" class="rate"
                                                                                        value="" onchange="Calculate()">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="accrue-field-rate">
                                                                                <p><label> EMI</label>
                                                                                    <input type="input" name="emi"
                                                                                        id="totalEmi" class="rate"
                                                                                        value="">
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="msg"></div>
                                                                        <button type="submit" name="submit"
                                                                            class="text-center eligibal"
                                                                            onclick="submitData()">Check Your
                                                                            Eligibility</button>


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
                </div>
            </div>
        </div>


    </div>

    </div>
    </div>


    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-red";
        }
    </script>

    <?php 
include('partials/footer.php');
?>

</body>

</html>