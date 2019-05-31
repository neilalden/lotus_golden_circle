@extends('layouts.app')
<style>
label{
        color: #fff;
}
</style>
@section('content')
<div class="container d-flex justify-content-center">
        <div class="card bg-dark my-4 col-md-8">
                {!! Form::open(['action' => 'MembersController@store', 'METHOD' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-row justify-content-center mt-3">
                        <div class="col-md-4 justify-content-center">
                                        <img id="blah" src="https://sonimtech.com/images/accessories/USB-Wall-Charger-for-XP5-XP6-XP7-UK-APA03G-096962272388.png" style="background:#2e3438; border-radius:50%; border:gold 2px solid; width: 200px; height:200px;">
                                </div>
                </div>
                <div class="form-row justify-content-center mb-3">
                        <div class="custom-file col-md-6">
                                <input type="file" id="imgInp" class="custom-file-input" name="member_image">
                                <label class="custom-file-label" for="member_image">Member Image</label>
                        </div>
                </div>
                <div class="form-row mb-3 justify-content-center">
                        <div class="col-md-4">
                                <label for="full_name">First name</label>
                                <input type="text"  class="form-control" placeholder="First name" name="full_name"  required>
                        </div>
                        <div class="col-md-4">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" name="last_name"placeholder="Last name" required>
                        </div>
                        <div class="col-md-3">
                                <label for="nickname">Nickname</label>
                                <input type="text" class="form-control" name="nickname" placeholder="Nickname" required>
                        </div>
                </div>
                <div class="form-row mb-3 justify-content-center">
                <div class="col-md-5">
                                <label for="contact_number">Contact Number</label>
                                <input type="text" class="form-control" name="contact_number" placeholder="Contact Number" required>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                                <label for="email">Email</label>
                                <input type="email"  class="form-control" placeholder="Email" name="email_address">
                        </div>
                </div>
                <div class="form-row mb-3 justify-content-center">
                        <div class="col-md-3">
                                <label for="house_number">House Number</label>
                                <input type="text"  class="form-control" placeholder="House Number" name="home_address">
                        </div>
                        <div class="col-md-4">
                                <label for="barangay">Barangay</label>
                                <input type="text"  class="form-control" placeholder="Barangay" name="barangay">
                        </div>
                        <div class="col-md-4">
                                <label for="City">City</label>
                                <input type="text"  class="form-control" placeholder="City" name="city">
                        </div>
                </div>
                <div class="form-row mb-3  justify-content-center">
                        <div class="col-md-4">
                        <label for="birthday">Birthday</label>
                        <select name="month" class="custom-select">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                        </select>
                </div>
                <div class=" col-md-2">
                                <label>&nbsp;</label>
                                <select name="day" class="custom-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                        </select>
                </div>
                <div class="col-md-3">
                                <label>&nbsp;</label>
                                <select name="year" class="custom-select">
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                        </select>
                </div>
                </div>
        <div class="form-row mb-3 justify-content-center">
                <div class="col-md-2">
                                <label for="age">Age</label>
                                <select name="age" class="custom-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                </select>
                        </div>
                        <div class="col-md-1"></div>
                <div class="col-md-4">
                                <label>Gender</label><br>
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" value="Male" name="gender" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" value="Female" name="gender" class="custom-control-input" >
                                <label class="custom-control-label" for="customRadioInline2">Female</label>
                        </div>
                </div>
        </div>

        <div class="form-row mb-3 justify-content-center">
                <div class="col-md-5">
                        <label for="BA_number">BA Number</label>
                        <input type="text" class="form-control" name="BA_number" placeholder="BA Number" >
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                        <label for="direct_upline">Direct Upline</label>
                        <input type="text" class="form-control" name="direct_upline" placeholder="Direct Upline">
                </div>
        </div>
        <div class="form-row mb-3 justify-content-center">
                <div class="col-md-5">
                        <label for="name_of_group">Name Of Group</label>
                        <input type="text" class="form-control" name="name_of_group" placeholder="Name Of Group" >
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                        <label for="batch_name">Batch Name</label>
                        <input type="text" class="form-control" name="batch_name" placeholder="Batch Name">
                </div>
        </div>
        <div class="form-row mb-3  justify-content-center">
                <div class="col-md-5">
                <label for="preferred_committee">Preferred Committee</label>
                <select name="preferred_committee" class="custom-select">
                        <option value="documentary">Documentary</option>
                        <option value="events">Events</option>
                        <option value="finance">Finance</option>
                        <option value="friendship">Friendship</option>
                        <option value="logistics">Logistics</option>
                        <option value="social media">Social media</option>
                </select>
                </div>
        </div>




                <div class="form-row mb-3 justify-content-center">
                {{Form::submit('Submit', ['class' =>'btn btn-outline-success mt-3'])}}
                </div>
                {!! Form::close() !!}
        </div>
</div>
@endsection