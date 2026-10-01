<h2>New OTC³ Cybersecurity Clinic Inquiry</h2>

<p><strong>Organization:</strong> {{ $inquiry['organization_name'] }}</p>
<p><strong>Name:</strong> {{ $inquiry['name'] }}</p>
<p><strong>Role:</strong> {{ $inquiry['role'] }}</p>
<p><strong>Email:</strong> {{ $inquiry['email'] }}</p>

@if(!empty($inquiry['phone']))
    <p><strong>Phone:</strong> {{ $inquiry['phone'] }}</p>
@endif

<p><strong>Organization type:</strong> {{ $inquiry['organization_type'] }}</p>
<p><strong>Approximate size:</strong> {{ $inquiry['organization_size'] }}</p>

@if(!empty($inquiry['industry']))
    <p><strong>Industry / sector:</strong> {{ $inquiry['industry'] }}</p>
@endif

<p><strong>City / county:</strong> {{ $inquiry['location'] }}</p>

<p><strong>What are they looking for?</strong></p>
<p>{{ $inquiry['needs'] }}</p>

<p><strong>Preferred contact:</strong> {{ $inquiry['contact_method'] }}</p>
<p><strong>Timeline:</strong> {{ $inquiry['timeline'] }}</p>

@if(!empty($inquiry['referral']))
    <p><strong>How they heard about OTC³:</strong> {{ $inquiry['referral'] }}</p>
@endif