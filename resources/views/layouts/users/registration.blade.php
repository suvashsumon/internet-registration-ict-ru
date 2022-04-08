@extends('layouts.users.master')

@section('title', 'Registration')

@section('custom-css')
<link rel="stylesheet" href="css/registration-form.css">
@endsection

@section('body-content')
<div class="container mt-5 mb-5">
        <div class="card shadow form-card pr-3 pl-3 pb-4">
            <div class="h3 mt-5 mb-3 text-center card-title">Registration: Please enter your information</div>
            <form class="card-body">
                <div class="form-group fm-group-custom">
                    <label for="residentialSelection">Select User Type (Residential or Dormatory):</label>
                    <select class="form-control form-control-sm inputfield" id="residentialSelection">
                        <option value="">Select</option>
                        <option value="Dormitory">Student (M.Phil Fellow/ PhD Fellow/ International Student)</option>
                        <option value="Residential">Employee (Teacher/Officer)</option>
                    </select>
                </div>
                <div class="form-group fm-group-custom">
                    <label for="identityNo">Internet ID/ Salary ID (8 digit)/Student ID:</label>
                    <input type="text" class="form-control form-control-sm inputfield" id="identityNo"
                        placeholder="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="newPassword">New password:</label>
                        <input type="password" class="form-control form-control-sm inputfield"
                            id="newPassword" placeholder="">
                    </div>
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="confirmPassword">Confirm new password:</label>
                        <input type="password" class="form-control form-control-sm inputfield"
                            id="confirmPassword" placeholder="">
                    </div>
                </div>
                <div class="form-group fm-group-custom">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control form-control-sm inputfield" id="name"
                        placeholder="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="designation">Designation:</label>
                        <input type="text" class="form-control form-control-sm inputfield" id="designation"
                            placeholder="">
                    </div>
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="department">Department:</label>
                        <input type="text" class="form-control form-control-sm inputfield" id="department"
                            placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="emailId">Email ID:</label>
                        <input type="email" class="form-control form-control-sm inputfield" id="emailId" placeholder="">
                    </div>
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="mobileNo">Mobile No.:</label>
                        <input type="text" class="form-control form-control-sm inputfield" id="mobileNo"
                            placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="bulidingNo">Building Name or Number:</label>
                        <select class="form-control form-control-sm inputfield" id="bulidingNo">
                            <option value="">--SELECT Building Name--</option>
                            <option value='BKZH'>BKZH </option>
                            <option value='E-01'>E-01 </option>
                            <option value='E-02'>E-02 </option>
                            <option value='E-05'>E-05 </option>
                            <option value='E-07'>E-07 </option>
                            <option value='E-08'>E-08 </option>
                            <option value='E-09'>E-09 </option>
                            <option value='E-11'>E-11 </option>
                            <option value='E-12'>E-12 </option>
                            <option value='E-13'>E-13 </option>
                            <option value='E-31'>E-31 </option>
                            <option value='E-32'>E-32 </option>
                            <option value='E-33'>E-33 </option>
                            <option value='E-50'>E-50 </option>
                            <option value='E-64'>E-64 </option>
                            <option value='E-66'>E-66 </option>
                            <option value='E-67'>E-67 </option>
                            <option value='IBS Anex'>IBS Anex </option>
                            <option value='IBS Dormitory'>IBS Dormitory </option>
                            <option value='IBS Family Suit'>IBS Family Suit </option>
                            <option value='Shahid Mir Abdul Quayyum International Dormitory'>Shahid Mir Abdul Quayyum
                                International Dormitory </option>
                            <option value='VC House'>VC House </option>
                            <option value='W-08'>W-08 </option>
                            <option value='W-09'>W-09 </option>
                            <option value='W-10'>W-10 </option>
                            <option value='W-11'>W-11 </option>
                            <option value='W-12'>W-12 </option>
                            <option value='W-13'>W-13 </option>
                            <option value='W-14'>W-14 </option>
                            <option value='W-15'>W-15 </option>
                            <option value='W-16'>W-16 </option>
                            <option value='W-17'>W-17 </option>
                            <option value='W-18'>W-18 </option>
                            <option value='W-19'>W-19 </option>
                            <option value='W-20'>W-20 </option>
                            <option value='W-21'>W-21 </option>
                            <option value='W-22'>W-22 </option>
                            <option value='W-23'>W-23 </option>
                            <option value='W-24'>W-24 </option>
                            <option value='W-28'>W-28 </option>
                            <option value='W-29'>W-29 </option>
                            <option value='W-31'>W-31 </option>
                            <option value='W-32'>W-32 </option>
                            <option value='W-33'>W-33 </option>
                            <option value='W-34'>W-34 </option>
                            <option value='W-5'>W-5 </option>
                            <option value='W-51'>W-51 </option>
                            <option value='W-55'>W-55 </option>
                            <option value='W-56'>W-56 </option>
                            <option value='W-60'>W-60 </option>
                            <option value='W-61'>W-61 </option>
                            <option value='W-62'>W-62 </option>
                            <option value='W-67'>W-67 </option>
                            <option value='W-69'>W-69 </option>
                            <option value='W-70'>W-70 </option>
                            <option value='W-71'>W-71 </option>
                            <option value='W-72'>W-72 </option>
                            <option value='W-73'>W-73 </option>
                            <option value='W-74'>W-74 </option>
                            <option value='W-75'>W-75 </option>
                            <option value='W-76'>W-76 </option>
                            <option value='W-77'>W-77 </option>
                            <option value='W-78'>W-78 </option>
                            <option value='W-80'>W-80 </option>
                            <option value='W-81'>W-81 </option>
                            <option value='W-82'>W-82 </option>
                            <option value='W-84'>W-84 </option>
                            <option value='W-88'>W-88 </option>
                            <option value='W-89'>W-89 </option>
                            <option value='West Side Residence Mosque'>West Side Residence Mosque </option>
                            <option value='Zuberi'>Zuberi </option>

                        </select>
                    </div>
                    <div class="form-group col-md-6 fm-group-custom">
                        <label for="roomNo">Room or Flat No:</label>
                        <input type="text" class="form-control form-control-sm inputfield" id="roomNo"
                            placeholder="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
