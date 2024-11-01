@extends('layouts.app')
@section('page', 'Giving')
@section('content')
<section class="giving section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Give</h2>
            <h3><span>Your Support Matters</span></h3>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4>Select Your Location</h4>
                <form id="givingForm">
                    <div class="form-group">
                        <label for="location">Where are you giving from?</label>
                        <select id="location" class="form-control" onchange="updateGivingOptions()">
                            <option value="">Select an option</option>
                            <option value="kenya">Within Kenya</option>
                            <option value="outside-kenya">Outside Kenya</option>
                        </select>
                    </div>
                </form>

                <div id="givingOptions" style="display: none;">
                    <div id="kenyaOption" class="giving-detail" style="display: none;">
                        <h5>Giving Within Kenya</h5>
                        <p><b><i>You can send your contributions using the following details:</i></b></p>
                        <p><strong>Equity Paybill Number:</strong> 247247</p>
                        <p><strong>Account Number:</strong> 624455</p>
                    </div>

                    <div id="outsideKenyaOption" class="giving-detail" style="display: none;">
                        <h5>Giving Outside Kenya</h5>
                        <p><b><i>If you're giving from outside Kenya, please send your contributions to the following address:</i></b></p>
                       <i> 318, Pine Lake CT,<br>
                        Spartanburg SC.<br>
                        USA</i></p>
                        <p><b>You can also give online through our secure link:</b></p>
                        <p><a href="https://mytemplechurch.com/giving" target="_blank">Donate Online</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Giving Section -->

<script>
function updateGivingOptions() {
    const location = document.getElementById('location').value;
    const givingOptions = document.getElementById('givingOptions');
    const kenyaOption = document.getElementById('kenyaOption');
    const outsideKenyaOption = document.getElementById('outsideKenyaOption');

    givingOptions.style.display = 'block'; // Show options div

    if (location === 'kenya') {
        kenyaOption.style.display = 'block'; // Show Kenya option
        outsideKenyaOption.style.display = 'none'; // Hide outside Kenya option
    } else if (location === 'outside-kenya') {
        outsideKenyaOption.style.display = 'block'; // Show outside Kenya option
        kenyaOption.style.display = 'none'; // Hide Kenya option
    } else {
        givingOptions.style.display = 'none'; // Hide all if no option is selected
    }
}
</script>
@endsection
